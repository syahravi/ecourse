<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Notifications\NewMember;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // Validasi input pengguna
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ]);

        // Jika validasi gagal, kembalikan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Buat token verifikasi email
        $emailVerificationToken = Str::random(64);

        // Buat pengguna baru dengan status verifikasi email false
        $user = User::create([
            'name' => $input['name'],
            'username' => $input['name'] . '-' . Str::random(6),
            'email' => $input['email'],
            'email_verified_at' => null, // Set email_verified_at menjadi null
            'email_verification_token' => $emailVerificationToken, // Simpan token verifikasi email
            'password' => Hash::make($input['password']),
        ]);

        // Kirim email verifikasi
        $user->sendEmailVerificationNotification();

        // Jangan tambahkan pengguna ke basis data sampai mereka diverifikasi
        // Data pengguna akan dimasukkan ke basis data oleh Laravel setelah verifikasi email berhasil

        // Tetapkan peran "member" kepada pengguna baru
        $role = Role::where('name', 'member')->first();
        $user->assignRole($role);

        // Dapatkan semua pengguna yang memiliki peran "admin"
        $admins = User::role('admin')->get();

        // Kirim notifikasi kepada semua pengguna yang memiliki peran "admin" bahwa ada anggota baru yang terdaftar
        Notification::send($admins, new NewMember($user));

        return $user;
    }
}

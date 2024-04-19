<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Spatie\Permission\Models\Role; // Import Role dari Spatie

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the Socialite provider's authentication page.
     *
     * @param $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the Socialite provider.
     *
     * @param $provider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return redirect()->back();
        }

        $authUser = $this->findOrCreateUser($user, $provider);

        auth()->login($authUser, true);

        return redirect()->route('home');
    }

    /**
     * Find or create the user based on Socialite information.
     *
     * @param $socialUser
     * @param $provider
     * @return mixed
     */
    public function findOrCreateUser($socialUser, $provider)
    {
        $socialAccount = SocialAccount::where('provider_id', $socialUser->getId())
            ->where('provider_name', $provider)
            ->first();

        if ($socialAccount) {
            return $socialAccount->user;
        } else {
            $user = User::where('email', $socialUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name'  => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                ]);

                // Setelah membuat pengguna baru, tambahkan peran ke pengguna
                $user->assignRole('member');
            } else {
                // Jika pengguna sudah ada, pastikan peran ditambahkan jika belum ada
                if (!$user->hasRole('member')) {
                    $user->assignRole('member');
                }
            }

            $user->socialAccounts()->create([
                'provider_id'   => $socialUser->getId(),
                'provider_name' => $provider,
            ]);

            return $user;
        }
    }
}

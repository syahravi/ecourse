<!-- resources/views/auth/verify-email.blade.php -->

@extends('layouts.auth.app', ['title' => 'Verifikasi Email'])

@section('content')
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg p-8 w-full max-w-md">
            <h1 class="mb-4 text-2xl font-medium">Verifikasi Alamat Email</h1>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 text-sm text-green-600">
                    Tautan verifikasi email baru telah dikirim ke email Anda!
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-500">
                    Kirim Ulang Email Verifikasi
                </button>
            </form>
        </div>
    </div>
@endsection

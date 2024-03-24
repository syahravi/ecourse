<!-- resources/views/auth/two-factor-challenge.blade.php -->

@extends('layouts.auth.app', ['title' => 'Two-Factor Authentication'])

@section('content')
    <div class="card-body">
        <h1 class="mb-4">Two-Factor Authentication</h1>

        <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <div class="form-group">
                <label for="code">Authentication Code</label>
                <input type="text" id="code" name="code" class="form-control @error('code') is-invalid @enderror" required>
                @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Verify</button>
        </form>
    </div>
@endsection

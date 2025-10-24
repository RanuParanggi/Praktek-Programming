@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center py-5">
        <div class="col-lg-6 col-md-8">
            <div class="card card-custom">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <div class="mb-3">
                            <i class="bi bi-person-plus-fill" style="font-size: 3rem; background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                        </div>
                        <h3 class="fw-bold">Buat Akun Baru</h3>
                        <p class="text-muted">Lengkapi formulir di bawah untuk mendaftar</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- NIM -->
                        <div class="mb-3">
                            <label for="nim" class="form-label fw-semibold">
                                <i class="bi bi-card-text"></i> NIM
                            </label>
                            <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" 
                                   name="nim" value="{{ old('nim') }}" required autofocus placeholder="Masukkan NIM Anda">
                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">
                                <i class="bi bi-person"></i> Username
                            </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                   name="name" value="{{ old('name') }}" required placeholder="Masukkan username">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="full_name" class="form-label fw-semibold">
                                <i class="bi bi-person-vcard"></i> Nama Lengkap
                            </label>
                            <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" 
                                   name="full_name" value="{{ old('full_name') }}" required placeholder="Masukkan nama lengkap">
                            @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Birth Place -->
                        <div class="mb-3">
                            <label for="birth_place" class="form-label fw-semibold">
                                <i class="bi bi-geo-alt"></i> Tempat Lahir
                            </label>
                            <input id="birth_place" type="text" class="form-control @error('birth_place') is-invalid @enderror" 
                                   name="birth_place" value="{{ old('birth_place') }}" required placeholder="Masukkan tempat lahir">
                            @error('birth_place')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Birth Date -->
                        <div class="mb-3">
                            <label for="birth_date" class="form-label fw-semibold">
                                <i class="bi bi-calendar-event"></i> Tanggal Lahir
                            </label>
                            <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" 
                                   name="birth_date" value="{{ old('birth_date') }}" required>
                            @error('birth_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">
                                <i class="bi bi-envelope"></i> Email
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required placeholder="Masukkan email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">
                                <i class="bi bi-lock"></i> Password
                            </label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required placeholder="Masukkan password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">
                                <i class="bi bi-lock-fill"></i> Konfirmasi Password
                            </label>
                            <input id="password_confirmation" type="password" class="form-control" 
                                   name="password_confirmation" required placeholder="Konfirmasi password">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-gradient btn-lg">
                                <i class="bi bi-check-circle"></i> Daftar
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <p class="text-muted">
                                Sudah punya akun? 
                                <a href="{{ route('login') }}" class="text-decoration-none fw-semibold" 
                                   style="background: var(--primary-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                    Login di sini
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
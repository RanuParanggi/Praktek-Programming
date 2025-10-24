@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-lg-10">
            <div class="text-center text-white mb-5">
                <h1 class="display-3 fw-bold mb-3" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                    <i class="bi bi-grid-3x3-gap-fill"></i> Welcome to SIMAHA
                </h1>
                <p class="lead mb-4" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
                    Kelola data mahasiswa dengan mudah dan efisien menggunakan aplikasi SIMAHA
                </p>
            </div>

            <div class="row g-4">
                <!-- Feature Card 1 -->
                <div class="col-md-4">
                    <div class="card card-custom text-center p-4 h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-shield-check" style="font-size: 3rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Aman & Terpercaya</h5>
                            <p class="card-text text-muted">
                                Sistem autentikasi yang aman melindungi data pribadi Mahasiswa dengan enkripsi tingkat tinggi
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 2 -->
                <div class="col-md-4">
                    <div class="card card-custom text-center p-4 h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-speedometer2" style="font-size: 3rem; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Dashboard Interaktif</h5>
                            <p class="card-text text-muted">
                                Antarmuka yang intuitif dan responsif memberikan pengalaman pengguna yang optimal
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 3 -->
                <div class="col-md-4">
                    <div class="card card-custom text-center p-4 h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-person-check" style="font-size: 3rem; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Manajemen Profil</h5>
                            <p class="card-text text-muted">
                                Kelola informasi pribadi Mahasiswa termasuk NIM, nama lengkap, dan data lainnya dengan mudah
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="card card-custom p-5">
                        <h3 class="mb-4 fw-bold">Siap untuk memulai?</h3>
                        <p class="text-muted mb-4">Daftar sekarang untuk mengakses dashboard Anda atau login jika sudah memiliki akun</p>
                        <div class="d-flex gap-3 justify-content-center flex-wrap">
                            <a href="{{ route('register') }}" class="btn btn-gradient btn-lg">
                                <i class="bi bi-person-plus"></i> Daftar Sekarang
                            </a>
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg" style="border-radius: 50px;">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
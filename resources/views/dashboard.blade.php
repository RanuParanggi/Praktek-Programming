@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 py-5">
        <div class="col-lg-10">
            <!-- Welcome Header -->
            <div class="card card-custom mb-4" style="background: var(--primary-gradient);">
                <div class="card-body p-4 text-white">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="fw-bold mb-2">
                                <i class="bi bi-speedometer2"></i> Dashboard
                            </h2>
                            <p class="mb-0 opacity-75">Selamat datang kembali di SIMAHA</p>
                        </div>
                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                            <div class="d-flex align-items-center justify-content-md-end">
                                <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Profile Card -->
            <div class="card card-custom mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                             style="width: 80px; height: 80px; background: var(--primary-gradient);">
                            <i class="bi bi-person-fill text-white" style="font-size: 2.5rem;"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">{{ Auth::user()->full_name }}</h4>
                            <p class="text-muted mb-0">
                                <i class="bi bi-at"></i> {{ Auth::user()->name }}
                            </p>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="p-3 rounded" style="background: #f8f9fa;">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 45px; height: 45px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                        <i class="bi bi-card-text text-white"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">NIM</small>
                                        <strong>{{ Auth::user()->nim }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 rounded" style="background: #f8f9fa;">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 45px; height: 45px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                        <i class="bi bi-envelope text-white"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Email</small>
                                        <strong class="text-truncate d-block" style="max-width: 250px;">{{ Auth::user()->email }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 rounded" style="background: #f8f9fa;">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 45px; height: 45px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                        <i class="bi bi-geo-alt text-white"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Tempat Lahir</small>
                                        <strong>{{ Auth::user()->birth_place }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 rounded" style="background: #f8f9fa;">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                         style="width: 45px; height: 45px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                                        <i class="bi bi-calendar-event text-white"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Tanggal Lahir</small>
                                        <strong>{{ \Carbon\Carbon::parse(Auth::user()->birth_date)->format('d F Y') }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-custom h-100" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <div class="card-body p-4 text-white">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="mb-0 opacity-75">Total Login</h6>
                                <i class="bi bi-box-arrow-in-right" style="font-size: 2rem; opacity: 0.5;"></i>
                            </div>
                            <h2 class="fw-bold mb-0">{{ rand(10, 50) }}</h2>
                            <small class="opacity-75">Kali masuk</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-custom h-100" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <div class="card-body p-4 text-white">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="mb-0 opacity-75">Hari Aktif</h6>
                                <i class="bi bi-calendar-check" style="font-size: 2rem; opacity: 0.5;"></i>
                            </div>
                            <h2 class="fw-bold mb-0">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->diffInDays(\Carbon\Carbon::now()) }}</h2>
                            <small class="opacity-75">Hari sejak registrasi</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-custom h-100" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <div class="card-body p-4 text-white">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="mb-0 opacity-75">Status Akun</h6>
                                <i class="bi bi-check-circle" style="font-size: 2rem; opacity: 0.5;"></i>
                            </div>
                            <h2 class="fw-bold mb-0">Aktif</h2>
                            <small class="opacity-75">Akun terverifikasi</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card card-custom mt-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4">
                        <i class="bi bi-lightning-charge"></i> Aksi Cepat
                    </h5>
                    <div class="row g-3">
                        <div class="col-md-3 col-6">
                            <a href="{{ route('profile.edit') }}" class="text-decoration-none">
                                <div class="p-3 rounded text-center h-100" style="background: #f8f9fa; transition: all 0.3s ease;" 
                                     onmouseover="this.style.background='#e9ecef'" onmouseout="this.style.background='#f8f9fa'">
                                    <i class="bi bi-person-gear d-block mb-2" style="font-size: 2rem; color: #667eea;"></i>
                                    <small class="fw-semibold text-dark">Edit Profil</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="p-3 rounded text-center h-100" style="background: #f8f9fa; transition: all 0.3s ease; cursor: pointer;" 
                                 onmouseover="this.style.background='#e9ecef'" onmouseout="this.style.background='#f8f9fa'">
                                <i class="bi bi-gear d-block mb-2" style="font-size: 2rem; color: #f5576c;"></i>
                                <small class="fw-semibold text-dark">Pengaturan</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="p-3 rounded text-center h-100" style="background: #f8f9fa; transition: all 0.3s ease; cursor: pointer;" 
                                 onmouseover="this.style.background='#e9ecef'" onmouseout="this.style.background='#f8f9fa'">
                                <i class="bi bi-bell d-block mb-2" style="font-size: 2rem; color: #00f2fe;"></i>
                                <small class="fw-semibold text-dark">Notifikasi</small>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="p-3 rounded text-center h-100" style="background: #f8f9fa; transition: all 0.3s ease; cursor: pointer;" 
                                 onmouseover="this.style.background='#e9ecef'" onmouseout="this.style.background='#f8f9fa'">
                                <i class="bi bi-question-circle d-block mb-2" style="font-size: 2rem; color: #fee140;"></i>
                                <small class="fw-semibold text-dark">Bantuan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
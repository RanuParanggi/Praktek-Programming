@extends('layouts.app')

@section('content')
<div class="hero container d-flex align-items-center justify-content-between p-5">
  <div class="hero-text text-start">
    <h1>Hallo, I'm <span class="text-warning">Ranu</span></h1>
    <p class="lead mt-3">I'm a Mechatronics Engineering student at Polytechnic ATMI Surakarta.</p>
    <a href="{{ route('about') }}" class="btn btn-primary mt-3">About Me</a>
  </div>

  <div class="hero-image text-center">
<img src="{{ asset('img/home.jpg') }}" 
     alt="Foto Ranu" 
     style="width:200px; height:200px; object-fit:cover; border-radius:50%;">
  </div>
</div>

<!-- Section Proyek Terbaru -->
<section class="projects container my-5">
  <div class="text-center mb-5">
    <h2>My Project</h2>
    <p>Check out some of my best work below.</p>
  </div>

  <div class="row g-4">
    <!-- Proyek 1 -->
    <div class="col-md-4">
      <div class="card project-card h-100 text-center">
        <img src="{{ asset('img/infant.jpg') }}" alt="Foto Ranu" class="rounded-square shadow-lg hero-photo">
        <div class="card-body">
          <h5 class="card-title">Infant Radiant Warmer</h5>
        </div>
      </div>
    </div>

    <!-- Proyek 2 -->
    <div class="col-md-4">
      <div class="card project-card h-100 text-center">
        <img src="{{ asset('img/web.jpg') }}" alt="Foto Ranu" class="rounded-square shadow-lg hero-photo">
        <div class="card-body">
          <h5 class="card-title">Website Development</h5>
        </div>
      </div>
    </div>

    <!-- Proyek 3 -->
    <div class="col-md-4">
      <div class="card project-card h-100 text-center">
        <img src="{{ asset('img/led.jpg') }}" alt="Foto Ranu" class="rounded-square shadow-lg hero-photo">
        <div class="card-body">
          <h5 class="card-title">LED Matrix Display</h5>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
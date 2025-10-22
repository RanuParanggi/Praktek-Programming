@extends('layouts.app')

@section('title', 'Education - Ranu Paranggi')

@section('content')

<section class="education py-5 bg-light position-relative" style="overflow:hidden;">
  <div class="container position-relative">

    <!-- Garis Tengah -->
    <div class="position-absolute start-50 translate-middle-x bg-primary"
         style="width:4px; top:120px; height:85%; border-radius:2px; z-index:0;">
    </div>

    <!-- Judul -->
    <div class="text-center mb-5" data-aos="fade-down">
      <h2 class="fw-bold text-primary mb-3">My Education</h2>
      <p class="text-muted">My academic journey in pursuing the world of <strong>Mechatronics</strong> and automation technology.</p>
    </div>

    <!-- Timeline -->
    <div class="timeline">
      <!-- Item 1 -->
      <div class="row align-items-center mb-5">
        <div class="col-md-6 text-md-end" data-aos="fade-right">
          <div class="card border-0 shadow p-4 rounded-4 bg-white d-inline-block" style="max-width:90%;">
            <h5 class="text-primary fw-bold mb-1">SMK Muhammadiyah Prambanan</h5>
            <span class="text-muted small">Industrial Electronics Engineering (2020 - 2023)</span>
            <p class="mt-3 mb-0">Learn the basics of automation systems, microcontrollers, and electronic system design.</p>
          </div>
        </div>
        <div class="col-md-6 position-relative d-none d-md-block">
          <div class="timeline-dot bg-primary position-absolute start-50 translate-middle rounded-circle"
               style="width:20px; height:20px; top:50%; z-index:1;"></div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-6 text-md-start" data-aos="fade-left">
          <div class="card border-0 shadow p-4 rounded-4 bg-white d-inline-block" style="max-width:90%;">
            <h5 class="text-primary fw-bold mb-1">Polytechnic ATMI Surakarta</h5>
            <span class="text-muted small">D-IV Mechatronics Engineering (2023 - Now)</span>
            <p class="mt-3 mb-0">Developing expertise in the integration of mechanics, electronics, and programming. Focusing on IoT-based intelligent systems and industrial automation.</p>
          </div>
        </div>
        <div class="col-md-6 position-relative d-none d-md-block">
          <div class="timeline-dot bg-primary position-absolute start-50 translate-middle rounded-circle"
               style="width:20px; height:20px; top:50%; z-index:1;"></div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="row align-items-center mb-5">
        <div class="col-md-6 text-md-end" data-aos="fade-right">
          <div class="card border-0 shadow p-4 rounded-4 bg-white d-inline-block" style="max-width:90%;">
            <h5 class="text-primary fw-bold mb-1">Industrial Training</h5>
            <span class="text-muted small">Internship at Schlumberger (SLB) (2026)</span>
            <p class="mt-3 mb-0">Involved in a project to design an automated oil drilling system using sensors and artificial intelligence.</p>
          </div>
        </div>
        <div class="col-md-6 position-relative d-none d-md-block">
          <div class="timeline-dot bg-primary position-absolute start-50 translate-middle rounded-circle"
               style="width:20px; height:20px; top:50%; z-index:1;"></div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

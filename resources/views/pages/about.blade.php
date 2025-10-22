@extends('layouts.app')

@section('content')
<section class="about-section container my-5 py-5">
  <div class="row align-items-center">
    <!-- Foto Profil -->
    <div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('img/about.jpg') }}" 
     alt="Foto Ranu" 
     style="width:300px; height:400px; object-fit:cover; border-rectangle:50%;">
    </div>

    <!-- Biodata -->
    <div class="col-md-7">
      <h2 class="fw-bold mb-3">About Me</h2>
      <p class="lead text-muted">
        Hallo! I'm <strong>Ranu Paranggi</strong>, a student of the <strong>Mechatronics study program</strong> who has a great interest in the world of automation technology, intelligent systems, and the development of microcontroller-based devices and IoT.
      </p>

      <div class="biodata mt-4">
        <ul class="list-unstyled">
          <li><strong>Full Name:</strong> Ranu Paranggi</li>
          <li><strong>Study Program:</strong> D4 Mechatronics Engineering</li>
          <li><strong>Institution:</strong> Polytechnic ATMI Surakarta</li>
          <li><strong>Place, Date of Birth:</strong> Klaten, 4 May 2005</li>
          <li><strong>Email:</strong> paranggi61@gmail.com</li>
          <li><strong>Telepon:</strong> +62 812 3456 7890</li>
        </ul>
      </div>

      <p class="mt-4">
        As a Mechatronics student, I focus on developing systems that integrate <strong>electronics, mechanics, and programming</strong>.  
        I have experience developing Arduino-based projects <strong>Arduino-based projects, automated sensors, robotics, and industrial control systems</strong>.  
        Currently, I'm also expanding my interests in <strong>web programming and IoT</strong>, enabling me to build efficient and innovative technology solutions.
      </p>

      <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Contact Me</a>
    </div>
  </div>
</section>

<!-- Keahlian -->
<section class="skills-section container my-5">
  <div class="text-center mb-5">
    <h3 class="fw-bold">My Skill</h3>
    <p class="text-muted">Here are some of the skills I have mastered in the field of Mechatronics and digital technology.</p>
  </div>

  <div class="row text-center">
    <div class="col-md-3 col-6 mb-4">
      <div class="skill-card p-3 shadow-sm rounded-4">
        <i class="bi bi-cpu fs-2 text-primary"></i>
        <h6 class="mt-2">Microcontroller & IoT</h6>
      </div>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <div class="skill-card p-3 shadow-sm rounded-4">
        <i class="bi bi-robot fs-2 text-success"></i>
        <h6 class="mt-2">Robotics & Automation</h6>
      </div>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <div class="skill-card p-3 shadow-sm rounded-4">
        <i class="bi bi-gear-wide-connected fs-2 text-warning"></i>
        <h6 class="mt-2">Mechanical Systems Design</h6>
      </div>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <div class="skill-card p-3 shadow-sm rounded-4">
        <i class="bi bi-code-square fs-2 text-danger"></i>
        <h6 class="mt-2">Programming & Web</h6>
      </div>
    </div>
  </div>
</section>
@endsection

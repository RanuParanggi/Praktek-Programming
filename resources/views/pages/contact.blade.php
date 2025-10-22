@extends('layouts.app')

@section('title', 'Contact - Ranu Paranggi')

@section('content')

<section class="contact py-5 bg-light"> 
    <div class="container">
        <!-- Judul Halaman -->
<div class="text-center mb-5">
  <h2 class="fw-bold text-primary mb-3">Contact Me</h2>
  <p class="text-muted">Feel free to connect through social media or send me a direct message.</p>
</div>

<div class="row g-4">
  <!-- Bagian Kiri: Sosial Media -->
  <div class="col-md-5">
    <div class="card border-0 shadow rounded-4 p-4 h-100">
      <h4 class="fw-bold text-primary mb-4">Social Media</h4>

      <div class="d-flex align-items-center mb-3">
        <i class="bi bi-facebook fs-3 text-primary me-3"></i>
        <a href="https://facebook.com" target="_blank" class="text-decoration-none text-dark">Facebook</a>
      </div>

      <div class="d-flex align-items-center mb-3">
        <i class="bi bi-instagram fs-3 text-danger me-3"></i>
        <a href="https://instagram.com" target="_blank" class="text-decoration-none text-dark">Instagram</a>
      </div>

      <div class="d-flex align-items-center mb-3">
        <i class="bi bi-linkedin fs-3 text-info me-3"></i>
        <a href="https://linkedin.com" target="_blank" class="text-decoration-none text-dark">LinkedIn</a>
      </div>

      <div class="d-flex align-items-center mb-3">
        <i class="bi bi-github fs-3 text-dark me-3"></i>
        <a href="https://github.com" target="_blank" class="text-decoration-none text-dark">GitHub</a>
      </div>

      <div class="mt-4">
        <p class="text-muted small">I actively share my projects, work, and experiences on these platforms. Let's connect! 🤝</p>
      </div>
    </div>
  </div>

  <!-- Bagian Kanan: Form Pesan -->
  <div class="col-md-7">
    <div class="card border-0 shadow rounded-4 p-4 h-100">
      <h4 class="fw-bold text-primary mb-4">Send Message</h4>

      <form>
        <div class="mb-3">
          <label for="name" class="form-label fw-semibold">Name</label>
          <input type="text" class="form-control form-control-lg rounded-3" id="name" placeholder="Enter your name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">Email</label>
          <input type="email" class="form-control form-control-lg rounded-3" id="email" placeholder="Enter your email">
        </div>

        <div class="mb-3">
          <label for="message" class="form-label fw-semibold">Message</label>
          <textarea class="form-control form-control-lg rounded-3" id="message" rows="5" placeholder="Write your message here..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 shadow-sm">
          <i class="bi bi-send-fill me-2"></i>Send
        </button>
      </form>
    </div>
  </div>
</div>
</div> 
</section>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      font-family: 'Poppins', sans-serif;
    }

    nav.navbar {
      background: linear-gradient(45deg, #007bff, #00bcd4);
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }

    .navbar-brand, .nav-link {
      color: white !important;
      font-weight: 600;
    }

    .nav-link:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #343a40;
      color: #f8f9fa;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
    }

    .hero {
      background: linear-gradient(135deg, #007bff, #6610f2);
      color: white;
      padding: 100px 0;
      text-align: center;
      border-radius: 10px;
      margin-bottom: 40px;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .btn-primary {
      background-color: #37608dff;
      border: none;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      transform: scale(1.05);
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .about-section {
  background: linear-gradient(to right, #ffffff, #f8f9fa);
  border-radius: 15px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
}

.about-photo {
  width: 100%;
  max-width: 320px;
  border: 5px solid #007bff;
  transition: transform 0.4s ease, box-shadow 0.3s ease;
}

.about-photo:hover {
  transform: scale(1.05);
  box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

.biodata li {
  margin-bottom: 8px;
  font-size: 1rem;
}

.skills-section h3 {
  color: #343a40;
}

.skill-card {
  background: #fff;
  transition: all 0.3s ease;
}

.skill-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Ranu Paranggi</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('education') }}">Education</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    @yield('content')
  </div>

  <footer>
    <p>&copy; {{ date('Y') }} MyPortfolio | Designed with ❤️ by Ranu Paranggi</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

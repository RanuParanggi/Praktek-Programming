<?php
// --- Tampilkan semua error untuk debug sementara ---
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// --- Koneksi database ---
include 'config.php';

// --- Ambil data statistik dari database (untuk tampilan awal) ---
$labels = ['Kamar Standar', 'Kamar Deluxe', 'Kamar Premium'];
$values = [0, 0, 0]; // default

$result = $conn->query("SELECT kamar_standar, kamar_deluxe, kamar_premium FROM statistik_kost ORDER BY waktu_update DESC LIMIT 1");
if ($result && $row = $result->fetch_assoc()) {
    $values = [
        (int)$row['kamar_standar'],
        (int)$row['kamar_deluxe'],
        (int)$row['kamar_premium']
    ];
}

// --- PROSES FORM KONTAK ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = htmlspecialchars(trim($_POST['nama']));
    $email = htmlspecialchars(trim($_POST['email']));
    $pesan = htmlspecialchars(trim($_POST['pesan']));

    if ($nama && $email && $pesan) {
        $stmt = $conn->prepare("INSERT INTO pesan_kontak (nama, email, pesan) VALUES (?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sss", $nama, $email, $pesan);
            $stmt->execute();
            $stmt->close();
            header("Location: thanks.php");
            exit();
        } else {
            echo "<script>alert('Gagal menyimpan pesan!');</script>";
        }
    } else {
        echo "<script>alert('Semua field harus diisi!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kost Ranu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow-sm">
<div class="container">
  <a class="navbar-brand fw-bold" href="#">Kost Ranu</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#kamar">Kamar</a></li>
      <li class="nav-item"><a class="nav-link" href="#statistik">Statistik</a></li>
      <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
      <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
    </ul>
  </div>
</div>
</nav>

<!-- HOME -->
<section id="home" class="home">
<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Aset/img/Gambar4.png" class="d-block w-100" alt="Kost 1">
      <div class="overlay"></div>
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold" data-aos="fade-up">Selamat Datang di Kost Ranu</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="200">
          Kost nyaman dan strategis dekat kampus solusi ideal untuk mahasiswa dan pekerja.
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Aset/img/Gambar3.jpg" class="d-block w-100" alt="Kost 2">
      <div class="overlay"></div>
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold" data-aos="fade-up">Mau Kost Eksklusif Dengan Harga Affordable?</h1>
        <h2 class="lead" data-aos="fade-up" data-aos-delay="200">Kost Ranu Solusinya!</h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Aset/img/Gambar1.jpg" class="d-block w-100" alt="Kost 3">
      <div class="overlay"></div>
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold" data-aos="fade-up">Yuk Cari Tau Tentang Kami!</h1>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</section>

<!-- KAMAR -->
<section id="kamar" class="py-5">
<div class="container">
  <h2 class="text-center text-success mb-4" data-aos="fade-down">Kamar Kost</h2>
  <div class="row g-4">
    <?php
    $kamar = [
      ["Kamar Standar", "Rp 800.000 / bulan", "Aset/img/K1.png"],
      ["Kamar Deluxe", "Rp 1.200.000 / bulan", "Aset/img/K2.jpg"],
      ["Kamar Premium", "Rp 1.800.000 / bulan", "Aset/img/Kamar3.jpg"]
    ];
    $delay = 0;
    foreach ($kamar as $k) {
      echo '<div class="col-md-4" data-aos="zoom-in" data-aos-delay="'.$delay.'">
              <div class="card h-100 shadow kamar">
                <img src="'.$k[2].'" class="card-img-top" alt="'.$k[0].'">
                <div class="card-body text-center">
                  <h5 class="card-title text-success">'.$k[0].'</h5>
                  <p class="card-text">'.$k[1].'</p>
                </div>
              </div>
            </div>';
      $delay += 150;
    }
    ?>
  </div>
</div>
</section>

<!-- STATISTIK -->
<section id="statistik" class="py-5 bg-light">
<div class="container text-center" data-aos="fade-up">
  <h2 class="text-success mb-4">Statistik Kamar yang Tersedia Hari Ini</h2>
  <p id="waktuUpdate" class="text-muted mb-3">Memuat data...</p>
  <div class="mb-4">
    <canvas id="chartKamar" height="150"></canvas>
  </div>
</div>
</section>

<!-- TENTANG -->
<section id="tentang" class="py-5">
<div class="container" data-aos="fade-right">
  <h2 class="text-center text-success mb-5">Tentang Kost Kami</h2>
  <div class="row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="Aset/img/Gambar2.jpg" class="img-fluid rounded shadow" alt="Kost Ranu">
    </div>
    <div class="col-md-6">
      <h4 class="fw-bold">Kenyamanan dan Keamanan Prioritas Kami</h4>
      <p>Kost Ranu didesain untuk memberikan lingkungan yang nyaman dan bersih. Setiap kamar dilengkapi fasilitas modern dan area parkir luas.</p>
      <ul>
        <li>Lingkungan tenang dan aman</li>
        <li>Wi-Fi berkecepatan tinggi</li>
        <li>Parkir luas</li>
        <li>Petugas kebersihan harian</li>
      </ul>
      <a href="https://goo.gl/maps/example" target="_blank" class="btn btn-outline-success mt-3">
        <i class="bi bi-geo-alt-fill me-1"></i> Lihat Lokasi
      </a>
    </div>
  </div>
</div>
</section>

<!-- KONTAK -->
<section id="kontak" class="py-5 bg-light">
<div class="container" data-aos="zoom-in">
  <h2 class="text-center text-success mb-4">Hubungi Kami</h2>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form class="bg-white p-4 shadow rounded" method="POST" action="">
        <div class="mb-3">
          <label class="form-label fw-bold">Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold">Pesan</label>
          <textarea name="pesan" class="form-control" rows="5" placeholder="Tulis pesan Anda" required></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Kirim</button>
      </form>
    </div>
  </div>
</div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init();

// --- Inisialisasi grafik Chart.js ---
const ctx = document.getElementById('chartKamar');
const chartKamar = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($labels); ?>,
    datasets: [{
      label: 'Jumlah Kamar Tersedia',
      data: <?php echo json_encode($values); ?>,
      backgroundColor: [
        'rgba(25,135,84,0.6)',
        'rgba(40,167,69,0.6)',
        'rgba(72,201,176,0.6)'
      ],
      borderWidth: 1
    }]
  },
  options: { scales: { y: { beginAtZero: true } }, responsive: true }
});

// --- Fungsi update otomatis data ---
const waktuUpdateLabel = document.getElementById("waktuUpdate");

function updateRealtimeChart() {
  fetch('get_realtime_data.php')
    .then(res => res.json())
    .then(data => {
      chartKamar.data.datasets[0].data = [
        data.kamar_standar,
        data.kamar_deluxe,
        data.kamar_premium
      ];
      chartKamar.update();

      waktuUpdateLabel.textContent = "Terakhir diperbarui: " + (data.waktu_update || "Belum ada data");
    })
    .catch(err => console.error("Gagal memuat data realtime:", err));
}

// Jalankan setiap 5 detik
updateRealtimeChart();
setInterval(updateRealtimeChart, 2000);
</script>

</body>
</html>
<?php $conn->close(); ?>

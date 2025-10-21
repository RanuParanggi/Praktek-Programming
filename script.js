// Inisialisasi AOS
AOS.init({ once: true, duration: 1000, easing: 'ease-in-out' });

/// === GRAFIK STATISTIK KAMAR HARI INI ===
const ctxRealtime = document.getElementById('chartKamar');
const chartKamar = new Chart(ctxRealtime, {
  type: 'bar',
  data: {
    labels: ['Kamar Tersedia'],
    datasets: [{
      label: 'Jumlah Kamar Hari Ini',
      data: [0],
      backgroundColor: ['#28a745']
    }]
  },
  options: {
    scales: {
      y: { beginAtZero: true }
    }
  }
});

// Update waktu di bawah judul
const waktuUpdateLabel = document.getElementById("waktuUpdate");

// Fungsi untuk mengambil data terbaru
function updateRealtimeChart() {
  fetch('get_realtime_data.php')
    .then(res => res.json())
    .then(data => {
      chartKamar.data.datasets[0].data = [data.kamar_tersedia];
      chartKamar.update();
      waktuUpdateLabel.textContent = "Terakhir diperbarui pada pukul: " + (data.waktu_update || "Belum ada data hari ini");
    })
    .catch(err => console.error("Gagal memuat data realtime:", err));
}

// Jalankan setiap 5 detik
setInterval(updateRealtimeChart, 2000);
updateRealtimeChart();


// Highlight navbar aktif saat scroll
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach(section => {
    const sectionTop = section.offsetTop - 100;
    if (scrollY >= sectionTop) {
      current = section.getAttribute("id");
    }
  });

  if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 50) {
    current = "kontak"; // id terakhir
  }

  navLinks.forEach(link => {
    link.classList.remove("active");
    if (link.getAttribute("href") === `#${current}`) {
      link.classList.add("active");
    }
  });
});

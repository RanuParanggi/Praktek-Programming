// Inisialisasi AOS
AOS.init({ once: true, duration: 1000, easing: 'ease-in-out' });

// Statistik Chart
const ctx = document.getElementById('chartKamar');
if (ctx) {
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Standar', 'Deluxe', 'Premium'],
      datasets: [{
        label: 'Jumlah Penghuni',
        data: [12, 8, 5],
        backgroundColor: ['#198754', '#20c997', '#6f42c1']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { position: 'top' },
        title: { display: true, text: 'Grafik Penghuni per Tipe Kamar' }
      },
      scales: { y: { beginAtZero: true } }
    }
  });
}

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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Servio</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
      /* Navbar putih */
#navbar .navbar {
  background-color: #ffffff; /* putih polos */
  padding: 1rem 2rem;
  border-bottom: 1px solid #e0e0e0; /* garis tipis bawah biar rapi */
  transition: background 0.3s ease, box-shadow 0.3s ease;
}

/* Link Navbar dengan animasi underline */
#navbar .nav-link {
  position: relative;
  color: #333333 !important; /* teks gelap agar kontras di putih */
  font-weight: 500;
  padding: 0.5rem 1rem;
  transition: color 0.3s, transform 0.3s;
}

#navbar .nav-link::after {
  content: "";
  position: absolute;
  width: 0%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #007bff; /* garis biru untuk animasi */
  transition: width 0.3s ease;
}

#navbar .nav-link:hover::after {
  width: 100%; /* garis muncul penuh */
}

#navbar .nav-link:hover {
  color: #007bff !important; /* teks ikut berubah warna */
  transform: translateY(-2px); /* efek sedikit naik */
}

/* Link aktif */
#navbar .nav-link.active::after {
  width: 100%;
  background-color: #0056b3; /* garis berbeda untuk aktif */
}

        /* ===== Jumbotron ===== */
     
      #jumbotron h1 {
        color: aliceblue;
      }
      #jumbotron p {
        color: #fff;
      }
      .background-jumbotron {
        background-image: url("assets/img/jumbotron.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 80vh;
        position: relative;
        align-items: center;
        box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
      }
      .btn-info {
        background-color: #1e5fa8;
        color: #fff;
      }
      .bg-blue {
        color: #1e5fa8;
      }
      /* ===== Keunggulan ===== */
      .section-title {
        font-size: 38px;
        font-weight: 500;
        color: #000;
        letter-spacing: 0.5px;
      }
      .keunggulan-card {
        background: #ffffff;
        padding: 32px 24px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        height: 100%;
      }

      .keunggulan-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 32px rgba(0, 0, 0, 0.08);
      }

      .keunggulan-icon {
        font-size: 50px;
        color: #1e5fa8;
        margin-bottom: 20px;
      }

      .keunggulan-card h5 {
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 12px;
        color: #000;
      }

      .keunggulan-card p {
        font-size: 14px;
        color: #6b7280;
        line-height: 1.6;
      }
       /* ===== Layanan ===== */
      .layanan-card {
        border: 1px solid #e0e0e0;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
      }
      .layanan-img {
        height: 260px;
        object-fit: cover;
      }
      .carousel-arrow {
        filter: invert(1);
        width: 3rem;
        height: 3rem;
      }
        @media (max-width: 767px) {
        .layanan-img {
            height: 220px;
        }
      }
      .carousel-arrow {
        filter: invert(38%) sepia(82%) saturate(457%) hue-rotate(181deg);
      }
      /* ===== Konsultasi ===== */
      #konsultasi {
        background-color: #1e5fa8;
      }
      h2::before,
      h2::after{
        background-color: #1e5fa8;
        content: '';
        display: inline-block;
        height: 1px;
        position: relative;
        vertical-align: middle;
        width: 25%;
      }
      h2::before {
        right: 0.5em;
        margin-left: -50%;
      }
       h2::after {
        left: 0.5em;
        margin-right: -50%;
      }
      
      footer a {
        transition: color 0.3s;
      }
      footer a:hover {
        color: #1e5fa8; 
      }
      footer .small {
        font-size: 0.75rem;
      }
      /* ===== Testimoni ===== */
      .testimoni-section {
        background: #f8fafc;
        padding: 70px 20px;
        text-align: center;
      }
      .testimoni-section h2 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 40px;
        color: #111;
      }
      .testimoni-slider {
        max-width: 900px;
        margin: auto;
        overflow: hidden;
      }
      .testimoni-track {
        display: flex;
        gap: 20px;
        transition: transform 0.6s ease;
      }
      .testimoni-card {
        min-width: 280px;
        padding: 22px;
        background: #ffffff;
        border-radius: 12px;
        border: 1px solid #e5e7eb;
        text-align: left;
      }
      .testimoni-card p {
        font-size: 14px;
        line-height: 1.6;
        color: #374151;
        margin-bottom: 12px;
      }
      .testimoni-card strong {
        font-size: 13px;
        color: #111;
      }
    </style>
  </head>
  <body>
    <!-- navbar menu-->
    <section id="navbar" class="fixed-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" alt="servio.com" width="150px" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#keunggulan">Keunggulan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#konsultasi">Konsultasi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!--jumbotron-->
    <section id="jumbotron" class="background-jumbotron">
      <div class="container py-5 text-center">
        <p class="p-5"></p>
        <h1 class="display-4 fw-bold">
          Solusi Jasa Profesional <br />untuk Kebutuhan Bisnis Anda
        </h1>
        <p class="lead">
          Servio hadir sebagai mitra terpercaya yang menyediakan layanan
          profesional <br />dengan kualitas terbaik untuk mendukung pertumbuhan
          dan efisiensi bisnis Anda.
        </p>
        <a href="https://wa.me/6283103992483?text= Saya ingin konsultasi" class="btn btn-light" target="_blank" style="color: #1e5fa8; border: 3px solid white;">Konsultasi Sekarang</a>
      </div>
    </section>

    <!--bagian keunggulan-->
    <section id="keunggulan" class="container py-5">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2 class="section-title">Mengapa Memilih Servio?</h2>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="keunggulan-card text-center">
            <i class="fas fa-user-tie keunggulan-icon"></i>
            <h5>Kualitas Layanan Profesional</h5>
            <p>
              Kami memberikan layanan jasa dengan standar profesional yang
              tinggi, ditangani oleh tim yang berpengalaman dan kompeten di
              bidangnya.
            </p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="keunggulan-card text-center">
            <i class="fas fa-handshake keunggulan-icon"></i>
            <h5>Pendekatan Sesuai Kebutuhan Klien</h5>
            <p>
              Setiap klien memiliki kebutuhan yang berbeda. Servio selalu
              mengutamakan solusi yang disesuaikan dengan kebutuhan dan tujuan
              bisnis klien.
            </p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="keunggulan-card text-center">
            <i class="fas fa-clock keunggulan-icon"></i>
            <h5>Dukungan & Konsultasi Berkelanjutan</h5>
            <p>
              Kami tidak hanya menyelesaikan pekerjaan, tetapi juga memberikan
              dukungan dan konsultasi berkelanjutan setelah layanan diberikan.
            </p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
          <div class="keunggulan-card text-center">
            <i class="fas fa-shield-alt keunggulan-icon"></i>
            <h5>Transparansi & Kepercayaan</h5>
            <p>
              Servio menjunjung tinggi transparansi dalam proses kerja,
              komunikasi, dan penentuan biaya untuk membangun kepercayaan jangka
              panjang.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--bagian layanan-->
    <section id="layanan" class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-semibold">Layanan Kami</h2>
            <p class="text-muted mt-2">
                Solusi digital untuk mendukung pertumbuhan bisnis Anda
            </p>
        </div>

    <div id="layananCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="row g-4">
          <div class="col-12 col-md-6">
            <div class="card layanan-card">
              <img src="assets/img/L1.jpg" class="card-img-top layanan-img" alt="Web & Mobile Development">
              <div class="card-body">
                <h5 class="card-title">Web & Mobile Development</h5>
                <p class="card-text">
                  Pengembangan website dan aplikasi mobile yang responsif dan aman.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 d-none d-md-block">
            <div class="card layanan-card">
              <img src="assets/img/L2.jpg" class="card-img-top layanan-img" alt="IT Consulting & Solution">
              <div class="card-body">
                <h5 class="card-title">IT Consulting & Solution</h5>
                <p class="card-text">
                  Konsultasi teknologi untuk mendukung transformasi digital bisnis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row g-4">
          <div class="col-12 col-md-6">
            <div class="card layanan-card">
              <img src="assets/img/L3.jpg" class="card-img-top layanan-img" alt="UI/UX Design">
              <div class="card-body">
                <h5 class="card-title">UI/UX Design</h5>
                <p class="card-text">
                  Desain modern dan intuitif untuk pengalaman pengguna terbaik.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 d-none d-md-block">
            <div class="card layanan-card">
              <img src="assets/img/L4.jpg" class="card-img-top layanan-img" alt="Maintenance & IT Support">
              <div class="card-body">
                <h5 class="card-title">Maintenance & IT Support</h5>
                <p class="card-text">
                  Pemeliharaan sistem agar tetap stabil dan optimal.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#layananCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon carousel-arrow"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#layananCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon carousel-arrow"></span>
    </button>
  </div>
    </section>


    <!--bagian tentang-->
    <section id="tentang-kami" class="bg-ligth pb-5">
        <div class="container">
            <div class="col-12 p-4">
                <h2 class="display-5 text-center p-4">
                    Tentang Kami
                </h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 text-justify">
                    <h3 class="display-5 bg-blue">Servio</h3>
                    <p>
                        Servio adalah perusahaan teknologi yang berdiri pada tahun 2022 dengan fokus membantu bisnis bertransformasi di era digital. Kami menyediakan solusi lengkap mulai dari pengembangan website dan aplikasi mobile, hingga layanan UI/UX design yang modern dan intuitif. Dengan tim profesional yang berpengalaman, Servio berkomitmen menghadirkan teknologi yang tidak hanya fungsional tetapi juga mendukung pertumbuhan bisnis klien secara efektif.
                    </p>
                    <p>
                        Dengan misi membantu bisnis beradaptasi dan berkembang melalui teknologi, Servio selalu berinovasi dalam menciptakan solusi digital yang sesuai kebutuhan setiap klien. Visi kami adalah menjadi mitra terpercaya bagi perusahaan yang ingin bertransformasi secara digital, baik startup maupun UKM, sehingga setiap bisnis dapat beroperasi lebih efisien, profesional, dan kompetitif di pasar modern.
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <img src="assets/img/about.jpg" alt="servio" width="100%">
                </div>
            </div>
        </div>
    </section>

      <!--bagian testimoni-->
    <section id="testimoni" class="testimoni-section">
      <div class="container testimoni-form">
        <h3 class="text-center mb-4">Tulis Testimoni</h3>
        <form id="formTestimoni">
          <div class="mb-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama kamu" required>
          </div>
          <div class="mb-3">
            <textarea name="komentar" class="form-control" rows="4" placeholder="Tulis pengalaman kamu..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Kirim Testimoni</button>
        </form>
        <p id="status" class="mt-3 text-center"></p>
      </div>
      <h2 class="mt-5">Apa Kata Mereka?</h2>
      <div class="testimoni-slider">
        <div id="testimoni-list" class="testimoni-track"></div>
      </div>
    </section>


    <!--bagian konsultasi-->
    <section id="konsultasi" class="container-fluid text-center p-5 mt-3" style="background-color: #1e5fa8;"> 
      <h2 class="display" style="color: white;">Konsultasi</h2>
      <p style="color: white;">
        Punya pertanyaan atau butuh saran? Yuk, ngobrol sama kami! Tim kami siap membantu kamu menemukan solusi terbaik.
      </p>
      <a href="https://wa.me/6283103992483?text= Saya ingin konsultasi" class="btn btn-light" target="_blank" style="color: #1e5fa8; border: 1px solid white;">Konsultasi</a>
    </section>


    <!--bagian footer-->
    <footer class="bg-dark py-3">
      <div class="container text-center">
        <a href="https://www.facebook.com" class="text-light mr-1" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="mailto:info@servio.com" class="text-light mr-1" title="Email"><i class="fas fa-envelope""></i></a>
        <a href="https://www.instagram.com" class="text-light mr-1" title="Instagram"><i class="fab fa-instagram"></i></a>
        <p class="text-center text-secondary mt-2">Copyright &copy; <i class="text-light">Servio</i> 2025</p>
      </div>
  </footer>

  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <script>
    const slider = document.getElementById("layananScroll");
    let isDown = false;
    let startX;
    let scrollLeft;
    
    if (slider) {
      slider.addEventListener("mousedown", (e) => {
      isDown = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener("mouseleave", () => (isDown = false));
    slider.addEventListener("mouseup", () => (isDown = false));

    slider.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 1.5;
      slider.scrollLeft = scrollLeft - walk;
    });
  }
</script>


<script>
let index = 0;

fetch("get_testimoni.php")
  .then(res => res.json())
  .then(data => {
    const track = document.getElementById("testimoni-list");
    track.innerHTML = "";

    data.forEach(item => {
      const card = document.createElement("div");
      card.className = "testimoni-card";
      card.innerHTML = `
        <p>"${item.komentar}"</p>
        <strong>- ${item.nama}</strong>
      `;
      track.appendChild(card);
    });

    const cardWidth = document.querySelector(".testimoni-card").offsetWidth + 20;

    setInterval(() => {
      index++;
      if (index >= data.length) index = 0;
      track.style.transform = `translateX(-${index * cardWidth}px)`;
    }, 3000);
  });
</script>


<script>
document.getElementById("formTestimoni").addEventListener("submit", function(e){
  e.preventDefault();

  const formData = new FormData(this);

  fetch("add_testimoni.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(res => {
    if(res === "ok"){
      document.getElementById("status").innerText = "Testimoni terkirim!";
      this.reset();
      location.reload();
    } else {
      document.getElementById("status").innerText = "Gagal kirim";
    }
  });
});
</script>

  </body>
</html>

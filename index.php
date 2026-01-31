<!doctype html>
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

    <link rel="stylesheet" href="assets/css/style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body
    data-bs-spy="scroll"
    data-bs-target="#navbar"
    data-bs-offset="100"
    tabindex="0"
  >
    <!-- navbar menu-->
    <section id="navbar" class="fixed-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid px-0">
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
                <a class="nav-link" href="#jumbotron">Beranda</a>
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
      <div class="container-fluid py-5 text-center">
        <p class="p-5"></p>
        <h1 class="display-4 fw-bold">
          Solusi Jasa Profesional <br />untuk Kebutuhan Bisnis Anda
        </h1>
        <p class="lead">
          Servio hadir sebagai mitra terpercaya yang menyediakan layanan
          profesional <br />dengan kualitas terbaik untuk mendukung pertumbuhan
          dan efisiensi bisnis Anda.
        </p>
        <a
          href="https://wa.me/6283103992483?text= Saya ingin konsultasi"
          class="btn btn-light"
          target="_blank"
          style="color: #1e5fa8; border: 3px solid white"
          >Konsultasi Sekarang</a
        >
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
                  <img
                    src="assets/img/L1.jpg"
                    class="card-img-top layanan-img"
                    alt="Web & Mobile Development"
                  />
                  <div class="card-body">
                    <h5 class="card-title">Web & Mobile Development</h5>
                    <p class="card-text">
                      Pengembangan website dan aplikasi mobile yang responsif
                      dan aman.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 d-none d-md-block">
                <div class="card layanan-card">
                  <img
                    src="assets/img/L2.jpg"
                    class="card-img-top layanan-img"
                    alt="IT Consulting & Solution"
                  />
                  <div class="card-body">
                    <h5 class="card-title">IT Consulting & Solution</h5>
                    <p class="card-text">
                      Konsultasi teknologi untuk mendukung transformasi digital
                      bisnis.
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
                  <img
                    src="assets/img/L3.jpg"
                    class="card-img-top layanan-img"
                    alt="UI/UX Design"
                    loading="lazy">
                  <div class="card-body">
                    <h5 class="card-title">UI/UX Design</h5>
                    <p class="card-text">
                      Desain modern dan intuitif untuk pengalaman pengguna
                      terbaik.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 d-none d-md-block">
                <div class="card layanan-card">
                  <img
                    src="assets/img/L4.jpg"
                    class="card-img-top layanan-img"
                    alt="Maintenance & IT Support"
                  />
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

        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#layananCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon carousel-arrow"></span>
        </button>

        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#layananCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon carousel-arrow"></span>
        </button>
      </div>
    </section>

    <!--bagian tentang-->
    <section id="tentang-kami" class="bg-light pb-5">
      <div class="container">
        <div class="col-12 p-4">
          <h2 class="display-5 text-center p-4">Tentang Kami</h2>
        </div>

        <div class="row">
          <div class="col-12 col-md-6 text-justify">
            <h3 class="display-5 bg-blue">Servio</h3>
            <p>
              Servio adalah perusahaan teknologi yang berdiri pada tahun 2022
              dengan fokus membantu bisnis bertransformasi di era digital. Kami
              menyediakan solusi lengkap mulai dari pengembangan website dan
              aplikasi mobile, hingga layanan UI/UX design yang modern dan
              intuitif. Dengan tim profesional yang berpengalaman, Servio
              berkomitmen menghadirkan teknologi yang tidak hanya fungsional
              tetapi juga mendukung pertumbuhan bisnis klien secara efektif.
            </p>
            <p>
              Dengan misi membantu bisnis beradaptasi dan berkembang melalui
              teknologi, Servio selalu berinovasi dalam menciptakan solusi
              digital yang sesuai kebutuhan setiap klien. Visi kami adalah
              menjadi mitra terpercaya bagi perusahaan yang ingin
              bertransformasi secara digital, baik startup maupun UKM, sehingga
              setiap bisnis dapat beroperasi lebih efisien, profesional, dan
              kompetitif di pasar modern.
            </p>
          </div>

          <div class="col-12 col-md-6">
            <img
              src="assets/img/about.jpg"
              alt="servio"
              width="100%"
              loading="lazy">
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
<section
  id="konsultasi"
  class="container-fluid d-flex flex-column
         justify-content-center align-items-center text-center"
  style="background-color:#1e5fa8; min-height:70vh;"
>
  <span
    style="
      background: rgba(255,255,255,0.15);
      color: #fff;
      border-radius: 30px;
      font-size: 13px;
      letter-spacing: 1px;
      margin-bottom: 16px;
    "
  >
    FREE CONSULTATION
  </span>
  <h2 class="display-5 fw-bold text-white mb-5">
    Siap Diskusi Kebutuhan Digital Kamu?
  </h2>
  <p class="text-white-50 mb-4" style="max-width: 650px;">
    Tim Servio siap membantu kamu menemukan solusi terbaik
    untuk website, aplikasi, maupun sistem bisnis digital.
  </p>
  <a
    href="https://wa.me/6283103992483?text=Saya%20ingin%20konsultasi"
    class="btn btn-light btn-lg d-inline-flex align-items-center gap-2 px-5 py-2"
    style="color:#1e5fa8; font-weight:600;"
    target="_blank"
  >
    <i class="fab fa-whatsapp"></i>
    Konsultasi via WhatsApp
  </a>
  <p class="text-white-50 mt-3" style="font-size:14px;">
    Gratis • Respon cepat • Tanpa komitmen
  </p>
</section>

    <!--bagian footer-->
    <footer class="bg-dark py-3">
      <div class="container text-center">
        <a
          href="https://www.facebook.com"
          class="text-light mr-1"
          title="Facebook"
          ><i class="fab fa-facebook-f"></i
        ></a>
        <a href="mailto:info@servio.com" class="text-light mr-1" title="Email"
          ><i class="fas fa-envelope"></i
        ></a>
        <a
          href="https://www.instagram.com"
          class="text-light mr-1"
          title="Instagram"
          ><i class="fab fa-instagram"></i
        ></a>
        <p class="text-center text-secondary mt-2">
          Copyright &copy; <i class="text-light">Servio</i> 2025
        </p>
      </div>
    </footer>
<script>
  document.addEventListener("DOMContentLoaded", function () {

  // ===== Drag scroll layanan =====
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

  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".nav-link");

  window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach(section => {
      const sectionTop = section.offsetTop - 120;
      if (window.scrollY >= sectionTop) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach(link => {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#" + current) {
        link.classList.add("active");
      }
    });
  });

  // ===== Form testimoni =====
  const form = document.getElementById("formTestimoni");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(this);

      fetch("add_testimoni.php", {
        method: "POST",
        body: formData
      })
        .then(res => res.text())
        .then(res => {
          document.getElementById("status").innerText =
            res === "ok" ? "Testimoni terkirim!" : "Gagal kirim";

          if (res === "ok") {
            this.reset();
            location.reload();
          }
        });
    });
  }
});
</script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>

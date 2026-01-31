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
 // ===== Testimoni slider =====
  let index = 0;

  fetch("get_testimoni.php")
    .then(res => res.json())
    .then(data => {
      const track = document.getElementById("testimoni-list");
      if (!track) return;

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

      const card = document.querySelector(".testimoni-card");
      if (!card) return;

      const cardWidth = card.offsetWidth + 20;

      setInterval(() => {
        index++;
        if (index >= data.length) index = 0;
        track.style.transform = `translateX(-${index * cardWidth}px)`;
      }, 3000);
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

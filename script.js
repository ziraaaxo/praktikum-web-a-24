// toggle dark mode
const darkBtn = document.getElementById("darkToggle");
darkBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  if (document.body.classList.contains("dark")) {
    darkBtn.textContent = "☀️ Light Mode";
  } else {
    darkBtn.textContent = "🌙 Dark Mode";
  }
});

// form donasi
const donationForm = document.querySelector(".donation-form");
donationForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const name = document.getElementById("donor-name").value;
  const amount = document.getElementById("donation-amount").value;
  alert(`Terima kasih ${name}! Donasi sebesar Rp${amount} berhasil dicatat 🐱`);
  donationForm.reset();
});

// form kontak
const contactForm = document.querySelector(".contact-form");
contactForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const name = document.getElementById("contact-name").value;
  alert(`Pesanmu sudah terkirim, ${name}! Kami akan segera menghubungi 🐾`);
  contactForm.reset();
});

// fetch api jikan (anime tentang kucing)
const animeList = document.getElementById("anime-list");
fetch("https://api.jikan.moe/v4/anime?q=neko&limit=3")
  .then((res) => res.json())
  .then((data) => {
    data.data.forEach((anime) => {
      const card = document.createElement("div");
      card.className = "card";
      card.innerHTML = `
        <img src="${anime.images.jpg.image_url}" alt="${anime.title}">
        <h3>${anime.title}</h3>
        <p>${anime.synopsis ? anime.synopsis.substring(0, 100) + "..." : "Tidak ada deskripsi."}</p>
      `;
      animeList.appendChild(card);
    });
  })
  .catch((err) => {
    animeList.innerHTML = "<p>Gagal mengambil data anime kucing 🐱</p>";
    console.error(err);
  });

// Toggle class active
const navbarNav = document.querySelector('.navbar-nav');
const img = document.querySelector('.hero .content .tulisImage img')
// ketika menu diklik
document.querySelector('#menu').onclick = () => {
    if(!navbarNav.classList.contains('active')){
        img.style.display = "none";
    }
    navbarNav.classList.toggle('active');
};

navbarNav.addEventListener('transitionend', () => {
    if (!navbarNav.classList.contains('active')) {
        img.style.display = "block"; // Tampilkan kembali gambar ketika menu side ditutup
    }
});

// Klik di luar sidebar untuk menghilangkan nav
const menu = document.querySelector('#menu');

document.addEventListener('click', function(e){
    if(!menu.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
});
// Cari tombol dengan ID "sun"
const sunButton = document.querySelector('#sun');

// Tambahkan event listener pada tombol
sunButton.addEventListener('click', function() {
  // Cari elemen <body> di dalam dokumen HTML
  const bodyElement = document.querySelector('body');

  // Tambahkan class 'dark' pada elemen <body> jika belum ada, atau hapus jika sudah ada
  bodyElement.classList.toggle('dark');
});

var slideIndex = 0;
showSlide(slideIndex);

function prevSlide() {
  showSlide(slideIndex -= 1);
}

function nextSlide() {
  showSlide(slideIndex += 1);
}

function showSlide(index) {
  var slides = document.getElementsByClassName("carousel-item");
  if (index >= slides.length) { slideIndex = 0; }
  if (index < 0) { slideIndex = slides.length - 1; }
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
}

// Mendapatkan tombol prev dan next
var prevButton = document.querySelector('.carousel-button.prev');
var nextButton = document.querySelector('.carousel-button.next');

// Menambahkan event listener untuk tombol prev
prevButton.addEventListener('click', function() {
    prevSlide();
    this.style.backgroundColor = 'red'; // Mengubah warna tombol menjadi merah saat di-klik
    var that = this; // Menyimpan referensi ke tombol prev
    setTimeout(function() {
        that.style.backgroundColor = ''; // Menghapus warna setelah 500 milidetik
    }, 500);
});

// Menambahkan event listener untuk tombol next
nextButton.addEventListener('click', function() {
    nextSlide();
    this.style.backgroundColor = 'green'; // Mengubah warna tombol menjadi hijau saat di-klik
    var that = this; // Menyimpan referensi ke tombol next
    setTimeout(function() {
        that.style.backgroundColor = ''; // Menghapus warna setelah 500 milidetik
    }, 500);
});

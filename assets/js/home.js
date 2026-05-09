document.addEventListener("DOMContentLoaded", function() {
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    var root = document.documentElement;
  
    if (isMobile) {
      root.style.setProperty("--device", "mobile");
    } else {
      root.style.setProperty("--device", "desktop");
    }
  });






const counter = document.querySelector(".counter");
let count = 0;
setInterval(() => {
 if(count == 92) {
  clearInterval(count);
 }else {
  count+=1;
  counter.textContent = count + "%";
 }
}, 42);


$(function() {
    Popup.init();
});


var Popup = {
    init: function() {
        this.nav();
        this.close();
    },

    nav: function() {
        this.toggle();
    },

    toggle: function() {
        $(".popup-bar").on("touchstart click", function(e) {
            e.preventDefault();
            $(".popup").show(); // Menampilkan popup
            $(".popup").toggleClass("active");
            $(".popup .popup-overlay").removeClass("fadeOut animated").addClass("fadeIn animated");
        });
        $(".popup .popup-overlay").on("touchstart click", function(e) {
            e.preventDefault();
            Popup.closePopup();
        });
    },

    close: function() {
        $(".popup-close").on("touchstart click", function(e) {
            e.preventDefault();
            Popup.closePopup();
        });
    },

    closePopup: function() {
        $(".popup").removeClass("active");
        $(".popup .popup-overlay").removeClass("fadeIn").addClass("fadeOut");
        // Optionally hide the popup after animation
        setTimeout(function() {
            $(".popup").hide();
        }, 300); // Match the transition duration
    }
    
};


function canceldelete() {
  Popup.closePopup(); // Memanggil fungsi untuk menutup popup
}


function showPopupEdit() {
    // Tampilkan popup
    $(".popupEdit").show(); // Tampilkan elemen popup
    $(".popupEdit").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
    $(".popupEdit .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}


function showPopupTambah() {
  // Tampilkan popup
  $(".popupTambah").show(); // Tampilkan elemen popup
  $(".popupTambah").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupTambah .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
  
}

function showTambahPengeluaran() {
  // Tampilkan popup
  $(".popupTambahPengeluaran").show(); // Tampilkan elemen popup
  $(".popupTambahPengeluaran").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupTambahPengeluaran .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
  
}

function showEditPengeluaran() {
  // Tampilkan popup
  $(".popupEditPengeluaran").show(); // Tampilkan elemen popup
  $(".popupEditPengeluaran").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupEditPengeluaran .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
  
}

function showPopupHapus() {
  // Tampilkan popup
  $(".popupHapus").show(); // Tampilkan elemen popup
  $(".popupHapus").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupHapus .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}

function showPopupHapusPengeluaran() {
  // Tampilkan popup
  $(".popupHapusPengeluaran").show(); // Tampilkan elemen popup
  $(".popupHapusPengeluaran").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupHapusPengeluaran .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}


function showhomeprev_ktp(){
    // Tampilkan popup
    $(".popupKtp").show(); // Tampilkan elemen popup
    $(".popupKtp").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
    $(".popupKtp .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}

function showPopupTipeFas(){
  // Tampilkan popup
  $(".popupTipekamar").show(); // Tampilkan elemen popup
  $(".popupTipekamar").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupTipekamar .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}

function showEditTipeFas(){
  // Tampilkan popup
  $(".editTipekamar").show(); // Tampilkan elemen popup
  $(".editTipekamar").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".editTipekamar .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}


function  showPopupTambahKamar(){
  $(".popupTambahkamar").show(); // Tampilkan elemen popup
  $(".popupTambahkamar").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupTambahkamar .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}

function showPopupEditKamar(){
  $(".popupEditkamar").show(); // Tampilkan elemen popup
  $(".popupEditkamar").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
  $(".popupEditkamar .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}


function showPopupEditPemasukan(){
      // Tampilkan popup
      $(".popupEditPemasukan").show(); // Tampilkan elemen popup
      $(".popupEditPemasukan").addClass("active"); // Aktifkan kelas untuk menampilkan popup dengan animasi
      $(".popupEditPemasukan .popup-overlay").removeClass("fadeOut").addClass("fadeIn"); // Tampilkan overlay dengan animasi
}

function tambahpenyewa(){
  showPopupTambah();
}

function tambahpengeluaran(){
  showTambahPengeluaran();
}

function tambahpemasukan(){
  showPopupTambah();
}
function fasilitastipe(){
  showPopupTipeFas();
}


function tambahkamar(){
  showPopupTambahKamar();
}


function tambahbooking(){
  showPopupTambah();
}


function openbar() {
  // Show the leftbar by sliding in
  document.getElementById("leftbar").style.transform = "translateX(200px)";
  // Show the overlay
  document.getElementById("overlay").classList.add("active");
}

function closebar() {
  // Hide the leftbar by sliding it back
  document.getElementById("leftbar").style.transform = "translateX(0)";
  // Hide the overlay
  document.getElementById("overlay").classList.remove("active");
}


function tambahPenyewa() {
  
  var msg = document.getElementById('ptambah-err');
  var nama = document.formtambahpenyewa.namapenyewa;
  var asalpenyewa = document.formtambahpenyewa.asalpenyewa;
  var jk = document.formtambahpenyewa.jeniskelamin;
  var ktp = document.formtambahpenyewa.ktppenyewa;
  



  if (nama.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Tambahkan nama penyewa";
    nama.focus();
    return false;
  } else {
    msg.innerHTML = "";
    msg.style.display = 'none';
  }

    

    if (asalpenyewa.value == "") {
      msg.style.display = 'block';
      msg.innerHTML = "Tambahkan Asal penyewa";
      asalpenyewa.focus();
      return false;
    } else {
      msg.innerHTML = "";
      msg.style.display = 'none';
    }


    if (jk.value == "") {
      msg.style.display = 'block';
      msg.innerHTML = "Pilih Gender penyewa";
      jk.focus();
      return false;
    } else {
      msg.innerHTML = "";
      msg.style.display = 'none';
    }

    if (ktp.value == "") {
      msg.style.display = 'block';
      msg.innerHTML = "Masukkan KTP Penyewa";
      ktp.focus();
      return false;
    } else {
      msg.innerHTML = "";
      msg.style.display = 'none';
    }






  
}






function editPenyewa() {

  var msg = document.getElementById('edit-err');
  var nama = document.formeditpenyewa.namapenyewa;
  var asalpenyewa = document.formeditpenyewa.asalpenyewa;
  var jk = document.formeditpenyewa.jeniskelamin;
  var ktp = document.formeditpenyewa.ktppenyewa;
  


  if (nama.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Tambahkan nama penyewa";
    nama.focus();
    return false;
  } else {
    msg.innerHTML = "";
    msg.style.display = 'none';
  }


    

    if (asalpenyewa.value == "") {
      msg.style.display = 'block';
      msg.innerHTML = "Tambahkan Asal penyewa";
      asalpenyewa.focus();
      return false;
    } else {
      msg.innerHTML = "";
      msg.style.display = 'none';
    }


    if (jk.value == "") {
      msg.style.display = 'block';
      msg.innerHTML = "Pilih Gender penyewa";
      jk.focus();
      return false;
    } else {
      msg.innerHTML = "";
      msg.style.display = 'none';
    }

    if (ktp.value == "") {
      msg.style.display = 'block';
      msg.innerHTML = "Masukkan KTP Penyewa";
      ktp.focus();
      return false;
    } else {
      msg.innerHTML = "";
      msg.style.display = 'none';
    }





  
}




function tambahTipe(){
var msg = document.getElementById('tambah-err');
var nama = document.formtambahtipe.namatipekamar;



if (nama.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nama Tipe Kamar";
  nama.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}


}


function editTipe(){
var msg = document.getElementById('edit-err');
var nama = document.formedittipe.namatipekamar;



if (nama.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nama Tipe Kamar";
  nama.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}
}

function tambahKamar(){
var msg = document.getElementById('tambahkamr-err');
var no = document.formtambahkamar.nokamar;
var harga = document.formtambahkamar.hargakamar;
var tipekamar = document.formtambahkamar.tipekamar;



if (tipekamar.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Pilih Tipe Kamar";
  tipekamar.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}



if (no.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nomor Kamar";
  no.focus();
  return false;
}
else if (isNaN(no.value) || Number(no.value) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "No Kamar harus berupa angka";
  no.focus();
  return false;
}
 else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}


if (harga.value.trim() === "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Harga Kamar";
  harga.focus();
  return false;
}

// Hapus titik pemisah ribuan dan cek jika bukan angka
var hargaCleaned = harga.value.replace(/\./g, ''); // Menghapus semua titik
if (isNaN(hargaCleaned) || Number(hargaCleaned) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "Harga Kamar harus berupa angka positif";
  harga.focus();
  return false;
}

// Set nilai yang sudah dibersihkan kembali ke input
harga.value = hargaCleaned;

// Jika validasi lolos
msg.innerHTML = "";
msg.style.display = 'none';







}



function editKamar(){
var msg = document.getElementById('editkamr-err');
var no = document.formeditkamar.nokamar;
var harga = document.formeditkamar.hargakamar;
var tipekamar = document.formeditkamar.tipekamar;

if (tipekamar.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Pilih Tipe Kamar";
  tipekamar.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}



if (no.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nomor Kamar";
  no.focus();
  return false;
}
else if (isNaN(no.value) || Number(no.value) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "No Kamar harus berupa angka";
  no.focus();
  return false;
}
 else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}


if (harga.value.trim() === "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Harga Kamar";
  harga.focus();
  return false;
}

// Hapus titik pemisah ribuan dan cek jika bukan angka
var hargaCleaned = harga.value.replace(/\./g, ''); // Menghapus semua titik
if (isNaN(hargaCleaned) || Number(hargaCleaned) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "Harga Kamar harus berupa angka positif";
  harga.focus();
  return false;
}

// Set nilai yang sudah dibersihkan kembali ke input
harga.value = hargaCleaned;

// Jika validasi lolos
msg.innerHTML = "";
msg.style.display = 'none';
}


function tambahBooking(){

var msg = document.getElementById('ptambah-err');
var nama = document.formtambahbooking.namapenyewa;
var tipekamar = document.formtambahbooking.tipekamar;
var nokamar = document.formtambahbooking.nokamar;

var rentangangka= document.formtambahbooking.rentangangka;
var rentangwaktu= document.formtambahbooking.rentangwaktu;


if (nama.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan nama penyewa";
  nama.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}



if (tipekamar.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan tipe kamar booking";
  tipekamar.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}


if (nokamar.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan no kamar booking";
  nokamar.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}



if (rentangwaktu.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Rentang Waktu";
  rentangwaktu.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}



if (rentangangka.value == "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan rentang waktu angka";
  rentangangka.focus();
  return false;
} else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}

var waktuangka = rentangangka.value.replace(/\./g, '');
if (isNaN(waktuangka) || Number(waktuangka) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "( Hari / Bulan / Tahun ) harus berupa angka";
  rentangangka.focus();
  return false;
}





}



function tambahPemasukan(){
var msg = document.getElementById('tambah-err');
var penyewa = document.formtambahpemasukan.idpenyewa;
var nominal= document.formtambahpemasukan.nominal;




if (penyewa.value.trim() === "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nama Penyewa";
  penyewa.focus();
  return false;
}else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}





if (nominal.value.trim() === "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nominal";
  nominal.focus();
  return false;
}

var hargaCleaned = nominal.value.replace(/\./g, '');
if (isNaN(hargaCleaned) || Number(hargaCleaned) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "Nominal berupa angka positif";
  nominal.focus();
  return false;
}

// Set nilai yang sudah dibersihkan kembali ke input
nominal.value = hargaCleaned;

// Jika validasi lolos
msg.innerHTML = "";
msg.style.display = 'none';



}




function editPemasukan(){
var msg = document.getElementById('edit-err');
var nominal = document.formeditpemasukan.nominal;


if (nominal.value.trim() === "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nominal Pemasukan";
  nominal.focus();
  return false;
}

// Hapus titik pemisah ribuan dan cek jika bukan angka
var hargaCleaned = nominal.value.replace(/\./g, ''); // Menghapus semua titik
if (isNaN(hargaCleaned) || Number(hargaCleaned) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "Nominal berupa angka positif";
  nominal.focus();
  return false;
}

// Set nilai yang sudah dibersihkan kembali ke input
nominal.value = hargaCleaned;

// Jika validasi lolos
msg.innerHTML = "";
msg.style.display = 'none';




}



function tambahPengeluaran(){
var msg = document.getElementById('tambah-pengeluaran');
var nominal = document.formtambahpengeluaran.nominal;
var deskripsi = document.formtambahpengeluaran.deskripsipengeluaran;

if (deskripsi.value.trim() === "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Deskripsi Pengeluaran";
  deskripsi.focus();
  return false;
}else {
  msg.innerHTML = "";
  msg.style.display = 'none';
}




if (nominal.value.trim() === "") {
  msg.style.display = 'block';
  msg.innerHTML = "Tambahkan Nominal Pemasukan";
  nominal.focus();
  return false;
}

// Hapus titik pemisah ribuan dan cek jika bukan angka
var hargaCleaned = nominal.value.replace(/\./g, ''); // Menghapus semua titik
if (isNaN(hargaCleaned) || Number(hargaCleaned) <= 0) {
  msg.style.display = 'block';
  msg.innerHTML = "Nominal berupa angka positif";
  nominal.focus();
  return false;
}

// Set nilai yang sudah dibersihkan kembali ke input
nominal.value = hargaCleaned;

// Jika validasi lolos
msg.innerHTML = "";
msg.style.display = 'none';




}

function editPengeluaran(){
  var msg = document.getElementById('edit-pengeluaran');
  var nominal = document.formeditpengeluaran.nominal;
  var deskripsi = document.formeditpengeluaran.deskripsipengeluaran;

  if (deskripsi.value.trim() === "") {
    msg.style.display = 'block';
    msg.innerHTML = "Tambahkan Deskripsi Pengeluaran";
    deskripsi.focus();
    return false;
  }else {
    msg.innerHTML = "";
    msg.style.display = 'none';
  }



  if (nominal.value.trim() === "") {
    msg.style.display = 'block';
    msg.innerHTML = "Tambahkan Nominal Pemasukan";
    nominal.focus();
    return false;
  }
  
  // Hapus titik pemisah ribuan dan cek jika bukan angka
  var hargaCleaned = nominal.value.replace(/\./g, ''); // Menghapus semua titik
  if (isNaN(hargaCleaned) || Number(hargaCleaned) <= 0) {
    msg.style.display = 'block';
    msg.innerHTML = "Nominal berupa angka positif";
    nominal.focus();
    return false;
  }
  
  // Set nilai yang sudah dibersihkan kembali ke input
  nominal.value = hargaCleaned;
  
  // Jika validasi lolos
  msg.innerHTML = "";
  msg.style.display = 'none';

}
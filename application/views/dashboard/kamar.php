<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Kost Master</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
  <link rel="stylesheet" href="<?= base_url('assets/css/kamar.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/popup.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/breakpoint.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/fasilitas.css'); ?>">
  
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
<div class="left-side">
      <svg  onclick="window.location.href='<?= base_url('welcome'); ?>'" viewBox="0 0 512 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="active">
        <path d="M197.3 170.7h-160A37.4 37.4 0 010 133.3v-96A37.4 37.4 0 0137.3 0h160a37.4 37.4 0 0137.4 37.3v96a37.4 37.4 0 01-37.4 37.4zM37.3 32c-3 0-5.3 2.4-5.3 5.3v96c0 3 2.4 5.4 5.3 5.4h160c3 0 5.4-2.4 5.4-5.4v-96c0-3-2.4-5.3-5.4-5.3zm0 0M197.3 512h-160A37.4 37.4 0 010 474.7v-224a37.4 37.4 0 0137.3-37.4h160a37.4 37.4 0 0137.4 37.4v224a37.4 37.4 0 01-37.4 37.3zm-160-266.7c-3 0-5.3 2.4-5.3 5.4v224c0 3 2.4 5.3 5.3 5.3h160c3 0 5.4-2.4 5.4-5.3v-224c0-3-2.4-5.4-5.4-5.4zm0 0M474.7 512h-160a37.4 37.4 0 01-37.4-37.3v-96a37.4 37.4 0 0137.4-37.4h160a37.4 37.4 0 0137.3 37.4v96a37.4 37.4 0 01-37.3 37.3zm-160-138.7c-3 0-5.4 2.4-5.4 5.4v96c0 3 2.4 5.3 5.4 5.3h160c3 0 5.3-2.4 5.3-5.3v-96c0-3-2.4-5.4-5.3-5.4zm0 0M474.7 298.7h-160a37.4 37.4 0 01-37.4-37.4v-224A37.4 37.4 0 01314.7 0h160A37.4 37.4 0 01512 37.3v224a37.4 37.4 0 01-37.3 37.4zM314.7 32c-3 0-5.4 2.4-5.4 5.3v224c0 3 2.4 5.4 5.4 5.4h160c3 0 5.3-2.4 5.3-5.4v-224c0-3-2.4-5.3-5.3-5.3zm0 0" />
      </svg>
      <svg class="profile" viewBox="-42 0 512 512" fill="currentColor">
            <path d="M210.4 246.6c33.8 0 63.2-12.1 87.1-36.1 24-24 36.2-53.3 36.2-87.2 0-33.9-12.2-63.2-36.2-87.2-24-24-53.3-36.1-87.1-36.1-34 0-63.3 12.2-87.2 36.1S87 89.4 87 123.3c0 33.9 12.2 63.2 36.2 87.2 24 24 53.3 36.1 87.2 36.1zm-66-189.3a89.1 89.1 0 0166-27.3c26 0 47.5 9 66 27.3a89.2 89.2 0 0127.3 66c0 26-9 47.6-27.4 66a89.1 89.1 0 01-66 27.3c-26 0-47.5-9-66-27.3a89.1 89.1 0 01-27.3-66c0-26 9-47.6 27.4-66zm0 0M426.1 393.7a304.6 304.6 0 00-12-64.9 160.7 160.7 0 00-13.5-30.3c-5.7-10.2-12.5-19-20.1-26.3a88.9 88.9 0 00-29-18.2 100.1 100.1 0 00-37-6.7c-5.2 0-10.2 2.2-20 8.5-6 4-13 8.5-20.9 13.5-6.7 4.3-15.8 8.3-27 11.9a107.3 107.3 0 01-66 0 119.3 119.3 0 01-27-12l-21-13.4c-9.7-6.3-14.8-8.5-20-8.5a100 100 0 00-37 6.7 88.8 88.8 0 00-29 18.2 114.4 114.4 0 00-20.1 26.3 161 161 0 00-13.4 30.3A302.5 302.5 0 001 393.7c-.7 9.8-1 20-1 30.2 0 26.8 8.5 48.4 25.3 64.4C41.8 504 63.6 512 90.3 512h246.5c26.7 0 48.6-8 65.1-23.7 16.8-16 25.3-37.6 25.3-64.4a437 437 0 00-1-30.2zm-44.9 72.8c-11 10.4-25.4 15.5-44.4 15.5H90.3c-19 0-33.4-5-44.4-15.5C35.2 456.3 30 442.4 30 424c0-9.5.3-19 1-28.1A272.9 272.9 0 0141.7 338a131 131 0 0110.9-24.7A84.8 84.8 0 0167.4 294a59 59 0 0119.3-12 69 69 0 0123.6-4.5c1 .5 3 1.6 6 3.6l21 13.6c9 5.6 20.4 10.7 34 15.1a137.3 137.3 0 0084.5 0c13.7-4.4 25.1-9.5 34-15.1a2721 2721 0 0027-17.2 69 69 0 0123.7 4.5 59 59 0 0119.2 12 84.5 84.5 0 0114.9 19.4c4.5 8 8.2 16.3 10.8 24.7a275.2 275.2 0 0110.8 57.8c.6 9 1 18.5 1 28.1 0 18.5-5.3 32.4-16 42.6zm0 0" />
          </svg>
      <svg viewBox="0 1 511 512"fill="transparent">
        <path d="M498.7 222.7L289.8 13.8a46.8 46.8 0 00-66.7 0L14.4 222.6l-.2.2A47.2 47.2 0 0047 303h8.3v153.7a55.2 55.2 0 0055.2 55.2h81.7a15 15 0 0015-15V376.5a25.2 25.2 0 0125.2-25.2h48.2a25.2 25.2 0 0125.1 25.2V497a15 15 0 0015 15h81.8a55.2 55.2 0 0055.1-55.2V303.1h7.7a47.2 47.2 0 0033.4-80.4zm-21.2 45.4a17 17 0 01-12.2 5h-22.7a15 15 0 00-15 15v168.7a25.2 25.2 0 01-25.1 25.2h-66.8V376.5a55.2 55.2 0 00-55.1-55.2h-48.2a55.2 55.2 0 00-55.2 55.2V482h-66.7a25.2 25.2 0 01-25.2-25.2V288.1a15 15 0 00-15-15h-23A17.2 17.2 0 0135.5 244L244.4 35a17 17 0 0124.2 0l208.8 208.8v.1a17.2 17.2 0 010 24.2zm0 0" />
      </svg>
      <svg viewBox="0 0 512 512" fill="transparent">
        <path d="M467 76H45a45 45 0 00-45 45v270a45 45 0 0045 45h422a45 45 0 0045-45V121a45 45 0 00-45-45zm-6.3 30L287.8 278a44.7 44.7 0 01-63.6 0L51.3 106h409.4zM30 384.9V127l129.6 129L30 384.9zM51.3 406L181 277.2l22 22c14.2 14.1 33 22 53.1 22 20 0 38.9-7.9 53-22l22-22L460.8 406H51.3zM482 384.9L352.4 256 482 127V385z" />
      </svg>
      <svg viewBox="0 0 512 512" fill="transparent">
        <path d="M272 512h-32c-26 0-47.2-21.1-47.2-47.1V454c-11-3.5-21.8-8-32.1-13.3l-7.7 7.7a47.1 47.1 0 01-66.7 0l-22.7-22.7a47.1 47.1 0 010-66.7l7.7-7.7c-5.3-10.3-9.8-21-13.3-32.1H47.1c-26 0-47.1-21.1-47.1-47.1v-32.2c0-26 21.1-47.1 47.1-47.1H58c3.5-11 8-21.8 13.3-32.1l-7.7-7.7a47.1 47.1 0 010-66.7l22.7-22.7a47.1 47.1 0 0166.7 0l7.7 7.7c10.3-5.3 21-9.8 32.1-13.3V47.1c0-26 21.1-47.1 47.1-47.1h32.2c26 0 47.1 21.1 47.1 47.1V58c11 3.5 21.8 8 32.1 13.3l7.7-7.7a47.1 47.1 0 0166.7 0l22.7 22.7a47.1 47.1 0 010 66.7l-7.7 7.7c5.3 10.3 9.8 21 13.3 32.1h10.9c26 0 47.1 21.1 47.1 47.1v32.2c0 26-21.1 47.1-47.1 47.1H454c-3.5 11-8 21.8-13.3 32.1l7.7 7.7a47.1 47.1 0 010 66.7l-22.7 22.7a47.1 47.1 0 01-66.7 0l-7.7-7.7c-10.3 5.3-21 9.8-32.1 13.3v10.9c0 26-21.1 47.1-47.1 47.1zM165.8 409.2a176.8 176.8 0 0045.8 19 15 15 0 0111.3 14.5V465c0 9.4 7.7 17.1 17.1 17.1h32.2c9.4 0 17.1-7.7 17.1-17.1v-22.2a15 15 0 0111.3-14.5c16-4.2 31.5-10.6 45.8-19a15 15 0 0118.2 2.3l15.7 15.7a17.1 17.1 0 0024.2 0l22.8-22.8a17.1 17.1 0 000-24.2l-15.7-15.7a15 15 0 01-2.3-18.2 176.8 176.8 0 0019-45.8 15 15 0 0114.5-11.3H465c9.4 0 17.1-7.7 17.1-17.1v-32.2c0-9.4-7.7-17.1-17.1-17.1h-22.2a15 15 0 01-14.5-11.2c-4.2-16.1-10.6-31.6-19-45.9a15 15 0 012.3-18.2l15.7-15.7a17.1 17.1 0 000-24.2l-22.8-22.8a17.1 17.1 0 00-24.2 0l-15.7 15.7a15 15 0 01-18.2 2.3 176.8 176.8 0 00-45.8-19 15 15 0 01-11.3-14.5V47c0-9.4-7.7-17.1-17.1-17.1h-32.2c-9.4 0-17.1 7.7-17.1 17.1v22.2a15 15 0 01-11.3 14.5c-16 4.2-31.5 10.6-45.8 19a15 15 0 01-18.2-2.3l-15.7-15.7a17.1 17.1 0 00-24.2 0l-22.8 22.8a17.1 17.1 0 000 24.2l15.7 15.7a15 15 0 012.3 18.2 176.8 176.8 0 00-19 45.8 15 15 0 01-14.5 11.3H47c-9.4 0-17.1 7.7-17.1 17.1v32.2c0 9.4 7.7 17.1 17.1 17.1h22.2a15 15 0 0114.5 11.3c4.2 16 10.6 31.5 19 45.8a15 15 0 01-2.3 18.2l-15.7 15.7a17.1 17.1 0 000 24.2l22.8 22.8a17.1 17.1 0 0024.2 0l15.7-15.7a15 15 0 0118.2-2.3z" />
        <path d="M256 367.4c-61.4 0-111.4-50-111.4-111.4s50-111.4 111.4-111.4 111.4 50 111.4 111.4-50 111.4-111.4 111.4zm0-192.8a81.5 81.5 0 000 162.8 81.5 81.5 0 000-162.8z" />
      </svg>
      <svg  onclick="window.location.href='<?= base_url('login/login/logout'); ?>'" viewBox="0 0 512 512" fill="currentColor">
        <path d="M255.2 468.6H63.8a21.3 21.3 0 01-21.3-21.2V64.6c0-11.7 9.6-21.2 21.3-21.2h191.4a21.2 21.2 0 100-42.5H63.8A63.9 63.9 0 000 64.6v382.8A63.9 63.9 0 0063.8 511H255a21.2 21.2 0 100-42.5z" />
        <path d="M505.7 240.9L376.4 113.3a21.3 21.3 0 10-29.9 30.3l92.4 91.1H191.4a21.2 21.2 0 100 42.6h247.5l-92.4 91.1a21.3 21.3 0 1029.9 30.3l129.3-127.6a21.3 21.3 0 000-30.2z" />
      </svg>

    </div>

 <div class="overlay" id="overlay" onclick="closebar()"></div>

 <div class="leftbar" id="leftbar">
     <a href="javascript:void(0)" class="closebtn" onclick="closebar()">&times;</a>
     <a onclick="window.location.href='<?= base_url('home'); ?>';" href="#"><i class="fa-regular fa-rectangle-list"></i>Dashboard</a>
     <a onclick="window.location.href='<?= base_url('penyewa'); ?>';" href="#"><i class="fa-regular fa-address-card"></i>Penyewa</a>
     <a onclick="window.location.href='<?= base_url('kamar'); ?>';" href="#"><i class="fa-solid fa-person-shelter"></i></i>Kamar</a>
     <a onclick="window.location.href='<?= base_url('booking'); ?>';" href="#"><i class="fa-regular fa-address-book"></i>Booking</a>
     <a onclick="window.location.href='<?= base_url('keuangan'); ?>';" href="#"><i class="fa-solid fa-coins"></i>Keuangan</a>
     <a onclick="window.location.href='<?= base_url('statistik'); ?>';" href="#"><i class="fa-regular fa-chart-bar"></i>Statistik</a>
     <a onclick="window.location.href='<?= base_url('login/login/logout'); ?>'" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
 </div>



 <div class="main-container">
  <div class="header">
  <div class="logo">Master Kost</div>
    <i onclick="openbar()" class="fa-solid fa-bars"></i>
    <a class="header-link" href="<?= base_url('home'); ?>" ><i class="fa-regular fa-rectangle-list"></i>
    Dashboard
   </a>
   <a class="header-link" href="<?= base_url('penyewa'); ?>"><i class="fa-regular fa-address-card"></i>
    Penyewa
   </a>
   <a class="header-link active" href="" onclick="event.preventDefault();" ><i class="fa-solid fa-person-shelter"></i>
    Kamar
   </a>
   <a class="header-link" href="<?= base_url('booking'); ?>"><i class="fa-regular fa-address-book"></i>
    Booking
   </a>
   <a class="header-link" href="<?= base_url('keuangan'); ?>"><i class="fa-solid fa-coins"></i>
    Keuangan
   </a>
   <a class="header-link" href="<?= base_url('statistik'); ?>"><i class="fa-regular fa-chart-bar"></i>
   Statistik
   </a>

   <div class="user-info">

    <div class="user-name"><?= $this->session->userdata('username'); ?></div>
    <svg class="profile" viewBox="-42 0 512 512" fill="currentColor">
     <path d="M210.4 246.6c33.8 0 63.2-12.1 87.1-36.1 24-24 36.2-53.3 36.2-87.2 0-33.9-12.2-63.2-36.2-87.2-24-24-53.3-36.1-87.1-36.1-34 0-63.3 12.2-87.2 36.1S87 89.4 87 123.3c0 33.9 12.2 63.2 36.2 87.2 24 24 53.3 36.1 87.2 36.1zm-66-189.3a89.1 89.1 0 0166-27.3c26 0 47.5 9 66 27.3a89.2 89.2 0 0127.3 66c0 26-9 47.6-27.4 66a89.1 89.1 0 01-66 27.3c-26 0-47.5-9-66-27.3a89.1 89.1 0 01-27.3-66c0-26 9-47.6 27.4-66zm0 0M426.1 393.7a304.6 304.6 0 00-12-64.9 160.7 160.7 0 00-13.5-30.3c-5.7-10.2-12.5-19-20.1-26.3a88.9 88.9 0 00-29-18.2 100.1 100.1 0 00-37-6.7c-5.2 0-10.2 2.2-20 8.5-6 4-13 8.5-20.9 13.5-6.7 4.3-15.8 8.3-27 11.9a107.3 107.3 0 01-66 0 119.3 119.3 0 01-27-12l-21-13.4c-9.7-6.3-14.8-8.5-20-8.5a100 100 0 00-37 6.7 88.8 88.8 0 00-29 18.2 114.4 114.4 0 00-20.1 26.3 161 161 0 00-13.4 30.3A302.5 302.5 0 001 393.7c-.7 9.8-1 20-1 30.2 0 26.8 8.5 48.4 25.3 64.4C41.8 504 63.6 512 90.3 512h246.5c26.7 0 48.6-8 65.1-23.7 16.8-16 25.3-37.6 25.3-64.4a437 437 0 00-1-30.2zm-44.9 72.8c-11 10.4-25.4 15.5-44.4 15.5H90.3c-19 0-33.4-5-44.4-15.5C35.2 456.3 30 442.4 30 424c0-9.5.3-19 1-28.1A272.9 272.9 0 0141.7 338a131 131 0 0110.9-24.7A84.8 84.8 0 0167.4 294a59 59 0 0119.3-12 69 69 0 0123.6-4.5c1 .5 3 1.6 6 3.6l21 13.6c9 5.6 20.4 10.7 34 15.1a137.3 137.3 0 0084.5 0c13.7-4.4 25.1-9.5 34-15.1a2721 2721 0 0027-17.2 69 69 0 0123.7 4.5 59 59 0 0119.2 12 84.5 84.5 0 0114.9 19.4c4.5 8 8.2 16.3 10.8 24.7a275.2 275.2 0 0110.8 57.8c.6 9 1 18.5 1 28.1 0 18.5-5.3 32.4-16 42.6zm0 0" /></svg>

   </div>
  </div>
  <div class="container-kamar">
  <div class="info">
    <p class="totalkamar">Total Kamar <?= $jumlah_kamar->total_kamar; ?></p>
    <p class="kamarterisi" style="margin-bottom: 40px;"> <?= $jumlah_kamar_terisi->total_kamar; ?> / <?= $jumlah_kamar->total_kamar; ?> Kamar terisi</p>
<div class="gradekamar">
<p class="tipe-kamar">Tipe Kamar</p>
<?php foreach($tipekamar as $key => $value): ?>
<span onclick="edit_tipekamar(this)" 
      data-id="<?= $value['id_tipe_kamar']; ?>"  
      data-nama="<?= $value['nama_tipe']; ?>"  
      data-fasilitas="<?= $value['fasilitas']; ?>"  
      class="button-grade">
    <?= $value['nama_tipe']; ?>
</span>
<?php endforeach ?>

</div>
  </div>
  <div class="actions">
  <?php if(isset($tipekamar) && count($tipekamar) > 0): ?>
    <button  onclick="tambahkamar()" >Tambah Kamar</button>
  <?php endif ?>
    <button onclick="fasilitastipe()">Tambah Tipe Kamar</button>
  </div>

  
</div>


  <main>
  <?php if(isset($tipekamar) && count($tipekamar) > 0): ?>
  <?php foreach ($tipekamar as $key => $value): ?>
  <div class="owl-carousel owl-theme">
    <?php if (!empty($value['kamar'])): ?>
      <?php foreach ($value['kamar'] as $kamar): ?>
        <div class="item">
  <div class="overlay">
    <div class="spans-container">
      <div class="left-spans">
        <span><?= $value['nama_tipe']; ?></span>
        <span class="nokamar">No <?= $kamar['no_kamar']; ?></span>
      </div>
      <div class="right-spans">
      <span onclick="edit_kamar(this)" 
  data-id="<?= $kamar['id_kamar']; ?>"  
  data-tipe="<?= $value['id_tipe_kamar']; ?>"  
  data-no="<?= $kamar['no_kamar']; ?>"
  data-harga="<?= $kamar['harga_kamar']; ?>"
  data-status="<?= $kamar['status_kamar']; ?>">
  <i class="fa-regular fa-pen-to-square"></i>
</span>

        <span class="hapuskamar" onclick="hapus_kamar(<?php echo $kamar['id_kamar']; ?>, '<?php echo addslashes($value['nama_tipe']); ?>', '<?php echo addslashes($kamar['no_kamar']); ?>')"><i class="fa-regular fa-trash-can"></i></span>
      </div>
    </div>

    <div class="spans-container">
      <div class="left-spans">
      <?php if (($kamar['status_kamar']=='terisi')): ?>
      <span style="background-color: #626F47;" class="status-label"><?= $kamar['status_kamar']; ?></span>
      <?php else: ?>
        <span style="background-color: #F95454;" class="status-label"><?= $kamar['status_kamar']; ?></span>
      <?php endif; ?>
      </div>
    </div>



    <div class="bottom-container">
      <h2>Rp <?= number_format($kamar['harga_kamar'], 0, ',', '.'); ?></h2>
      <p>Fasilitas: <?= $value['fasilitas']; ?></p>
    </div>
  </div>
</div>


      <?php endforeach; ?>
    <?php endif; ?>
  </div>
<?php endforeach; ?>

<?php else : ?>
  <p class="empty_data"><span>Belum ada data kamar saat ini <i class="fa-solid fa-exclamation"></i></span></br> Mulailah dengan menambahkan tipe kamar baru terlebih dahulu untuk mengelola properti kamar anda</p>
  <div class="container-empty">
  <button class="btn-empty" onclick="fasilitastipe()">Tambah Tipe Kamar</button>
  </div>
<?php endif ?>


</main>

<div style="display: none;" class="popup popupTipekamar">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Tambah Tipe Kamar</h2>
    <div class="grid">
    <span class="errorPenyewa  animated tada" id="tambah-err"></span>
      <form name="formtambahtipe" action="<?= base_url('kamar/tambahTipe'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return tambahTipe()">

  
        <div class="form__field">
          <label for="login__username">
            <i style="padding:2px;" class="fa-solid fa-file-signature"></i>
            <span class="hidden">Tipe</span></label>
          <input autocomplete="nama" type="text" name="namatipekamar" class="form__input" placeholder="Nama Tipe Kamar">
        </div>

        <h2 style="margin-top:15px;">Fasilitas</h2>
        <div class="ul-container">


<ul>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kamar Mandi Dalam">
        <input type="text" readonly value='Kamar Mandi Dalam'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Tempat Tidur ( Kasur )">
        <input type="text" readonly value='Tempat Tidur ( Kasur )'>
    </li>

    <li>
        <input type="checkbox" name="fasilitas[]" value="Meja">
        <input type="text" readonly value='Meja'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kursi">
        <input type="text" readonly value='Kursi'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kipas Angin">
        <input type="text" readonly value='Kipas Angin'>
    </li>

    <li>
        <input type="checkbox" name="fasilitas[]" value="AC">
        <input type="text" readonly value='AC'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="WIFI">
        <input type="text" readonly value='WIFI'>
    </li>
</ul>

<ul>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Tv">
        <input type="text" readonly value='Tv'>
    </li>
   
    <li>
        <input type="checkbox" name="fasilitas[]" value="Dapur Bersama">
        <input type="text" readonly value='Dapur Bersama'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Ruang Tamu Bersama">
        <input type="text" readonly value='Ruang Tamu Bersama'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kulkas Bersama">
        <input type="text" readonly value='Kulkas Bersama'>
    </li>
    <li>
    <input type="checkbox" name="fasilitas[]" value="Area Parkir">
        <input type="text" readonly value='Area Parkir'>
    </li>
    <li>
    <input type="checkbox" name="fasilitas[]" value="Tempat Sampah">
        <input type="text" readonly value='Tempat Sampah'>
    </li>
    <li>
    <input type="checkbox" name="fasilitas[]" value="Keamanan ( CCTV )">
        <input type="text" readonly value='Keamanan ( CCTV )'>
    </li>
  
</ul>
</div>
      
  
        <div class="form__field">
          <input type="submit" value="Tambah">
        </div>
  
      </form>
  
  
  
    </div>
  

    
  <i class="popup-close fa-solid fa-xmark"></i>
     
  </div>
</div>







<div style="display: none;" class="popup editTipekamar">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Edit Tipe Kamar</h2>
    <div class="grid">
    <span class="errorPenyewa  animated tada" id="edit-err"></span>
      <form name="formedittipe" action="<?= base_url('kamar/editTipe'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return editTipe()">

      <input type="hidden" name="idtipekamar" id="idtipekamar">

        <div class="form__field">
          <label for="login__username">
            <i style="padding:2px;" class="fa-solid fa-file-signature"></i>
            <span class="hidden">Tipe</span></label>
          <input autocomplete="nama" type="text"  id="namatipekamar" name="namatipekamar" class="form__input" placeholder="Nama Tipe Kamar">
        </div>

        <h2 style="margin-top:15px;">Fasilitas</h2>
        <div class="ul-container">


<ul>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kamar Mandi Dalam">
        <input type="text" readonly value='Kamar Mandi Dalam'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Tempat Tidur ( Kasur )">
        <input type="text" readonly value='Tempat Tidur ( Kasur )'>
    </li>

    <li>
        <input type="checkbox" name="fasilitas[]" value="Meja">
        <input type="text" readonly value='Meja'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kursi">
        <input type="text" readonly value='Kursi'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kipas Angin">
        <input type="text" readonly value='Kipas Angin'>
    </li>

    <li>
        <input type="checkbox" name="fasilitas[]" value="AC">
        <input type="text" readonly value='AC'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="WIFI">
        <input type="text" readonly value='WIFI'>
    </li>
</ul>

<ul>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Tv">
        <input type="text" readonly value='Tv'>
    </li>
   
    <li>
        <input type="checkbox" name="fasilitas[]" value="Dapur Bersama">
        <input type="text" readonly value='Dapur Bersama'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Ruang Tamu Bersama">
        <input type="text" readonly value='Ruang Tamu Bersama'>
    </li>
    <li>
        <input type="checkbox" name="fasilitas[]" value="Kulkas Bersama">
        <input type="text" readonly value='Kulkas Bersama'>
    </li>
    <li>
    <input type="checkbox" name="fasilitas[]" value="Area Parkir">
        <input type="text" readonly value='Area Parkir'>
    </li>
    <li>
    <input type="checkbox" name="fasilitas[]" value="Tempat Sampah">
        <input type="text" readonly value='Tempat Sampah'>
    </li>
    <li>
    <input type="checkbox" name="fasilitas[]" value="Keamanan ( CCTV )">
        <input type="text" readonly value='Keamanan ( CCTV )'>
    </li>
  
</ul>
</div>
      
  
        <div class="form__field">
          <input type="submit" value="Ubah">
        </div>
  
      </form>
  
      <form style="margin-top: 20px;" action="<?= base_url('kamar/hapusTipe'); ?>" method="POST" class="form login">
        <div  class="form__field buttondelete">
        <input type="hidden" name="idtipekamarhapus" id="idtipekamarhapus">
          <input style="background-color: #F95454;" id="confirm-delete" type="submit" value="Hapus">
        </div>
      </form>
  
    </div>
  

    
  <i class="popup-close fa-solid fa-xmark"></i>
     
  </div>
</div>










<div style="display: none;" class="popup popupTambahkamar">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Tambah Kamar</h2>
    <div class="grid">
    <span class="errorPenyewa  animated tada" id="tambahkamr-err"></span>





      <form name="formtambahkamar" action="<?= base_url('kamar/tambahKamar'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return tambahKamar()">
      <div class="form__field">
          <label for="selectOption">
          <i class="fa-solid fa-layer-group"></i>
            <span class="hidden">Select Option</span></label>
          <div class="custom-select">
            <select name="tipekamar" class="form__input">
              <option value="" disabled selected>Tipe Kamar</option>
              <?php foreach($tipekamar as $key => $value): ?>
              <option value="<?= $value['id_tipe_kamar']; ?>"><?= $value['nama_tipe']; ?></option>
              <?php endforeach; ?>
            </select>
            <i class="fa-solid fa-square-caret-down"></i>
          </div>
        </div>
  
        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-list-ol"></i>
            <span class="hidden">No</span></label>
          <input autocomplete="nama" type="text" name="nokamar" class="form__input" placeholder="No Kamar">
        </div>

        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-tag"></i>
            <span class="hidden">Harga</span></label>
          <input autocomplete="nama" type="text" name="hargakamar" class="form__input" placeholder="Harga Kamar">
        </div>



  
        <div class="form__field">
          <input type="submit" value="Tambah">
        </div>
  
      </form>
  
  
  
    </div>
  

    
  <i class="popup-close fa-solid fa-xmark"></i>
     
  </div>
</div>




<div style="display: none;" class="popup popupEditkamar">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Edit Kamar</h2>
    <div class="grid">
    <span class="errorPenyewa  animated tada" id="editkamr-err"></span>
      <form name="formeditkamar" action="<?= base_url('kamar/editKamar'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return editKamar()">
      <input type="hidden" id="id_kamar" name="id_kamar" value="">
      <div class="form__field">
          <label for="selectOption">
          <i class="fa-solid fa-layer-group"></i>
            <span class="hidden">Select Option</span></label>
          <div class="custom-select">
            <select id="edittipe" name="tipekamar" class="form__input">
              <option value="" disabled selected>Tipe Kamar</option>
              <?php foreach($tipekamar as $key => $value): ?>
              <option value="<?= $value['id_tipe_kamar']; ?>"><?= $value['nama_tipe']; ?></option>
              <?php endforeach; ?>
            </select>
            <i class="fa-solid fa-square-caret-down"></i>
          </div>
        </div>
  
        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-list-ol"></i>
            <span class="hidden">No</span></label>
          <input id="editno" autocomplete="nama" type="text" name="nokamar" class="form__input" placeholder="No Kamar">
        </div>

        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-tag"></i>
            <span class="hidden">Harga</span></label>
          <input id="editharga" autocomplete="nama" type="text" name="hargakamar" class="form__input" placeholder="Harga Kamar">
        </div>




      
  
        <div class="form__field">
          <input type="submit" value="Ubah">
        </div>
  
      </form>
  
  
  
    </div>
  

    
  <i class="popup-close fa-solid fa-xmark"></i>
     
  </div>
</div>

<div style="display: none;" class="popup popupHapus">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Hapus Kamar</h2>
    <h5 style="margin: 30px 0;">Apakah anda yakin ingin menghapus Kamar ?
    </h5>
    <div class="data-kamar">
    <p class="data-tipe" id="kamar-name" ></p>
    <p class="data-no" id="kamar-no" ></p>
    </div>

    <div class="grid">
    <form id="delete-form" action="<?= base_url('kamar/hapusKamar'); ?>" method="POST" class="form login">
    <div class="form__field">
        <input onclick="canceldelete()" type="button" value="Batal">
        <input type="submit" value="Hapus">
    </div>
</form>

    </div>
  

    
  <i class="popup-close fa-solid fa-xmark"></i>
     
  </div>
</div>



 </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="<?= base_url('assets/js/home.js'); ?>"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script src="<?= base_url('assets/js/kamar.js'); ?>"></script>
<script src="<?= base_url('assets/js/validation.js'); ?>"></script>



<?php if ($this->session->flashdata('error')): ?>
      <script type="text/javascript">
         showPopupTambahKamar();
        var msg = document.getElementById('tambahkamr-err');
        msg.style.display = 'block';
        msg.innerHTML = "Nomor dan tipe kamar sudah ada";
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error_tambah')): ?>
      <script type="text/javascript">
         showPopupTambahKamar();
        var msg = document.getElementById('tambahkamr-err');
        msg.style.display = 'block';
        msg.innerHTML = "Batas maksimal kamar telah tercapai untuk jenis subscription Anda!";
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error_edit')): ?>
      <script type="text/javascript">
         showPopupEditKamar();
        var msg = document.getElementById('editkamr-err');
        msg.style.display = 'block';
        msg.innerHTML = "Nomor dan tipe kamar sudah ada";
    </script>
<?php endif; ?>





<script>
  function edit_tipekamar(button){
    const id = button.getAttribute('data-id');
    const nama = button.getAttribute('data-nama');
    const fasilitas = button.getAttribute('data-fasilitas');

    document.getElementById('idtipekamar').value = id; // Hidden input untuk ID
    document.getElementById('idtipekamarhapus').value = id; 
    document.getElementById('namatipekamar').value = nama; // Input untuk nama tipe kamar

     // Centang checkbox berdasarkan fasilitas
     const fasilitasArray = fasilitas.split(','); // Pisah fasilitas berdasarkan koma
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="fasilitas[]"]');

    checkboxes.forEach((checkbox) => {
        if (fasilitasArray.includes(checkbox.value)) {
            checkbox.checked = true;
        } else {
            checkbox.checked = false;
        }
    });


    showEditTipeFas()
  }


  function edit_kamar(button){
    const id = button.getAttribute('data-id');
    const tipeId = button.getAttribute('data-tipe');
    const no= button.getAttribute('data-no');
    const harga = button.getAttribute('data-harga');
    const status = button.getAttribute('data-status');

    document.getElementById('id_kamar').value = id; // Hidden input untuk ID
    document.getElementById('edittipe').value = tipeId;
    document.getElementById('editno').value = no; // Input untuk nama tipe kamar
    document.getElementById('editharga').value = harga ; // Input untuk nama tipe kamar





    showPopupEditKamar()

  }


function hapus_kamar(id_kamar, nama, no) {


    document.getElementById('delete-form').action = "<?php echo base_url('kamar/hapusKamar/'); ?>" + id_kamar;
    if (document.getElementById('kamar-name')) {
        document.getElementById('kamar-name').textContent = nama;
    }
    if (document.getElementById('kamar-no')) {
    document.getElementById('kamar-no').textContent = `No ${no}`;
    }

    showPopupHapus();
}
function generateColor(index) {
    // Buat warna dari index yang konsisten
    const hue = (index * 137) % 360; // Hasilkan nilai hue berdasarkan index
    return `hsl(${hue}, 10%, 50%)`; // Warna dalam format HSL (Hue-Saturation-Lightness)
}

// Target semua .owl-carousel.owl-theme
const carousels = document.querySelectorAll('.owl-carousel.owl-theme');

carousels.forEach((carousel, index) => {
    // Ambil semua .item .overlay di dalam setiap carousel
    const overlays = carousel.querySelectorAll('.item .overlay');
    
    const color1 = generateColor(index);      // Warna pertama untuk gradien
    const color2 = generateColor(index + 10); // Warna kedua untuk gradien (berbeda sedikit)

    overlays.forEach(overlay => {
        // Terapkan background linear-gradient
        overlay.style.background = `linear-gradient(0deg, ${color1}, ${color2})`;
    });
});


</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Kost Master</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">

</head>

<style>
        /* CSS untuk mengubah kursor menjadi pointer saat hover */
        .item {
            cursor: pointer;
        }


    </style>

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

 <!-- Left Sidebar -->
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
  <div class="header headerdashboard">
   <div class="logo">Master Kost</div>
    <i onclick="openbar()" class="fa-solid fa-bars"></i>
    <a class="header-link active" href="#"  onclick="event.preventDefault();" ><i class="fa-regular fa-rectangle-list"></i>
    Dashboard
   </a>
   <a class="header-link" href="<?= base_url('penyewa'); ?>"><i class="fa-regular fa-address-card"></i>
    Penyewa
   </a>
   <a class="header-link" href="<?= base_url('kamar'); ?>"><i class="fa-solid fa-person-shelter"></i>
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
  <div class="user-box first-box">
   <div class="activity card" style="--delay: .2s">
    <div class="title">Aktivitas Terkini Penyewa dan Pemasukan</div>
    <?php if (isset($latest_booking->nama_penyewa) && isset($latest_booking->nama_tipe) && isset($latest_booking->no_kamar)): ?>
    <div class="subtitle">1. Penyewa baru atas nama  <?= $latest_booking->nama_penyewa; ?>,  <?= $latest_booking->nama_tipe; ?> No <?= $latest_booking->no_kamar; ?></div>
<?php else: ?>
    <div class="subtitle">1. Data penyewa tidak tersedia.</div>
<?php endif; ?>

<?php if (isset($latest_pemasukan->nama_penyewa) && isset($latest_pemasukan->nominal) && isset($latest_pemasukan->status_pemasukan)): ?>
    <div class="subtitle">2. Pembayaran masuk atas nama  <?= $latest_pemasukan->nama_penyewa; ?>, Sebesar  <?= number_format($latest_pemasukan->nominal, 0, ',', '.'); ?>, Status 
        <span style="color: <?= ($latest_pemasukan->status_pemasukan === 'lunas') ? 'green' : 'red'; ?>;">
        <?= $latest_pemasukan->status_pemasukan; ?>
    </div>
<?php else: ?>
    <div class="subtitle">2. Data pembayaran tidak tersedia.</div>
<?php endif; ?>

   


    <div class="destination">
      <div class="destination-card">
        <div class="top">
          <i  onclick="window.location.href='<?= base_url('penyewa'); ?>';" class="fa-solid fa-users"></i>
          <i  onclick="window.location.href='<?= base_url('kamar'); ?>';" class="fa-solid fa-person-shelter"></i>
          <i  onclick="window.location.href='<?= base_url('statistik'); ?>';" class="fa-solid fa-money-bill-trend-up"></i>
        </div>
        <div class="mid">
          <span onclick="window.location.href='<?= base_url('penyewa'); ?>';" >penyewa</span>
          <span onclick="window.location.href='<?= base_url('kamar'); ?>';">kamar</span>
          <span  onclick="window.location.href='<?= base_url('statistik'); ?>';" style="line-height: 22px;">pendapatan bulan ini</span>
        </div>
        <div class="bottom">

        <?php if (isset($jumlah_penyewa->total_penyewa) && $jumlah_penyewa->total_penyewa && 
          isset($jumlah_kamar_terisi->total_kamar) && $jumlah_kamar_terisi->total_kamar && 
          isset($jumlah_pemasukan->total_pemasukan) && $jumlah_pemasukan->total_pemasukan): ?>
          <span><?= $jumlah_penyewa->total_penyewa; ?></span>
          <span><?= $jumlah_kamar_terisi->total_kamar; ?> / <?= $jumlah_kamar->total_kamar; ?></span>
          <span>Rp<?= number_format($jumlah_pemasukan->total_pemasukan, 0, ',', '.'); ?></span>

          <?php else: ?>
            <p>Data tidak tersedia atau tidak lengkap.</p>
          <?php endif; ?>
 

        </div>
      </div>
    </div>
    
    
   </div>
   <div class="discount card" style="--delay: .4s">
    <div class="title">Pendapatan Bulan ini</div>
    <div class="discount-wrapper">
     <div class="discount-info">
     <?php if (isset($jumlah_pemasukan->total_pemasukan)): ?>
    <div class="subtitle">Pemasukan Bulanan </div>
    <div class="subtitle-count">Rp<?= number_format($jumlah_pemasukan->total_pemasukan, 0, ',', '.'); ?></div>
      <?php else: ?>
          <div class="subtitle">Pemasukan Bulanan</div>
          <div class="subtitle-count">Data tidak tersedia</div>
      <?php endif; ?>

      <?php if (isset($belum_lunas)): ?>
          <div class="subtitle">Penyewa Belum Lunas</div>
          <div class="subtitle-count dist"><?= $belum_lunas; ?> Penyewa</div>
      <?php else: ?>
          <div class="subtitle">Penyewa Belum Lunas</div>
          <div class="subtitle-count dist">Data tidak tersedia</div>
      <?php endif; ?>

     </div>
     <div class="discount-chart">
     
      
      <div class="pie-chart pie-chart1">
    <?php if (isset($presentase)): ?>
          <span id="persentase-number" class="center"><?= $presentase ?>%</span>
      <?php else: ?>
          <span id="persentase-number" class="center">Data tidak tersedia</span>
      <?php endif; ?>
      <p>Presentase pemasukan dari target pemasukan bulan ini</p>
  </div>


     </div>
     
    </div>

    <div class="discount-profile">
      <span class="by">Transaksi terakhir</span>
      <div class="profile-content">
        <img class="discount-img" src="<?= base_url('assets/image/icons/pp.jpg'); ?>" alt="">
        <div class="discount-detail">
        <?php if (isset($latest_pemasukan)): ?>
            <div class="discount-name"><?= isset($latest_pemasukan->nama_penyewa) ? $latest_pemasukan->nama_penyewa : 'Nama penyewa tidak tersedia'; ?></div>
            <div style="margin-top: 15px;" class="discount-type">
                <?= isset($latest_pemasukan->nominal) ? 'Rp. ' . number_format($latest_pemasukan->nominal, 0, ',', '.') : 'Nominal tidak tersedia'; ?>
            </div>
        <?php else: ?>
            <p>Data transaksi tidak tersedia.</p>
        <?php endif; ?>

        </div>
      </div>
    </div>
    
    
    <div  onclick="window.location.href='<?= base_url('keuangan'); ?>';" class="button offer-button">lihat Detail</div>
   </div>
   <div class="cards-wrapper" style="--delay: .6s">
    <div class="cards-header">
     <div class="cards-header-date">
     
       <div class="title">
        <?= $bulan . ' ' . $current_year; ?>
      </div>

     </div>
    </div>
    <div class="cards card">
     <div class="cards-head">
      <div class="cards-info">
      <div id="detail-info" style="display: none;">
    </div>
       <div class="calendar-hour">Tanggal Tenggat Penyewa <span class="am-pm"></span></div>
      </div>
      <svg viewBox="0 0 512 512" fill="currentColor">
       <path d="M272 512h-32c-26 0-47.2-21.1-47.2-47.1V454c-11-3.5-21.8-8-32.1-13.3l-7.7 7.7a47.1 47.1 0 01-66.7 0l-22.7-22.7a47.1 47.1 0 010-66.7l7.7-7.7c-5.3-10.3-9.8-21-13.3-32.1H47.1c-26 0-47.1-21.1-47.1-47.1v-32.2c0-26 21.1-47.1 47.1-47.1H58c3.5-11 8-21.8 13.3-32.1l-7.7-7.7a47.1 47.1 0 010-66.7l22.7-22.7a47.1 47.1 0 0166.7 0l7.7 7.7c10.3-5.3 21-9.8 32.1-13.3V47.1c0-26 21.1-47.1 47.1-47.1h32.2c26 0 47.1 21.1 47.1 47.1V58c11 3.5 21.8 8 32.1 13.3l7.7-7.7a47.1 47.1 0 0166.7 0l22.7 22.7a47.1 47.1 0 010 66.7l-7.7 7.7c5.3 10.3 9.8 21 13.3 32.1h10.9c26 0 47.1 21.1 47.1 47.1v32.2c0 26-21.1 47.1-47.1 47.1H454c-3.5 11-8 21.8-13.3 32.1l7.7 7.7a47.1 47.1 0 010 66.7l-22.7 22.7a47.1 47.1 0 01-66.7 0l-7.7-7.7c-10.3 5.3-21 9.8-32.1 13.3v10.9c0 26-21.1 47.1-47.1 47.1zM165.8 409.2a176.8 176.8 0 0045.8 19 15 15 0 0111.3 14.5V465c0 9.4 7.7 17.1 17.1 17.1h32.2c9.4 0 17.1-7.7 17.1-17.1v-22.2a15 15 0 0111.3-14.5c16-4.2 31.5-10.6 45.8-19a15 15 0 0118.2 2.3l15.7 15.7a17.1 17.1 0 0024.2 0l22.8-22.8a17.1 17.1 0 000-24.2l-15.7-15.7a15 15 0 01-2.3-18.2 176.8 176.8 0 0019-45.8 15 15 0 0114.5-11.3H465c9.4 0 17.1-7.7 17.1-17.1v-32.2c0-9.4-7.7-17.1-17.1-17.1h-22.2a15 15 0 01-14.5-11.2c-4.2-16.1-10.6-31.6-19-45.9a15 15 0 012.3-18.2l15.7-15.7a17.1 17.1 0 000-24.2l-22.8-22.8a17.1 17.1 0 00-24.2 0l-15.7 15.7a15 15 0 01-18.2 2.3 176.8 176.8 0 00-45.8-19 15 15 0 01-11.3-14.5V47c0-9.4-7.7-17.1-17.1-17.1h-32.2c-9.4 0-17.1 7.7-17.1 17.1v22.2a15 15 0 01-11.3 14.5c-16 4.2-31.5 10.6-45.8 19a15 15 0 01-18.2-2.3l-15.7-15.7a17.1 17.1 0 00-24.2 0l-22.8 22.8a17.1 17.1 0 000 24.2l15.7 15.7a15 15 0 012.3 18.2 176.8 176.8 0 00-19 45.8 15 15 0 01-14.5 11.3H47c-9.4 0-17.1 7.7-17.1 17.1v32.2c0 9.4 7.7 17.1 17.1 17.1h22.2a15 15 0 0114.5 11.3c4.2 16 10.6 31.5 19 45.8a15 15 0 01-2.3 18.2l-15.7 15.7a17.1 17.1 0 000 24.2l22.8 22.8a17.1 17.1 0 0024.2 0l15.7-15.7a15 15 0 0118.2-2.3z"></path>
       <path d="M256 367.4c-61.4 0-111.4-50-111.4-111.4s50-111.4 111.4-111.4 111.4 50 111.4 111.4-50 111.4-111.4 111.4zm0-192.8a81.5 81.5 0 000 162.8 81.5 81.5 0 000-162.8z"></path>
      </svg>
     </div>
     <div class="items days">
      <div class="item">Ming</div>
      <div class="item">Sen</div>
      <div class="item">Sel</div>
      <div class="item">Rab</div>
      <div class="item">Kam</div>
      <div class="item">Jum</div>
      <div class="item">Sab</div>
     </div>
     <div class="items numbers">
    <?php
    // Looping untuk menampilkan tanggal
    for ($day = 1; $day <= $days_in_month; $day++) {
        // Cek jika tanggal ini adalah tanggal yang aktif (contoh: tanggal sekarang)
        $is_active = ($day == date('d')) ? 'is-active' : '';
        ?>
        <div class="item itemtgl <?= $is_active; ?>" data-tgl="<?= $current_year . '-' . $current_month . '-' . str_pad($day, 2, '0', STR_PAD_LEFT); ?>">
            <?= $day; ?>
        </div>
        <?php
    }
    ?>
</div>

    </div>
   </div>
   <div class="account-wrapper" style="--delay: .8s">
    <div class="account-profile">
     <img src="<?= base_url('assets/image/icons/pp.jpg'); ?>" alt="">
     <div class="blob-wrap">
      <div class="blob"></div>
      <div class="blob"></div>
      <div class="blob"></div>
     </div>
     <div class="account-name">Pemilik Kost</div>
     <div class="account-title"><?= $this->session->userdata('username'); ?></div>
    </div>
    <div class="account card">
    <?php if (isset($total_pemasukan) && isset($total_pemasukan->total_pemasukan)): ?>
    <div style="margin-bottom: 20px;" class="account-cash">Rp <?= number_format($total_pemasukan->total_pemasukan, 0, ',', '.'); ?></div>
    <?php else: ?>
        <div style="margin-bottom: 20px;" class="account-cash">Data keuangan tidak tersedia</div>
    <?php endif; ?>

     <div class="account-income">Total Semua Pemasukan</div>
     
    </div>
   </div>
  </div>
  <div class="user-box second-box">
   <div class="cards-wrapper" style="--delay: 1s">
    <div class="cards-header">
    
     <div class="cards-header-date">
      
      <div class="title">Peringkat Penyewa Kost</div>
     
     </div>
    
    </div>
    <div class="cards card">
    <?php if(isset($top_penyewa) && count($top_penyewa) > 0): ?>
     <table class="table">
      <thead>
       <tr>
     
        <th>Nama</th>
        <th>Asal</th>
        <th>No Kamar</th>
        <th>Tipe Kamar</th>
        <th>Jenis Kelamin</th>
        <th>Lama Tinggal Penyewa</th>
        <th>Status</th>
       </tr>
      </thead>
      <tbody>

      <?php foreach($top_penyewa as $key => $value): ?>
    <tr>
        <td><?= $value['nama_penyewa']; ?></td>
        <td><?= $value['asal_penyewa']; ?></td>
        <td><?= $value['no_kamar']; ?></td> <!-- Menampilkan nomor kamar -->
        <td><?= $value['nama_tipe']; ?></td> <!-- Menampilkan nama tipe kamar -->
        <td><?= $value['jenis_kelamin']; ?></td> <!-- Menampilkan nama tipe kamar -->
        <td>
                        <?php
                        if (!empty($value["tgl_daftar"])) {
                          // Konversi tgl_daftar menjadi objek DateTime
                          $tgl_daftar = new DateTime($value["tgl_daftar"]);
                          $now = new DateTime(); // Waktu sekarang

                          // Hitung selisih waktu
                          $interval = $tgl_daftar->diff($now);

                          // Tentukan format yang ditampilkan
                          if ($interval->y > 0) {
                            echo $interval->y . " tahun";
                          } elseif ($interval->m > 0) {
                            echo $interval->m . " bulan";
                          } elseif ($interval->d > 0) {
                            echo $interval->d . " hari";
                          } elseif ($interval->h > 0) {
                            echo $interval->h . " jam";
                          } else {
                            echo $interval->i . " menit";
                          }
                        } else {
                          echo "-";
                        }
                        ?>
                      </td>

        <td>
            <div class="status is-green">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6L9 17l-5-5" />
                </svg>
                Active
            </div>
        </td>
    </tr>
<?php endforeach ?>



      </tbody>
     </table>
     <?php else : ?>
      <p class="empty_data"><span>Belum ada data tersedia <i class="fa-solid fa-exclamation"></i></span></br> Mulailah dengan menambahkan data penyewa,kamar,booking dan keuangan untuk mengelola kost anda</p>
      <div class="container-empty">
      <button class="btn-empty" onclick="window.location.href='<?= base_url('penyewa'); ?>';">Mulai Kelola</button>
      </div>
      <?php endif ?>
    </div>
   </div>

  </div>
 </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="<?= base_url('assets/js/home.js'); ?>"></script>
  <script>



$(document).ready(function () {
    // Event listener untuk klik pada item tanggal
    $('.itemtgl').on('click', function () {
        var tgl = $(this).data('tgl'); // Ambil nilai tanggal yang diklik
        var dateObj = new Date(tgl);

        // Ambil hanya tanggal (tanpa bulan dan tahun)
        var tanggalSaja = dateObj.getDate(); 

        // Ambil nama bulan
        var bulan = dateObj.toLocaleString('id-ID', { month: 'long' }); // Menggunakan nama bulan dalam format lokal (id-ID)

        // Kirimkan request AJAX ke server untuk mendapatkan data penyewa berdasarkan tgl_booking
        $.ajax({
            url: '<?= base_url("booking/getBookingDetails") ?>', // Ganti dengan URL endpoint backend Anda
            type: 'GET',
            data: { tgl_booking: tgl }, // Kirimkan tanggal yang diklik
            success: function (response) {
                var data = JSON.parse(response); // Parse response JSON
                
                if (data.length > 0) {
                    var content = '<ul class="penyewatenggat">';
                    data.forEach(function (item) {
                        content += '<li>' + item.nama_penyewa + ' ( ' + item.tanggal_tenggat + ' )</li>';
                    });
                    content += '</ul>';
                    $('#detail-info').html(content).show(); // Menampilkan hasil di #detail-info
                } else {
                    $('#detail-info').html('<p>Tidak ada tenggat penyewa di tanggal ' + tanggalSaja + ' ' + bulan + '</p>').show(); // Menampilkan pesan jika tidak ada data
                }
            },
            error: function () {
                alert('Failed to fetch data'); // Menampilkan alert jika terjadi error
            }
        });

        // Tambahkan kelas active ke elemen yang diklik
        $(this).addClass('active'); // Menambahkan kelas 'active' pada elemen yang diklik
        
        // Optional: Jika ingin menghapus background biru dari elemen lain setelah diklik, tambahkan ini:
        $('.item').not(this).removeClass('active'); // Menghapus kelas 'active' dari elemen lain
    });
});


$(window).ready(function() {
   // Tambahkan delay 10 detik sebelum memulai animasi
   setTimeout(function() {
      draw( <?= $presentase; ?>, '.pie-chart1', '#3E7B27');
   }, 1000); // 10000 milidetik = 10 detik
});

function draw(max, classname, colorname) {
   var i = 1;
   var func1 = setInterval(function() {
      if (i <= max) {
         color1(i, classname, colorname);
         i++;
      } else {
         clearInterval(func1);
      }
   }, 20); // Sesuaikan kecepatan animasi
}

function color1(i, classname, colorname) {
   $(classname).css({
      "background": "conic-gradient(" + colorname + " 0% " + i + "%, transparent " + i + "% 100%)"
   });

   // Pastikan menyatu sempurna di 100%
   if (i === 100) {
      $(classname).css({
         "background": colorname
      });
   }
}



  </script>

</body>
</html>

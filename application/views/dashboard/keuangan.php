<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Kost Master</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/popup.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/breakpoint.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/kalender.css'); ?>">
</head>
<style>

  .empty_data span{
    font-size: 23px;
  }
  .empty_data{
    font-size: 16px;
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
    <a class="header-link" href="<?= base_url('home'); ?>"><i class="fa-regular fa-rectangle-list"></i>
    Dashboard
   </a>
   <a class="header-link" href="<?= base_url('penyewa'); ?>">
   <i class="fa-regular fa-address-card"></i> Penyewa
</a>

   <a class="header-link" href="<?= base_url('kamar'); ?>"><i class="fa-solid fa-person-shelter"></i>
    Kamar
   </a>
   <a class="header-link" href="<?= base_url('booking'); ?>" ><i class="fa-regular fa-address-book"></i>
    Booking
   </a>
   <a class="header-link active" href="#"  onclick="event.preventDefault();" ><i class="fa-solid fa-coins"></i>
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



  </div>
  <div class="user-box second-box">
   <div class="cards-wrapper" style="--delay: 1s">
    <div id="header_pemasukan" class="cards-header">
     <div class="cards-view">
     <i class="fa-solid fa-chart-line"></i>
     
      
     </div>
     <div class="cards-header-date">
      
      <div class="title">Pemasukan</div>
     
     </div>
     <div style="cursor: pointer;" onclick="tambahpemasukan()" class="cards-button button">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
       <path d="M12 5v14M5 12h14" />
      </svg>
      Tambah Pemasukan
     </div>
    </div>
    <div class="cards cardauto">
      <div class="table-wrapper table-wrapperuser">
      <?php if(isset($pemasukan) && count($pemasukan) > 0): ?>
     <table class="table tableuser">
      <thead>
       <tr>
        <th>Modify</th>
        <th>Nama Penyewa</th>
        <th>Tipe Kamar</th>
        <th>No kamar</th>
        <th>Nominal</th>
        <th>Status</th>
        <th>Kekurangan</th>
       </tr>
      </thead>
      <tbody>

      <?php foreach($pemasukan as $key => $value): ?>
       <tr>
        <td class="modify">
          <?php if($value["pemasukan_terlewat"]!=1): ?>
          <i onclick="edit_pemasukan(this)" 
		    data-id="<?= $value['id_pemasukan'] ?>" 
        data-nama-penyewa="<?= $value['id_penyewa'] ?>" 
        data-nama-tipe="<?= $value['id_tipe_kamar'] ?>" 
        data-no-kamar="<?= $value['id_kamar'] ?>" 
        data-nominal="<?= $value['nominal'] ?>" 
        data-status="<?= $value['status_pemasukan'] ?>"
        class="fa-solid fa-pen-to-square"></i>
        <?php else: ?>
          <i style="background-color:rgb(115, 115, 115);  cursor: not-allowed;" class="fa-solid fa-pen-to-square"></i>
        <?php endif; ?>
        
        <i  onclick="hapus_pemasukan(<?php echo $value['id_pemasukan']; ?>, '<?php echo addslashes($value['nama_penyewa']); ?>')"  class="fa-solid fa-trash"></i></td>
      
        <td><?php echo $value["nama_penyewa"] ?></td>
        <td><?php echo $value["nama_tipe"] ?></td>
        <td><?php echo $value["no_kamar"] ?></td>
        <td>Rp <?php echo number_format($value["nominal"], 0, ',', '.'); ?></td>
        <td>
          <?php if ($value["status_pemasukan"] === "lunas"): ?>
              <span style="color: green;"><?php echo $value["status_pemasukan"]; ?></span>
          <?php else: ?>
              <span style="color: #FF0000;"><?php echo $value["status_pemasukan"]; ?></span>
          <?php endif; ?>
      </td>

        <td>
      <?php
        if (!empty($value["kekurangan_pembayaran"] && $value["status_pemasukan"]!='lunas' )) {
          ?>
          Rp <?php echo number_format($value["kekurangan_pembayaran"], 0, ',', '.'); ?>
          <?php
        }
        else{
            ?>
            <div class="status is-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 6L9 17l-5-5" />
                </svg>
        
            </div>
            <?php
        }
          
       ?>
      
      </td>
       </tr>
       <?php endforeach ?>

      </tbody>
     </table>
     <?php else : ?>
      <p class="empty_data"><span>Belum ada data pemasukan saat ini <i class="fa-solid fa-exclamation"></i></span></br> Mulailah dengan menambahkan data pemasukan penyewa untuk mengelola keuangan anda</p>
      <div class="container-empty">
      <button class="btn-empty"  onclick="tambahpemasukan()">Tambah Pemasukan</button>
      </div>
    <?php endif ?>

    </div>
    </div>
   </div>



   <div id="tabel_pengeluaran" class="cards-wrapper" style="--delay: 1s">
    <div id="header_pengeluaran" class="cards-header">
     <div class="cards-view">
     <i class="fa-solid fa-chart-line"></i>
     
      
     </div>
     <div class="cards-header-date">
      
      <div class="title">Pengeluaran</div>
     
     </div>
     <div style="cursor: pointer;" onclick="tambahpengeluaran()" class="cards-button button">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
       <path d="M12 5v14M5 12h14" />
      </svg>
      Tambah Pengeluaran
     </div>
    </div>
    <div class="cards cardauto">
      <div class="table-wrapper table-wrapperuser">
  <?php if(isset($pengeluaran) && count($pengeluaran) > 0): ?>
     <table class="table tableuser">
      <thead>
       <tr>
        <th>Modify</th>
        <th>Deskripsi Pengeluaran</th>
        <th>Nominal</th>
        <th>Tanggal Pengeluaran</th>
       </tr>
      </thead>
      <tbody>

      <?php foreach($pengeluaran as $key => $value): ?>
       <tr>
        <td class="modify"><i onclick="edit_pengeluaran(this)" 
		    data-id="<?= $value['id_pengeluaran'] ?>" 
        data-desc="<?= $value['deskripsi_pengeluaran'] ?>" 
        data-nominal="<?= $value['nominal_pengeluaran'] ?>" 
        data-tgl="<?= $value['tgl_pengeluaran'] ?>" 
        
        class="fa-solid fa-pen-to-square"></i> <i  onclick="hapus_pengeluaran(<?php echo $value['id_pengeluaran']; ?>, '<?php echo addslashes($value['deskripsi_pengeluaran']); ?>')"  class="fa-solid fa-trash"></i></td>
        <td><?php echo $value["deskripsi_pengeluaran"] ?></td>
        <td>Rp <?php echo number_format($value["nominal_pengeluaran"], 0, ',', '.'); ?></td>
        <td>
        <?php 
    $tanggal = $value["tgl_pengeluaran"];
    $timestamp = strtotime($tanggal);
    $hari = date("l", $timestamp);
    $bulan = date("F", $timestamp);

    // Array untuk konversi nama hari dan bulan
    $hariIndo = [
        "Sunday" => "Minggu", "Monday" => "Senin", "Tuesday" => "Selasa",
        "Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jumat",
        "Saturday" => "Sabtu"
    ];
    $bulanIndo = [
        "January" => "Januari", "February" => "Februari", "March" => "Maret",
        "April" => "April", "May" => "Mei", "June" => "Juni",
        "July" => "Juli", "August" => "Agustus", "September" => "September",
        "October" => "Oktober", "November" => "November", "December" => "Desember"
    ];

    // Menampilkan hari dan bulan dalam bahasa Indonesia
    echo $hariIndo[$hari] . ", " . date("d", $timestamp) . " " . $bulanIndo[$bulan] . " " . date("Y", $timestamp);
    ?>

        </td>

       </tr>
       <?php endforeach ?>

      </tbody>
     </table>
     <?php else : ?>
      <p class="empty_data"><span>Belum ada data pengeluaran saat ini <i class="fa-solid fa-exclamation"></i></span></br> Mulailah dengan menambahkan data pengeluaran untuk mengelola keuangan anda</p>
      <div class="container-empty">
      <button class="btn-empty"  onclick="tambahpengeluaran()">Tambah Pengeluaran</button>
      </div>
    <?php endif ?>
    </div>
    </div>
   </div>



   

  </div>
 </div>








</div>



<div style="display: none;" class="popup popupEdit">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Edit Pemasukan</h2>
    <div class="grid">
      <span class="errorPenyewa  animated tada" id="edit-err"></span>
      <form name="formeditpemasukan" action="<?= base_url('keuangan/editPemasukan'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return editPemasukan()">
        <input type="hidden" id="id_pemasukan" name="id_pemasukan" value="">
        <input type="hidden" id="nama_penyewa" name="idpenyewa"  value="">
        <div class="form__field">
          <label for="selectOption">
          <i class="fa-regular fa-user"></i>
            <span class="hidden">Select Option</span></label>
          <div class="custom-select">
            <select id="edit_penyewa" class="form__input">
              <option value="" disabled selected></option>
              <?php foreach($penyewaedit as $key => $value): ?>
                 <option value="<?= $value['id_penyewa'] ?>">
                    <?= $value['nama_penyewa'] . " -  ( " . $value['nama_tipe'] . " No : " . $value['no_kamar'] . " )" ?>
                </option>
            <?php endforeach ?>

            </select>
            <i class="fa-solid fa-square-caret-down"></i>
          </div>
        </div>

        <input type="hidden" name="idkamar" value="">


        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-money-bill-wave"></i>
            <span class="hidden">Nomimal</span></label>
          <input id="nominal" autocomplete="nama" type="text" name="nominal" class="form__input" placeholder="Nominal">
        </div>



        
  
        <div class="form__field">
          <input type="submit" value="Ubah">
        </div>
  
      </form>
    </div>
    <i class="popup-close fa-solid fa-xmark"></i>
  </div>
</div>




<div style="display: none;" class="popup popupTambah">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Tambah Pemasukan</h2>
    <div class="grid">
      <span class="errorPenyewa  animated tada" id="tambah-err"></span>
      <form name="formtambahpemasukan" action="<?= base_url('keuangan/tambahPemasukan'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return tambahPemasukan()">
  
        <div class="form__field">
          <label for="selectOption">
          <i class="fa-regular fa-user"></i>
            <span class="hidden">Select Option</span></label>
          <div class="custom-select">
          <select name="idpenyewa" class="form__input">
              <option value="" disabled selected>Nama Penyewa</option>
              <?php foreach ($penyewa as $key => $value): ?>
                  <option value="<?= $value['id_penyewa'] ?>">
                      <?= $value['nama_penyewa'] . " - ( " . $value['nama_tipe'] . " No : " . $value['no_kamar'] . " )" ?>
                  </option>
              <?php endforeach ?>
          </select>
            <i class="fa-solid fa-square-caret-down"></i>
          </div>
        </div>

        
        <input type="hidden" name="idkamar" value="">   


        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-money-bill-wave"></i>
            <span class="hidden">Nomimal</span></label>
          <input id="nominal" autocomplete="nama" type="text" name="nominal" class="form__input" placeholder="Nominal">
        </div>


        
  
        <div class="form__field">
          <input type="submit" value="Tambah">
        </div>
  
      </form>
    </div>
    <i class="popup-close fa-solid fa-xmark"></i>
  </div>
</div>



<div style="display: none;" class="popup popupHapus">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Hapus Pemasukan</h2>
    <h5>Apakah anda yakin ingin menghapus pemasukan?
    </h5>
    <p id="penyewa-name" style="color: rgb(185, 185, 185);"></p>
    <div class="grid">
    <form id="delete-form" action="<?= base_url('keuangan/hapusPemasukan'); ?>" method="POST" class="form login">
    <div class="form__field">
        <input  style="cursor: pointer;" onclick="canceldelete()" type="button" value="Batal">
        <input style="background-color: #dc3545;"  type="submit" value="Hapus">
    </div>
</form>

  </div>
  
    
  <i class="popup-close fa-solid fa-xmark"></i>
     
  </div>
</div>





<div style="display: none;" class="popup popupTambahPengeluaran">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Tambah Pengeluaran</h2>
    <div class="grid">
      <span class="errorPenyewa  animated tada" id="tambah-pengeluaran"></span>
      <form name="formtambahpengeluaran" action="<?= base_url('keuangan/tambahPengeluaran'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return tambahPengeluaran()">
  

      <div class="form__field">
				<label for="login__password">
					<i class="fa-regular fa-rectangle-list"></i>
				  <span class="hidden">Link</span></label>
				  <textarea name="deskripsipengeluaran" class="form__input textareahome" placeholder="Deskripsi Pengeluaran"></textarea>

			  </div>


        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-money-bill-wave"></i>
            <span class="hidden">Nomimal</span></label>
          <input id="nominal" autocomplete="nama" type="text" name="nominal" class="form__input" placeholder="Nominal">
        </div>



        <div class="calender">
    <div class="timeMsg">
        <span>Kalender</span>
        <span class="timeData"></span>
        <i class="fas fa-calendar-alt"></i>
    </div>
    <div class="timeBlock block">
        <div class="prev headInf">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="timeInf">
            <div class="title-year block"></div>
            <span> - </span>
            <div class="title-month headInf"></div>
        </div>
        <div class="next headInf">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    <div class="block">
        <ul class="w-list">
            <li>Ming</li>
            <li>Sen</li>
            <li>Sel</li>
            <li>Rab</li>
            <li>Kam</li>
            <li>Jum</li>
            <li>Sab</li>
        </ul>
    </div>
    <div class="block">
        <ul class="d-list"></ul>
    </div>
</div>



        <input type="hidden" class="hiddenTanggal" name="hiddenTanggal" value="">


        <div class="form__field">
          <input type="submit" value="Tambah">
        </div>
  
      </form>
    </div>
    <i class="popup-close fa-solid fa-xmark"></i>
  </div>
</div>


<div style="display: none;" class="popup popupEditPengeluaran">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Edit Pengeluaran</h2>
    <div class="grid">
      <span class="errorPenyewa  animated tada" id="edit-pengeluaran"></span>
      <form name="formeditpengeluaran" action="<?= base_url('keuangan/editPengeluaran'); ?>" method="POST" class="form login" enctype="multipart/form-data" onsubmit="return editPengeluaran()">
      <input type="hidden" id="id_pengeluaran" name="id_pengeluaran" value="">

      <div class="form__field">
				<label for="login__password">
					<i class="fa-regular fa-rectangle-list"></i>
				  <span class="hidden">Link</span></label>
				  <textarea id="deskripsipengeluaran" name="deskripsipengeluaran" class="form__input textareahome" placeholder="Deskripsi Pengeluaran"></textarea>

			  </div>


        <div class="form__field">
          <label for="login__username">
          <i class="fa-solid fa-money-bill-wave"></i>
            <span class="hidden">Nomimal</span></label>
          <input id="nominalpengeluaran" autocomplete="nama" type="text" name="nominal" class="form__input" placeholder="Nominal">
        </div>


        <div class="calender">
    <div class="timeMsg">
        <span>Kalender</span>
        <span class="timeData"></span>
        <i class="fas fa-calendar-alt"></i>
    </div>
    <div class="timeBlock block">
        <div class="prev headInf">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="timeInf">
            <div id="year"></div>
            <span> - </span>
            <div id="month"></div>
        </div>
        <div class="next headInf">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    <div class="block">
        <ul class="w-list">
            <li>Ming</li>
            <li>Sen</li>
            <li>Sel</li>
            <li>Rab</li>
            <li>Kam</li>
            <li>Jum</li>
            <li>Sab</li>
        </ul>
    </div>
    <div class="block">
        <ul class="d-list"></ul>
    </div>
</div>



        <input type="hidden" class="hiddenTanggalEdit" name="hiddenTanggalEdit" value="">





        <div class="form__field">
          <input type="submit" value="Ubah">
        </div>
  
      </form>
    </div>
    <i class="popup-close fa-solid fa-xmark"></i>
  </div>
</div>




<div style="display: none;" class="popup popupHapusPengeluaran">
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <h2>Hapus Pengeluaran</h2>
    <h5>Apakah anda yakin ingin menghapus pengeluaran ?
    </h5>
    <p id="pengeluaran-name" style="color: rgb(185, 185, 185);"></p>
    <div class="grid">
    <form id="delete-form-pengeluaran" action="<?= base_url('keuangan/hapusPengeluaran'); ?>" method="POST" class="form login">
    <div class="form__field">
        <input style="cursor: pointer;" onclick="canceldelete()" type="button" value="Batal">
        <input style="background-color: #dc3545;" type="submit" value="Hapus">
    </div>
</form>

    </div>
  

    
  <i class="popup-close fa-solid fa-xmark"></i>
     
  </div>
</div>







<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="<?= base_url('assets/js/home.js'); ?>"></script>
  <script src="<?= base_url('assets/js/validation.js'); ?>"></script>
  <script src="<?= base_url('assets/js/kalender.js'); ?>"></script>
  <script>

  function edit_pemasukan(button){

    var idPemasukan = button.getAttribute('data-id');
        var namaPenyewa = button.getAttribute('data-nama-penyewa');
        var nominal = button.getAttribute('data-nominal');
        var statusPemasukan = button.getAttribute('data-status');

        // Isi form dengan data yang diambil
        document.getElementById('id_pemasukan').value = idPemasukan;  // Jika ingin mengedit ID pemasukan
        document.getElementById('nama_penyewa').value = namaPenyewa;
        document.getElementById('edit_penyewa').value = namaPenyewa;
        document.getElementById('nominal').value = nominal;





    showPopupEdit()
  }





function hapus_pemasukan(id_pemasukan, nama) {

    document.getElementById('delete-form').action = "<?php echo base_url('keuangan/hapusPemasukan/'); ?>" + id_pemasukan;
    if (document.getElementById('penyewa-name')) {
        document.getElementById('penyewa-name').textContent = nama;
    }
    showPopupHapus();
}

$(document).ready(function () {
    $('select[name="idpenyewa"]').change(function () {
        var id_penyewa = $(this).val();

        if (id_penyewa) {
            $.ajax({
                url: '<?= base_url("keuangan/getIdKamarByPenyewa") ?>',
                type: 'POST',
                data: { id_penyewa: id_penyewa },
                dataType: 'json',
                success: function (response) {
                    if (response) {
                        $('input[name="idkamar"]').val(response); // Set nilai id_kamar
                    } else {
                        alert('Kamar tidak ditemukan untuk penyewa ini.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });
});

$(document).on("click", ".d-list > li", function () {
    // Reset `timeData` untuk menampilkan tanggal yang dipilih
    $(".timeData").html("");
    let year = $(".title-year").text();
    let month = $(".title-month").text();
    let day = $(this).text().padStart(2, '0'); // Tambahkan nol depan jika perlu

    // Konversi bulan ke angka (1-12)
    let monthIndex = monthNames.indexOf(month) + 1;
    monthIndex = monthIndex.toString().padStart(2, '0'); // Tambahkan nol depan jika perlu

    // Update elemen kalender untuk menampilkan tanggal
    $(".timeData").html(`${day} ${month} ${year}`);
    $(this).addClass('toDay').siblings().removeClass('toDay');

    // Format tanggal menjadi YYYY-MM-DD
    let formattedDate = `${year}-${monthIndex}-${day}`;

    // Periksa konteks: Tambah Data atau Edit Data
    if ($(this).closest("form").attr("name") === "formeditpengeluaran") {
        // Jika form untuk edit, update input hiddenTanggalEdit
        document.getElementsByClassName("hiddenTanggalEdit")[0].value = formattedDate;
    } else {
        // Jika form untuk tambah, update input hiddenTanggal
        document.getElementsByClassName("hiddenTanggal")[0].value = formattedDate;
    }
});

// Ambil tanggal hari ini
var today = new Date();
var year = today.getFullYear();
var month = (today.getMonth() + 1).toString().padStart(2, '0'); // Tambahkan nol depan
var day = today.getDate().toString().padStart(2, '0'); // Tambahkan nol depan

// Format YYYY-MM-DD
var defaultDate = `${year}-${month}-${day}`;
document.getElementsByClassName("hiddenTanggal")[0].value = defaultDate;



function edit_pengeluaran(button) {
       const id = button.getAttribute('data-id');
    var deskripsi= button.getAttribute('data-desc');
    var nominal = button.getAttribute('data-nominal');

    document.getElementById('id_pengeluaran').value = id;
    document.getElementById('deskripsipengeluaran').value = deskripsi;
    document.getElementById('nominalpengeluaran').value = nominal;
    var selectedDate = $(button).data("tgl");

    // Split the selected date to year, month, and day
    var dateParts = selectedDate.split("-"); // Assuming format: YYYY-MM-DD
    var selectedYear = dateParts[0];
    var selectedMonth = dateParts[1];
    var selectedDay = dateParts[2];

    // Update the calendar display with the selected date
    $(".timeData").html(`${selectedDay} ${monthNames[selectedMonth - 1]} ${selectedYear}`);

    setCalendarFromDate(selectedDate, "formeditpengeluaran");
  

    // Find the correct day and highlight it in the calendar
    var dayElements = $(".d-list > li");

    // Remove the 'toDay' class from all previous selected days
    dayElements.removeClass('toDay');

    // Loop through all the days to find the selected day
    dayElements.each(function() {
        var calendarDay = $(this).text().padStart(2, '0'); // Add leading zero for single digit days
        if (calendarDay == selectedDay) {
            $(this).addClass('toDay'); // Highlight the selected day
        }
    });

    if (selectedDate) {
        setCalendarFromDate(selectedDate, "formeditpengeluaran");
        $(".timeData").html(formatDateDisplay(selectedDate));
        document.getElementsByClassName("hiddenTanggalEdit")[0].value = selectedDate;
    }



    showEditPengeluaran();
}

function formatDateDisplay(dateValue) {
    const [year, month, day] = dateValue.split("-");
    return `${day} ${monthNames[parseInt(month) - 1]} ${year}`;
}


// Function to update the calendar for the current month and year
function updateCalendar() {
    var today = new Date();
    var year = today.getFullYear();
    var month = today.getMonth() + 1; // Get current month (1-based index)
    var day = today.getDate(); // Get current day
    var monthName = monthNames[month - 1]; // Get the month name

    // Update timeData with today's date
    $(".timeData").html(`${day} ${monthName} ${year}`);


    // Update the calendar days (display all days in the current month)
    printDays(year, month, day);
}

// Function to print the days of the month in the calendar
function printDays(year, month, today) {
    var daysTotal = checkDays(year, month);
    var firstDay = findFirstDay(year, month);
    var dayInf = "";
    var emptyDay = $(".d-list");
    var dayClass;

    // Clear the existing days
    emptyDay.empty();

    // Fill the empty slots before the first day of the month
    for (var i = 1; i <= firstDay; i++) {
        dayInf += "<li></li>";
    }

    // Fill in the days of the month
    for (var day = 1; day <= daysTotal; day++) {
        if ((year == data1.getFullYear() && month < data1.getMonth() + 1) || (day < today && year == data1.getFullYear() && month == data1.getMonth() + 1) || (year < data1.getFullYear())) {
            dayClass = 'class="passDay"';
        } else if (day == today && year == data1.getFullYear() && month == data1.getMonth() + 1) {
            dayClass = 'class="toDay"';
        } else {
            dayClass = 'class="future"';
        }

        dayInf += `<li ${dayClass}><a>${day}</a></li>`;
    }

    // Fill the remaining empty slots after the last day of the month
    var remainingSlots = 42 - firstDay - daysTotal;
    for (var i = 1; i <= remainingSlots; i++) {
        dayInf += "<li></li>";
    }

    emptyDay.html(dayInf);
}

// Call updateCalendar to initialize the calendar on page load
updateCalendar();

var currentYear = new Date().getFullYear();
var currentMonth = new Date().getMonth() + 1;

$(document).on("click", ".prev", function () {
    let currentYear = parseInt($(".title-year").text());
    let currentMonth = monthNames.indexOf($(".title-month").text());

    if (currentMonth === 0) {
        currentMonth = 11; // Kembali ke Desember
        currentYear--; // Kurangi tahun
    } else {
        currentMonth--; // Bulan sebelumnya
    }

    $(".title-year").text(currentYear);
    $(".title-month").text(monthNames[currentMonth]);

    // Update timeInf
    $("#year").text(currentYear);
    $("#month").text(monthNames[currentMonth]);

    // Generate ulang tanggal untuk bulan sebelumnya
    generateDaysForMonth(currentYear, currentMonth);
});

$(document).on("click", ".next", function () {
    let currentYear = parseInt($(".title-year").text());
    let currentMonth = monthNames.indexOf($(".title-month").text());

    if (currentMonth === 11) {
        currentMonth = 0; // Kembali ke Januari
        currentYear++; // Tambah tahun
    } else {
        currentMonth++; // Bulan berikutnya
    }

    $(".title-year").text(currentYear);
    $(".title-month").text(monthNames[currentMonth]);

    // Update timeInf
    $("#year").text(currentYear);
    $("#month").text(monthNames[currentMonth]);

    // Generate ulang tanggal untuk bulan berikutnya
    generateDaysForMonth(currentYear, currentMonth);
});




function setCalendarFromDate(dateValue, formName) {
    // Parse nilai tanggal (format: YYYY-MM-DD)
    let [year, month, day] = dateValue.split("-");
    month = parseInt(month) - 1; // Bulan dalam array mulai dari 0

    // Setel tahun dan bulan di kalender
    $(".title-year").text(year);
    $(".title-month").text(monthNames[month]);

    // Render ulang daftar tanggal
    generateDaysForMonth(year, month);

    // Tandai tanggal yang sesuai
    $(`form[name='${formName}'] .d-list > li`)
        .removeClass("toDay") // Hapus highlight dari tanggal sebelumnya
        .filter(function () {
            return $(this).text().padStart(2, '0') === day;
        })
        .addClass("toDay"); // Tambahkan highlight ke tanggal yang dipilih
}



function generateDaysForMonth(year, month) {
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const $dList = $(".d-list");
    $dList.empty();

    for (let i = 1; i <= daysInMonth; i++) {
        $dList.append(`<li>${i.toString().padStart(2, '0')}</li>`);
    }
}



function hapus_pengeluaran(id_pengeluaran, nama) {

document.getElementById('delete-form-pengeluaran').action = "<?php echo base_url('keuangan/hapusPengeluaran/'); ?>" + id_pengeluaran;
if (document.getElementById('pengeluaran-name')) {
    document.getElementById('pengeluaran-name').textContent = nama;
}
showPopupHapusPengeluaran();
}

document.getElementById('edit_penyewa').disabled = true;
  </script>

</body>
</html>

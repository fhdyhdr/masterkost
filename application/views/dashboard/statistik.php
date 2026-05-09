<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Kost Master</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/home.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/statistik.css'); ?>">
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
        <a class="header-link" href="<?= base_url('home'); ?>"><i class="fa-regular fa-rectangle-list"></i>
          Dashboard
        </a>
        <a class="header-link"  href="<?= base_url('penyewa'); ?>" >
        <i class="fa-regular fa-address-card"></i> Penyewa
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
        <a class="header-link active" href="#" onclick="event.preventDefault();" ><i class="fa-regular fa-chart-bar"></i>
          Statistik
        </a>

        <div class="user-info">
        
          <div class="user-name"><?= $this->session->userdata('username'); ?></div>
          <svg class="profile" viewBox="-42 0 512 512" fill="currentColor">
            <path d="M210.4 246.6c33.8 0 63.2-12.1 87.1-36.1 24-24 36.2-53.3 36.2-87.2 0-33.9-12.2-63.2-36.2-87.2-24-24-53.3-36.1-87.1-36.1-34 0-63.3 12.2-87.2 36.1S87 89.4 87 123.3c0 33.9 12.2 63.2 36.2 87.2 24 24 53.3 36.1 87.2 36.1zm-66-189.3a89.1 89.1 0 0166-27.3c26 0 47.5 9 66 27.3a89.2 89.2 0 0127.3 66c0 26-9 47.6-27.4 66a89.1 89.1 0 01-66 27.3c-26 0-47.5-9-66-27.3a89.1 89.1 0 01-27.3-66c0-26 9-47.6 27.4-66zm0 0M426.1 393.7a304.6 304.6 0 00-12-64.9 160.7 160.7 0 00-13.5-30.3c-5.7-10.2-12.5-19-20.1-26.3a88.9 88.9 0 00-29-18.2 100.1 100.1 0 00-37-6.7c-5.2 0-10.2 2.2-20 8.5-6 4-13 8.5-20.9 13.5-6.7 4.3-15.8 8.3-27 11.9a107.3 107.3 0 01-66 0 119.3 119.3 0 01-27-12l-21-13.4c-9.7-6.3-14.8-8.5-20-8.5a100 100 0 00-37 6.7 88.8 88.8 0 00-29 18.2 114.4 114.4 0 00-20.1 26.3 161 161 0 00-13.4 30.3A302.5 302.5 0 001 393.7c-.7 9.8-1 20-1 30.2 0 26.8 8.5 48.4 25.3 64.4C41.8 504 63.6 512 90.3 512h246.5c26.7 0 48.6-8 65.1-23.7 16.8-16 25.3-37.6 25.3-64.4a437 437 0 00-1-30.2zm-44.9 72.8c-11 10.4-25.4 15.5-44.4 15.5H90.3c-19 0-33.4-5-44.4-15.5C35.2 456.3 30 442.4 30 424c0-9.5.3-19 1-28.1A272.9 272.9 0 0141.7 338a131 131 0 0110.9-24.7A84.8 84.8 0 0167.4 294a59 59 0 0119.3-12 69 69 0 0123.6-4.5c1 .5 3 1.6 6 3.6l21 13.6c9 5.6 20.4 10.7 34 15.1a137.3 137.3 0 0084.5 0c13.7-4.4 25.1-9.5 34-15.1a2721 2721 0 0027-17.2 69 69 0 0123.7 4.5 59 59 0 0119.2 12 84.5 84.5 0 0114.9 19.4c4.5 8 8.2 16.3 10.8 24.7a275.2 275.2 0 0110.8 57.8c.6 9 1 18.5 1 28.1 0 18.5-5.3 32.4-16 42.6zm0 0" />
          </svg>
         
        </div>
      </div>
      <main>

      <div style="margin-top: 30px;" class="container_select filtermobile">
  
            <div class="dropdown">
                <div class="select">
                    <span>Filter Statistik</span>
                    <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" id="filter-statistik" name="filter-statistik" value="Tahun 2024">
                <ul class="dropdown-menu">
                    <li data-value="1"  id="current-year" ></li>
                    <li data-value="2">1 Tahun Terakhir</li>
                    <li data-value="3">2 Tahun Terakhir</li>
                    <li data-value="4">3 Tahun Terakhir</li>
                </ul>
            </div>


            </div>
        <header>

        

        <section role="search">
              
            </section>





        <section style="margin-top: 10px;" role="application">
        <?php if ($this->session->userdata('subscription') === 'pro' || $this->session->userdata('subscription') === 'trial' ): ?>
        <button style="cursor: pointer;" id="downloadPDF">Download PDF Report</button>
        <button   style="cursor: pointer;" id="downloadExcel">Download Excel Report</button>
        <?php endif; ?>
        <div class="container_select ">
  
  <div class="dropdown">
    <div class="select">
        <span>Filter Statistik</span>
        <i class="fa fa-chevron-left"></i>
    </div>
    <input type="hidden" id="filter-statistik" name="filter-statistik" value="Tahun 2024">
    <ul class="dropdown-menu">
        <li data-value="1"  id="current-year" ></li>
        <li data-value="2">1 Tahun Terakhir</li>
        <li data-value="3">2 Tahun Terakhir</li>
        <li data-value="4">3 Tahun Terakhir</li>
    </ul>
</div>


</div>




        </section>

           
        </header>



        <h1 style="font-size: 30px;">Statistik Keuangan</h1>
        <div class="charts-wrapper">
            <section role="credit-card">
                <div class="top">
                    <img src="https://ozcanzaferayan.github.io/financial-crm/img/mastercard.svg" />
                    <img src="https://ozcanzaferayan.github.io/financial-crm/img/apple_pay.svg" class="apple_pay" />
                </div>
                <div class="ccNumber">
                <?php if (isset($total_pemasukan) && isset($total_pemasukan->total_pemasukan)): ?>
                    <span>Rp <?= number_format($total_pemasukan->total_pemasukan, 0, ',', '.'); ?></span>
                <?php else: ?>
                    <span>Data pemasukan tidak tersedia</span>
                <?php endif; ?>

                </div>
                <div class="ccBottom">
                    <div class="ccValidThru">
                        <label>Tahun</label>
                        <span id="currentYear"></span>
                    </div>
                    <div class="ccCardHolder">
                        <label>Pemilik</label>
                        <span><?= $this->session->userdata('username'); ?></span>
                    </div>
                </div>
            </section>
            <section role="chart" class="exchange-rates">
                <h3 class="title">Pemasukan</h3>
                <canvas id="exchangeRates"></canvas>
            </section>
            <section role="chart" class="last-costs">
                <h3 class="title">Pemasukan dan Pengeluaran</h3>
                <canvas id="last_costs"></canvas>

            </section>
            <section role="chart" class="efficiency">
                <h3 class="title">Total Keuangan</h3>
                <canvas id="efficiency"></canvas>
            </section>
        </div>
    </main>

    </div>





  </div>






  <!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js'></script>
  <script src='https://ozcanzaferayan.github.io/financial-crm/vendor/chartjs/Chart.roundedBarCharts.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>

  <script src="<?= base_url('assets/js/home.js'); ?>"></script>

  <script>
// Ambil data dari PHP (chartData)
var chartData = <?php echo json_encode($chartData); ?>;
var data = {
    labels: <?= json_encode($chartData['labels']); ?>,
    datasets: [{
        backgroundColor: "rgba(0,0,0,0)",
        borderColor: "rgba(91,37,245, 1)",
        borderWidth: 4.5,
        label: 'Pemasukan',
        data: <?= json_encode($chartData['data']); ?>,
    }]
};

var maxValue = Math.max(...data.datasets[0].data);
var step = Math.ceil(maxValue / 5); // Membagi rentang data ke 10 interval

var options = {
    maintainAspectRatio: false,
    layout: {
        padding: {
            top: 20
        }
    },
    legend: {
        position: 'bottom',
        labels: {
            fontColor: "rgba(0,0,0, 0.5)",
            boxWidth: 20,
            padding: 10
        }
    },
    scales: {
        yAxes: [{
            gridLines: {
                display: true,
                color: "rgba(91,37,245, 0.03)"
            },
            ticks: {
                stepSize: step, // Step otomatis berdasarkan data
                max: Math.ceil(maxValue * 1.2),
                beginAtZero: true,
                callback: function(value, index, values) {
                    // Format angka ke Rupiah
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0 // Tidak ada angka desimal
                    }).format(value);
                }
            }
        }],
        xAxes: [{}]
    }
};




var ctx = document.getElementById('exchangeRates').getContext('2d');
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});



var data = {
    labels: chartData.labels, // Bulan
    datasets: [
        {
            label: 'Pengeluaran', // Pengeluaran
            backgroundColor: "rgba(91,37,245, 0.2)",
            data: chartData.pengeluaran, // Data pengeluaran dari PHP
        },
        {
            label: 'Pemasukan', // Pemasukan
            backgroundColor: "rgba(91,37,245, 1)",
            data: chartData.data, // Data pemasukan dari PHP
        }
    ]
};

var options = {
    cornerRadius: 0,
    maintainAspectRatio: false,
    legend: {
        position: 'bottom',
        labels: {
            fontColor: "rgba(0,0,0, 0.5)",
            boxWidth: 20,
            padding: 10
        }
    },
    scales: {
        yAxes: [{
            gridLines: {
                display: true,
                color: "rgba(91,37,245, 0.03)"
            },
            ticks: {
                maxTicksLimit: 5,
                callback: function(value, index, values) {
                    // Format angka ke Rupiah
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(value);
                }
            }
        }],
        xAxes: [{}]
    }
};

// Render Chart.js
var ctx = document.getElementById('last_costs').getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});

var summaryData = <?php echo json_encode($summaryData); ?>;
var data = {
    labels: ["Pemasukan", "Pengeluaran"],
    datasets: [{
        label: "Population (millions)",
        backgroundColor: ["rgba(91,37,245, 1)", "#dad7e9"],
        data: [summaryData.pemasukan, summaryData.pengeluaran] 
    }]
};

var options = {
    maintainAspectRatio: false,
    legend: {
        position: 'bottom',
        labels: {
            fontColor: "rgba(0,0,0, 0.5)",
            boxWidth: 20,
            padding: 10
        }
    },
};


var ctx = document.getElementById('efficiency').getContext('2d');
var myLineChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options
});

/*Dropdown Menu*/
$('.dropdown').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').slideToggle(300);
    });
    $('.dropdown').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropdown-menu').slideUp(300);
    });
    $('.dropdown .dropdown-menu li').click(function () {
        $(this).parents('.dropdown').find('span').text($(this).text());
        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
    });

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.dropdown-menu li').forEach(function(item) {
        item.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.querySelector('.select span').innerText = this.innerText;

            // Kirim filter melalui FormData
            const formData = new FormData();
            formData.append('filter', value);

            fetch('statistik/updateFilter', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    location.reload();
                } else {
                    console.error('Error:', response.statusText);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});

const currentYear = new Date().getFullYear();

// Menambahkan tahun ke elemen dengan ID "current-year"
document.getElementById('current-year').textContent = `Tahun ${currentYear}`;




document.getElementById('downloadPDF').addEventListener('click', function() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Format numbers to Rupiah
    const formatRupiah = (amount) => {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(amount);
    };

    // Get current year
    const currentYear = new Date().getFullYear();

    // Get the year based on tipefilter
    let yearToDisplay = currentYear; // Default to current year
    if (chartData.tipefilter == 2) {
        yearToDisplay = currentYear - 1; // 1 year ago
    } else if (chartData.tipefilter == 3) {
        yearToDisplay = currentYear - 2; // 2 years ago
    } else if (chartData.tipefilter == 4) {
        yearToDisplay = currentYear - 3; // 3 years ago
    }

    // Get tipefilter value
    var tipefilter = chartData.tipefilter;

    doc.setFontSize(18);
    doc.text('Financial Report', 20, 20);
    doc.setFontSize(12);
    
    // Calculate the position for the right side of the page
    const pageWidth = doc.internal.pageSize.width;
    const textWidth = doc.getTextWidth('Tahun : ' + yearToDisplay); // Get the width of the text
    const marginRight = 20; // Set margin from right edge of the page
    const xPosition = pageWidth - textWidth - marginRight;

    // Display the year on the right side
    doc.text('Tahun : ' + yearToDisplay, xPosition, 20); 

    // Add chart data (This could be dynamically generated from the chartData or summaryData)
    doc.setFontSize(12);
    doc.text('Total Pemasukan: ' + formatRupiah(summaryData.pemasukan), 20, 50);
    doc.text('Total Pengeluaran: ' + formatRupiah(summaryData.pengeluaran), 20, 40);

    // Function to add chart image with proper scaling and aspect ratio
    function addCanvasImageToPDF(canvas, x, y, maxWidth, maxHeight) {
        var imgData = canvas.toDataURL('image/png');
        
        // Get the original dimensions of the canvas
        var imgWidth = canvas.width;
        var imgHeight = canvas.height;

        // Calculate scaling factor to fit the image within the max width and height
        var scaleFactor = Math.min(maxWidth / imgWidth, maxHeight / imgHeight);

        // Calculate new dimensions based on the scale factor
        var newWidth = imgWidth * scaleFactor;
        var newHeight = imgHeight * scaleFactor;

        // Add image to PDF
        doc.addImage(imgData, 'PNG', x, y, newWidth, newHeight);
    }

    // Get canvas elements
    var exchangeRatesCanvas = document.getElementById('exchangeRates');
    var lastCostsCanvas = document.getElementById('last_costs');

    // Maximum width and height for images to fit within the page
    var maxWidth = 180; // Adjust based on desired image size
    var maxHeight = 100; // Adjust based on desired image size

    // Add the first image (exchangeRatesCanvas) with a slightly lower position
    var imageYPosition = 80; // Adjust the Y position to lower the first image
    addCanvasImageToPDF(exchangeRatesCanvas, 20, imageYPosition, maxWidth, maxHeight);

    // Add the second image (lastCostsCanvas)
    addCanvasImageToPDF(lastCostsCanvas, 20, 160, maxWidth, maxHeight);

    // Save PDF
    doc.save('Financial_Report.pdf');
});





document.getElementById('downloadExcel').addEventListener('click', function() {
            var wb = XLSX.utils.book_new();
            wb.Props = {
                Title: "Financial Report",
                Subject: "Financial Report",
                Author: "Your Name",
                CreatedDate: new Date()
            };

            // Prepare data for the Excel sheet
            var worksheetData = [
                ["Month", "Pemasukan", "Pengeluaran", "Total"]  // Header row
            ];

            // Loop through the months and data to fill the rows
            for (var i = 0; i < chartData.labels.length; i++) {
                var month = chartData.labels[i];  // e.g., January, February, etc.
                var pemasukan = chartData.data[i] || 0;  // Pemasukan data for this month
                var pengeluaran = chartData.pengeluaran[i] || 0;  // Pengeluaran data for this month
                var total = pemasukan - pengeluaran;  // Total (Pemasukan - Pengeluaran)

                // Add the data for this month
                worksheetData.push([month, pemasukan, pengeluaran, total]);
            }

            // Add the data to the Excel sheet
            var ws = XLSX.utils.aoa_to_sheet(worksheetData);
            XLSX.utils.book_append_sheet(wb, ws, "Monthly Financial Data");

            // Generate and download the Excel file
            XLSX.writeFile(wb, "Monthly_Financial_Report.xlsx");
        });


   

        // Masukkan tahun ke dalam elemen <span> dengan id 'currentYear'
        document.getElementById('currentYear').textContent = currentYear;

</script>
</body>

</html>
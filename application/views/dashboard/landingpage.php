<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kost Master</title>
</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Document</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/landingpage.css'); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    </head>

    <body id="top">
        <header>
            <div class="container">
                <a href="#" class="logo"><img src="<?php echo base_url("assets/image/icons/logo.jpeg") ?>" alt=""></a>
                <?php if ($this->session->userdata('username')): ?>
                    <?php if ($this->session->userdata('subscription') === 'standart'): ?>
                        <button class="btn btn-primary btnmobile" onclick="window.location.href='#premium'">
                            Dashboard
                        </button>
                    <?php else: ?>
                        <button class="btn btn-primary btnmobile" onclick="window.location.href='<?= base_url('dashboard'); ?>'">
                            Dashboard
                        </button>
                    <?php endif; ?>
                <?php else: ?>
                    <button class="btn btn-primary btnmobile" onclick="window.location.href='<?= base_url('login/login'); ?>'">
                        Login
                    </button>
                <?php endif; ?>
                <div class="navbar-wrapper">
                    <button class="navbar-menu-btn" data-navbar-toggle-btn><ion-icon name="menu-outline"></ion-icon></button>

                    <nav class="navbar " data-navbar>
                        <ul class="navbar-list">
                            <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>

                            <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
                            <?php if ($this->session->userdata('username')): ?>
                                <li class="nav-item logitem"><a href="#" class="nav-link"><?php echo $this->session->userdata('username') ?></a></li>
                                <li class="nav-item logitem"><a href="<?= base_url('login/login/logout'); ?>" class="nav-link">Logout</a></li>
                            <?php endif; ?>
                        </ul>

                        <?php if ($this->session->userdata('username')): ?>
                            <button class="btn btn-primary" onclick="window.location.href='<?= base_url(''); ?>'">
                                <?php echo $this->session->userdata('username') ?>
                            </button>
                            <?php if ($this->session->userdata('subscription') === 'standart'): ?>
                                <button style="margin-left:15px;" class="btn btn-primary" onclick="window.location.href='#premium'">
                                    Dashboard
                                </button>

                            <?php else: ?>
                                <button style="margin-left:15px;" class="btn btn-primary" onclick="window.location.href='<?= base_url('dashboard'); ?>'">
                                    Dashboard
                                </button>
                            <?php endif; ?>
                        <?php else: ?>
                            <button style="margin-right:20px;" class="btn btn-primary" onclick="window.location.href='<?= base_url('login/register'); ?>'">
                                Register
                            </button>
                            <button class="btn btn-primary" onclick="window.location.href='<?= base_url('login/login'); ?>'">
                                Login
                            </button>
                        <?php endif; ?>


                    </nav>
                </div>
            </div>
        </header>

        <main>
            <article>
                <section class="intro">
                    <h1 class="intro__title">
                        Master Kos
                    </h1>
                    <p class="intro__subtitle">
                        Kelola kost Anda dengan mudah dan terorganisir melalui satu platform yang dirancang khusus untuk kebutuhan pemilik kost. Pantau penyewa, atur pembayaran, dan tingkatkan efisiensi pengelolaan properti Anda, semuanya dalam genggaman Anda.

                    </p>


                    <a href="<?= base_url('dashboard'); ?>" class="button">Get Started</a>
                    <img class="intro__illustration" src="<?= base_url('assets/image/dashboard.png'); ?>" alt="" />
                </section>

                <section class="about" id="about">
                    <div class="container">
                        <div class="about-top">
                            <h2 style="color: black;" class="h2 section-title">Yang Kost Master Lakukan</h2>

                            <p style="color: black;" class="section-text">Kami menyediakan solusi lengkap bagi pemilik kost untuk mengelola properti mereka dengan lebih efisien, dari pengelolaan penyewa hingga pemantauan kondisi kost. Dengan sistem yang terintegrasi, kami membantu memastikan segala proses berjalan lancar,</p>

                            <ul class="about-list">
                                <li>
                                    <div class="about-card">
                                        <div class="card-icon"><ion-icon name="briefcase-outline"></ion-icon></div>

                                        <h3 class="h3 card-title">Pengelolaan yang Efisien</h3>

                                        <p class="card-text">Mengelola informasi penyewa dan kamar dengan mudah. Mulai dari data pribadi, jadwal pembayaran, hingga durasi kontrak</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="about-card">
                                        <div class="card-icon"><ion-icon name="chatbubbles-outline"></ion-icon></div>

                                        <h3 class="h3 card-title">Laporan Keuangan</h3>

                                        <p class="card-text">Memungkinkan pemilik kost untuk memantau pendapatan dan pengeluaran kost dengan mudah.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="about-card">
                                        <div class="card-icon"><ion-icon name="rocket-outline"></ion-icon></div>

                                        <h3 class="h3 card-title">Fleksibilitas Pengaturan Kontrak</h3>

                                        <p class="card-text">Membuat dan mengelola kontrak penyewaan secara fleksibel, termasuk durasi sewa, biaya sewa, dan persyaratan lainnya.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </section>

                <section class="features" id="features">
                    <div class="container">
                        <h2 style="margin: 0 auto;" class="h2 section-title">Fitur Unggulan Kost Master</h2>

                        <p style="margin: 0 auto;" class="section-text">Dengan berbagai fitur unggulan yang terintegrasi, kami membantu pemilik kost mengelola setiap aspek operasional kost secara lebih praktis dan terorganisir</p>

                        <ul style="margin-top: 150px;" class="features-list">
                            <li class="features-item">
                                <figure class="features-item-banner"><img src="<?= base_url('assets/image/statistik.jpg'); ?>" alt="feature banner"></figure>

                                <div class="feature-item-content">
                                    <h3 class="h2 item-title">Statistik Pendapatan dan Pengeluaran</h3>

                                    <p class="item-text">Memungkinkan pemilik kost untuk memantau statistik pendapatan dan pengeluaran secara real-time, memberikan gambaran yang jelas dan terperinci tentang kinerja keuangan kost, sehingga memudahkan dalam pengambilan keputusan.</p>
                                </div>
                            </li>

                            <li class="features-item">
                                <figure class="features-item-banner"><img src="<?= base_url('assets/image/report.jpg'); ?>" alt="feature banner"></figure>

                                <div class="feature-item-content">
                                    <h3 class="h2 item-title">Ekspor Laporan Keuangan dalam Format PDF atau Excel</h3>

                                    <p class="item-text">Mempermudah pemilik kost untuk mengekspor laporan keuangan dalam format PDF atau Excel, memungkinkan laporan yang lebih mudah dibaca, dibagikan, atau dianalisis lebih lanjut. Fitur ini sangat berguna untuk laporan tahunan</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <?php if (
                    $this->session->userdata('subscription') === 'standart' ||
                    $this->session->userdata('subscription') === 'trial' ||
                    !$this->session->userdata('id_admin')
                ): ?>

                    <section id="premium" class="cta">


                        <div style="margin-bottom: 100px;" class="pricing-table-container">


                            <div class="pricing-table">
                                <div class="table">
                                    <div class="content">
                                        <h3>Basic</h3>

                                        <div class="price-container">
                                            <span class="price basic-price">Rp 25.000</span>
                                            <span class="plan-duration">/ bulan</span>
                                        </div>



                                        <ul class="features">
                                            <li>Penyewa Hingga 50 penyewa</li>
                                            <li>Kamar Hingga 20 kamar</li>
                                            <li>Fasilitas Kamar</li>
                                            <li>Booking Kamar</li>
                                            <li>Atur Keuangan</li>
                                            <li>Analisis Keuangan</li>
                                        </ul>

                                        <a href="<?= base_url('payment/choosePlan/basic'); ?>" class="btn">Pilih Paket</a>


                                    </div>


                                </div>

                                <div class="table best-value">

                                    <span class="value">Best Value</span>

                                    <div class="content">
                                        <h3>Bisnis</h3>

                                        <div class="price-container">
                                            <span class="price professional-price">Rp 120.000</span>
                                            <span class="plan-duration">/ bulan</span>
                                        </div>


                                        <ul class="features">
                                            <li>Data Penyewa Tanpa Batas</li>
                                            <li>Data Kamar Tanpa Batas</li>
                                            <li>Fasilitas Kamar</li>
                                            <li>Booking Kamar</li>
                                            <li>Atur Keuangan</li>
                                            <li>Analisis Keuangan</li>
                                            <li>Laporan Keuangan dalam Format PDF</li>
                                            <li>Laporan Keuangan dalam Format Excel</li>
                                        </ul>

                                        <a href="<?= base_url('payment/choosePlan/pro'); ?>" class="btn">Pilih Paket</a>
                                    </div>


                                </div>

                                <div class="table">
                                    <div class="content">
                                        <h3>Pilihan Terbaik</h3>

                                        <div class="price-container">
                                            <span class="price business-price">Rp 75.000</span>
                                            <span class="plan-duration">/ bulan</span>
                                        </div>



                                        <ul class="features">
                                            <li>Penyewa Hingga 125 penyewa</li>
                                            <li>Kamar Hingga 70 kamar</li>
                                            <li>Fasilitas Kamar</li>
                                            <li>Booking Kamar</li>
                                            <li>Atur Keuangan</li>
                                            <li>Analisis Keuangan</li>
                                        </ul>

                                        <a href="<?= base_url('payment/choosePlan/middle'); ?>" class="btn">Pilih Paket</a>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <?php if ($this->session->userdata('trial') === '0' ||  !$this->session->userdata('id_admin')): ?>

                            <div class="container">
                                <div class="cta-card">
                                    <h3 class="cta-title">Coba 7 Hari Gratis</h3>

                                    <p class="cta-text">Coba 7 hari gratis dan nikmati semua fitur platform manajemen kost kami tanpa komitmen. Mulai sekarang dan rasakan kemudahan mengelola kost Anda!</p>



                                    <button onclick="window.location.href='<?= base_url('confirmation'); ?>'" class="btn btn-secondary">Try it Now</button>


                                </div>
                            </div>

                        <?php endif; ?>

                    </section>









                <?php endif; ?>


            </article>
        </main>

        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="footer-brand">
                        <a href="#" class="logo"><img src="<?php echo base_url("assets/image/icons/icons.png") ?>" alt=""></a>

                        <p class="footer-text">Follow us on</p>

                        <ul class="social-list">
                            <li><a href="#" class="social-link"><ion-icon name="logo-github"></ion-icon></a></li>
                            <li><a href="#" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            <li><a href="#" class="social-link"><ion-icon name="logo-youtube"></ion-icon></a></li>
                            <li><a href="#" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        </ul>
                    </div>

                    <div class="footer-link-box">
                        <ul class="footer-link-list">
                            <li>
                                <h3 class="h4 link-title">Company</h3>
                            </li>
                            <li><a href="#about" class="footer-link">About Us</a></li>
                            <li><a href="#features" class="footer-link">Features</a></li>
                            <li><a href="#premium" class="footer-link">Pricing</a></li>
                        </ul>

                        <ul class="footer-link-list">
                            <li>
                                <h3 class="h4 link-title">Products</h3>
                            </li>
                            <li><a href="#" class="footer-link">Blog</a></li>
                            <li><a href="#" class="footer-link">Help Center</a></li>
                            <li><a href="#" class="footer-link">Contact</a></li>
                        </ul>

                        <ul class="footer-link-list">
                            <li>
                                <h3 class="h4 link-title">Resources</h3>
                            </li>
                            <li><a href="#" class="footer-link">FAQ's</a></li>
                            <li><a href="#" class="footer-link">Testimonial</a></li>
                            <li><a href="#" class="footer-link">Terms & Conditions</a></li>
                        </ul>

                        <ul class="footer-link-list">
                            <li>
                                <h3 class="h4 link-title">Relevant</h3>
                            </li>
                            <li><a href="#" class="footer-link">Why</a></li>
                            <li><a href="#" class="footer-link">Products</a></li>
                            <li><a href="#" class="footer-link">Customers</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">&copy; 2024 ULTRA CODE All rights reserved</p>
            </div>
        </footer>

        <a href="#top" class="go-top active" data-go-top><ion-icon name="chevron-up-outline"></ion-icon></a>

        <script src="main.js"></script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

    </html>

    <script src="<?= base_url('assets/js/landingpage.js'); ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>CodePen - Elegant Login Form with ParticlesJS (with form validation and show/hide password)</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
<link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">

</head>
<body>
<!-- partial:index.partial.html -->
<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msglog">
    </span>
    <span class="success animated tada" id="msg-suc">
    </span>
    <span class="success animated tada" id="msg-sucreg">
    </span>
    <form name="form1" class="box"  action="<?= base_url('login/login/process_login'); ?>" method="POST" onsubmit="return login()">
      <h1 style="margin-bottom: 50px;">Login Master Kost</h1>
      <h5 style="color:#F1F0E8;">Login to your account.</h5>
      <input type="text" name="email" placeholder="Email / Username" autocomplete="off" value="<?= set_value('email'); ?>">
      <i class="typcn typcn-eye" id="eye"></i>
      <input type="password" name="password" placeholder="Password" id="pwd" autocomplete="off">

      <a href="<?= base_url('login/forget'); ?>" class="forgetpass">Lupa Password?</a>
      <input type="submit" value="Masuk" class="btn1">
    </form>
    <span class="dnthave">Tidak Punya Akun ? <a href="<?= base_url('login/register'); ?>" class="signuptitle">Daftar</a></span>
  </div> 
</div>


<?php if($this->session->flashdata('errorLog')): ?>
    <script>
        // Mengambil elemen 'msg' dan menampilkan pesan error
        var msg = document.getElementById('msglog');
        msg.style.display = 'block';
        msg.innerHTML = "<?= $this->session->flashdata('errorLog'); ?>"; // Menampilkan pesan dari flashdata
    </script>
<?php endif; ?>

<?php if($this->session->flashdata('successReg')): ?>
    <script>
        // Mengambil elemen 'msg' dan menampilkan pesan error
        var msg = document.getElementById('msg-sucreg');
        msg.style.display = 'block';
        msg.innerHTML = "<?= $this->session->flashdata('successReg'); ?>"; // Menampilkan pesan dari flashdata
    </script>
<?php endif; ?>



<script src="<?= base_url('assets/js/login.js'); ?>"></script>

</body>
</html>

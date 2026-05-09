<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>CodePen - Elegant Login Form with ParticlesJS (with form validation and show/hide password)</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
<link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">

<style>
    .container{
      height: 560px;
      top: 50px;
      }
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div style="top: 100px" class="container">
    <span class="error animated tada" id="msgreg"></span>
    <form name="form1" method="POST" class="box" action="<?= base_url('login/register/create'); ?>" onsubmit="return register()">


      <h1 style="margin-bottom: 50px;">Daftar Master Kost</h1>
      <h5>Sign up to your account.</h5>
      <input type="text" name="username" placeholder="Username" value="<?= isset($this->session->flashdata('form_data')['username']) ? $this->session->flashdata('form_data')['username'] : ''; ?>" autocomplete="off">
      <input type="password" name="password" placeholder="Passsword" id="pwd" value="<?= isset($this->session->flashdata('form_data')['password']) ? $this->session->flashdata('form_data')['password'] : ''; ?>" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        
        <input type="text" name="email" placeholder="Email" value="<?= isset($this->session->flashdata('form_data')['email']) ? $this->session->flashdata('form_data')['email'] : ''; ?>" autocomplete="off">

        <input type="submit" value="Daftar" class="btn1">
      </form>
        <span class="dnthave">Sudah Punya Akun ? <a href="<?= base_url('login/login'); ?>" class="signuptitle" > Masuk</a</span>
  </div> 
     
</div>
<?php if($this->session->flashdata('errorReg')): ?>
    <script>
        // Mengambil elemen 'msg' dan menampilkan pesan error
        var msg = document.getElementById('msgreg');
        msg.style.display = 'block';
        msg.innerHTML = "<?= $this->session->flashdata('errorReg'); ?>"; // Menampilkan pesan dari flashdata
    </script>
<?php endif; ?>

  <script src="<?= base_url('assets/js/login.js'); ?>"></script>

</body>
</html>

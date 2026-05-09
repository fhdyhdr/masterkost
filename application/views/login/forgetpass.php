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
    <span class="error animated tada" id="msgforgot">
    </span>
    <form name="form1" class="box" action="<?= base_url('login/forget/process_forgot'); ?>" method="POST" onsubmit="return forget()">
    <h4>Forget <span>Password</span></h4>
    <h5>Masukkan email untuk mengubah password</h5>
    <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" value="<?= set_value('email'); ?>" required>
    <input type="submit" value="Send" class="btn1">
</form>

  </div> 
</div>


<?php if($this->session->flashdata('errorForgot')): ?>
    <script>
        // Mengambil elemen 'msg' dan menampilkan pesan error
        var msgForgot = document.getElementById('msgforgot');
        msgForgot.style.display = 'block';
        msgForgot.innerHTML = "<?= $this->session->flashdata('errorForgot'); ?>"; // Menampilkan pesan dari flashdata
    </script>
<?php endif; ?>




<script src="<?= base_url('assets/js/login.js'); ?>"></script>


<script>
  // Saat form submit, simpan email di sessionStorage
document.querySelector('form[name="form1"]').addEventListener('submit', function(e) {
    let email = document.getElementById('email').value; // Ambil email dari input
    sessionStorage.setItem('forgotEmail', email); // Simpan email di sessionStorage
});

</script>

</body>
</html>

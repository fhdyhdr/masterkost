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
    <span class="error animated tada" id="msgreset"></span>

    <form name="form1" class="box" action="<?= base_url('login/forget/resetpass'); ?>" method="POST" onsubmit="return resetpass()">
      <h4>Reset <span>Password</span></h4>
      <h5>Ubah password dengan yang baru</h5>
      <input type="password" name="password1" placeholder="Password" id="pwd1" autocomplete="off">
      <i class="typcn typcn-eye" id="eye"></i>
      <input type="password" name="password2" placeholder="Konfirmasi Password" id="pwd" autocomplete="off">
      <input type="submit" value="Reset Password" class="btn1">
    </form>
  </div>
</div>

<?php if($this->session->flashdata('errorReset')): ?>
    <script>
        var msg = document.getElementById('msgreset');
        msg.style.display = 'block';
        msg.innerHTML = "<?= $this->session->flashdata('errorReset'); ?>"; // Menampilkan pesan dari flashdata
    </script>
<?php endif; ?>





<script src="<?= base_url('assets/js/login.js'); ?>"></script>

<script>
  // Ketika form di-submit
  document.querySelector('form[name="form1"]').addEventListener('submit', function(e) {
    // Ambil email dari sessionStorage
    let email = sessionStorage.getItem('forgotEmail');
    
    // Jika email ada di sessionStorage, masukkan ke dalam form sebagai input hidden
    if (email) {
      let hiddenEmailInput = document.createElement('input');
      hiddenEmailInput.type = 'hidden';
      hiddenEmailInput.name = 'email';
      hiddenEmailInput.value = email;

      // Append input hidden ke dalam form
      this.appendChild(hiddenEmailInput);
    }
  });
</script>




</body>
</html>

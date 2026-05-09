<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Trial</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/confirmation.css'); ?>">

</head>
<body>
<article>
  <h1>
    Trial 7 hari
  </h1>
  <main>Anda akan mendapatkan langganan 7 hari</main>
  <blockquote>
    Langganan trial 7 hari Anda kini aktif. Setelah 7 hari, masa langganan akan berakhir dan Anda perlu memilih paket langganan untuk melanjutkan akses. Jangan lewatkan kesempatan untuk menikmati fitur premium sebelum masa trial berakhir! Kami akan mengingatkan Anda beberapa hari sebelum trial selesai
    <br />
  </blockquote>
  <button style="cursor: pointer;" id="trial">Lanjutkan</button>

</article>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script>
$('#trial').click(function() {
    $.ajax({
        url: '<?= base_url('confirmation/update_subscription'); ?>',  // Ganti dengan URL controller dan metode yang sesuai
        method: 'POST',
        data: { subscription: 'trial' },
        success: function(response) {
            var res = JSON.parse(response);
            if (res.redirect) {
                // Redirect ke halaman yang diberikan oleh server
                window.location.href = res.redirect;
            } else {
                alert('Terjadi kesalahan');
            }
        },
        error: function() {
            alert('Terjadi kesalahan pada server');
        }
    });
});


</script>
  
</body>
</html>

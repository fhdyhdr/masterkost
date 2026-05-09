<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>CodePen - Bootstrap 5 verify OTP with validation form inputs</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="<?= base_url('assets/css/otp.css'); ?>">
</head>
<body>
<div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
        <div class="card p-2 text-center">
            <h6>Masukkan kode dari Email untuk reset password<br></h6>
            <span class="successOtp animated tada" id="msg-suc"></span>
            <span class="errorOtp animated tada" id="msg"></span>
            <form class="formOtp" method="POST" action="<?= base_url('login/forget/verify_otp'); ?>" onsubmit="combineOTP()">
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                    <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" required />
                    <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" required />
                    <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" required />
                    <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" required />
                    <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" required />
                    <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" required />
                </div>
                <input type="hidden" id="otp_combined" name="otp" />
                <div class="mt-4">
                    <button type="submit" class="btn btn-danger px-4">Kirim</button>
                </div>
            </form>

            <div class="mt-4">
                <p id="countdown" style="color: #fff; font-size:12px" class="mt-2">Resend email in 30 seconds</p>
                <span id="resend-text" class="text-decoration-underline" style="color: gray; cursor: default; font-size:12px">Resend Email</span>
            </div>
        </div>
    </div>
</div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js'></script>
<script src="<?= base_url('assets/js/otp.js'); ?>"></script>
<script>
    let countdown; // Variabel untuk menyimpan interval
    let countdownTime = 30; // Waktu hitungan mundur dalam detik
    let countdownDisplay = document.getElementById('countdown');
    let resendText = document.getElementById('resend-text');

    // Fungsi untuk mengirim ulang OTP
    function resendOTP() {
        let email = sessionStorage.getItem('forgotEmail');
        if (email && countdownTime <= 0) { // Hanya bisa dikirim jika countdown selesai
            // Kirim permintaan AJAX untuk mengirim ulang OTP
            fetch("<?= base_url('login/forget/process_forgot'); ?>", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "email=" + encodeURIComponent(email)
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Tampilkan hasil server
                // Reset countdown
                resetCountdown();
            })
            .catch(error => console.error('Error:', error));
        }
    }

    // Fungsi untuk mengatur ulang hitungan mundur
    function resetCountdown() {
        countdownTime = 30; // Reset waktu hitungan mundur
        resendText.style.color = "gray"; // Warna abu-abu saat tidak aktif
        resendText.style.cursor = "default"; // Tidak ada kursor pointer saat tidak aktif
        resendText.onclick = null; // Nonaktifkan klik selama countdown

        countdownDisplay.innerText = `Resend email in ${countdownTime} seconds`;
        
        clearInterval(countdown); // Hentikan countdown yang sedang berjalan
        countdown = setInterval(() => {
            countdownTime--;
            countdownDisplay.innerText = `Resend email in ${countdownTime} seconds`;
            
            if (countdownTime <= 0) {
                clearInterval(countdown); // Hentikan countdown
                countdownDisplay.innerText = ''; // Hilangkan teks hitungan mundur
                resendText.style.color = "#7f60eb"; // Ganti warna jadi biru saat aktif
                resendText.style.cursor = "pointer"; // Kursor pointer saat aktif
                resendText.onclick = resendOTP; // Aktifkan klik setelah countdown selesai
            }
        }, 1000);
    }

    // Fungsi untuk berpindah otomatis ke input berikutnya
    const inputs = document.querySelectorAll('#otp > input');
    
    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            // Pindah ke input berikutnya jika sudah mengisi satu karakter
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        // Pindah ke input sebelumnya jika tombol backspace ditekan dan input kosong
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && input.value === '' && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });

    // Fungsi untuk menggabungkan OTP
    function combineOTP() {
        let fullOTP = '';
        inputs.forEach(input => {
            fullOTP += input.value;
        });
        document.getElementById('otp_combined').value = fullOTP;
    }
</script>


<?php if($this->session->flashdata('successOtp')): ?>
    <script>
        window.onload = function() {
            resetCountdown(); 
            var msgOtp = document.getElementById('msg-suc');
            if (msgOtp) {
                msgOtp.style.display = 'block';
                msgOtp.innerHTML = "<?= $this->session->flashdata('successOtp'); ?>"; // Menampilkan pesan dari flashdata
            }
        };
    </script>
    <?php 
    // Hapus session flash setelah ditampilkan
    $this->session->set_flashdata('successOtp', null); 
    ?>
<?php endif; ?>

<?php if($this->session->flashdata('errorOtp')): ?>
    <script>
        var msgSucOtp = document.getElementById('msg-suc');
        var msgOtp = document.getElementById('msg');
        msgOtp.style.display = 'block';
        msgSucOtp.style.display = 'none';
        msgOtp.innerHTML = "<?= $this->session->flashdata('errorOtp'); ?>"; // Menampilkan pesan dari flashdata

        // Reset countdown ketika kode OTP salah
        resetCountdown();
    </script>
<?php endif; ?>



</body>
</html>

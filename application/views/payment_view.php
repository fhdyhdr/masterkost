

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Payment Kost Master</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" href="/assets/stylesheets/email_media_queries.css" data-immutable="true">
  <!-- If you delete this meta tag, Half Life 3 will never be released. -->
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Payment Kost Master</title>
</head>

<body>
  <table class="wrapper" bgcolor="#ECEEF1" style="background-color:#ECEEF1;width:100%;">
    <tr>
      <td>
        <!-- HEADER -->
        <table class="head-wrap" style="margin: 0 auto;">
          <tr>
            <td></td>
            <td class="header container logo" style="font-family:Source Sans Pro, Helvetica, sans-serif;color:#6f6f6f;display:block;margin:0 auto;max-width:600px;padding:20px">
              <div class="content logo" style="display:block;margin:0 auto;max-width:650px;-webkit-font-smoothing:antialiased;padding:20px">
                <table>
                  <tr>
                    <td>
                      <img alt="our wonderful wistia logo" border="0" class="wistia-logo" height="100" src="<?= base_url('assets/image/icons/icons.png'); ?>" width="100" style="display:block">
                    </td>
                  </tr>
                </table>
              </div>
            </td>
            <td></td>
          </tr>
        </table>
        <!-- /HEADER -->
        <!-- BODY -->
        <table class="body-wrap" style="margin:0 auto;margin-bottom: 80px;">
          <tr>
            <td></td>
            <td class="container transaction-mailer" bgcolor="#FFFFFF" style="font-family:Source Sans Pro, Helvetica, sans-serif;color:#6f6f6f;display:block;max-width:600px;margin:0 auto;padding:40px;border:1px solid #CED3D8;">
              <div class="content" style="display:block;margin:0 auto;max-width:650px;padding:20px;-webkit-font-smoothing:antialiased">
                <div class="receipt">
                  <div class="head">

                    <h1 class="light title" style="margin:0;padding:0;margin-bottom:20px;font-weight:700;line-height:130%;-webkit-font-smoothing:antialiased;margin-top:10px;color:#ccc;font-size:26px;text-align:left">Invoice</h1>

                    <div class="account-item" style="margin:10px 0;font-size:18px">
                      <span class="light" style="padding-right:5px;color:#ccc">Account:</span>
                      <?php if ($this->session->userdata('username')): ?>
                      <span class="item-detail" style="padding-right:5px;color:#434343"> <?php echo $this->session->userdata('username') ?></span>
                      <?php endif; ?>
                    </div>
                    <div class="account-item" style="margin:10px 0;font-size:18px">
                      <span class="light" style="padding-right:5px;color:#ccc">Billing date:</span>

                      <span class="item-detail" style="padding-right:5px;color:#434343"><?php echo $tanggal ?></span>
                    </div>
                  </div>
                  <div class="divider" style="margin-top:30px;padding-top:10px;border-top:1px solid #CCC">
                    <div class="message">

                      <h1 class="emphasis" style="margin:0;padding:0;margin-bottom:20px;font-weight:700;margin-top:10px;-webkit-font-smoothing:antialiased;font-size:28px;line-height:130%;text-align:left;color:#54bbff">Thank you for your business.</h1>

                      <p style="color:#434343;text-align:left;line-height:150%;padding:0;font-weight:400;font-size:18px">
                        Terima kasih telah menggunakan layanan kami. Berikut adalah detail tagihan Anda:
                        <p style="color: #000000;">Tipe Langganan : <strong style="color:black;display:inline-block;font-size:18px;margin-bottom:5px;margin-top:5px; text-transform:capitalize;"><?php echo $tipelangganan ?></strong></p>
                        <p style="color: #000000;">Harga : <strong style="color:black;display:inline-block;font-size:18px;margin-bottom:5px;margin-top:5px">Rp. <?php echo number_format($grossAmount, 0, ',', '.'); ?></strong></p>
                     
                    </div>
                  </div>
                  <div class="billing">
                    <div class="divider" style="margin-top:30px;padding-top:10px;border-top:1px solid #CCC"> <strong style="color:black;display:inline-block;font-size:18px;margin-bottom:5px;margin-top:5px">Subscription</strong>

                      <strong class="total" style="margin-top:5px;color:black;display:inline-block;margin-bottom:5px;font-size:18px;float:right">Rp. <?php echo number_format($grossAmount, 0, ',', '.'); ?></strong>
                      <ul style="width:80%;text-align:left;list-style-type:none;font-size:18px;margin:0px;padding:0px">
                        <li style="padding-bottom:5px;font-size:18px;color:#434343;line-height:150%">Silakan selesaikan pembayaran sebelum: </li>
                        <li style="padding-bottom:5px;font-size:18px;color:#434343;line-height:150%"><?php echo date('d-m-Y H:i:s', strtotime($expiredTime)); ?></li>
                      </ul>
                      <p style="color:#434343;text-align:left;line-height:150%;padding:0;font-weight:400;font-size:18px">Silakan lakukan pembayaran untuk memastikan layanan Anda tetap aktif.</p>
                    </div>
                   
                  </div>
              
                </div>
              </div>
              <!-- /content -->
            </td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </table>
        <!-- /BODY -->
      </td>
    </tr>
  </table>
  
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-pQ84MWOYI8l7TnaA"></script>
<script>
   
        snap.pay('<?php echo $snapToken?>', {      
          onSuccess: function(result){
            window.location.href="<?php echo base_url('payment/updatesub/' . $tipelangganan); ?>";
          },
          onPending: function(result){
            window.location.href="<?php echo base_url('payment/updatesub/' . $tipelangganan); ?>";
          },       
          onError: function(result){
            window.location.href="<?php echo base_url('payment/updatesub/' . $tipelangganan); ?>";
          }
        });
  
</script>

  
</body>

</html>
<!-- partial -->
  
</body>
</html>





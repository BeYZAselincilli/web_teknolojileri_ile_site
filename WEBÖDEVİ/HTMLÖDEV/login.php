<?php
if(isset($_POST['kadi']) && isset($_POST['sifre'])) { 
   $kadi = $_POST['kadi'];
   $sifre = $_POST['sifre'];

      if($kadi == 'g211210076' && $sifre == '123456') { 
         session_start();
         $_SESSION['kadi'] = 'g211210076';
         $_SESSION['sifre'] = '123456';
         echo 'Giriş yaptınız! Şimdi anasayfaya girebilirsiniz.<br>';
         echo "<a href=index.html></a></center>";
      } else {
         echo 'Yanlış kullanıcı adı ya da şifre kullandınız<br>';
         echo "<a href=login.html>Guvenli cikis</a></center>";
      }
   }

?>
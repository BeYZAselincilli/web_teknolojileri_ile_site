<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$adi=$_POST['adi'];
$soyadi=$_POST['soyadi'];
$email=$_POST['email'];
$cinsiyet=$_POST['cinsiyet'];
$yasgrubu=$_POST['yasgrubu'];
?>
<table cellspacing="0">
  <tr>
    <td border="1" colspan="2">Formdan Gelen Bilgiler</td>
  </tr>
  <tr>
    <td>Adınız:</td>
    <td><?php echo $adi; ?></td>
  </tr>
  <tr>
    <td>Soyadınız:</td>
    <td><?php echo $soyadi; ?></td>
  </tr>
  <tr>
    <td>Emailiniz:</td>
    <td><?php echo $email; ?></td>
  </tr>
  <tr>
    <td>Cinsiyetiniz:</td>
    <td><?php echo $cinsiyet; ?></td>
  </tr>
  <tr>
    <td>Yaş Grubu:</td>
    <td><?php echo $yasgrubu; ?></td>
  </tr>
  <tr>
    <td>Şikayet sebebi:</td>
    <td><?php echo $dil; ?></td>
  </tr>
</table>
<a href="iletisim.html">Geri dön</a>
</body>
</html>
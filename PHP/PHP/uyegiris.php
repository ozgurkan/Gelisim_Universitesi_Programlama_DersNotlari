<?php ob_start();

?>
<html>
<head>
<title>Yeni Üyelik</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
</head>

<body>
<p align="center" class="style1"><a href="uyelik.php">Üye Ol</a> / <a href="uyegiris.php">Üye Giri&#351;</a></p>
<form name="uye_form" method="post" action="../uyelik.php">
  <table width="600" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td>&nbsp;</td>
    <td class="giris_td">&nbsp;</td>
  </tr>
  <tr>
    <td>Kullanici adi:</td>
    <td><input type="text" name="kullanici_adi" /> 
  </tr>
  <tr>
    <td>Sifre:</td>
    <td><input type="password" name="parola" /> 
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" onclick="location.href='baglanti.php';" value="Üye Giris" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form>
</body>
</html>
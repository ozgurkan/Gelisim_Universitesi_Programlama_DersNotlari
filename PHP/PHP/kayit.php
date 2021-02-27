<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="islem.php?id=kayit">
  <table width="200" border="1" align="center">
    <tr>
      <th scope="col"><div align="left">Kullanıcı Adı</div></th>
      <th scope="col"><label>
        <input type="text" name="kadi" id="kadi" />
      </label></th>
    </tr>
    <tr>
      <td><div align="left"><strong>Adı Soyadı</strong></div></td>
      <td><label>
        <input type="text" name="adi" id="adi" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Şifresi</strong></div></td>
      <td><label>
        <input type="text" name="sifre" id="sifre" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Şifre Tekrarı</strong></div></td>
      <td><label>
        <input type="text" name="sifret" id="sifret" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Mail</strong></div></td>
      <td><label>
        <input type="text" name="posta" id="posta" />
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Yaş</strong></div></td>
      <td><label>
        <input type="text" name="yas" id="yas" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="gonder" id="gonder" value="Kaydet" />
        <input type="submit" name="temizle" id="temizle" value="TEMİZLE" />
      </label></td>
    </tr>
  </table>
</form>
<?php
/// Form içine elemanlar yerleştirildikten sonra formun action'ına Hangi sayfadan geliyorsa id'sine onu atadık.
?>
</body>
</html>

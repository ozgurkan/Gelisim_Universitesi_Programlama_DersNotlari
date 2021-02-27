<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link = '<div align="center">
<a href="ilksayfa.php?id=kayit">ÜYE KAYIT</a>/// 
<a href="ilksayfa.php?id=giris">ÜYE GİRİŞİ </a>
</div>'; // üye kayıta basılırsa id "kayit" olur üye girişe basilirsa id"giris" 

echo $link;
$basilan = $_GET["id"];
// SAYFAYA ÜYE KAYIT VE ÜYE GİRİŞİ OLARAK İKİ LİNK EKLEDİK VE KULLANICININ HANGİSİNE BASTIĞINI ANLAMAK İÇİN BUNU BASILAN DĞİŞKENİNE ATIYOR.

if ($basilan =="kayit")
include ("kayit.php"); // include o sayfanın içne diğer sayfanın kodlarını aktarmak 
else if($basilan == "giris")
include ("giris.php");

?>
</body>
</html>

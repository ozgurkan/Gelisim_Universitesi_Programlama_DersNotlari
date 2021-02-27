<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
//Bağlantı ortak olacağı için üste yazacağız

$Connection=mysql_connect("localhost", "root","");
if(!$Connection)
echo "Bağlantı Hatası";

$db_select=mysql_select_db("personel",$Connection);
if(!$db_select)
echo "Veri Tabanı Hatası";


$gelen=$_GET["id"];


if($gelen == "kayit")
{
$kadi=$_POST["kadi"];
$adi=$_POST["adi"];
$sifre=$_POST["sifre"];
$sifret=$_POST["sifret"];
$posta=$_POST["posta"];
$yas=$_POST["yas"];
		if($sifre==$sifret)
		{/// KAYDETME İŞLEMİ
		$result=mysql_query(" INSERT INTO uyeler(id, Kadi, Adi, Sifre, Mail, Yas) VALUES ('','$kadi','$adi','$sifre','$posta',$yas) ");
			if(!$result)
			echo "SORGU HATASI ";
			else 
			{
			echo "Giriş Sayfasına yönlendiriliyorsunuz";
			header("Refresh : 3 ; url=ilksayfa.php?id=giris");
			}
		}
		else
		{
		echo "<font size:25>Uyumsuz Şifre Tekrarı </font>" ;
		header("Refresh : 3 ; url=ilksayfa.php?id=kayit");
		}

}
else if($gelen == "giris")
{
/// KULLANICI GİRİŞ İŞLEMİ
/// veri tabanından tüm veriler çekilmesi gerekir.
/// girilen kullanıcı ile şifresi kayıtlı kişi var mı diye bak . Varsa Kullanıcı Girişi başarılıdır.
/// session açılsın kullanıcı sayfası açılsın "Hoşgeldiniz "kullanıcı adı" " yazsın.

$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];
$result=mysql_query("select * from uyeler",$Connection);
	if(!$result)
	echo "SORGU HATASI ";
	
	while ($row=mysql_fetch_array($result))
	{
		if ($kadi==$row[1] & $sifre==$row[3])
		{
		echo "giriş yapıldı Sayfaya yönlendiriliyorsunuz";
		session_start();
		$_SESSION["ad"]=$kadi;
		header ("Refresh :3;url=yeni.php");
		}
	
	}
}

mysql_close($Connection);

?>
<body>
</body>
</html>

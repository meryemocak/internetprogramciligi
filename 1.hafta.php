<?php
/*$ad="Meryem";
$soyad="Ocak";
echo $ad." ".$soyad;*/
?>

<?php
//GETTYPE UYGULAMA
/*$degisken=true;
$degisken2=3;
$degisken3=5.6;
$degisken4="Meryem";
$degisken5=array("red","blue","yelllow");
$degisken6=new stdClass;
$degisken7=NULL;
$degisken8="30";
echo gettype($degisken)."<br>".
    gettype($degisken2)."<br>".
    gettype($degisken3)."<br>".
    gettype($degisken4)."<br>".
    gettype($degisken5)."<br>".
    gettype($degisken6)."<br>".
    gettype($degisken7)."<br>".
    gettype($degisken8)."<br>";*/
?>

<?php
//GETTYPE EKRAN GÖRÜNTÜSÜ
/*$sayi=55;
echo "<b>Birinci değişkenin adı:
$sayi </b>"."<br>".
    "Degeri:".$sayi."<br>".
"Turu: ".gettype($sayi)."<br>";
?>
<br>

<?php
$adi="Meryem";
echo "<b>İkinci değişkenin adı:
$adi </b>"."<br>".
    "Degeri:".$adi."<br>".
"Turu: ".gettype($adi)."<br>";
?>
<br>

<?php
$ondalik=5.1234;
echo "<b>Üçüncü değişkenin adı:
$ondalik </b>"."<br>".
    "Degeri:".$ondalik."<br>".
"Turu: ".gettype($ondalik)."<br>";*/
?>


<?php
/*$a="32";
settype($a,"integer");
var_dump($a);
echo gettype($a)."<br>";*/
?>

<?php
/*$b=true;
settype($c,"integer");
var_dump($c);
echo gettype($c)."<br>";*/
?>

<?php
//PHP SABİTLEME
echo "<h2>PHP SABİTLERİ</h2>"."<br>".
"Kodun Bulunduğu Yer: ".(_LINE_)."<br>".
"Dosyanın Bulunduğu Yer: ".(_FILE_)."<br>".
"Sunucudaki PHP Versiyonu: ".phpversion()."<br>".
"Sunucudaki İşletim Sistemi: ".(PHP_OS)."<br>".
"Dosyanın Bulunduğu Dizin: ".(_DIR_);
?>
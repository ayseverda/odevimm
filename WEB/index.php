<?php
ob_start();
 
$user = 'ayse';
$pass = '123';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == $user && $password == $pass) {
        header('Location: https://www.google.com.tr/?hl=tr');
        exit;
    } else {
        echo "Kullanıcı adı veya şifre hatalı";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ YAPINIZ</title>
    <link rel="stylesheet" type="text/css" href="/csssayf/stylelogin.css">
    <link rel="stylesheet" type="text/css" href="/csssayf/style.css">
</head>
<body>
    <header>
        <h2>GİRİŞ YAP</h2>
        
        <nav>
            <ul>
                <li>
                    <a href="/htmlsayf/ozgecmis.html">Özgeçmiş</a>
                </li>
                <li>
                    <a href="/htmlsayf/takimimiz.html">Ankaragücü</a>
                </li>
                <li>
                    <a href="/htmlsayf/index.html">Hakkımda</a>
                </li>
                <li>
                    <a href="/htmlsayf/sehrim.html">Ankara</a>
                </li>
                <li>
                    <a href="/htmlsayf/contact.html">İletişim</a>
                </li>
                <li>
                    <a href="/htmlsayf/login.html">Giriş Yap</a>
                </li>
            </ul> 
        </nav> 
    </header>
    <center>   
        <br><br><br><br><br>
        <div class="giris">
            <h2>GİRİŞ YAP</h2>
            <form method="POST" action="">
                <div class="pc">
                    <input type="text" required="" name="username">
                    <span>Kullanıcı Adı</span>
                </div>
                <div class="pc">
                    <input type="password" required="" name="password">
                    <span>Şifre</span>
                </div>
                <div class="pc">
                    <input type="submit" value="GÖNDER">
                </div>
            </form>
        </div>
    </center>
</body>
</html>

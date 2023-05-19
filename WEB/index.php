<?php
ob_start();
 
$user = 'ayse';
$pass = '123';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == $user && $password == $pass) {
        header('Location:../htmlsayf/index.html');
        exit;
    } else {
        echo "Kullanıcı adı veya şifre hatalı";
    }
}

include("baglanti.php");

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


    <style>

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    
}


header {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    padding: 1rem;
    
    
}

nav ul {
    display: flex;
    flex-direction: row;
    list-style: none;
}

nav ul li {
    padding: 0.5rem;
    
    
}

nav ul li a {
    
    text-decoration: none;
    background-color: #fff;
    padding: 1rem;
    
    
   
}

nav ul li a:hover {
    background-color: rgba(99, 71, 146, 0.253);
    
    
}


.fab {
    padding: 8px;
    font-size: 30px;
    width: 32px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
}

.fa-linkedin {
    background: #007bb5;
    color: white;
}

.fa-instagram {
    background: #125688;
    color: white;
}
    
    @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500');
body{
    margin:0;
    padding:0;
    background:#335333;
    justify-content: center;
    align-items:center;
    height: 100vh;
    font-family: 'Poppins',sans-serif;

}

.giris{
    text-align:center;
    width:350px;
    box-sizing: border-box;
    padding:40px;
    background: #fff;
}

.giris h2{
    margin:0 0 20px;
    padding:0;
    font-size:30px;
    text-transform: uppercase;
}

.giris .pc{
    position:relative;
    width:100%;
    margin-bottom: 25px;
}

.giris .pc input {
    height: 50px;
    width:100%;
    padding: 0 20px;
    box-sizing: border-box;
    font-size:18px;
    outline: none;
    border:1px solid #000;
}

.giris .pc span{
    position:absolute;
    top:12px;
    left: 20px;
    padding: 0;
    transition: 0.5s;
    pointer-events: none;
    background: #fff;
    text-transform: uppercase;
}

        .giris .pc input:focus ~ span,
        .giris .pc input:valid ~ span{
            top:-12px;
            left:12px;
            font-size: 12px;
            padding:2px 4px;
            border:1px solid #000;
            background: #335333;;
        }

        .giris .pc input[type="submit"]
        {
    background: #335333;;
    border:none;
    box-shadow: none;
    text-transform: uppercase;
    cursor:pointer;
    font-weight: 600;
        }

    .giris .pc input[type="submit"]:hover {
        background: rgb(55, 160, 160);
    }

    .giris a{
        color:#335333;;
        text-decoration: none;
        display: block;
        text-align: left;
        color:#335333;;
    }

    .giris a span{
        color :#335333;;
        font-weight: 600;
    }</style>
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
                    <a href="../htmlsayf/contact.php">İletişim</a>
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
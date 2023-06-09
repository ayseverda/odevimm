<?php

include ("../baglanti.php");

// print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="css/stylecontact.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/csssayf/stylecontact.css">
    <link rel="stylesheet" href="/csssayf/style.css">

<style>    
   
  .form-group label {
    color: white;
  }

  .cinsiyet label{
    color:white;
  }

  .form-check-label
  {
    color:white;
  }

</style>
</head>

<body>
<header>
    <h1 style="color:white;">İLETİŞİM</h1>
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
                    <a href="/htmlsayf/ilgialan.html">İlgi Alanlarım</a>
                </li>
                <li>
                    <a href="/htmlsayf/contactveri.php">Eski Mesajlar</a>
                </li>
              
            </ul> 
        </nav>
</header>

<center>
    <div  class="ozellikk">
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 style="color:white;"class="title">Bana Ulaşın</h2>
            <div class="contact-content">
                <div class="" colum right>
                    <div style="color:white;" class="text">Benimle İletişime Geçin</div>
                    <form action="contact.php" method="post">
                        <div class="fiealds">
                            <div class="field name">
                                <input type="text" placeholder="isim/soyisim" name="isim" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="email" name="email" required>
                            </div>
                            <div class="field number">
                                <input type="text" placeholder="telefon numarası" name="number" required>
                            </div>
                            <div class="cinsiyet">
                     <label for="validationDefault04">cinsiyet</label>
                     <select class="custom-select" id="validationDefault04" required>
                     <option selected disabled value="">Choose...</option>
                     <option>kadın</option>
                     <option>erkek</option>
                     <option>belirtmek istemiyorum</option>
      </select>
    </div>
                            <div class="form-group">
                                <label for="formControlRange">sitemizi puanlayın </label>
                             <input type="range" class="form-control-range" id="formControlRange" > 
  </div>
                          </div>
                          <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    öğrenciyim
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    öğrenci degilim
  </label>
</div>
                        <div class="field">
                            <input type="text"  placeholder="BAŞLIK" name="konu" required>
                        </div>
                        <div class="field textarea"></div>
                        <textarea cols="30" rows="10" name="mesaj" placeholder="Mesajınız..."></textarea>
                </div>
              
<input class="btn btn-primary" type="submit" value="gonder"> 
<input class="btn btn-primary" type="reset" value="sil">

</form>
                </div>
                <script>
                   
                </script>
            </div>
        </div>
        </div>
    </section>
</div>
</body>
</center>
</html>

<!---
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // İletişime Geç butonunu seçme
        var submitButton = document.querySelector(".button-area .btn");
        // Temizle butonunu seçme
        var resetButton = document.querySelector(".button-area input[type='reset']");

        // İletişime Geç butonuna tıklama olayını dinleme
        submitButton.addEventListener("click", function(event) {
            event.preventDefault(); // Butonun varsayılan davranışını engelleme

            // Form girdilerini almak için gereken kodları buraya ekleyin
            var name = document.querySelector(".field.name input").value;
            var email = document.querySelector(".field.email input").value;
            var gender = document.querySelector(".secenek select").value;
            var age = document.querySelector("#inlineFormCustomSelect").value;
            var subject = document.querySelector(".field input").value;
            var message = document.querySelector(".field.textarea textarea").value;

            // Form verilerini kontrol etme
            if (name.trim() === "") {
                alert("Lütfen isim/soyisim giriniz.");
                return;
            }

            if (email.trim() === "") {
                alert("Lütfen email adresinizi giriniz.");
                return;
            }

            if (gender === "cinsiyet") {
                alert("Lütfen cinsiyet seçiniz.");
                return;
            }

            if (age === "yaş") {
                alert("Lütfen yaşınızı seçiniz.");
                return;
            }

            if (subject.trim() === "") {
                alert("Lütfen başlık giriniz.");
                return;
            }

            if (message.trim() === "") {
                alert("Lütfen mesajınızı giriniz.");
                return;
            }

            // Form verilerini işleme veya sunucuya gönderme
            // Burada istediğiniz işlemleri yapabilirsiniz

            // Formu sıfırlama
            document.getElementById("form1").reset();
        });

        // Temizle butonuna tıklama olayını dinleme
        resetButton.addEventListener("click", function(event) {
            event.preventDefault(); // Butonun varsayılan davranışını engelleme

            // Formu sıfırlama
            document.getElementById("form1").reset();
        });
    });
</script>

<?php


if($_POST)
{
    $adsoyad=$_POST["isim"];
    $email=$_POST["email"];
    $telefon=$_POST["number"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle = "INSERT INTO `iletisim`(`adsoyad`, `email`, `telefon`, `konu`, `mesaj`) VALUES ('{$adsoyad}','{$email}','{$telefon}','{$konu}','{$mesaj}')";
    

    if(mysqli_query($baglan,$ekle))
    {
        echo "<script>alert('mesaj gönderildi')</script>";
    }

}

?>

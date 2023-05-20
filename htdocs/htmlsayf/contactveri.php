<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


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


</style>
</head>
<body>


<header>
        <h1>eski mesajlar</h1>
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
                    <a href="/htmlsayf/contact.php">İletişim</a>
                </li>
                <li>
                    <a href="/htmlsayf/ilgialan.html">İlgi Alanlarım</a>
                </li>
            </ul> 
        </nav> 
    </header>

<table id="customers">
  <tr>
    <th>Ad-Soyad</th>
    <th>email</th>
    <th>telefon</th>
    <th>konu</th>
    <th>mesaj</th>
  </tr>
  <?php 
include("../baglanti.php");

$sec="Select * From iletisim";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0)
{
  while($cek=$sonuc->fetch_assoc())
  {
    echo "
    
    <tr>
    <td> ".$cek['adsoyad']." </td>
    <td> ".$cek['email']." </td>
    <td> ".$cek['telefon']." </td>
    <td>".$cek['konu']."</td>
    <td>".$cek['mesaj']."</td> 
    </tr>
    ";
  }
}

else{
  echo "kayıtlı hiç bir veri bulunamadı";
}

?>




 
</table>

</body>
</html>





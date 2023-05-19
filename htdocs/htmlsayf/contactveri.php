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
</style>
</head>
<body>

<h1>eski mesajlar</h1>

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





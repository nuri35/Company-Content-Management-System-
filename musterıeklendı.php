<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("ornek.php");
 include("ayar.php");
    /* Ekleme işlemi sorgusu */
$customerNumber = mysqli_real_escape_string($baglanti, $_POST['customerNumber']);
$customerName = mysqli_real_escape_string($baglanti, $_POST['customerName']);
    $phone = mysqli_real_escape_string($baglanti, $_POST['phone']);
    $city = mysqli_real_escape_string($baglanti, $_POST['city']);
$country = mysqli_real_escape_string($baglanti, $_POST['country']);
$employeeNumber = mysqli_real_escape_string($baglanti, $_POST['employeeNumber']);
$creditLimit = mysqli_real_escape_string($baglanti, $_POST['creditLimit']);
  
    $sorgu = "INSERT INTO customers (customerNumber,customerName,phone,city,country,salesRepEmployeeNumber,creditLimit) VALUES('$customerNumber', '$customerName', '$phone','   $city','$country','$employeeNumber','$creditLimit')";



    if (mysqli_query($baglanti, $sorgu)) {
        
         echo"<div class='card'>";
      echo"<div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>";
     echo"<i class='checkmark'>✓</i>";
      echo"</div>";
        
        
        $islemSonuc = "Yeni kayıt Başarıyla Oluşturuldu.";
         echo"$islemSonuc";
      
    } else {
         echo"<div class='card'>";
      echo"<div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>";
        echo"<i class='checkmark'>×</i>";
      echo"</div>";
        $islemSonuc = "Hatalı işlem yaptınız: " . "<br>" . mysqli_error($baglanti);
        echo"$islemSonuc";
    }

 
 mysqli_close($baglanti);

?>
 
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="zz.css">
  </head>
    
<body>
      
    </body>
</html>

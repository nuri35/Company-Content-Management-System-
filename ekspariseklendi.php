<?php
    /* Bağlantı bilgilerinin alınması*/
    require_once("ornek.php");
  include("ayar.php");

$orderNumber= mysqli_real_escape_string($baglanti, $_POST['orderNumber']);
$productCode = mysqli_real_escape_string($baglanti, $_POST['productCode']);
$quantityOrdered = mysqli_real_escape_string($baglanti, $_POST['quantityOrdered']);

$priceEach = mysqli_real_escape_string($baglanti, $_POST['priceEach']);

$orderLineNumber = mysqli_real_escape_string($baglanti, $_POST['orderLineNumber']);

 
 $sorgu = "INSERT INTO orderdetails (orderNumber,productCode,quantityOrdered,priceEach,orderLineNumber) VALUES('$orderNumber','$productCode', '$quantityOrdered','$priceEach','$orderLineNumber')";




    if (mysqli_query($baglanti, $sorgu)) {
        
         echo"<div class='card'>";
      echo"<div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>";
     echo"<i class='checkmark'>✓</i>";
      echo"</div>";
        
        
        $islemSonuc = "Yeni kayıt Başarıyla Oluşturuldu.";
         echo"$islemSonuc";
     
      
    } 


   
    else {
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
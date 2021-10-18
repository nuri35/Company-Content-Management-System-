<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
    
    /* Veritabanı sorgulama */
    $silinicek = mysqli_real_escape_string($baglanti, $_GET["productCode"]);

 include("ayar.php");
    $sorgu = "DELETE FROM orderdetails WHERE productCode = '$silinicek'";
 
    

 

 if (mysqli_query($baglanti, $sorgu)) {
        
         echo"<div class='card'>";
      echo"<div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>";
     echo"<i class='checkmark'>✓</i>";
      echo"</div>";
        
        
        $islemSonuc = "Kayıt başarıyla sılındı.";
         echo"$islemSonuc";
     
      
    } 





  



   
    else {
         echo"<div class='card'>";
      echo"<div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>";
        echo"<i class='checkmark'>×</i>";
      echo"</div>";
        $islemSonuc = "Silinirken hata oluştu: " . "<br>" . mysqli_error($baglanti);
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
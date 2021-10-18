<?php
    

require_once("ornek.php");
 include("ayar.php");
    /* VeritabanÄ± sorgulama */
    $sonuc = mysqli_query($baglanti, "SELECT *
FROM `customers` " );
?>
    <!DOCTYPE html>
    
<html>
    <head>
    <title>HTML Tutorial</title>
    <meta charset="utf-8"/>
   <link href="s%C4%B1rket.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    
   <body>
       
    <div id="ust">
       
   <div>
        <h1>Şirketin Müşteri İsimleri</h1>
        </div>
       
       </div>
    
    
    <div id="ıcerık">
       
       
     <div id="container">
  <?php       
     while($satir = mysqli_fetch_assoc($sonuc)){   
  echo "<ul class='list-group'>";
   echo"<li class='list-group-item'>AD VE SOYAD :";
    printf ($satir[ "contactFirstName"]."----------".$satir["contactLastName"]."<br>");
  echo "</li>";
    
  echo "</ul>";
  } 
     ?> 
         
        </div>
     
       </div>
    
   
    
   
    </body> 
    
    
    
    </html>

    
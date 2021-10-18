<?php
    

require_once("ornek.php");
    /* VeritabanÄ± sorgulama */
    $sonuc = mysqli_query($baglanti, "SELECT employees.firstName, offices.city
FROM `employees` INNER JOIN  `offices`
ON employees.officeCode = offices.officeCode " );
?>
    <!DOCTYPE html>
    
<html>
    <head>
    <title>HTML Tutorial</title>
    <meta charset="utf-8"/>
   <link href="s%C4%B1rket.css" rel="stylesheet">
           <script src="s%C4%B1rket.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
   
   <body>
      <?php
          while($satir = mysqli_fetch_assoc($sonuc)){ 
   echo"<div class='container-fluid'>";
  
          
  echo" <div id='myCarousel' class='carousel slide' data-ride='carousel'>";
      
    echo" <div class='carousel-inner row w-100 mx-auto'>";
     
      echo"<div class='carousel-item col-md-4 active'>";
         
        echo"<div class='card'>";
           
         
         echo"<img class='card-img-top img-fluid' src='pp.jpg' alt='Card image cap'>";
    
          echo"<div class='card-body'>";
        
            
              
              echo"<p class='price'>";
      printf ("Çalışan adı:". " "  .$satir["firstName"] );  
        echo"</p>";
                
                 echo"<p class='price'>";
      printf ("Çalışan şehir bilgisi:". " "  .$satir["city"] );  
        echo"</p>";
        
              
          echo"</div>";
        echo"</div>"; 
      echo"</div>";
     

   echo"</div>";
    
  
    echo"<a class='carousel-control-prev' href='#myCarousel' role='button' data-slide='prev'>";
    
    echo" <span class='carousel-control-prev-icon' aria-hidden='true'></span>";
      
    echo"<span class='sr-only'>Previous</span>";
    
    echo"</a>";

    echo"<a class='carousel-control-next' href='#myCarousel' role='button' data-slide='next'>";
      
    echo"<span class='carousel-control-next-icon' aria-hidden='true'></span>";
      
    echo"<span class='sr-only'>Next</span>";
   
    echo" </a>";
  
    echo"</div>";
 
echo"</div>";
       
  echo"</div>";
  echo"</div>"; 
       } 

   ?>   
    </body> 
    
  
    
    </html>
 
    
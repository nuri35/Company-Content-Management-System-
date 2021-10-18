<?php
    

require_once("ornek.php");
    /* VeritabanÄ± sorgulama */
    $sonuc = mysqli_query($baglanti, "SELECT *
FROM `products` " );
?>
    <!DOCTYPE html>
    
<html>
 <head>
    <title>HTML Tutorial</title>
    <meta charset="utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    </head>
<body>
    
    
    <div class="container mt-3">
  <h2>Ürün bilgisine hoş geldınız</h2>
  <p>Birkaç arama yapınız</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
        
 <?php       
 echo "<table class='table table-bordered'>";
 echo"<thead>";
      
   echo   "<tr>";
        echo"<th>Ürün ismi</th>";
        echo"<th>fiyat</th>";
                echo"<th>stok bilgisi</th>";
   
     echo" </tr>";
       echo  "</thead>";
  echo"<tbody id='myTable'>";
   while($satir = mysqli_fetch_assoc($sonuc)){
     
echo "<tr id='myTable'  >";
 echo "<td >";

printf ($satir["productName"]."<br>");
      

      echo "</td>";


echo "<td>";

printf ($satir["buyPrice"]."<br>");
   
      echo "</td>";


echo "<td>";

printf ($satir["quantityInStock"]."<br>");
   
      echo "</td>";

echo "</tr>";
      }
echo" echo</tbody>";
echo  "</table>";
  ?>
  <p>Sonuç bulunamadı</p>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    
    
    
   </script> 
    
    
    
    
    
    
    </body>






















</html>
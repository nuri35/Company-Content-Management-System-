<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
   
    /* Veritabanı sorgulama */
    $guncellene = mysqli_real_escape_string($baglanti, $_GET["productCode"]);
 include("ayar.php");

  
$sorgu = mysqli_query($baglanti, "SELECT * FROM products WHERE productCode   = '$guncellene'  ");


$satir = mysqli_fetch_assoc($sorgu)
    




?>





<html>
<head>
 <title>HTML Tutorial</title>
    <meta charset="utf-8"/>
     <link href="gun.css" rel="stylesheet">

   
</head>

<body>
<form id="contact-form" action="gunv2.php" method="post">
  <p>Güncelleme işlemi için hoş geldiniz.</p>
  
 
    <label for="productCode"></label> 
    <input type="hidden" name="productCode"   value="<?php echo $satir['productCode']; ?>"   required>
    
 
  <label for="productName">productName</label> 
    <input type="text" name="productName"   value="<?php echo $satir['productName']; ?>"    required>
    
     <label for="productLine">productLine</label> 
    <input type="text" name="productLine"    value="<?php echo $satir['productLine']; ?>"    required>
 
   
  <label for="productScale">productScale</label> 
    <input type="text" name="productScale"   value="<?php echo $satir['productScale']; ?>"   required>
    
   <label for="productVendor">productVendor </label> 
    <input type="text" name="productVendor"  value="<?php echo $satir['productVendor']; ?>"  required>
 
  
 
 
   <label for="productDescription">productDescription</label> 
    <input type="text" name="productDescription"   value="<?php echo $satir['productDescription']; ?>"  required>

    <label for="quantityInStock">quantityInStock</label> 
    <input type="text" name="quantityInStock"  value="<?php echo $satir['quantityInStock']; ?>"  required>
    
    <label for="buyPrice">buyPrice </label> 
    <input type="text" name="buyPrice" value="<?php echo $satir['buyPrice']; ?>"  required>
    
     <label for="MSRP">MSRP</label> 
    <input type="text" name="MSRP" value="<?php echo $satir['MSRP']; ?>"  required>
    
    
    <button type="submit">
      <svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewBox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">
        <path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
	l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
      </svg>
      <small>send</small>
    </button>
 
</form>

<small class='website'>Vist <a href='https://www.erlen.co.uk/' target='_blank'>Şen holding</a>.com</small>

    </body>
</html>
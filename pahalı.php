<?php
    

require_once("ornek.php");
    /* VeritabanÄ± sorgulama */
    $sonuc = mysqli_query($baglanti, " SELECT *
FROM `products` INNER JOIN `productlines` INNER JOIN `customers` INNER JOIN `orders` INNER JOIN `orderdetails` 
ON products.productLine = productlines.productLine AND customers.customerNumber = orders.customerNumber AND orders.orderNumber = orderdetails.orderNumber AND products.productCode = orderdetails.productCode AND products.buyPrice   = (SELECT MAX(buyPrice)
FROM `products`) " );
?>
    <!DOCTYPE html>
    
<html>
 <head>
    <title>HTML Tutorial</title>
    <meta charset="utf-8"/>
     <link href="s%C4%B1rket.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
     
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <video autoplay muted loop id="myVideo">
  <source src="ınsan.mp4" type="video/mp4">

</video>

    <div class="content">
  <h1>ŞEN HOLDİNG -- GENEL ÜRÜN BİLGİLERİ</h1>
  <p>Bu sayfada ilişkili veri tabanları sayesinde şirketteki çalışanların hangi office olduklarını veya ürünleri hangı müşteri almış gibi karışık yapıdaki sorulara cevap bulmuş olacağız.</p>
 
 
          
  <div class="adet">
  <h1> 
      <?php 
      echo mysqli_num_rows($sonuc);
      ?>
      Adet ürün sistemde bulunmaktadır.
    
    </h1> 

    </div>
    
    <div class="adet">
        <h1>
        
      Şirketin en yüksek <?php echo mysqli_num_rows($sonuc); ?> adet ürünü vardır
        </h1>
        
        
        
        </div>
        
        
</div>
  
    
       <div class="cardz">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Fiyat </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    100 TL 500 TL
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				   600 TL 2000 TL
				  </span>
				</label>  <!-- form-check.// -->
			
			</form>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
	
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Ürün Tipi</h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			 Classic Cars
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			   Motorcycles
			  </span>
			</label>
			
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
           
    <article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Sıralama</h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			küçükten büyüğe
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			 Büyükten küçüge
			  </span>
			</label>
			
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->       
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
</div> <!-- card.// -->



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">+FİLTRELER</button>
  <div id="myDropdown" class="dropdown-content">
   
    <strong  href="#about">Fiyat
     
   </strong>
      <a href="#base">100 TL - 300 TL</a>
     <a href="#base">400 TL - 700 TL</a> 
     
   
    <strong  href="#about">Ürün tipi
     
   </strong>
      <a href="%C4%B1k%C4%B1urun.php">Motorcycles</a>
     <a href="#base">Classic Cars</a> 
      
      <strong> 
              <a  href="fazla.php">En fazla siparişe göre sırala</a>
     
   </strong>
      
      
  
 
        <strong> 
      <a  href="tumler.php">Filtreleri temizle</a>
   </strong>
  <strong  href="#about">Sıralama
     
   </strong>
      <a  href="pahalı.php">Şirketin en pahalı ürün fiyatını gör </a>
  </div>
</div>
    
 
   
    
    
    
    
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

    
    
    
    
   <?php
    
   echo"<div class='flex-container'>";
    while($satir = mysqli_fetch_assoc($sonuc)){   
   echo "<div class='card'>";
      
  echo"<h1>";
      printf ("Ürün İsmi:". " "  .$satir["productName"]);  
        echo"</h1>";
 
  echo"<p class='price'>";
      printf ("Ürün kategorisi:". " "  .$satir["productLine"]." ". "TL " );  
        echo"</p>";
        
         echo"<p>";
      printf ("Müşteri İsmi:". " " .$satir["contactFirstName"]);  
        echo"</p>";
  
        
           echo"<p>";
      printf ("Telefon Bilgisi". " " .$satir["phone"]);  
        echo"</p>";
  
        
           echo"<p>";
      printf ("Sipariş Miktarı". " ".$satir["quantityOrdered"]);  
        echo"</p>";
  
            echo"<p>";
      printf ("Adet fiyat". " ".$satir["priceEach"]);  
        echo"</p>";
        
                 echo"<p>";
      printf ("Satış fiyatı". " ".$satir["buyPrice"]);  
        echo"</p>";
        
        
        
echo"</div>";
      echo "</div>";   
    } 

   ?> 
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
 
 
    
</body>

    
    
    
    
    
    
    
    
    
    </html>
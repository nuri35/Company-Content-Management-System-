
<?php
     require_once("ornek.php");
 include("ayar.php");
        $productName = mysqli_real_escape_string($baglanti, $_GET['productName']);

$sayfada= 5;
   
$sonuc2 = mysqli_query($baglanti, "SELECT *
FROM `products` INNER JOIN `productlines` INNER JOIN `customers` INNER JOIN `orders` INNER JOIN `orderdetails` INNER JOIN `depom`
ON products.productLine = productlines.productLine AND customers.customerNumber = orders.customerNumber AND orders.orderNumber = orderdetails.orderNumber AND products.productCode = orderdetails.productCode AND products.productCode = depom.productCode  AND (products.productName LIKE  '%$productName%' ) ");

$toplamicerik = mysqli_num_rows($sonuc2);

$toplamsayfa = ceil($toplamicerik / $sayfada );

$sayfa = isset($_GET["sayfa"]) ? (int) $_GET["sayfa"] : 1;  
if($sayfa<1)  $sayfa =1;



if($sayfa > $toplamsayfa) $sayfa =$toplamsayfa;

$limit = ($sayfa-1)  * $sayfada;

 $sonuc = mysqli_query($baglanti, "SELECT *
FROM `products` INNER JOIN `productlines` INNER JOIN `customers` INNER JOIN `orders` INNER JOIN `orderdetails` INNER JOIN `depom`
ON products.productLine = productlines.productLine AND customers.customerNumber = orders.customerNumber AND orders.orderNumber = orderdetails.orderNumber AND products.productCode = orderdetails.productCode AND products.productCode = depom.productCode  AND (products.productName LIKE  '%$productName%' ) LIMIT $limit,$sayfada ");




?>
  
    <?php

$rowcount=  mysqli_num_rows($sonuc2);




if($rowcount < 1){
     header("location:tumler.php");
}else{


  require_once("header.php");  ?>
  
  
  <div class="site-wrap">
      
    
     
      
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                
                
     
                
                
                
              <form action="mesajarandı.php" method="get" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="search" name="productName" class="form-control border-0" placeholder="arama yapınız...">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="tumler.php" class="js-logo-clone">ŞEN HOLDİNG A.Ş
                  
                  
                  
                  </a>
                  <br>
                 
                 
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="avatar.php"><span class="icon icon-person"></span></a></li>
                 
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                      <a href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        </a>
                    
                   
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
              <a href="tumler.php">Home</a>
              
            </li>
            <li class="active">
              <a href="islem.php">Ürün İşlemleri</a>
             
            </li>
            <li class="active"><a href="res%C4%B1mekle.php">Ürünlere Resim ekleme</a></li>
           
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
        
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">
                    <?php
   
                   $rowcount=  mysqli_num_rows($sonuc2);

                  echo $rowcount;  ?> Products
                    
                   
                    
                    
                    </h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
                    <?php
                  while($satir = mysqli_fetch_assoc($sonuc)){
                      
                       ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <img src="<?php echo $satir['isim']?> " alt="Image placeholder" class="img-fluid">
                  </figure>
             
                  <div class="block-4-text p-4">
                    <h3>Ürün İsmi: <?php echo $satir["productName"];  ?></h3>
                    <p class="mb-0"> Ürün stok: <?php echo $satir["quantityInStock"];  ?></p>
                        <p class="mb-0"> Order number: <?php echo $satir["orderNumber"];  ?></p>
                       <p class="mb-0"> Müşteri adı: <?php echo $satir["customerName"];  ?></p>
                       <p class="mb-0"> Ürün kodu: <?php echo $satir["productCode"];  ?></p>
                      
                           <p class="mb-0"> Productline: <?php echo $satir["productLine"];  ?></p>
                        <p class="mb-0"> Sipariş tarihi: <?php echo $satir["orderDate"];  ?></p>
                        <p class="mb-0"> İstenme tarihi: <?php echo $satir["requiredDate"];  ?></p>
                      
                        <p class="mb-0"> Kargolanma tarihi: <?php echo $satir["shippedDate"];  ?></p>
                    
                    <p class="text-primary font-weight-bold"> <?php echo $satir["priceEach"];  ?> TL </p>
                  </div>
                </div>
              </div>
                <?php
                  }
 ?>


            </div>
           
<nav class="col-md-12"  align="center">
    
  <ul  class="pagination justify-content-center">
    <li class="page-item">
         <?php
        
   if($sayfa >1){
        ?>
        <a class="page-link" href="mesajarand%C4%B1.php?sayfa=<?php echo $sayfa - 1;  ?>&productName=<?php  echo $productName  ?>">Previous</a>
         <?php
   }
       
        
      ?>
        
    
    
    
    </li>
   
    <li class="page-item">
        
         <?php
   
    $ekgoster = 1;
    for($i = $sayfa - $ekgoster; $i <= $sayfa+ $ekgoster; $i++ ){
     
       
      
       
        ?>
    <?php  
    
     
  if($i > 0 && $i <= $toplamsayfa ){
            
       
  
    ?>
  
        <a style="display:inline" class="page-link" href="mesajarand%C4%B1.php?sayfa=<?php echo $i;  ?>&productName=<?php echo $productName  ?>"><?php echo $i;  ?></a>
      
<?php 
    }

      
        }
      ?>
      
      </li>
    <li class="page-item">
         <?php
        
   if($sayfa >1 &&  $sayfa < $toplamsayfa){
        ?>
        <a class="page-link" href="mesajarand%C4%B1.php?sayfa=<?php echo $sayfa + 1;  ?>&productName=<?php echo $productName  ?>">Next</a>
         <?php
   }
        
        
      ?>
        
    
      
    
    </li>
   
      
  </ul>
</nav>
              
              
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto">(2,124)</span></a></li>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
                </label>
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
                </a>
              </div>

            </div>
          </div>
        </div>

     
        
      </div>
    </div>

   
  </div>

 <?php  require_once("footer.php");    
       
  
    
    } 

?>
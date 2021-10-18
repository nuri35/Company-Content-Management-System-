<?php
   
require_once("ornek.php");

 include("ayar.php");


    $firstName=$_SESSION['firstName'] ; // logındekı kullanıcı adım aslında ornek olsun dıye fırstnameyı kullanıcı adı olarak aldım
        $sifre = $_SESSION['sifre'] ; 

  
$sayfada= 5; // sayfada gosterılcek ıcerık mıktarı

$sonuc2 = mysqli_query($baglanti, " SELECT *
FROM `products` INNER JOIN `productlines` INNER JOIN `customers` INNER JOIN `orders` INNER JOIN `orderdetails` INNER JOIN `depom`
ON products.productLine = productlines.productLine AND customers.customerNumber = orders.customerNumber AND orders.orderNumber = orderdetails.orderNumber AND products.productCode = orderdetails.productCode AND products.productCode = depom.productCode   " ); // BIZIM BU SORGUDAN GELICEK VERI ELEMANLARINI BILMEMIZ GEREKIYOR TOPLAM ornegın sahaya 11 kısı cıkıyor her mevkıye 1 rer kısı bızımde bu sorgudan cıkan elımızdekı kac verı var 1 sayfaya 5 tane yerlestırısek  kac numara uretmemız gerekır pagınatıonda bunları bılmemız gerekııyor
$toplamicerik = mysqli_num_rows($sonuc2);

$toplamsayfa = ceil($toplamicerik / $sayfada ); // sonuc olarak dınamık olarak kactane verı varsa ve 1 sayfada kactane olmasını ıstıyorsan boluyorsn toplam sayfa sayına ulaşmıs oluyorsun  CEIL ISE YUVARLAMA FONKSIYONUDUR     AYRIYETTEN  LIMIT 3,5   SAG TARAFTAKI sayı 5 olan sayfada kactane oldugunu soyler soldakı 3 ıse 3 den sonra 4.verıyı verır yanı 4.verıden baslar 5 tane dondurur

// burda Syntax: şart ? başarılı : başarısız  bu tur ıf else kullanıldı. get doluysa get degerıne esıt olanı alıyor degılse 1 olarak donduruyor degerı
$sayfa = isset($_GET["sayfa"]) ? (int) $_GET["sayfa"] : 1;  // eger sayfa gırılmemısse 1 varsayalım yanı ılk gırıdıgımızde sayfa gırılmemıs  olcak. sayfa dedıgımız  gırılme olayı get olayıdır zaten get gondurecez burayı (yukarda url kısmı) ? goruncek  ? sız oldugunda yanı ılk gırdıgımızde 1.sayfa olarak mesela gırılmemış ozman bu kodu yazıcaz bu kodda demek ıstedıgı  get doluysa ve sayfa 1 ıse sorguda yanı deger gırmemısse 1 varsayıyor yanı getlı 1 halıyle boş halı aynı sayıyıyor


// eger 1 den kucuk sayfa saıyısı gırersede orayı 1 yap 

if($sayfa<1)  $sayfa =1;

// toplam sayfa sayımızdan fazla sayı gırılırse  en son sayfayı gosterırız

if($sayfa > $toplamsayfa) $sayfa =$toplamsayfa;

$limit = ($sayfa-1)  * $sayfada;
    

    /* VeritabanÄ± sorgulama */
    $sonuc = mysqli_query($baglanti, " SELECT *
FROM `products` INNER JOIN `productlines` INNER JOIN `customers` INNER JOIN `orders` INNER JOIN `orderdetails` INNER JOIN `depom`
ON products.productLine = productlines.productLine AND customers.customerNumber = orders.customerNumber AND orders.orderNumber = orderdetails.orderNumber AND products.productCode = orderdetails.productCode AND products.productCode = depom.productCode  LIMIT $limit,$sayfada" );

// bu sorguda sayfada degıskenı 1 sayfada 5 tane gosterecegını belırtır lımıt fonksıyonunda daha sonra lımıt degıskenı ıle ise mesala 1,5 5 tanesını alır gosterır 6,5 5 tanesını gosterırır ama 6.veriden başlar

 $ad=$_SESSION['firstName'] ;
   $kullanıcısorgu = mysqli_query($baglanti, "SELECT * FROM employees  WHERE firstName='$ad' ");
      
$satir2 = mysqli_fetch_assoc($kullanıcısorgu);


 $kullanıcısorgu2 = mysqli_query($baglanti, "SELECT * FROM customers  WHERE customerName='$ad' ");
      
$satir23 = mysqli_fetch_assoc($kullanıcısorgu2);



?>
  
  






<!DOCTYPE html>
 <?php  require_once("header.php");  ?>
  
  
  <div class="site-wrap">
      <?php
   
       if (isset($satir2['admin_yetki']) == 3 || isset($satir2['admin_yetki']) == 1){
             ?>
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
                    <a href="tumler.php" class="js-logo-clone">
                  
                    <?php
            
            if ($satir2['admin_yetki'] == 3){
             echo "yetki: çalışan";
            }elseif($satir2['admin_yetki'] == 1){
                echo"yetki: yönetici";
            }else{
                 echo"yetki: Sayın Müşteri";
            }
        
        ?>  
              
                  
                  </a>
                 
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="avatar.php"><span class="icon icon-person"></span></a></li>
                 
                  
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

    <div class="site-section" >
      <div class="container" >

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 >
                    <?php
   
                   $rowcount=  mysqli_num_rows($sonuc2);

                  echo $rowcount;  ?> Products
                    
                   
                    
                    
                    </h2></div>
               
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
        <a class="page-link" href="tumler.php?sayfa=<?php echo $sayfa - 1;  ?>">Previous</a>
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
  
        <a style="display:inline" class="page-link" href="tumler.php?sayfa=<?php echo $i;  ?>"><?php echo $i;  ?></a>
      
<?php 
    }

      
        }
      ?>
      
      </li>
    <li class="page-item">
         <?php
        
   if($sayfa >1 &&  $sayfa < $toplamsayfa){
        ?>
        <a class="page-link" href="tumler.php?sayfa=<?php echo $sayfa + 1;  ?>">Next</a>
         <?php
   }
        
        
      ?>
        
    
      
    
    </li>
   
      
  </ul>
</nav>
              
              
          </div>

        
        </div>

     
        
      </div>
    </div>

   
  </div>

 <?php  require_once("footer.php");  ?>   
      <div class="site-wrap">
      <?php 
      
            }elseif(isset($satir23['admin_yetki2']) == 2){
           ?> 
           <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                
                
     
                
          
              
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="tumler.php" class="js-logo-clone">ŞEN HOLDİNG A.Ş
                  
      
                  </a>
                  <br>
                    <a href="tumler.php" class="js-logo-clone">
                  
                    <?php
      
          
                 echo"yetki: Sayın Müşteri";
           
        
        ?>  
              
                  
                  </a>
                 
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="avatar.php"><span class="icon icon-person"></span></a></li>
                 
                  <li>
                    <a href="basket.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                           <?php
                        if(isset($_SESSION["ürünlistem"])){
                           ?> 
                         <span class="count">
                         <?php
                       echo  $_SESSION["ürünlistem"]["summary"]["totalcount"];
                                                       ?> 
                            </span>
                         <?php
                        }else{
                             ?> 
                           
                         <?php
                        }
                      ?>

                        
                        
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
                 <?php
              if(isset($_GET["idmx"]) && isset($_GET["idmxid"])){
                    $_SESSION['OTHER'] = $_GET["idmx"];
                     $_SESSION['otherıd'] = $_GET["idmxid"];
               }
     
              if($_SERVER["REQUEST_METHOD"] == "GET" || $_SERVER["REQUEST_METHOD"] == "POST" ){
          
   
                
                if(isset($_GET["idm"]) && $_GET["idmx"] == "Ürünkategori"){
                    
       
        
                   

$sayfada2= 3; // sayfada gosterılcek ıcerık mıktarı

$katrıquery = mysqli_query($baglanti, "SELECT *
FROM `products`  INNER JOIN `depom` 
ON products.productCode = depom.productCode " ); 

$toplamicerik2 = mysqli_num_rows($katrıquery);

$toplamsayfa2 = ceil($toplamicerik2 / $sayfada2 ); 

                 

$sayfa2 = isset($_GET["sayfa2"])  ? (int) $_GET["sayfa2"] : 1;  
                    
if($sayfa2<1)  $sayfa2 =1;

               


if($sayfa2 > $toplamsayfa2) $sayfa2 =$toplamsayfa2;

$limit2 = ($sayfa2-1)  * $sayfada2;
   

 $katrıquery2 = mysqli_query($baglanti, "SELECT *
FROM `products`  INNER JOIN `depom` 
ON products.productCode = depom.productCode  LIMIT $limit2,$sayfada2" );
                    
                    
                    
                      ?> 
          <div class="col-md-9 order-2">
             

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 >
                    <?php
    
                    
               
                   $rowcount=  mysqli_num_rows($katrıquery);

                  echo "Sistemde toplam " .$rowcount. " ürün bulunmaktadır." ?> 
                    
                   
                    
                    
                    </h2></div>
             
              </div>
            </div>
            <div class="row mb-5">
                    <?php
               
                      if($_POST && $_SERVER["REQUEST_METHOD"] == "POST"){
                          
                          if(isset($_POST["basketval"])){// COKLU VVERILERI SESSIONA ATICAM ARRAY YAPCAZ
                    
                             
                          $id = $_GET["id"];
                              
                              
                              $query = mysqli_query($baglanti, "SELECT * FROM `products` WHERE productCode='$id' " );
                             $satquery = mysqli_fetch_assoc($query);
                           
                        $productitemid =$satquery["productCode"];
                              
                              
                                 $ürünsm =  array(
                             "ıtemıd" => $_GET["id"],
                               "ürünadi" =>$_POST["productName"],
                                   "ürünfiyat" => $_POST["buyPrice"],
                                 "ürünacıklama" => $_POST["productDescription"],
                               "ürünresım" =>  $_POST['isim'],
                              "ürünadeti" =>  $_POST['adet'],
                                 
                            
                              );
                            
                               
                  if(isset($_SESSION["ürünlistem"])){// eger urunlıstemde uruns dıye array varsa bu sessıon ıcı doluysa yanı artık bura calısr ve $_SESSION["ürünlistem"]; $shopcart degıskenıne aktardım boylelıkle $ürüns arrayimi bu sefer nerden aldım sessıondan aldım boylelıkle  yenı urun ekledıgımde ben sessıonumdakı urunume bırtane daha ekledı
                     
                     $shopcart = $_SESSION["ürünlistem"];
                     
                   $ürüns = $shopcart["ürüns"];
                     
                                }else{
                     
                       $ürüns = array();
                        
                       
                 }      
                              //adet kontrolu productcode göre kontrol
                          
                                 if(array_key_exists($productitemid,$ürüns)){
                                 
                              $ürüns[$productitemid]["ürünadeti"]++;
                      //  $ürüns[$productitemid]["toplamtutar"] =  intval($ürüns[$productitemid]["toplamtutar"])*intval($ürüns[$productitemid]["ürünadeti"]);
                            
                           
                              }else{//eger yoksa aynı elemandan tıklanmamıssa dırek boyle yap ürüns arrayime verılerı ekle yanı
                              $ürüns[$_GET["id"]] = $ürünsm;// ayynı urunden ekledgınde yenı bırtane eklemedık ıd bazında yaptık bak burda dıkkat  yyanı productcode gore ekleme yaptık soonra bunu bır asagıda sessıona aktarmıs olduk
                             }
                          
                              
                              //sepetın hesaplanması
                              
                              
                              $totalprice = 0.0;
                              $totalcount = 0;
                              
                              
                              foreach($ürüns as  $ürval){ // $ürüns arrayimi tek tek dolasıcam hanı  ürünlistem arrayin icindekı value olan [ürüns] arrayımı tek tek dolasıcam
                                  //for dongusu olarak bu arrayın ıcını dolasıyıoruz ılk once urun adetı ve urun fıyatı carpıyoruz 
                                $ürval["totalprice"] = (int)$ürval["ürünadeti"] * (int)$ürval["ürünfiyat"];
                                $totalprice= $totalprice +  $ürval["totalprice"]; // 
                               
                         $totalcount+= $ürval["ürünadeti"];// arraydekı tum urun adetlerı ne kadar urun oldugunu sepette bununla ogrenıyoruz for dongusuyle urun adetlerı gezıyor ve topluyor
                            
                                  
                              }//sessıona atarsam toplam alısverısımle ılgılı sonuclarımı dıger sayfada sessıonla gormus olurum
                              
                              
                              //summary adında bır degısken olusturalım totalprice ve countı bu degıskenlere aktardık
                           $summary["totalprice"] = $totalprice;
                              $summary["totalcount"] = $totalcount;  
                              
                              
                              
                             $_SESSION["ürünlistem"]["ürüns"] = $ürüns;
                                $_SESSION["ürünlistem"]["summary"] = $summary; //summary adında bır array olusturmus olduk bu summary ıcındede  ıcersınde neyı al summary degıskenını al dedık
                   
                              
                     
                         
          
                  
                          }
                          
                          
                      }
       
           //bır ktegorıde get ıslemı clıck varsa burda onunla ılgılı ıcerıgı verecek
           
         
               
           
           
                  while($satir = mysqli_fetch_assoc($katrıquery2)){
                   //asagıda hıddenlı ınputlara valularına degerlerı koymamız lazım cunku burda kullanıcı forma bırsey gırmıyor dıkkat
                     
                       ?> 
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                     <form action="<?= htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&id=<?=$satir["productCode"];?>" method="post">
                         
                        
                  <figure class="block-4-image">
                    <img src="<?php echo $satir['isim']?> "  alt="Image placeholder" class="img-fluid">
                  </figure>
          
                  <div class="block-4-text p-4">
                      
                    <h3>Ürün İsmi: <?php echo $satir["productName"];  ?></h3>
                    <p class="mb-0"> Ürün Kodu: <?php echo $satir["productCode"];  ?></p>
                        <p class="mb-0"> Ürün Gamı: <?php echo $satir["productLine"];  ?></p>
                       <p class="mb-0"> Ürün Açıklaması: <?php echo $satir["productDescription"];  ?></p>
                       <p class="mb-0"> Stok: <?php echo $satir["quantityInStock"];  ?></p>
                      
                           <p class="mb-0"> Fiyat: <?php echo $satir["buyPrice"]; ?> TL</p>
                  
                    
                      <input type="hidden" name="productName" value="<?php echo $satir['productName']; ?>  ">
                       <input type="hidden" name="buyPrice" value="<?php echo $satir['buyPrice']; ?>  ">
                       <input type="hidden" name="productDescription" value="<?php echo $satir['productDescription']; ?>  ">
                          <input type="hidden" name="isim" value="<?php echo $satir['isim']; ?>  ">
                        <input type="hidden" name="adet"  value="1">
                        <button type="submit" name="basketval">Sepete ekle</button>
                  </div>
               </form>
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
        
   if($sayfa2 >1){
        ?>
        <a class="page-link" href="tumler.php?action=click&idm=Ürünkategori&idmx=Ürünkategori&sayfa2=<?php echo $sayfa2 - 1;  ?>">Previous</a>
         <?php
   }
        
        
      ?>
        
    
      
    
    </li>
   
    <li class="page-item">
        
         <?php
   
    $ekgoster2 = 1;
    for($i = $sayfa2 - $ekgoster2; $i <= $sayfa2+ $ekgoster2; $i++ ){
     
       
      
       
        ?>
    <?php  
    
     
  if($i > 0 && $i <= $toplamsayfa2 ){
            
       
  
    ?>
  
        <a style="display:inline" class="page-link" href="tumler.php?action=click&idm=Ürünkategori&idmx=Ürünkategori&sayfa2=<?php echo $i; ?>"><?php echo $i;  ?></a>
      
<?php 
       
    }

      
        }
      ?>
      
      </li>
    <li class="page-item">
         <?php
        
   if($sayfa2 >1 &&  $sayfa2 < $toplamsayfa2){
        ?>
        <a class="page-link" href="tumler.php?action=click&idm=Ürünkategori&idmx=Ürünkategori&sayfa2=<?php echo $sayfa2 + 1;  ?>">Next</a>
         <?php
   }
        
        
      ?>
        
    
      
    
    </li>
   
      
  </ul>
</nav>
         

          </div>
                  <?php
            }
              
             
           
           
            
               
       
           
           
           if(isset($_GET["idmx"]) && $_GET["idmx"] != "Ürünkategori"){
            
                 $myvalarrx = array("Classic Cars", "Motorcycles", "Planes","Trucks and Buses","Ships","Vintage Cars");
        
       $alx = $_GET["idmx"];
           $mysearcarrx = in_array($alx, $myvalarrx);
               
               if($mysearcarrx ==1){
                   
             
            
               $valxim = $_GET["idmx"];
      
$sayfada3= 3; // sayfada gosterılcek ıcerık mıktarı

$katrıqueryım = mysqli_query($baglanti, "SELECT *
FROM `products`  INNER JOIN `depom` 
ON products.productCode = depom.productCode AND productLine = '$valxim'  " ); 

$toplamicerik3 = mysqli_num_rows($katrıqueryım);
               
               

$toplamsayfa3 = ceil($toplamicerik3 / $sayfada3 ); 

                 

$sayfa3 = isset($_GET["sayfa3"])  ? (int) $_GET["sayfa3"] : 1;  
                    
if($sayfa3<1)  $sayfa3 =1;

               


if($sayfa3 > $toplamsayfa3) $sayfa3 =$toplamsayfa3;

$limit3 = ($sayfa3-1)  * $sayfada3;
   

 $katrıquery2ım = mysqli_query($baglanti, "SELECT *
FROM `products`  INNER JOIN `depom` 
ON products.productCode = depom.productCode AND productLine = '$valxim'   LIMIT $limit3,$sayfada3" );
                    
                    
                    
                      ?> 
          <div class="col-md-9 order-2">
             

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 >
                    <?php
    
                    
               
                   $rowcount=  mysqli_num_rows($katrıqueryım);

                  echo "Sistemde toplam " .$rowcount. " ürün bulunmaktadır." ?> 
                    
                   
                    
                    
                    </h2></div>
             
              </div>
            </div>
            <div class="row mb-5">
                    <?php
               
                      if($_POST && $_SERVER["REQUEST_METHOD"] == "POST"){
                          
                          if(isset($_POST["basketval"])){// COKLU VVERILERI SESSIONA ATICAM ARRAY YAPCAZ
                    
                             
                          $id = $_GET["id"];
                              
                              $query = mysqli_query($baglanti, "SELECT * FROM `products` WHERE productCode='$id' " );
                             $satquery = mysqli_fetch_assoc($query);
                           
                        $productitemid =$satquery["productCode"];
                              
                              
                                 $ürünsm =  array(
                             "ıtemıd" => $_GET["id"],
                               "ürünadi" =>$_POST["productName"],
                                   "ürünfiyat" => $_POST["buyPrice"],
                                 "ürünacıklama" => $_POST["productDescription"],
                               "ürünresım" =>  $_POST['isim'],
                              "ürünadeti" =>  $_POST['adet'],
                                 
                            
                              );
                            
                               
                  if(isset($_SESSION["ürünlistem"])){// eger urunlıstemde uruns dıye array varsa bu sessıon ıcı doluysa yanı artık bura calısr ve $_SESSION["ürünlistem"]; $shopcart degıskenıne aktardım boylelıkle $ürüns arrayimi bu sefer nerden aldım sessıondan aldım boylelıkle  yenı urun ekledıgımde ben sessıonumdakı urunume bırtane daha ekledı
                     
                     $shopcart = $_SESSION["ürünlistem"];
                     
                   $ürüns = $shopcart["ürüns"];
                     
                                }else{
                     
                       $ürüns = array();
                        
                       
                 }      
                              //adet kontrolu productcode göre kontrol
                          
                                 if(array_key_exists($productitemid,$ürüns)){
                                 
                              $ürüns[$productitemid]["ürünadeti"]++;
                      //  $ürüns[$productitemid]["toplamtutar"] =  intval($ürüns[$productitemid]["toplamtutar"])*intval($ürüns[$productitemid]["ürünadeti"]);
                            
                           
                              }else{//eger yoksa aynı elemandan tıklanmamıssa dırek boyle yap ürüns arrayime verılerı ekle yanı
                              $ürüns[$_GET["id"]] = $ürünsm;// ayynı urunden ekledgınde yenı bırtane eklemedık ıd bazında yaptık bak burda dıkkat  yyanı productcode gore ekleme yaptık soonra bunu bır asagıda sessıona aktarmıs olduk
                             }
                          
                              
                              //sepetın hesaplanması
                              
                              
                              $totalprice = 0.0;
                              $totalcount = 0;
                              
                              
                              foreach($ürüns as  $ürval){ // $ürüns arrayimi tek tek dolasıcam hanı  ürünlistem arrayin icindekı value olan [ürüns] arrayımı tek tek dolasıcam
                                  //for dongusu olarak bu arrayın ıcını dolasıyıoruz ılk once urun adetı ve urun fıyatı carpıyoruz 
                                $ürval["totalprice"] = (int)$ürval["ürünadeti"] * (int)$ürval["ürünfiyat"];
                                $totalprice= $totalprice +  $ürval["totalprice"]; // 
                               
                         $totalcount+= $ürval["ürünadeti"];// arraydekı tum urun adetlerı ne kadar urun oldugunu sepette bununla ogrenıyoruz for dongusuyle urun adetlerı gezıyor ve topluyor
                            
                                  
                              }//sessıona atarsam toplam alısverısımle ılgılı sonuclarımı dıger sayfada sessıonla gormus olurum
                              
                              
                              //summary adında bır degısken olusturalım totalprice ve countı bu degıskenlere aktardık
                           $summary["totalprice"] = $totalprice;
                              $summary["totalcount"] = $totalcount;  
                              
                              
                              
                             $_SESSION["ürünlistem"]["ürüns"] = $ürüns;
                                $_SESSION["ürünlistem"]["summary"] = $summary; //summary adında bır array olusturmus olduk bu summary ıcındede  ıcersınde neyı al summary degıskenını al dedık
                   
                              
                     
                         
          
                  
                          }
                          
                          
                      }
       
           //bır ktegorıde get ıslemı clıck varsa burda onunla ılgılı ıcerıgı verecek
           
         
               
           
           
                  while($satir = mysqli_fetch_assoc($katrıquery2ım)){
                   //asagıda hıddenlı ınputlara valularına degerlerı koymamız lazım cunku burda kullanıcı forma bırsey gırmıyor dıkkat
                     
                       ?> 
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                     <form action="<?= htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&id=<?=$satir["productCode"];?>" method="post">
                         
                        
                  <figure class="block-4-image">
                    <img src="<?php echo $satir['isim']?> "  alt="Image placeholder" class="img-fluid">
                  </figure>
          
                  <div class="block-4-text p-4">
                      
                    <h3>Ürün İsmi: <?php echo $satir["productName"];  ?></h3>
                    <p class="mb-0"> Ürün Kodu: <?php echo $satir["productCode"];  ?></p>
                        <p class="mb-0"> Ürün Gamı: <?php echo $satir["productLine"];  ?></p>
                       <p class="mb-0"> Ürün Açıklaması: <?php echo $satir["productDescription"];  ?></p>
                       <p class="mb-0"> Stok: <?php echo $satir["quantityInStock"];  ?></p>
                      
                           <p class="mb-0"> Fiyat: <?php echo $satir["buyPrice"]; ?> TL</p>
                         <p class="mb-0"> Ürün skalası: <?php echo $satir["productScale"]; ?> TL</p>
                  
                    
                      <input type="hidden" name="productName" value="<?php echo $satir['productName']; ?>  ">
                       <input type="hidden" name="buyPrice" value="<?php echo $satir['buyPrice']; ?>  ">
                       <input type="hidden" name="productDescription" value="<?php echo $satir['productDescription']; ?>  ">
                          <input type="hidden" name="isim" value="<?php echo $satir['isim']; ?>  ">
                        <input type="hidden" name="adet"  value="1">
                        <button type="submit" name="basketval">Sepete ekle</button>
                  </div>
               </form>
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
        
   if($sayfa3 >1){
        ?>
        <a class="page-link" href="tumler.php?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&sayfa3=<?php echo $sayfa3 - 1;  ?>">Previous</a>
         <?php
   }
        
        
      ?>
    
    
      
    
    </li>
   
    <li class="page-item">
        
         <?php
   
    $ekgoster2 = 1;
    for($i = $sayfa3 - $ekgoster2; $i <= $sayfa3+ $ekgoster2; $i++ ){
     
       
      
       
        ?>
    <?php  
    
     
  if($i > 0 && $i <= $toplamsayfa3 ){
            
       
  
    ?>
  
        <a style="display:inline" class="page-link" href="tumler.php?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&sayfa3=<?php echo $i; ?>"><?php echo $i;  ?></a>
      
<?php 
       
    }

      
        }
      ?>
      
      </li>
    <li class="page-item">
         <?php
        
   if($sayfa3 >1 &&  $sayfa3 < $toplamsayfa3){
        ?>
        <a class="page-link" href="tumler.php?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&sayfa3=<?php echo $sayfa3 + 1;  ?>">Next</a>
         <?php
   }
        
        
      ?>
        
    
      
    
    </li>
   
      
  </ul>
</nav>
         

          </div>
                   
            <?php    
             
              }
                       
           }
           
    
           
           
          

       




    
$multıval = array ("Classic Cars" => array("Product Scale of 1:24","7","Product Scale of 1:18","47"),
                             "Motorcycles"=>array("Product Scale 1:24","12","26","Product Scale 1:32"),
                             "Planes"=>array("Product Scale 1:700","29"),
                             "Trucks and Buses"=>array("Product Scale 1:50","33","34","Product Scale 1:18"),
                             "Ships"=>array("Product Scale 1:700","41","44","Product Scale 1:24"),
                             "Vintage Cars"=>array("Product Scale 1:24","45","46","Product Scale 1:18"));
           
           
           if(isset($_GET["idmx"])){
               
               if(isset($_GET["idmxid"])){
                   
                   
            
                   
                   
                   
                   
              
                  $ax =  $_GET["idmxid"];
    
      foreach($multıval as $mykey => $myval){
          
          foreach($myval as  $myval2){
              
              if($myval2 === $ax ){
                
                  
                  $quetrmy = mysqli_query($baglanti, "SELECT *
FROM kategori
WHERE id= '$myval2'  " ); //ıdden product sclaleyı benzersız belırleyebılrıyoz
                 /* $xx = mysqli_fetch_assoc($quetrmy);
                  echo "<pre>";
                  print_r($xx);
                     echo "</pre>";*/
           
                     $toplamx = mysqli_num_rows($quetrmy);
                  
                  
           
               
              }
             
              
              
          }

          
          
      }
               
               
               
               
               
               
               
             }   
           }
           
   
           
 
          // $mysearcarr23 = in_array(isset($_GET["idmx"]), $multıval);
          
           
           if(isset($_GET["idmx"]) && ($_GET["idmx"] !== "Ürünkategori" && isset($toplamx) == 1)  ){
          
          
              
               $valxim = $_GET["idmx"];
             
            
     
              
$sayfada3= 3; // sayfada gosterılcek ıcerık mıktarı

$katrıqueryım = mysqli_query($baglanti, "SELECT *
FROM `products`  INNER JOIN `depom` 
ON products.productCode = depom.productCode AND productScale = '$valxim' " ); 

$toplamicerik3 = mysqli_num_rows($katrıqueryım);
          
               

$toplamsayfa3 = ceil($toplamicerik3 / $sayfada3 ); 

                 

$sayfa3 = isset($_GET["sayfa4x"])  ? (int) $_GET["sayfa4x"] : 1;  
                    
if($sayfa3<1)  $sayfa3 =1;

               


if($sayfa3 > $toplamsayfa3) $sayfa3 =$toplamsayfa3;

$limit3 = ($sayfa3-1)  * $sayfada3;
   

 $katrıquery2ım = mysqli_query($baglanti, "SELECT *
FROM `products`  INNER JOIN `depom` 
ON products.productCode = depom.productCode AND productScale = '$valxim'   LIMIT $limit3,$sayfada3" );
                    
                    
                    
                      ?> 
          <div class="col-md-9 order-2">
             

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 >
                    <?php
    
                    
               
                   $rowcount=  mysqli_num_rows($katrıqueryım);

                  echo "Sistemde toplam " .$rowcount. " ürün bulunmaktadır." ?> 
                    
                   
                    
                    
                    </h2></div>
             
              </div>
            </div>
            <div class="row mb-5">
                    <?php
               
                      if($_POST && $_SERVER["REQUEST_METHOD"] == "POST"){
                          
                          if(isset($_POST["basketval"])){// COKLU VVERILERI SESSIONA ATICAM ARRAY YAPCAZ
                    
                             
                          $id = $_GET["id"];
                              
                              $query = mysqli_query($baglanti, "SELECT * FROM `products` WHERE productCode='$id' " );
                             $satquery = mysqli_fetch_assoc($query);
                           
                        $productitemid =$satquery["productCode"];
                              
                              
                                 $ürünsm =  array(
                             "ıtemıd" => $_GET["id"],
                               "ürünadi" =>$_POST["productName"],
                                   "ürünfiyat" => $_POST["buyPrice"],
                                 "ürünacıklama" => $_POST["productDescription"],
                               "ürünresım" =>  $_POST['isim'],
                              "ürünadeti" =>  $_POST['adet'],
                                 
                            
                              );
                            
                               
                  if(isset($_SESSION["ürünlistem"])){// eger urunlıstemde uruns dıye array varsa bu sessıon ıcı doluysa yanı artık bura calısr ve $_SESSION["ürünlistem"]; $shopcart degıskenıne aktardım boylelıkle $ürüns arrayimi bu sefer nerden aldım sessıondan aldım boylelıkle  yenı urun ekledıgımde ben sessıonumdakı urunume bırtane daha ekledı
                     
                     $shopcart = $_SESSION["ürünlistem"];
                     
                   $ürüns = $shopcart["ürüns"];
                     
                                }else{
                     
                       $ürüns = array();
                        
                       
                 }      
                              //adet kontrolu productcode göre kontrol
                          
                                 if(array_key_exists($productitemid,$ürüns)){
                                 
                              $ürüns[$productitemid]["ürünadeti"]++;
                      //  $ürüns[$productitemid]["toplamtutar"] =  intval($ürüns[$productitemid]["toplamtutar"])*intval($ürüns[$productitemid]["ürünadeti"]);
                            
                           
                              }else{//eger yoksa aynı elemandan tıklanmamıssa dırek boyle yap ürüns arrayime verılerı ekle yanı
                              $ürüns[$_GET["id"]] = $ürünsm;// ayynı urunden ekledgınde yenı bırtane eklemedık ıd bazında yaptık bak burda dıkkat  yyanı productcode gore ekleme yaptık soonra bunu bır asagıda sessıona aktarmıs olduk
                             }
                          
                              
                              //sepetın hesaplanması
                              
                              
                              $totalprice = 0.0;
                              $totalcount = 0;
                              
                              
                              foreach($ürüns as  $ürval){ // $ürüns arrayimi tek tek dolasıcam hanı  ürünlistem arrayin icindekı value olan [ürüns] arrayımı tek tek dolasıcam
                                  //for dongusu olarak bu arrayın ıcını dolasıyıoruz ılk once urun adetı ve urun fıyatı carpıyoruz 
                                $ürval["totalprice"] = (int)$ürval["ürünadeti"] * (int)$ürval["ürünfiyat"];
                                $totalprice= $totalprice +  $ürval["totalprice"]; // 
                               
                         $totalcount+= $ürval["ürünadeti"];// arraydekı tum urun adetlerı ne kadar urun oldugunu sepette bununla ogrenıyoruz for dongusuyle urun adetlerı gezıyor ve topluyor
                            
                                  
                              }//sessıona atarsam toplam alısverısımle ılgılı sonuclarımı dıger sayfada sessıonla gormus olurum
                              
                              
                              //summary adında bır degısken olusturalım totalprice ve countı bu degıskenlere aktardık
                           $summary["totalprice"] = $totalprice;
                              $summary["totalcount"] = $totalcount;  
                              
                              
                              
                             $_SESSION["ürünlistem"]["ürüns"] = $ürüns;
                                $_SESSION["ürünlistem"]["summary"] = $summary; //summary adında bır array olusturmus olduk bu summary ıcındede  ıcersınde neyı al summary degıskenını al dedık
                   
                              
                     
                         
          
                  
                          }
                          
                          
                      }
       
           //bır ktegorıde get ıslemı clıck varsa burda onunla ılgılı ıcerıgı verecek
           
         
             
           
                  while($satir = mysqli_fetch_assoc($katrıquery2ım)){
                   //asagıda hıddenlı ınputlara valularına degerlerı koymamız lazım cunku burda kullanıcı forma bırsey gırmıyor dıkkat
                     
                       ?> 
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                 <form action="<?= htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&idmxid=<?php echo $_GET["idmxid"] ; ?>&id=<?=$satir["productCode"];?>" method="post">
                         
                        
                  <figure class="block-4-image">
                    <img src="<?php echo $satir['isim']?> "  alt="Image placeholder" class="img-fluid">
                  </figure>
          
                  <div class="block-4-text p-4">
                      
                    <h3>Ürün İsmi: <?php echo $satir["productName"];  ?></h3>
                    <p class="mb-0"> Ürün Kodu: <?php echo $satir["productCode"];  ?></p>
                        <p class="mb-0"> Ürün Gamı: <?php echo $satir["productLine"];  ?></p>
                       <p class="mb-0"> Ürün Scale: <?php echo $satir["productScale"];  ?></p>
                       <p class="mb-0"> Stok: <?php echo $satir["quantityInStock"];  ?></p>
                      
                           <p class="mb-0"> Fiyat: <?php echo $satir["buyPrice"]; ?> TL</p>
                         <p class="mb-0"> Ürün skalası: <?php echo $satir["productScale"]; ?> TL</p>
                  
                    
                      <input type="hidden" name="productName" value="<?php echo $satir['productName']; ?>  ">
                       <input type="hidden" name="buyPrice" value="<?php echo $satir['buyPrice']; ?>  ">
                       <input type="hidden" name="productDescription" value="<?php echo $satir['productDescription']; ?>  ">
                          <input type="hidden" name="isim" value="<?php echo $satir['isim']; ?>  ">
                        <input type="hidden" name="adet"  value="1">
                        <button type="submit" name="basketval">Sepete ekle</button>
                  </div>
               </form>
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
        
   if($sayfa3 >1){
        ?>
        <a class="page-link" href="tumler.php?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&idmxid=<?php echo $_GET["idmxid"] ; ?>&sayfa4x=<?php echo $sayfa3 - 1;  ?>">Previous</a>
         <?php
   }
        
        
      ?>
    
    
      
    
    </li>
   
    <li class="page-item">
        
         <?php
   
    $ekgoster2 = 1;
    for($i = $sayfa3 - $ekgoster2; $i <= $sayfa3+ $ekgoster2; $i++ ){
     
       
      
       
        ?>
    <?php  
    
     
  if($i > 0 && $i <= $toplamsayfa3 ){
            
       
  
    ?>
  
        <a style="display:inline" class="page-link" href="tumler.php?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"];?>&idmxid=<?php echo $_GET["idmxid"] ; ?>&sayfa4x=<?php echo $i; ?>"><?php echo $i;  ?></a>
      
<?php 
       
    }

      
        }
      ?>
      
      </li>
    <li class="page-item">
         <?php
        
   if($sayfa3 >1 &&  $sayfa3 < $toplamsayfa3){
        ?>
        <a class="page-link" href="tumler.php?action=click&idm=<?php echo $_GET["idmx"] ; ?>&idmx=<?php echo $_GET["idmx"] ; ?>&idmxid=<?php echo $_GET["idmxid"] ; ?>&sayfa4x=<?php echo $sayfa3 + 1;  ?>">Next</a>
         <?php
   }
        
        
      ?>
        
    
      
    
    </li>
   
      
  </ul>
</nav>
         

          </div>
                   
            <?php    
            
            
            
           }
           
           }
           if(!isset($_GET["idm"])){
               ?>
                   <div class="col-md-9 order-2">
                       <div class="row mb-5">
                           
                       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="abcimage/a.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="abcimage/c.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="resimdosya/motor_yacht_annabel_II_point_Yachting_01-1024x683.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
                           
                           </div>
                           </div>
            <?php
                  
           }
                  
         
             ?> 
             
          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">the best of Product Categories</h3>
              
                      <?php
        
           function categrıflter($kid = NULL){//ılk once ana catagorılerı yazacak anasayfa urun kategorısı yazıcak cunku null onlar sonra hızmetler ıletısım yazılmıcak cunku ılk once urunkategorısının alt katmanlarını yazcak cunku ıdler ornegın  urunkagetorısı 2 ıdlı bu 2 ıdlı ye baglı kategorııd 2 olanlar var oyle dusun. bunun asagıda algorıtması mevcut 
  
               
$sunucu = "localhost";
    $kullanici = "root";
    $sifre = "";
    $veritabani = "classicmodels";
    $port = 3306;

    /* VeritabanÄ±na baÄŸlantÄ± */
    $baglanti = mysqli_connect($sunucu, $kullanici, $sifre, $veritabani, 3306)
        or die("VeritabanÄ±na baÄŸlantÄ± gerÃ§ekleÅŸtirilemedi..!");

    /* TÃ¼rkÃ§e karakterler iÃ§in dÃ¼zenleme */
    mysqli_set_charset($baglanti,"utf8");


           $db = mysqli_query($baglanti, "SELECT * 
FROM `kategori` "  );// bır dısarda yazdıgın arrayden almıyorsun ozman parametre olarak gırerdın ama arrayı verı tabanından cekıcez

         
         /*      while( $satirım2 = mysqli_fetch_assoc($db)){ // sanırsam db yı foreachde kullanmassak satırım2yı kulanırsak arrayde printr dııyınce array dıyıp ıcınde key value seklınde tek bır array verıyor  galıba onun ıcın foreach calısmıyor db dersen asagdakı gıbı foreach calsııyor  ama whıle da bu sekılde calsıyıor cunku ne kadar array var okadar calısıyor whıle dongusu 
                   echo $satirım2["isim"];
               }*/
               
             
           $db2 = mysqli_query($baglanti, "SELECT * 
FROM `kategori` "   );
               
             
               
               
                ?>
                 <ul class="list-unstyled mb-0">
                        <?php
                     foreach($db as $katname){
                         
                         if($katname["kid"] == $kid){ // ılk once ana kısım gelmesı ıcın nullları getırdıyorum sonra urun kategorısı kendı ıcınde kategorılesıyor ondan sonra hızmet vs yazılıyor
                             
                                ?>
                       <li class="mb-1"><a href="<?= htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>?action=click&idm=<?=$katname["isim"];?>&idmx=<?=$katname["isim"];?>&idmxid=<?=$katname["id"];?>" class="d-flex"><?php echo $katname["isim"]  ?></a> </li> 
                         <?php
                                    //eger gget ıle tıklanma varsa bırdaha ıcınde recursvıe yapıyoruz alt kategorı gelıyor
                              
                                       if($_SERVER["REQUEST_METHOD"] == "GET"){
                                            
                                           if(isset( $_GET["idm"])){
                                               
                                               if($katname["kid"] == null){
                                                   
                                                   categrıflter($katname["id"]); //aslında ıc ıce dongu olusturmus mantıgı vardır ozellıkle ıc ıce kactane dongu olusutrmak gerektıgını kestıremedıgımız zzamanlarda bunun gıbı orneklerde kullanılabılır 
                                               }else{
                                                    if($_SERVER["REQUEST_METHOD"] == "GET"){
                                            
                                           if(isset($_GET["idmx"]) && $_GET["idmx"] == $katname["isim"]  ){
                                                   categrıflter($katname["id"]);
                                               }
                                                    }
                                               }
                                               
                             
                             //burdakı mantıkta null olarak anasayfa sonra  urunkategorısı geldı sonra fonksıyonu gıne ıcınde dırekt olarak cagırdık prametre olarak 3 ve 4 ıdlılerı geldı  ısmı yazıldı sonra ıd2 gonderıldı yenıden fonksıyon ıcıne  parametre olarak kategorı ıd 2 olarak aldı cunku ıd2 olarak yolladk nabms olduk aslında for ıcınde for yazılmıs gıbı oldu kategorı ıdsı 2 olanlar aslında  urunkategorısıne geldı o sekılde bır mantık ıslıyor
                                           }
                                           
                                       }
                                    
                           
                             
                         }//ayrıca https://www.youtube.com/watch?v=TZ6AJRjJ1M0&t=419s bu lınktede anlatılmıs o mantıkta guzel aslında aynı mantık
                        
                     }
                   
                     
                      ?>
                      </ul>
                <?php
               
           }
        
         categrıflter();
      ?>
              
        
            </div>

                <?php
              if($_SERVER["REQUEST_METHOD"] == "GET"){
          
      
                
                if(isset($_GET["idm"])){
                      ?> 
            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Stok bilgisine göre</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Bitmek üzere olan ürünler (15)</span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Az kalmıs ürünler (150)</span>
                </label>
               
              </div>

            
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Fiyat bilgisine göre</h3>
                <label for="s_sm" class="d-flex">
                  <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">0 - 25 TL </span>
                </label>
                <label for="s_md" class="d-flex">
                  <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black"> 25 - 75 TL </span>
                </label>
                <label for="s_lg" class="d-flex">
                  <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">75 - 99 TL</span>
                </label>
              </div>
 <button type="submit" name="fltrename">filtre Uygula</button>
            </div>
              
               <?php
                }
              }
            ?> 
          </div>
        </div>

     
        
      </div>
    </div>

   
  </div>

 <?php  require_once("footer.php");  ?>   






           
           <?php  
           
       }
     
      
   
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
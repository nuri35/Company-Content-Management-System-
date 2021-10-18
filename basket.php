
  <?php 
require_once("ornek.php");

 include("ayar.php");



?>
  
     



<!DOCTYPE html>
 <?php  require_once("header.php");  ?>
<?php

   if(isset($_POST["deletesıl"])){
                        require_once("removefun.php");
                        $removeval = $_POST["deletesıl"];
                        
                       echo removecart($removeval); // fonksıyonda calıstırdık 
                    }

   if(isset($_GET["p"])){
                   require_once("removefun.php");     
       $ıslem = $_GET["p"];
       
       if($ıslem == "incCount"){
           
           $id= $_GET["productıd"];
           
        //arttırma fonksıyonu  
       
           
            if(incCount($id)){
                header("location:basket.php");
            }
           
           
       }elseif($ıslem == "decCount"){
            $id= $_GET["productıd"];
           
               //azaltma  fonksıyonu   

            if(decCount($id)){
                header("location:basket.php");
            }
           
       }
       
       
       
                    }


   $count = isset($_SESSION["ürünlistem"]["summary"]); 
 

if($count){
  $count = $_SESSION["ürünlistem"]["summary"];
  $uruns = $_SESSION["ürünlistem"]["ürüns"];
     ?>
    <section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Sepetim</h3>
            <p class="mb-5 text-center">
              Sepetinizde    <i class="text-info font-weight-bold"><?php echo   $count["totalcount"];  ?> adet ürün </i>ekli</p>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:60%">Product</th>
                        <th style="width:12%">Price</th>
                        <th style="width:10%">Quantity</th>
                        <th style="width:16%"></th>
                    </tr>
                </thead>
                <tbody> 
                <?php   /* 1.ornek $valcount =  count($_SESSION["ürünlistem"]["ürüns"]);
                            $i = 0;
                       while($i<$valcount){
                             ?>
                            <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="https://via.placeholder.com/250x250/5fa9f8/ffffff" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4><?php echo   $uruns["ürünadi"];  ?></h4>
                                 
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$49.00</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="1">
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>  
                            
                       
                    <?php
                           $i++;
                        }*/
  
                          foreach($uruns as $product){// bıde burda myvalue dıyede $productan sonra dıyebılırdın ama oda value olur ama oda bır array onuda forla gezmen gerekır  bızım amacımız bu degl zaten 
                           
                              //unutma burda uruns for la gezıyorsun ııcndekı productcodelı key ve onun arraylerı olan valuları sana verır ama value da yazdıramassaın oda bır array bız as dıyerek key olarak $product aldık onuda forla gezdıgımı ılgılı urunun orada  $product["ürünadi"] dıyerek aslında ılgılı urunun ısmını verıyor 
                             ?>
                     <form action="<?= htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>" method="post">   
                
                            <tr>
                              
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="<?php echo   $product["ürünresım"];  ?>" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4><?php echo   $product["ürünadi"];  ?></h4>
                                 
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"><?php echo   $product["ürünfiyat"];  ?></td>
                             
                        <td data-th="Quantity">
                           <a href="<?=$_SERVER['PHP_SELF']?>?p=incCount&productıd=<?php echo   $product["ıtemıd"];  ?>" class="button">
                            Arttır
                            </a>
                            
                            <input  type="text" class="form-control  form-control-lg text-center" value="<?php echo $product["ürünadeti"]; ?>">
                            <br>
                            
                             <a href="<?=$_SERVER['PHP_SELF']?>?p=decCount&productıd=<?php echo   $product["ıtemıd"];  ?>" class="button">
                            Azalt
                            </a>
                        </td>
                                  
                                
                               
                        <td class="actions" data-th="">
                            <div class="text-right">
                              
                                <button value="<?php echo   $product["ıtemıd"];  ?>"  type="submit" name="deletesıl" class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>  
                            </form>    
                       
                    <?php
                        
                        }
    
    
    
    
                   ?>
            
                 
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>Subtotal:</h4>
                <h1><?php echo $count["totalprice"]; ?> TL</h1>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Sepeti Onayla</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
          <a href="tumler.php?action=click&idm=<?php echo $_SESSION['OTHER'] ; ?>&idmx=<?php echo $_SESSION['OTHER'] ; ?>&idmxid=<?php echo $_SESSION['otherıd'] ; ?>">
                <i class="fas fa-arrow-left mr-2"></i>Alışverişe devam et</a>
            
        </div>
    </div>
</div>
       
     
</section>
   <?php 
}else{
    ?>
    <p class="mb-5 text-center">
              Sepetinizde    <i class="text-info font-weight-bold"> Ürün  </i>Bulunmamaktadır. Ekleme yapmak için <a href="tumler.php">tıklayınız</a></p>
<?php 
}
?>


 <?php  require_once("footer.php");  ?>   
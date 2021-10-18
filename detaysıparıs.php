<?php
/* Bağlantı Kurulması */
require_once("ornek.php");
/* Veritabanı sorgulama */

   include("ayar.php");

$sorgu = mysqli_query($baglanti, "SELECT * FROM orders");

$sorgu2 = mysqli_query($baglanti, "SELECT * FROM products");

$sorgu3 = mysqli_query($baglanti, "SELECT * FROM customers");

?>













<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="s%C4%B1pa.css"  rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        
 
        
        
    </head>

<!------ Include the above in your HEAD tag ---------->
<body>
  
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Hoş geldınız</h3>
                        <p>Ürün işlemlerine dair bilgileri burada ekleyebilirsiniz!</p>
                  
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ürün detay</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ana ürün </a>
                            </li>
                        </ul>
                         

                        <div class="tab-content" id="myTabContent">
                          
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <form action="ekspariseklendi.php" method="post">  
                                <h3 class="register-heading">Ürün işlemleri</h3>
                                <div class="row register-form">
                          <div class="col-md-6">
                                        <div class="form-group">
                                           
                                              <select name="orderNumber" id="orderNumber"  class="form-control" >
              <option   selected>Sipariş numarası</option> 
            <?php 
              
             while($satir = mysqli_fetch_assoc($sorgu)){
             ?>
           
            <option value="<?php echo $satir['orderNumber']; ?>"><?php echo $satir['orderNumber']; ?></option>
            <?php }?>
        
            </select>
                                                
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                           
                                              <select name="productCode" id="productCode"  class="form-control" >
              <option   selected>Ürün kodu</option> 
            <?php 
              
             while($satir = mysqli_fetch_assoc($sorgu2)){
             ?>
           
            <option value="<?php echo $satir['productCode']; ?>"><?php echo $satir['productCode']; ?></option>
            <?php }?>
        
            </select>
               
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="quantityOrdered" class="form-control" placeholder="quantityOrdered*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="priceEach"  placeholder="priceEach*" value="" />
                                        </div>
                                        
                                          <div class="form-group">
                                            <input type="password" class="form-control" name="orderLineNumber"  placeholder="orderLineNumber*" value="" />
                                        </div>
                                        
                                       <input type="submit" class="btnRegister"  value="Registerr"/>
                                    </div>
                                      
                                </div>
                       
                          </form>
                                     
                 
                            </div>
                                    
                            
                               
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                 <form action="spariseklendi.php" method="post">
                                <h3  class="register-heading">Ana ürün işlemleri</h3>
                                <div class="row register-form">
                                         
                                    <div class="col-md-6">
                                        
                                         <div class="form-group">
                                            <input type="type" name="orderNumber" class="form-control" placeholder="orderNumber*" value="" />
                                          
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <input type="date" name="orderDate" class="form-control" placeholder="orderDate*" value="" />
                                            <label>orderDate*</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="requiredDate" class="form-control" placeholder="requiredDate*" value="" />
                                            <label>requiredDate*</label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="date"  name="shippedDate" class="form-control" placeholder="shippedDate*" value="" />
                                                  <label>shippedDate*</label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="status" class="form-control" placeholder="status*" value="" />
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text" name="comments" maxlength="10" minlength="10" class="form-control" placeholder="comments *" value="" />
                                        </div>
                                        
                                     
                                               <div class="form-group">
                                                
                                                  <select name="customerNumber" id="customerNumber"  class="form-control" >
              <option   selected>Müşteri</option> 
            <?php 
              
             while($satir = mysqli_fetch_assoc($sorgu3)){
             ?>
           
            <option value="<?php echo $satir['customerNumber']; ?>"><?php echo $satir['customerName']; ?></option>
            <?php }?>
        
            </select>  
                                                   
                                        </div>
                                        
                                        
                                        
                                        

  <input type="submit" class="btnRegister"  value="Registerr"/>
                                    </div>
                                      
                                </div>
                                 
                                       </form> 
                            </div>
                    
                                  
                                           
                        </div>
                
                            
                        
                  
                      
                        
                    </div>
                    
                </div>

            </div>
      </body>
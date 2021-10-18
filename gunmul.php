
<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
   
    /* Veritabanı sorgulama */
    $guncellene = mysqli_real_escape_string($baglanti, $_GET["productCode"]);

 include("ayar.php");
  
  
$sorgu = mysqli_query($baglanti, "SELECT * FROM products WHERE productCode   = '$guncellene'  ");


$satir = mysqli_fetch_assoc($sorgu)
    



    
    


?>







<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v9</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor1/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css1/style.css">
        
    
        
	</head>
	<body>
        
        
        
                    
		<div class="wrapper">
                 
            
                <form  id="wizard" action="guncelle.php" method="post">
                    
                  
                   
        		<!-- SECTION 1 -->
           <h4>
                    
            </h4>
        
              <section >

                    <h3>Ürün güncelleme</h3>
                  
                  
                  
                  
                	<div class="form-row">
                        <div class="form-col">
                            
                            <div class="form-holder">
                              
                                 <label for="productCode"></label> 
                               <input type="hidden" name="productCode"   value="<?php echo $satir['productCode']; ?>"   required>
                            </div>
                        </div>
                        
                        
                         <div class="form-col">
                            
                            <div class="form-holder">
                          
                                 <label for="quantityInStock">  quantityInStock  </label> 
                               <input type="text" name=" quantityInStock  "   value="<?php echo $satir['quantityInStock']; ?>"   required>
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-col">
                            <label for="">
                             productName
                            </label>
                             <i class="zmdi zmdi-edit"></i>
                            <div class="form-holder">
                               
                                 <input type="text" name="productName"   value="<?php echo $satir['productName']; ?>"    required>
                            </div>
                        </div>
                	</div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                            productLine
                            </label>
                             <i class="zmdi zmdi-email"></i>
                            <div class="form-holder">
                               
                                 <input type="text" name="productLine"    value="<?php echo $satir['productLine']; ?>"    required>
 
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                     productScale
                            </label>
                             <i class="zmdi zmdi-smartphone-android"></i>
                            <div class="form-holder">
                               
                                <input type="text" name="productScale"   value="<?php echo $satir['productScale']; ?>"   required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                            productVendor
                            </label>
                                   <i class="zmdi zmdi-spellcheck"></i>
                            <div class="form-holder">
                         
                               <input type="text" name="productVendor"  value="<?php echo $satir['productVendor']; ?>"  required>
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                              productDescription
                            </label>
                              <i class="zmdi zmdi-calendar"></i>
                            <div class="form-holder">
                              
                               <input type="text" name="productDescription"   value="<?php echo $satir['productDescription']; ?>"  required>
                            </div>
                        </div>
                        
                          <div class="form-col">
                            <label for="">
                       buyPrice
                            </label>
                              <i class="zmdi zmdi-calendar"></i>
                            <div class="form-holder">
                              
                                <input type="text" name="buyPrice" value="<?php echo $satir['buyPrice']; ?>"  required>
    
                            </div>
                        </div>
                        
                         <div class="form-col">
                            <label for="">
             MSRP
                            </label>
                              <i class="zmdi zmdi-calendar"></i>
                            <div class="form-holder">
                              
                               <input type="text" name="MSRP" value="<?php echo $satir['MSRP']; ?>"  required>
    
                            </div>
                        </div>
                        
                        
                        
                        
                    </div>
                  
<input class="gg"  type="submit"   style="background-color: #3b87d9;
    color: aliceblue;  border: none;
  display: inline-flex;
  height: 42px;
  width: 112px;
  align-items: center; justify-content: center;  cursor: pointer;   "           value="Güncelle" >
                  
                  
          
                </section>
                
				
           

                
            </form>
                  </div>
          
            
 
   
            
      
                    
  
                    
                 
             
   
		
 
		<script src="js1/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js1/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor1/date-picker/js/datepicker.js"></script>
		<script src="vendor1/date-picker/js/datepicker.en.js"></script>

		<script src="js1/main.js"></script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>
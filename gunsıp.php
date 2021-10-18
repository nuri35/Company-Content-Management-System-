<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
   
    /* Veritabanı sorgulama */
    $guncellenec = mysqli_real_escape_string($baglanti, $_GET["orderNumber"]);
 include("ayar.php");

  
$sorgu = mysqli_query($baglanti, "SELECT * FROM orders WHERE orderNumber    = '$guncellenec'  ");


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
                      <form  id="wizard" action="guncellesıp.php"   method="post">
                    
          <section>
                	<h3>Siparis güncellemesi</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                          orderdate
                            </label>
                             <i class="zmdi zmdi-account-o"></i>
                            <div class="form-holder">
                               
                               
                               <input type="text" name="orderDate" value="<?php echo $satir['orderDate']; ?>"  required> 
                               
                            </div>
                        </div>
                        
                        
                         <div class="form-col">
                            <label for="">
                        
                            </label>
                            
                            <div class="form-holder">
                               
                               
                               <input type="hidden" name="orderNumber" value="<?php echo $satir['orderNumber']; ?>"  required> 
                               
                            </div>
                        </div>
                        
      
                        
                        
                        
                        
                        <div class="form-col">
                            <label for="">
                       requiredDate
                            </label>
                             <i class="zmdi zmdi-pin"></i>
                            <div class="form-holder">
                              
                                  <input type="text" name="requiredDate" value="<?php echo $satir['requiredDate']; ?>"  required> 
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                        shippedDate
                            </label>
                                <i class="zmdi zmdi-home"></i>
                            <div class="form-holder">
                            
                               <input type="text" name="shippedDate" value="<?php echo $satir['shippedDate']; ?>"  required> 
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                      status
                            </label>
                             <i class="zmdi zmdi-pin-drop"></i>
                            <div class="form-holder">
                               
                                <input type="text" name="status" value="<?php echo $satir['status']; ?>"  required> 
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">	
                       	comments
                            </label>
                            <i class="zmdi zmdi-pin"></i>
                            <div class="form-holder">
                                
                                 <input type="text" name="comments" value="<?php echo $satir['comments']; ?>"  required> 
                            </div>
                        </div>
                      
                    </div>
                   
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">	
                     customerNumber
                            </label>
                            <i class="zmdi zmdi-pin"></i>
                            <div class="form-holder">
                                
                                 <input type="text" name="customerNumber" value="<?php echo $satir['customerNumber']; ?>"  required> 
                            </div>
                        </div>
                      
                    </div>
                   
  
                   <input class="gg" type="submit"   style="background-color: #3b87d9;
    color: aliceblue;  border: none;
  display: inline-flex;
  height: 42px;
  width: 112px;
  align-items: center; justify-content: center;  cursor: pointer;   "   value="Güncelle" >
            
                   
                </section>

      
        </div>
        
        
        
      
        	<script src="js1/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js1/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor1/date-picker/js/datepicker.js"></script>
		<script src="vendor1/date-picker/js/datepicker.en.js"></script>

		<script src="js1/main.js"></script>
     </body>
    
    </html>
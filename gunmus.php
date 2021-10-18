<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
   
    /* Veritabanı sorgulama */
    $guncellenecen = mysqli_real_escape_string($baglanti, $_GET["customerNumber"]);

 include("ayar.php");
  
$sorgu = mysqli_query($baglanti, "SELECT * FROM customers WHERE customerNumber    = '$guncellenecen'  ");


$satir = mysqli_fetch_assoc($sorgu)
    



    
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts3/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css3/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images3/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form action="guncellemus.php" method="POST" class="register-form" id="register-form">
                        <h2>Müşteri güncelleme işlemleri</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name"></label>
                                  <input type="hidden" name="customerNumber" value="<?php echo $satir['customerNumber']; ?>"  required> 
                            </div>
                            <div class="form-group">
                                <label for="father_name">customerName:</label>
                                 <input type="text" name="customerName" value="<?php echo $satir['customerName']; ?>"  required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">phone :</label>
                             <input type="text" name="phone" value="<?php echo $satir['phone']; ?>"  required> 
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">city :</label>
                            <div class="form-radio-item">
                                <input type="text" name="city" value="<?php echo $satir['city']; ?>"  required> 
                               
                              
                            </div>
                           
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">country :</label>
                                <div class="form-select">
                                   
                                      <input type="text" name="country" value="<?php echo $satir['country']; ?>"  required> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">salesRepEmployeeNumber :</label>
                                <div class="form-select">
                                   <input type="text" name="salesRepEmployeeNumber" value="<?php echo $satir['salesRepEmployeeNumber']; ?>"  required> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="city">creditLimit :</label>
                                <div class="form-select">
                                   <input type="text" name="creditLimit" value="<?php echo $satir['creditLimit']; ?>"  required> 
                                </div>
                            </div>
                        <div class="form-submit">
                           
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor3/jquery/jquery.min.js"></script>
    <script src="js3/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
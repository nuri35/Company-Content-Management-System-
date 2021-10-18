<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");


$_SESSION["token2"]=bin2hex(random_bytes(16));
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imagesl/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssl/util.css">
	<link rel="stylesheet" type="text/css" href="cssl/main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts33/icomoon/style.css">

    <link rel="stylesheet" href="css33/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css33/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css33/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--===============================================================================================-->
</head>
    <style>
    
        .dropdown{
            text-align: center;
        }
        .turcss{
            border-radius: 10px;
            text-decoration: none;
            margin: 10px;
            padding: 5px;
        }
    
    </style>
   
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('imagesl/bg-01.jpg');">
           
			<div class="wrap-login100 p-t-30 p-b-50">
                
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="log.php"   method="post">
                         
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="firstName" 
                             <?php
                                  require_once("ornek.php");
                               // php ıcıne html kodu yazmak ıcın acıp kapattık value placeholder gıbı etıketler mesela html kodudur. daha sonra value ıcınde php actık oraya cokıden aldıgımzı dınamık bılgıyı koyduk. html gibi input yapıların ıcıne echoluk bır bılgı gıreceksek bunu valueya yazarız.
                               if(isset($_COOKIE["firstName"])){ ?>
                                   
                                   value="<?php echo $_COOKIE["firstName"]; ?>"  
                                     <?php
                                    // unutma cokiler birer arraydir foreachle butun ekrana yazdırabılrısn
                                  
                               }else{
                                   ?>
                                 placeholder="firstName giriniz"
                               <?php
                               }
                               
                               //token ıcın ınpt yaptık hıdden dedık name belırledık smdı yenıdenn log.phpye bak
                                ?>
                               
                             >
                         <input type="hidden" class="wizard-file" id="a8755cf0-f4d1-6376-ee21-a6defd1e7c08" name="tokens" value="<?php echo $_SESSION["token2"] ?>">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="sifre" 
                               
                              <?php
                              
                               if(isset($_COOKIE["sifre"])){ ?>
                                   
                                   value="<?php echo $_COOKIE["sifre"]; ?>" 
                                  
                                     <?php
                                    
                               }else{
                                   ?>
                                 placeholder="Şifre giriniz"
                               <?php
                               }
                                ?>
                               
                             >  
                               
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
                    
                    <div class="form-check">
                        
                        <input type="checkbox"  
                               
                               <?php
                              
                               if(isset($_COOKIE["firstName"])){ ?>
                                   
                                  checked
                                  
                                     <?php
                                    
                               }else{
                                   ?>
                                
                               <?php
                               }
                                ?>
                               
                               
                            
                               class="form-check-input" name="benıhatıra">
                        <label class="form-check-label" for="benıhatıra">Beni hatırla</label>
  </div>

                     <?php
                  require_once("ornek.php");
   
   
                // dıger sayfada ? ıle logın demıstık sımdı burda get logın dıyerek esıttırın karsısındakı degerı almıs olucaz//
                    if(isset($_GET['loggın'])=="no"){
                        
                         ?>
                    <div id="as" class="alert alert-danger">
                            
                    Hatalı giriş
                        </div>
                    
                    <?php
                       
                           
                       
                        
                           
                    } elseif(isset($_GET['durum'])=="exit"){
                          ?>
                        <div class="alert alert-success">
                              
                        <p>başarıyla cıkış yapıldı</p>
                        </div>
                     <?php
                        
                    }elseif(isset($_GET['kıt'])=="yes"){
                        /*
                        $firstName="Diane" ;
    $sifre="SASA";
                         $sorguz = mysqli_query($baglanti, "SELECT zamankıt FROM employees WHERE ((firstName = '$firstName' AND sifre != '$sifre')  OR  (firstName = '$firstName' AND  sifre =  '$sifre')) ");
               $satir = mysqli_fetch_assoc($sorguz);
                      
                        date_default_timezone_set("Europe/Istanbul");
                        
                        echo date_default_timezone_get();
                        

 $date1=date_create($satir["zamankıt"]); 
 
             $date2=date_create(date("H:i:s"));
             $diff=date_diff($date1,$date2);
           $a = $diff->format("%H");
                        echo $a;
         echo "<pre>";
 echo date("H:i:s");
                        
*/
                         ?>
                    
                    
                    <p class="alert alert-danger">Çok fazla fazla deneme yaptınız. Şifremi unuttum kısmını deneyebilirsiniz.Hesabınız kitlenmiştir.Hesabınız 1 saat sonra aktif hale gelecektir</p>
                         <div class="container-login100-form-btn m-t-32">
						<a  href="forgotpass.php"  name="forgot" class="login100-form-btn">
							forget password !
                           
						</a>
                      
                         
					</div>
                    
                    
                    <?php
                        
                        
                    }elseif(isset($_GET['not'])=="tur"){
                        ?>
                        <div class="alert alert-info">
                              
                        <p>Lütfen giriş türünü seçiniz</p>
                        </div>
                     <?php 
                    }elseif(isset($_GET['tur'])=="notesıt"){
                        ?>
                        <div class="alert alert-info">
                              
                        <p>Doğru kullanıcı türünü seçiniz</p>
                        </div>
                     <?php 
                    }elseif(isset($_GET['gırısbas'])=="guncsucccess"){
                               ?>
                        <div class="alert alert-success">
                              
                        <p>Profil guncellemesı başarılı Güvenlıgıınız için yeniden giriş yapmanız gerekiyor</p>
                        </div>
                     <?php 
                                
                            } 
                          
                    
                    
                    
                    
              
                         
                        ?>
                    
                     <?php
               if(isset($_GET['sıfre'])=="bas"){
                        
                         ?>
                    <div id="as" class="alert alert-success">
                            
                Şifre değişimi başarılı.
                        </div>
                         <?php
                  }
                    ?>     
                    
            
                     <select name="tur" class="turcss">
        <option  disabled selected>Kullanıcı türü</option>
         <option value="3">Çalışan</option>
        <option value="1">Yönetici</option>
        <option value="2">Müşteri</option>
    </select>
   
                
					<div class="container-login100-form-btn m-t-32">
						<button type="submit" name="loggın"  class="login100-form-btn">
							Login
						</button>

					</div>
   

                    <div class="social-login"> 
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
                  
                    
				</form>
                
			</div>
		</div>
	</div>
    




    

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendorl/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/bootstrap/js/popper.js"></script>
	<script src="vendorl/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/daterangepicker/moment.min.js"></script>
	<script src="vendorl/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jsl/main.js"></script>
    
     <script src="js33/jquery-3.3.1.min.js"></script>
    <script src="js33/popper.min.js"></script>
    <script src="js33/bootstrap.min.js"></script>
    <script src="js33/main.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
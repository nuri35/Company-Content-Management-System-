

<?php
/* Bağlantı Kurulması */
require_once("ornek.php");
/* Veritabanı sorgulama */
$sorgu = mysqli_query($baglanti, "SELECT * FROM offices");
$sorgu2 = mysqli_query($baglanti, "SELECT  DISTINCT admin_yetki,statu  FROM employees");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="csst/style.css">
  
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Hierarchy Select CSS -->
<link rel="stylesheet" href="cssy/hierarchy-select.min.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="cssy/demo.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
    <div class="main">
    
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <?php
    
                        require_once("ornek.php");
                        
                        if(isset($_GET['gırıs'])=="hatalı7"){
                              ?>
                              <div class="alert alert-danger">
                  
                        <p>Lütfen form alanlarına değerleri giriniz.</p>
                                  
                        </div> 
                            <?php
                            
                            
                        }
                        
                        if(isset($_GET['gırısx'])=="basarılı"){
                             ?>
                             <div class="alert alert-success">
                  
                        <p>Üye kaydı başarılı</p>
                                  
                        </div> 
                            <?php
                        }
                        
                        
                         if(isset($_GET['gırısm'])=="hatalı2"){
                             ?>
                             <div class="alert alert-danger">
                  
                        <p>Şifre kullanılmaktadır .</p>
                                  
                        </div> 
                            <?php
                        }
                     
                         if(isset($_GET['gırısl'])=="hatalı1"){
                             ?>
                             <div class="alert alert-danger">
                  
                        <p>şifrenizin dogru oldugundan emın olun</p>
                                  
                        </div> 
                            <?php
                        }
                        
                        
                         if(isset($_GET['gırısaa'])=="hatalı33"){
                             ?>
                             <div class="alert alert-danger">
                  
                        <p>zaten email adresi kayıtlı bulunmaktadır.</p>
                                  
                        </div> 
                            <?php
                        }
                     
                          if(isset($_GET['gırıno'])=="hatalı44"){
                             ?>
                             <div class="alert alert-danger">
                  
                        <p>üyelık kaydınız bulunmaktadır.</p>
                                  
                        </div> 
                            <?php
                        }
                   
                        
                          if(isset($_GET['gırısmak'])=="hatalı3x"){
                             ?>
                             <div class="alert alert-danger">
                  
                        <p>Geçersiz email.</p>
                                  
                        </div> 
                            <?php
                        }
                     
                          if(isset($_GET['gırıshat'])=="hatalı99"){
                             ?>
                             <div class="alert alert-danger">
                  
                        <p>Şifreniz uygun formatta değil.</p>
                                  
                        </div> 
                            <?php
                        }
                        
                          if(isset($_GET['mevcut'])=="uyehata"){
                             ?>
                             <div class="alert alert-danger">
                  
                        <p>Sistemde kaydınız bulunmaktadır.</p>
                                  
                        </div> 
                            <?php
                        }
                        
                        
                        ?>
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="uyeıslem.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="employeeNumber "><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="employeeNumber" id="employeeNumber" placeholder="Your employeeNumber " required>
                            </div>
                            <div class="form-group">
                                <label for="lastName"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="lastName" id="lastName" placeholder="Your lastName"/ required>
                            </div>
                            <div class="form-group">
                                <label for="firstName"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="firstName" id="firstName" placeholder="firstName"/ required>
                            </div>
                            <div class="form-group">
                                <label for="extension"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="extension" id="extension" placeholder="extension"/ required>
                            </div>
                              <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="email" id="email" placeholder="email"/ required>
                                  
                    
                            </div>
                            
                            
                                            <select name="officeCode" id="officeCode" class="selectpicker" required >
              <option   selected>Office kodunuz ? </option> 
            <?php 
              
             while($satir = mysqli_fetch_assoc($sorgu)){
             ?>
           
            <option class="zmdi zmdi-lock-outline" value="<?php echo $satir['officeCode']; ?>"><?php echo $satir['officeCode']; ?></option>
            <?php }?>
        
            </select>
                    
                            
                             <div class="form-group">
                                <label for="sifre"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="sifre" id="sifre" placeholder="Şifreniz"/ required>
                            </div>
                          
                               <div class="form-group">
                                <label for="sifreaga"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="sifreaga" id="sifreaga" placeholder="Tekrar Şifreniz"/ required>
                            </div>
                            
                            
                            
                             <select name="admin_yetki" id="admin_yetki" class="selectpicker"  required>
              <option   selected>Şirketteki konumuz </option> 
            <?php 
              
             while($satir = mysqli_fetch_assoc($sorgu2)){
             ?>
           
            <option class="zmdi zmdi-lock-outline" value="<?php echo $satir['admin_yetki']; ?>"><?php echo $satir['statu']; ?></option>
            <?php }?>
        
            </select>
                    
                   
                  
                            
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="imagest/signup-image.jpg" alt="sing up image"></figure>
                        <a href="log%C4%B1n.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

      

    </div>

    <!-- JS -->
    <script src="vendort/jquery/jquery.min.js"></script>
    <script src="jst/main.js"></script>
    !-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Popper Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha256-CjSoeELFOcH0/uxWu6mC/Vlrc1AARqbm/jiiImDGV3s=" crossorigin="anonymous"></script>
<!-- Hierarchy Select Js -->
<script src="jsy/hierarchy-select.min.js"></script>
 
 <script>
 $(document).ready(function(){
    $('#example').hierarchySelect({
    hierarchy: false,
    width: 'auto'
   });
});
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
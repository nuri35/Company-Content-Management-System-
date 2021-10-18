<?php
require_once("ornek.php");


    
     $kod = $_SESSION['kod'] ;

if($kod == "" ){
       
                header("location:logın.php ");
}else{
    
}
?>





<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts33/icomoon/style.css">

    <link rel="stylesheet" href="css33/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css33/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css33/style.css">

    <title>Login #8</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images33/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Yeniden şifre  <strong>oluşturunuz...</strong></h3>
           
            </div>
            <form action="resıfreol.php" method="post">
              <div class="form-group first">
                <label for="username">şifre</label>
                <input type="text" class="form-control" id="username" name="sıfre">

              </div>
              <div class="form-group last mb-4">
                <label for="password">tekrar şifre</label>
                <input type="password" class="form-control" id="password" name="resıfre">
                
              </div>
              
             

              <input type="submit" name="olus" value="oluşturun" class="btn text-white btn-block btn-primary">

           
            	 <?php
               if(isset($_GET['bos'])=="not"){
                        
                         ?>
                    <div id="as" class="alert alert-danger">
                            
                    Boş alanları doldurunuz
                        </div>
                         <?php
                  }
                    ?>     
                
                 <?php
               if(isset($_GET['bos1'])=="not1"){
                        
                         ?>
                    <div id="as" class="alert alert-danger">
                            
                   Şifreler uyusmamaktadır
                        </div>
                         <?php
                  }
                    ?>     
             
                <?php
               if(isset($_GET['kod'])=="not2"){
                        
                         ?>
                    <div id="as" class="alert alert-danger">
                            
                  hatalı kod işlemi bulunmaktadır.
                        </div>
                         <?php
                  }
                    ?>     
                
                
             
                
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js33/jquery-3.3.1.min.js"></script>
    <script src="js33/popper.min.js"></script>
    <script src="js33/bootstrap.min.js"></script>
    <script src="js33/main.js"></script>
  </body>
</html>
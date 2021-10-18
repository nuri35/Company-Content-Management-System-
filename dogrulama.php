<?php
require_once("ornek.php");
 
 
$employeeNumber=$_SESSION['employeeNumber'] ;
        $email = $_SESSION['email'] ; 

if($employeeNumber == "" &&  $email == ""){
       
                header("location:logın.php ");
}else{
    
}
?>
 

<html>
    <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link src="az.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    
    </head>
<body>
    
    <div class="d-flex justify-content-center align-items-center container" >
    <div class="card py-5 px-3">
       
    
        
        <h5 class="m-0">Email doğrulama kodu</h5><span class="mobile-text">Lütfen emaile gelen doğrulama kodunu buraya giriniz <b class="text-danger"></b></span>
         <p> 
       <?php echo $_SESSION['email'];   ?>  
             
        için doğrulama 
        </p>
        
        <form action="dogrula.php" method="post">
        <div class="d-flex flex-row mt-5"  ><input type="text" name="kod" class="form-control" autofocus=""></div>
            
            <div  style="text-align: center" >
						<button type="submit"  class="btn btn-primary" name="dogrulama"   >Onayla</button>
					</div>
            
      
            
            	 <?php
               if(isset($_GET['bos'])=="not"){
                        
                         ?>
                    <div id="as" class="alert alert-danger">
                            
                    Lütfen gonderılen kodu gırınız
                        </div>
                         <?php
                  }
                    ?>     
                   
            <?php
               if(isset($_GET['eslesme'])=="notx"){
                        
                         ?>
                    <div id="as" class="alert alert-danger">
                            
                    yenıleme kodu hatalıdır.
                        </div>
                         <?php
                  }
                    ?>     
            
             <?php
               if(isset($_GET['mes'])=="evet"){
                        
                         ?>
                    <div id="as" class="alert alert-info">
                            
                   Sıfırlama kodu mail adresinizze yollanmıştır.Oradaki kodu girerek şifre sıfırlama ıslemınızı yapabilirsiniz
                        </div>
                         <?php
                  }
                    ?>     
            
            
        </form>
        
        <div class="text-center mt-5"><span class="d-block mobile-text">Don't receive the code?</span><span class="font-weight-bold text-danger cursor">Resend</span></div>
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    </body>










</html>
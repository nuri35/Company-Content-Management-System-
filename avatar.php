
<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
 include("ayar.php");
   require_once("fonksıyonlar.php");


// sayfalama ıcın kodlar

  echo"<pre>";
      
      print_r($_SESSION);
 echo"</pre>";

 $ad=$_SESSION['firstName'] ;
   $kullanıcısorgu = mysqli_query($baglanti, "SELECT * FROM employees  WHERE firstName='$ad' ");
      
$satir2 = mysqli_fetch_assoc($kullanıcısorgu);


 $kullanıcısorgu2 = mysqli_query($baglanti, "SELECT * FROM customers  WHERE customerName='$ad' ");
      
$satir23 = mysqli_fetch_assoc($kullanıcısorgu2);



?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
    
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap" rel="stylesheet"> 
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   
    <style>
    
    
        .tıp{
            font-family: 'Sigmar One', cursive;
            text-align: center;
        }
    
        .tek{
            font-family: 'Limelight', cursive;
        }
        
        h1{
            font-family: 'Viaoda Libre', cursive;
        }
        
        .ınfo{
             font-family: 'Viaoda Libre', cursive;
           margin-right: 400px;
        }
    
    </style>

    
   
</head>

<body>
  
   
<div class="container bootstrap snippet">
    <?php
    
    
    
    
    
    
    
    
  if (isset($satir2['admin_yetki']) == 3 || isset($satir2['admin_yetki']) == 1){
      
      $sifre = $_SESSION['sifre'] ; 
               
                 $sorgua = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
         
                $satir = mysqli_fetch_assoc($sorgua);
                            $srcisim = $satir["employeeNumber"]; 

  $sorgu3 = mysqli_query($baglanti, "SELECT * FROM filemanagement WHERE   employeeNumber ='$srcisim' ");
     $sayfada= 4;    
    $toplamicerik = mysqli_num_rows($sorgu3); 

$toplamsayfa = ceil($toplamicerik / $sayfada );
$sayfa = isset($_GET["sayfa"]) ? (int) $_GET["sayfa"] : 1;

if($sayfa<1)  $sayfa =1;

// toplam sayfa sayımızdan fazla sayı gırılırse  en son sayfayı gosterırız

if($sayfa > $toplamsayfa) $sayfa =$toplamsayfa;

$limit = ($sayfa-1)  * $sayfada;
      
      
      
             ?>
                  
        <br>
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li ><a  href="tumler.php">Home</a></li>
                  <li ><a  href="prof%C4%B1lesm.php">fotoğraf</a></li>
              <li ><a  href="worksty.php">Çalışma dosyalarım</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                 
                  <form   action="<?= htmlspecialchars('prupdate.php'); ?>" method="post" >
                    
              
          
                      <?php
                    
                   
                      
                      
                     
                      try{
                          
                          
                     
                        if(isset($_GET['gırıs'])=="notpos" || isset($_GET['yuk'])=="hatabos"){
                        
                    throw new Exception("Lütfen alanları doldurunuz");
                        
                    }  else if(isset($_GET['gırıss'])=="notnum"){
                          
                            throw new Exception("Lütfen Numara giriniz");
                            
                        }else if(isset($_GET['gırısx'])=="tcntuz"){
                            
                              throw new Exception("Lütfen 10 haneli telefon numaranızı girinz");
                        }else if(isset($_GET['gırısm'])=="numntuyg"){
                            throw new Exception("Gecersiiz telefon numarası");
                         
                        }else if(isset($_GET['gırısa'])=="lınkprob"){
                           throw new Exception("Gecersiiz link");
                            
                            
                        }else if(isset($_GET['gırısem'])=="noemaıl")
                        {
                             throw new Exception("Gecersiiz emaıl adresi"); 
                            
                        }else if(isset($_GET['gırısver'])=="noverify"){
                           
                             throw new Exception("Şifreniz uyuşmamaktadır."); 
                            
                        }else if(isset($_GET['gırısssx'])=="nosıfuy"){
                         throw new Exception("Hatalı şifre"); 
                            
                        }else if(isset($_GET['verı'])=="hat"){
                          throw new Exception("hatalı verı gırısı"); 
                            
                        }else if(isset($_GET['hata3'])=="dows"){
                          throw new Exception("hatalı"); 
                        
                                  
                        }else if(isset($_GET['hata2'])=="notbasdown"){
                          throw new Exception("hatalı bir işlem"); 
             
                
                             }else if(isset($_GET['hata1'])=="notdosyok"){
                          throw new Exception("hatalı dosya işlemi"); 
                            
                           } 
                        }catch(Exception $myerror){
                            ?>
                
                     <div class="alert alert-danger" role="alert">
                <?php
                        echo  $myerror->getMessage();
                        ?>  
                        </div>             
                          
                      <?php
                           
                      }
                      
                      try{
                         if(isset($_GET['gırısbas'])=="guncsucccess"){
                              
                                 throw new Exception("Güncelleme başarılı"); 
                                
                            } 
                          
                          
                      }catch(Exception $myerror){
                           ?>
                  
                     <div class="alert alert-success" role="alert">
                <?php
                        echo  $myerror->getMessage();
                        ?>  
                        </div>             
                          
                      <?php
                           
                          
                      }
                      
                     
                      
                        ?> 
                       
          
                      <div class="form-group">
                            
                          
                          <div class="col-xs-6">
                             <label for="mobile"><h4 id="kel">Mobile</h4></label>
                              <input type="text" class="form-control" name="data[]" id="mobilex" placeholder="(5xx) xxx-xxxx" title="enter your mobile number if any." value="<?php if(isset($mobile) && $mobile == "mobile") echo $mobile; ?>" >
                          </div>
                      
                      </div>
        
                      
                         
                     
                      
                      
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>web siteniz</h4></label>
                              <input type="text" class="form-control" name="data[]" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?php if(isset($mobile) && $mobile == "mobile") echo $mobile; ?>">
                              
                              
                              
                              
                          </div>
                      </div>
                      
                             
                      
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="data[]" id="email" placeholder="you@email.com" title="enter your email." value="<?php if(isset($email) && $email == "email") echo $email; ?>">
                          </div>
                      </div>
                    
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="data[]" id="password" placeholder="password" title="enter your password." value="<?php  if(isset($password) && $password == "password") echo $password; ?>">
                          </div>
                      </div>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="data[]" id="password2" placeholder="password2" title="enter your password2." value="<?php if(isset($password2) && $password2 == "password2") echo $password2; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="mysub"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                    
                      
                        
              	</form>
              
              <hr>
              
              </div><!--/tab-pane-->
           
            
               
              </div><!--/tab-pane-->
            
          </div><!--/tab-content-->
   <div>
        <?php
       /*  include("profilres/konum.php");
     
                        echo $kon;*/
                    
         $sifre = $_SESSION['sifre'] ; 
               
                 $sorgua = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
         
                $satir = mysqli_fetch_assoc($sorgua);
                            $srcisim = $satir["isimimg"]; 
       
       if($srcisim != null){
                 ?>
          <img src=" <?php echo $satir['isimimg']; ?>"
             
       
             
             class="avatar img-circle img-thumbnail" alt="avatar" width='200' height='100'> 
        <?php
       }else{
            ?>
            <img src="avatar_2x.png" 
             
       
             
             class="avatar img-circle img-thumbnail" alt="avatar">
     <?php
       }
        ?>
    
    </div>
    <br>
     <?php
                      
      $sifre = $_SESSION['sifre'] ; 
   
               
                $sorgua = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
       
               
                         $satir = mysqli_fetch_assoc($sorgua);
     
                   echo"<h1>";
        echo  "Hoşgeldın ".$satir['firstName'];
        echo"</h1>";   
             
           ?> 
    
        </div><!--/col-9-->
    
    

    </div><!--/row-->
    
      <?php
           $sifre = $_SESSION['sifre']; 
               
                 $sorg = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
         
                 $sat = mysqli_fetch_assoc($sorg);
                            $empoloye = $sat["employeeNumber"]; 
   
   
               
                 $lımquery = mysqli_query($baglanti, "SELECT *
FROM `filemanagement` INNER JOIN `employees` 
ON filemanagement.employeeNumber = employees.employeeNumber AND  employees.employeeNumber = '$empoloye' LIMIT $limit,$sayfada");
         
      
   
      
      
    
        $sorguam2 = mysqli_query($baglanti, "SELECT  filemanagement.field,filemanagement.name,filemanagement.type,employees.employeeNumber,filemanagement.id,filemanagement.times
FROM filemanagement INNER JOIN employees 
ON filemanagement.employeeNumber = employees.employeeNumber AND  employees.employeeNumber = '$empoloye' ");
          
      ?>
     <?php
  
   
          /*$name="";     
      
      while($satirım = mysqli_fetch_assoc($sorguam)){ 
  
        $name = $satirım["name"];
        
      
      }
      
       function mesass(){
                
                $parval = func_get_args();
        
                     foreach($parval as $result){
                        ?>
                          <div class="col-sm-6 mb-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">   <?php echo $result; ?> </h5>
          
          <a href="indir.php?name=<?php echo $satirım["name"]; ?>" class="btn btn-primary">İndir</a> 
             <a href="filedelete.php?namesıd=<?php echo $satirım["id"]; ?>&names=<?php echo $satirım["name"]; ?>     " class="btn btn-success">Sil</a> 
        </div>
      </div>
    </div>
                         
          <?php               
                 
                         
                     }
                     
               }
    
    $sonuc = mesass($name);
          */
            
     ?>
      
       
    
    <div class="workalan">
    <h1 class="tıp">Çalışma dosyalarım</h1>
   <div class="container">
  <div class="row">
      
      
      
      
       <?php 
       $rowcount=  mysqli_num_rows($sorguam2);
      
     
      

      
      if($rowcount < 1){
          ?> 
      <h1 class="ınfo">Dosya Alanı Boş</h1>
      <?php 
      }else{
          
             while($satirım = mysqli_fetch_assoc($lımquery)){ 
        
          ?>  
    <div class="col-sm-6 mb-3">
      <div class="card">
        <div class="card-body">
    <h2>Yüklenme Tarihi: </h2>
            <h3><?php echo $satirım["times"]; ?> </h3>
          <h5 class="card-title">   <?php echo $satirım["type"]; ?> </h5>
          <p class="card-text"> <?php echo $satirım["name"]; ?></p>
          <a href="indir.php?name=<?php echo $satirım["name"]; ?>" class="btn btn-primary">İndir</a> 
             <a href="filedelete.php?namesıd=<?php echo $satirım["id"]; ?>&names=<?php echo $satirım["name"]; ?>     " class="btn btn-success">Sil</a> 
        </div>
      </div>
    </div>
       <?php 
      }
          
          
          
      }
      
   
        
   
  ?>
    
  
      
     
      
      
      

  </div>
</div>
        
        
 
        
        
        
        
        
     
<nav class="col-md-12"  align="center">
    
  <ul  class="pagination justify-content-center">
    <li class="page-item">
         <?php
        
   if($sayfa >1){
        ?>
        <a class="page-link" href="avatar.php?sayfa=<?php echo $sayfa - 1;  ?>">Previous</a>
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
  
        <a class="page-link" href="avatar.php?sayfa=<?php echo $i;  ?>"><?php echo $i;  ?></a>
      
<?php 
    }

      
        }
      ?>
      
      </li>
    <li class="page-item">
         <?php
        
   if($sayfa >1 &&  $sayfa < $toplamsayfa){
        ?>
        <a class="page-link" href="avatar.php?sayfa=<?php echo $sayfa + 1;  ?>">Next</a>
         <?php
   }
        
        
      ?>
        
    
      
    
    </li>
   
      
  </ul>
</nav>
        
        
    </div>
    
    
 
    
      </body>
    <script src="avat.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
                  </html>
  <?php
}elseif(isset($satir23['admin_yetki2']) == 2){
   
         ?>
                  
        <br>
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li ><a  href="tumler.php">Home</a></li>
                  <li ><a  href="prof%C4%B1lesm.php">fotoğraf</a></li>
             
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form   action="<?= htmlspecialchars('prupdate.php'); ?>" method="post" >
                     
          
                      <?php
                      
                      
                      
                      
                     
                      try{
                          
                          
                     
                        if(isset($_GET['gırıs'])=="notpos" || isset($_GET['yuk'])=="hatabos"){
                        
                    throw new Exception("Lütfen alanları doldurunuz");
                        
                    }  else if(isset($_GET['gırıss'])=="notnum"){
                          
                            throw new Exception("Lütfen Numara giriniz");
                            
                        }else if(isset($_GET['gırısx'])=="tcntuz"){
                            
                              throw new Exception("Lütfen 10 haneli telefon numaranızı girinz");
                        }else if(isset($_GET['gırısm'])=="numntuyg"){
                            throw new Exception("Gecersiiz telefon numarası");
                         
                        }else if(isset($_GET['gırısa'])=="lınkprob"){
                           throw new Exception("Gecersiiz link");
                            
                            
                        }else if(isset($_GET['gırısem'])=="noemaıl")
                        {
                             throw new Exception("Gecersiiz emaıl adresi"); 
                            
                        }else if(isset($_GET['gırısver'])=="noverify"){
                           
                             throw new Exception("Şifreniz uyuşmamaktadır."); 
                            
                        }else if(isset($_GET['gırısssx'])=="nosıfuy"){
                         throw new Exception("Hatalı şifre"); 
                            
                        }else if(isset($_GET['verı'])=="hat"){
                          throw new Exception("hatalı verı gırısı"); 
                            
                        }else if(isset($_GET['hata3'])=="dows"){
                          throw new Exception("hatalı"); 
                        
                                  
                        }else if(isset($_GET['hata2'])=="notbasdown"){
                          throw new Exception("hatalı bir işlem"); 
             
                
                             }else if(isset($_GET['hata1'])=="notdosyok"){
                          throw new Exception("hatalı dosya işlemi"); 
                            
                           } 
                        }catch(Exception $myerror){
                            ?>
                
                     <div class="alert alert-danger" role="alert">
                <?php
                        echo  $myerror->getMessage();
                        ?>  
                        </div>             
                          
                      <?php
                           
                      }
                      
                      try{
                         if(isset($_GET['gırısbas'])=="guncsucccess"){
                              
                                 throw new Exception("Güncelleme başarılı"); 
                                
                            } 
                          
                          
                      }catch(Exception $myerror){
                           ?>
                  
                     <div class="alert alert-success" role="alert">
                <?php
                        echo  $myerror->getMessage();
                        ?>  
                        </div>             
                          
                      <?php
                           
                          
                      }
                      
                     
                      
                        ?> 
                      
                 
                               
                      
                    
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4 id="kel">Mobile</h4></label>
                              <input type="text" class="form-control" name="data[]" id="mobilex" placeholder="(5xx) xxx-xxxx" title="enter your mobile number if any." value="<?php if(isset($mobile) && $mobile == "mobile") echo $mobile; ?>" >
                          </div>
                      </div>
              
                      
                       <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>web siteniz</h4></label>
                              <input type="text" class="form-control" name="data[]" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?php if(isset($mobile) && $mobile == "mobile") echo $mobile; ?>">
                          </div>
                      </div>
                      
                      
                      
                      
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="data[]" id="email" placeholder="you@email.com" title="enter your email." value="<?php if(isset($email) && $email == "email") echo $email; ?>">
                          </div>
                      </div>
                    
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="data[]" id="password" placeholder="password" title="enter your password." value="<?php  if(isset($password) && $password == "password") echo $password; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="data[]" id="password2" placeholder="password2" title="enter your password2." value="<?php if(isset($password2) && $password2 == "password2") echo $password2; ?>">
                          </div>
                      </div>
                        <input type="hidden"  class="form-control" name="tokenss" value="<?php echo $_SESSION["tokenforms"] ?>">  
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="mysub"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                      
              	</form>
              
              <hr>
              
              </div><!--/tab-pane-->
           
            
               
              </div><!--/tab-pane-->
            
          </div><!--/tab-content-->
   <div>
        <?php
       /*  include("profilres/konum.php");
     
                        echo $kon;*/
                    
         $sifre = $_SESSION['sifre'] ; 
               
                 $sorgua = mysqli_query($baglanti, "SELECT * FROM customers WHERE   sıfre ='$sifre' ");
         
                $satir = mysqli_fetch_assoc($sorgua);
                            $srcisim = $satir["isimimg"]; 
       
       if($srcisim != null){
                 ?>
          <img src=" <?php echo $satir['isimimg']; ?>"
             
       
             
             class="avatar img-circle img-thumbnail" alt="avatar" width='200' height='100'> 
        <?php
       }else{
            ?>
            <img src="avatar_2x.png" 
             
       
             
             class="avatar img-circle img-thumbnail" alt="avatar">
     <?php
       }
        ?>
    
    </div>
    <br>
     <?php
                      
      $sifre = $_SESSION['sifre'] ; 
   
               
                $sorgua = mysqli_query($baglanti, "SELECT * FROM customers WHERE   sıfre ='$sifre' ");
       
               
                         $satir = mysqli_fetch_assoc($sorgua);
     
                   echo"<h1>";
        echo  "Hoşgeldın ".$satir['customerName'];
        echo"</h1>";   
             
           ?> 
    
        </div><!--/col-9-->
    
    

    </div><!--/row-->
    
 
   
       

 
    
      </body>
    <script src="avat.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
                  </html>
      
          <?php 
      
      
      
      
      
  }
      ?>
<html>

<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
 include("ayar.php");

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
    
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    
    

    
   
</head>
<style>
  .picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
    margin-bottom: 15px;
}

.picture{
    width: 100px;
    height: 100px;
    background-color: #fff;
    color: #FFFFFF;
    margin: 5px auto;
    overflow: hidden;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    transition: all 0.2s;
}

.picture > .icon{
    width: 100%;
    height: 100%;
    display: inline-block;
    color: #37474F;
    border: 4px solid #CCCCCC;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    transition: all 0.2s;
}

.picture:hover .icon{
    border-color: greenyellow;
}

.picture > .icon > svg{
    height: 1.4em;
    font-size: 4em;
}

.picture > svg{
    width: 100%;
    height: 100%;
}

.picture input[type="file"]{
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 100;
    right: 0;
    bottom: 0;
}

/*svg tick animation*/
.circ {
    opacity: 0;
    display: none;
    stroke-dasharray: 130;
    stroke-dashoffset: 130;
    -webkit-transition: all .75s;
    -moz-transition: all .75s;
    -ms-transition: all .75s;
    -o-transition: all .75s;
    transition: all .75s;
}
.tick{
    stroke-dasharray: 50;
    stroke-dashoffset: 50;
    -webkit-transition: stroke-dashoffset .4s 0.5s ease-out;
    -moz-transition: stroke-dashoffset .4s 0.5s ease-out;
    -ms-transition: stroke-dashoffset .4s 0.5s ease-out;
    -o-transition: stroke-dashoffset .4s 0.5s ease-out;
    transition: stroke-dashoffset .4s 0.5s ease-out;
}
.drawn > svg .path{
    display: block;
    opacity: 1;
    stroke-dashoffset: 0;
}

.drawn{
    border-color: #fff;
}

[data-toggle="popover"]{
    cursor: pointer;
}

span.popover-content-remove {
    padding-left: 10px;
    color: red;
    cursor: pointer;
    float: right;
}

.pb10{
    padding-bottom: 10px;
}

.popover-header{
    text-align: center;
}

.popover{
    min-width: 200px;
}
 
    </style>


<body>
    
    
    
<!--   
<div class="containers">
    
   

<form  action="<?= htmlspecialchars('multyuklendı.php'); ?>" method="post" enctype="multipart/form-data">
            
               
       <div class="container">
    <div class="col-xs-4">
        <div class="form-group">
        <label class="control-label">Çalışma dosyaları yükle</label>
        <input type="file" class="filestyle" data-icon="false" style="background-color:cornflowerblue" name="multimg[]" multiple>
    </div>
</div>
      </div>    
             <button type="submit" name="multmysubmıt" class="btn btn-info">Dosyalarımı yükle</button>
            </form>        
          <div class="panel panel-default">
            <div class="panel-heading">Dosyalarım</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            
            </div>
          </div>
     </div>-->
    
    
    
   <form  action="<?= htmlspecialchars('multyuklendı.php'); ?>" method="post" enctype="multipart/form-data"> 
<div class="custom-file-picker"> 
    <div class="picture-container form-group">
        <h4 class="info_text">Çalışma dosyalarınızı buraya yükleyiniz</h4>
        <div class="picture">
            <span class="icon"><i class="fas fa-file-upload"></i></span>
            <input type="file" class="wizard-file" multiple id="a8755cf0-f4d1-6376-ee21-a6defd1e7c08" name="multimg[]">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 37" xml:space="preserve">
                <path class="circ path" style="fill:none;stroke:#77d27b;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" d="M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"></path>
                <polyline class="tick path" style="fill:none;stroke:#77d27b;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" points="11.6,20 15.9,24.2 26.4,13.8 "></polyline>
            </svg>
           
        </div> 
         
    </div>
    <div class="popover-container text-center">
      <button type="submit" name="multmysubmıt" class="btn btn-info">Dosyalarımı yükle</button>
    </div>
</div>
       
       
                      <?php
                      
                      try{
                          
                          
                     
                        if(isset($_GET['gırıs'])=="notpos" || isset($_GET['yuk'])=="hatabos"){
                        
                    throw new Exception("Lütfen alanları doldurunuz");
                       
                    }  else if(isset($_GET['yuk'])=="hatadol"){
                          
                            throw new Exception("hatalı dosya işlemi");
                         
                        }else if(isset($_GET['yuk1'])=="maxhat"){
                           
                              throw new Exception("Dosya boyutu çok yüksek");
                        }else if(isset($_GET['yuk2'])=="uzhaterr"){
                            throw new Exception("Gçersiz dosya uzantısı");
                 
                        }else if(isset($_GET['yukm'])=="hata"){
                           throw new Exception("Başarısız yükleme");
                            
                            
                        }else if(isset($_GET['verıms'])=="hatxx"){
                            throw new Exception("hatalı verı gırısı"); 
                            
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
                         if(isset($_GET['yukr'])=="basarılı"){
                              
                                 throw new Exception("Yükleme başarılı"); 
                                
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
          
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        </form>        
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
      <script src="avat.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
           </body>
       </html>
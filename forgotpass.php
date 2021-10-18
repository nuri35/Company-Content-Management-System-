<?php
    
require_once("ornek.php");










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
                      
                  
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">E-Posta  </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">kimlik</a>
                            </li>
                            
                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tel" role="tab" aria-controls="profile" aria-selected="false">Telefon</a>
                            </li>
                        </ul>
                         

                        <div class="tab-content" id="myTabContent">
                          
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <form action="sıfırpass.php" method="post">  
                                <h3 class="register-heading">Parola Sıfırlama</h3>
                                <div class="row register-form">
                          <div class="col-md-6">
                                     
                                      
                                        
                                          <div class="form-group">
                                            <input type="text" class="form-control" name="employeeNumber"  placeholder="employeeNumber *" value="" />
                                        </div>
                              
                              <div class="form-group">
                                            <input type="email" class="form-control" name="email"  placeholder="email*" value="" />
                                        </div>
                                        
                                       <input type="submit" class="btnRegister" name="gır" value="Sıfırla"/>
                                    </div>
                                      
                                </div>
                         <?php
                       if(isset($_GET['email'])=="not"){
                           ?>
                            <div  class="alert alert-danger" >
                            
                    Lütfen email adresinizi giriniz
                        </div>
                           <?php
                           
                       }
                         
                         
                          
                       if(isset($_GET['email2'])=="hat"){
                           ?>
                            <div  class="alert alert-danger">
                            
                    Lütfen kayıtlı KULLANICI giriniz
                        </div>
                           <?php
                           
                       }
                         
                         
                         
                         
                         
                          if(isset($_GET['email4'])=="sorun"){
                           ?>
                            <div  class="alert alert-danger">
                            
                 Bir sorun oluştu:
                        </div>
                           <?php
                           
                       }
                         
                         
                         
                         ?>
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
                                        
                                     
                                             
                                        
                                        
                                        
                                        

  <input type="submit" class="btnRegister"  value="Registerr"/>
                                    </div>
                                      
                                </div>
                                 
                                       </form> 
                            </div>
                    
                              <div class="tab-pane fade show" id="tel" role="tabpanel" aria-labelledby="profile-tab">
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
</html>
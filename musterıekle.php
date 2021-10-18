<?php
/* Bağlantı Kurulması */
require_once("ornek.php");
 include("ayar.php");
/* Veritabanı sorgulama */
$sorgu = mysqli_query($baglanti, "SELECT * FROM employees");

?>






<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
         <link href="muster%C4%B1.css" rel="stylesheet" >
        <title></title>
    </head>
    <body>
        
        


<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Your account has been created successfully.</p>
				<button class="btn btn-success" data-dismiss="modal"><span>Start Exploring</span> <i class="material-icons">&#xE5C8;</i></button>
			</div>
		</div>
	</div>
</div>     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php
        session_start();
        ?>
        <div class="container register">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Müsteri bilgisi ekleme</a>
                        </li>
                       
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Müşteri info</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <main role="main" class="container">
                                    <form  action="musterıeklendı.php" method="post">
                                        <div class="form-group">
                                            <input type="text"  name="customerNumber" class="form-control" placeholder="Müşteri numarası *" value="" required=""/>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <input type="text"  name="customerName" class="form-control" placeholder="Müşteri Adı *" value="" required=""/>
                                        </div>
                                       
                                        
                                         <div class="form-group">
                                            <input type="password"  name="phone" class="form-control" placeholder="Numara bılgısı " value="" required=""/>
                                        </div>
                                        
                                         
                                            <div class="form-group">
                                            <input type="password"  name="city"  class="form-control" placeholder="Şehir*" value="" required=""/>
                                        </div>
                                        
                                         
                                        
                                            <div class="form-group">
                                            <input type="password"  name="country" class="form-control" placeholder="Ülke *" value="" required=""/>
                                        </div>
                                        
                                            <div class="form-group">
                                                
                                            <select name="employeeNumber" id="employeeNumber"  class="form-control" >
              <option   selected>Hangi çalışanı istersiniz ?</option> 
            <?php 
              
             while($satir = mysqli_fetch_assoc($sorgu)){
             ?>
           
            <option value="<?php echo $satir['employeeNumber']; ?>"><?php echo $satir['firstName']; ?></option>
            <?php }?>
        
            </select>
                                                
                                                
                                                
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                            <input type="password"  name="creditLimit" class="form-control" placeholder="Credit limidi *" value="" required=""/>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="form-group">
                                            <input  type="submit" class="btnContactSubmit" value="Yeni Kayıt Ekle" />
                                           
                                        </div>
                                    </form>
                                    </main>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
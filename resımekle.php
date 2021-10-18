
<?php
/* Bağlantı Kurulması */
require_once("ornek.php");
 include("ayar.php");
/* Veritabanı sorgulama */
$sorgu = mysqli_query($baglanti, "SELECT * FROM products");

?>

<!--http://tutorialzine.com/2013/05/mini-ajax-file-upload-form/-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <title>Mini Ajax File Upload Form</title>

        <!-- Google web fonts -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
<link href="ekle.css" rel="stylesheet"/>
        <link href="res%C4%B1m.js" rel="stylesheet"/>
        <!-- The main CSS file -->
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
<div class="container center">
	<div class="row">
		<div class="col-md-12">
			<h1 class="white">Resim yükleme sistemi</h1>
			                   
      <p class="white">ürünü için resim ekleme</p>
        
		</div>
	</div>
	
	<form name="upload" method="post" action="resımyuklendı.php" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<div class="btn-container">
					<!--the three icons: default, ok file (img), error file (not an img)-->
					<h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
					<h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
					<h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
					<!--this field changes dinamically displaying the filename we are trying to upload-->
					<p id="namefile">Only pics allowed! (jpg,jpeg,bmp,png)</p>
					<!--our custom btn which which stays under the actual one-->
                    
 
            
					<input type="file" id="btnup" class="btn btn-primary btn-lg" name="img">
                    
					
                            
                                            <select name="productName" id="productName"  class="form-control" >
              <option   selected>hangi ürün için </option> 
            <?php 
              
             while($satir = mysqli_fetch_assoc($sorgu)){
             ?>
           
            <option value="<?php echo $satir['productCode']; ?>"><?php echo $satir['productName']; ?></option>
            <?php }?>
        
            </select>
                    
                    
                    
                    
                    <br>
                    <br>
					<input type="submit" value="yükleyınız" >
                    
                  
                    
                    
                    
                    
              
				</div>
			</div>
		</div>
			<!--additional fields-->
		<div class="row">			
		
            
		</div>
	</form>
</div>

<a href="http://www.emilianocostanzo.com" target="_blank" id="sign">EMI</a>
        
    </body>
</html>
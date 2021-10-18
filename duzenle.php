<?php


require_once("ornek.php");

 include("ayar.php");
/* Veritabanı sorgulama */

    
    

if($_FILES){  // benım burda yuklenmıs sekılde dosyayı cekmem lazım dosya yuklendıyse burayı yuklenmedıyse taa aşagıdaki else calsıır
  
 
    $productCode = mysqli_real_escape_string($baglanti, $_GET['productCode']); 
    
     $img = file_get_contents($_FILES['img']['tmp_name']);  
        $img_isim = $_FILES['img']['name'];
     
       $dosyaadi = $img_isim ;
       
       $dosyayolu = "resimdosya/".$dosyaadi;
       
       $maxboyut = 700000;
       
         $img_boyut =  getimagesize($_FILES['img']['tmp_name']); 
             
        $sorgu= "UPDATE depom SET isim = '$dosyayolu'  WHERE  productCode = '$productCode' ";
       
       if($img_boyut == false){ 
        echo "Lütfen bir resim dosyası giriniz";
    }
       
       elseif($_FILES['img']['size'] > $maxboyut ){
           echo "dosyanız 700000 kb dan yüksek olamaz";
           
       }
       
    
       
    else{
        
        if (!$ekle=mysqli_query($baglanti, $sorgu)  ) {
             $islemSonuc = "Hatalı bir işlem: " . $sorgu . "<br>" . mysqli_error($baglanti);
            echo "$islemSonuc ";

    }
        
        else{
          echo "işlem basarılı"; 
            
              $resim_sil = $_GET['resimsil'];
        
        unlink($resim_sil);  
            
            // dosyanın yuklenıp yuklenmedıgını anlamak ıcın kullandık  uploaded fonksıyonunu 
            if(is_uploaded_file($_FILES['img']['tmp_name'])){
                
           // dosyayı tasımak ıcın bu fonksıyon    
                $tasi = move_uploaded_file($_FILES['img']['tmp_name'],$dosyayolu);
                
                if($tasi){
                    echo "dosya başarıyla taşındı";
                    
                }else{
                    echo "dosya tasınırken hata oluştu";
                }
                
                
                
            }else{ // tasınmadıysa bura goruncek.
                echo "dosya taşınırken bir hata oluştu";
            }
            
            
            
            
        }
        
       
   }

  }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
 
          
    

    
    
else{
    // kapatma ve açma işaretlerinin arasına yazaarsan echo yapmana gerek yok  boylede calısmıs olur farklı bır kullanım.
    
require_once("ornek.php");

 $code = $_GET["productCode"];
     $bee = mysqli_query($baglanti, "SELECT * FROM depom WHERE  productCode = '$code'");
    
    $satir = mysqli_fetch_assoc($bee)
     
    ?>
 


	<form name="upload" method="post" action="" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<div class="btn-container">
					<!--the three icons: default, ok file (img), error file (not an img)-->
 
        <h1>
            <img class="cırcle" src="<?php echo $satir['isim'];?>" width="200" height="100" class="img-rounded" >
        
         </h1>
					
				
					<!--this field changes dinamically displaying the filename we are trying to upload-->
					<p id="namefile">Dosyanızı duzenleyebilrsiniz</p>
					<!--our custom btn which which stays under the actual one-->
                    
 
            
					<input type="file" id="btnup" class="btn btn-primary btn-lg" name="img">
                    
					
    
                    
                    
                    
                    <br>
                    <br>
					<input type="submit" value="guncelleyınız" >
                    
                  
                    
                    
                    
                    
              
				</div>
			</div>
		</div>
        </form>
			<!--additional fields-->
		<div class="row">			
		
            
		</div>

                    
                  
    <?php

    
}


?>

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
    
    
    
    
    
    
    </body>





</html>

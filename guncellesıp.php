<?php

   
      require_once("ornek.php");
   
  include("ayar.php");
    $orderNumber = mysqli_real_escape_string($baglanti, $_POST["orderNumber"]);
    $orderDate = mysqli_real_escape_string($baglanti, $_POST["orderDate"]);

    $requiredDate= mysqli_real_escape_string($baglanti, $_POST["requiredDate"]);
     $shippedDate = mysqli_real_escape_string($baglanti, $_POST["shippedDate"]);
    $status = mysqli_real_escape_string($baglanti, $_POST["status"]);
       $comments = mysqli_real_escape_string($baglanti, $_POST["comments"]);
 $customerNumber = mysqli_real_escape_string($baglanti, $_POST["customerNumber"]);

 $sorgu = "UPDATE orders SET  orderDate = '$orderDate',requiredDate = '$requiredDate',shippedDate = '$shippedDate',status = '$status',comments = '$comments',customerNumber = '$customerNumber' WHERE orderNumber = '$orderNumber' ";
 
    if (mysqli_query($baglanti, $sorgu)) {
        
        
        echo"<div class='container'>";
    echo"<div class='row'>";
        echo"<div class='col-sm-6 col-md-6'>";
            echo"<div class='alert alert-success'>";
                echo"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>";
                   echo" ×</button>";
               echo"<span class='glyphicon glyphicon-ok'></span> <strong>Success Message</strong>";
                echo"<hr class='message-inner-separator'>";
                echo"<p>";
             
        $islemSonuc = "Güncelleme başarılı.";
   echo"$islemSonuc";
        
            echo"</p>";
          echo"  </div>";
        echo"</div>";
        
        

           
         
        
    
    } else {
        
        echo"<div id='notfound'>";
		echo"<div class='notfound'>";
			echo"<div class='notfound-404'>";
				echo"<h1>Oops!</h1>";
			echo"</div>";
			echo"<h2>404 - Hatalı güncelleme işlemi!!!</h2>";
			echo"<p>";
            $islemSonuc = "Hata: " . $sorgu . "<br>" . mysqli_error($baglanti);
   echo"$islemSonuc";
                
                
                echo"</p>";
			
		echo"</div>";
	echo"</div>";
             
   
       
    }

 mysqli_close($baglanti);


    


?>
<html>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
    <meta charset="utf-8">
		<title>FormWizard_v9</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css11/style.css" />


<style>
    body { margin-top:30px; 
   }
hr.message-inner-separator
{
    clear: both;
    margin-top: 10px;
    margin-bottom: 13px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
    
    .row{
        margin: auto;
        width: 90%;
      position: absolute;
        right: 30px;
        position: relative;
        left: 250px;
        top: 200px;
        text-align: center;
    }

    
    
    
    </style>

    
    
    </head>
    
<body>
    
    
    
    
    
    
    
    
    
    </body>

</html>
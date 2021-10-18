<?php
require_once("ornek.php");


 

if(isset($_POST['gır'])){
     $email = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["email"]))));
     $employeeNumber = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["employeeNumber"]))));
    
         $kullanıcısorgu = mysqli_query($baglanti, "SELECT * FROM employees  WHERE email='$email' ");
    $satir2 = mysqli_fetch_assoc($kullanıcısorgu);

    
    if($email != ""){
         $sorgu = mysqli_query($baglanti, "SELECT * FROM employees  WHERE email='$email' AND employeeNumber='$employeeNumber'  ");
      
        $verisay = mysqli_num_rows($sorgu);
        
        if($verisay != 0 ){
                  $_SESSION['email'] = $email; // postakı gelen verıyı sessıon oellıgıne atadım.
         $_SESSION['employeeNumber'] = $employeeNumber; 
             
            $kod = rand(1,9000);
            
            $control = mysqli_query($baglanti, "UPDATE employees  SET unuttum ='$kod' WHERE email='$email'   ");
            
            if($control){ // kullanıcıya maıl atmak ıcın php mail sınıfı var
                $msg="merhaba sevgili kullanıcı bu işlem şifrenizi unuttugunza dair bir şifre sıfırlama işlemidir. \n Tek kullanımlık kodunuz: ".$kod;
                mail($email,"şifremi unuttum",$msg);
                
                header("location:dogrulama.php?mes=evet ");
               
            }else{
                 header("location:forgotpass.php?email4=sorun");
            }
        }else{
             header("location:forgotpass.php?email2=hat");
        }
        
        
    }else{
       
        header("location:forgotpass.php?email=not");
    }
    
    
       
    
    
    
}



?>
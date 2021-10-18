<?php
require_once("ornek.php");

if(isset($_POST['olus'])){
    $employeeNumber=$_SESSION['employeeNumber'] ;
        $email = $_SESSION['email'] ; 
     $kod = $_SESSION['kod'];

    
    
    $sifre = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["sıfre"]))));
     $resıfre = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["resıfre"]))));
    
    
    if($sifre != "" && $resıfre != ""  ){
        
        if($sifre == $resıfre ){
             $asifre =   md5(addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["sıfre"])))));
     $aresıfre =   md5(addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["resıfre"])))));
    
          
          $sorguz = mysqli_query($baglanti, "SELECT * FROM employees WHERE unuttum = '$kod' AND email = '$email' AND employeeNumber = ' $employeeNumber' ");
                $verider = mysqli_num_rows($sorguz);
                     
                
            if($verider != 0){ // gelen kod gercekten bu emaıle aıttmı bunu kontrol etmemız gerekecektır.
                
                 $sorgum = mysqli_query($baglanti, " UPDATE employees SET sifre = '$asifre', unuttum = NULL WHERE email = '$email'   AND employeeNumber = '$employeeNumber' "); 
                



                  

                
                header("location:logout.php?sıfrex=basx");  
                
            }else{
                  header("location:resıfre.php?kod=not2");  
            }
            
        }else{
              header("location:resıfre.php?bos1=not1");  
        }
        
        
        
    }else{
          header("location:resıfre.php?bos=not");  
    }
    
}


?>
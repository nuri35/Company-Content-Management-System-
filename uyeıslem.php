<?php
    
require_once("ornek.php");




if(isset($_POST['signup'])){
         
        // küçük harf
    $regex_uppercase = '/[A-Z]/';
   $regex_number = '/[0-9]/'; //sayı
    
    $employeeNumber = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["employeeNumber"]))));
      $lastName = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["lastName"]))));
      $firstName = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["firstName"]))));
      $extension = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["extension"]))));
      $email = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["email"]))));
     $officeCode = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["officeCode"]))));
     $sifre = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["sifre"]))));
    $sifreaga = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["sifreaga"]))));
     $admin_yetki = addslashes(intval(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["admin_yetki"])))); // admın yetkı 1 veya 0 olarak gırdıgımız ıcın ınt bır deger donduruyor ondan ıntval olarak gırdın strıp tags olarak gırmedık

  // tc kımlık gıbı verıler yada uygulamandakı verı talosundaa employe numberlar tekrarlanamaz oldugu ıcın tc gıbı 1 kısıye verıldıgı ıcın eger onu yazarsa zaten sıstemde bulunmaktasınzı desın.
     
     if(preg_match('/^(?=.*[0-9])(?=.*[A-ZİĞÜÖÇŞ])(?=.*[a-zığüöşç]).{8,20}$/',$sifre) && preg_match('/^(?=.*[0-9])(?=.*[A-ZİĞÜÖÇŞ])(?=.*[a-zığüöşç]).{8,20}$/',$sifre)){
             
         
         
          $sifre = md5(addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["sifre"])))));
           $sifreaga = md5(addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["sifreaga"])))));
             
    if($sifre == $sifreaga){
      
           
           $sorgu = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
          $sorgsat = mysqli_num_rows($sorgu);
          $sorgu2 = mysqli_query($baglanti, "SELECT * FROM employees WHERE  email ='$email' ");
          $sorgsat2 = mysqli_num_rows($sorgu2);
        
       
             
       $sorgu3 = mysqli_query($baglanti, "SELECT * FROM employees WHERE  employeeNumber ='$employeeNumber' ");
          $sorgsat3 = mysqli_num_rows($sorgu3);      
       
        
        if($sorgsat > 0){
             header("location:uye.php?gırısm=hatalı2");
          
            
        }
        
         
            elseif($sorgsat2 > 0){
                  header("location:uye.php?gırısaa=hatalı33");
            }
        
    
            
            elseif($sorgsat3 > 0){
                  header("location:uye.php?mevcut=uyehata");
            }
        
        
            
        else{
             
             
             if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            mysqli_query($baglanti, "INSERT INTO employees (employeeNumber,lastName,firstName,extension,email,sifre,admin_yetki,officeCode) VALUES('$employeeNumber','$lastName', '$firstName','$extension','$email','$sifre','$admin_yetki','$officeCode')");
            
             header("location: uye.php?gırısx=basarılı");
        }else{
                 header("location:uye.php?gırısmak=hatalı3x");  
             }
            
      
             
        }
           
           
       }else{
        
             header("location:uye.php?gırısl=hatalı1");
       }
    
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        }else{
         
        
         header("location:uye.php?gırıshat=hatalı99");
     }
    
    

        

    
    
}else{
     header("location:uye.php?gırıs=hatalı7");
}


?>

 
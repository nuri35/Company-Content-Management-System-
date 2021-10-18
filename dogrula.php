<?php
require_once("ornek.php");

  
$employeeNumber=$_SESSION['employeeNumber'] ;
        $email = $_SESSION['email'] ; 
 $kod = $_SESSION['kod'] ;

if(isset($_POST['dogrulama'])){
$kod = addslashes(strip_tags(mysqli_real_escape_string($baglanti,htmlspecialchars($_POST["kod"]))));
   
       
         $kullanıcı = mysqli_query($baglanti, "SELECT * FROM employees  WHERE unuttum='$kod' AND email= '$email'  ");
            $verisayz= mysqli_num_rows($kullanıcı);
            
     if($kod != ""){
            
         if($verisayz != 0){ // emaılın gelen kodla eslesıyormu buna bakıyoruz yanı eslesıyorsa burası calsıır
               $_SESSION['kod'] = $kod; 
             header("location:resıfre.php");  
             
             
             
         }else{
             header("location:dogrulama.php?eslesme=notx");  
         }
         
         
         
         
       }else{
         header("location:dogrulama.php?bos=not");  
     }
    
    
    
    
    
}
?>
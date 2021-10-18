<?php
 include("ayar.php");
require_once("ornek.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
   //  $filenames2 = $_GET["names"]; // burdada dosyayı sılmem ıcın dosya adını cekmem lazım sadece ayrıyetten
      if(isset($_GET["namesıd"]) && !empty($_GET["namesıd"]) && isset($_GET["names"])){
    
          $filenames = $_GET["namesıd"]; // aslında name ıdımı cektım burda 
          
           $fıledelete = "DELETE  FROM filemanagement WHERE  id = '$filenames'  " ;
          
        
      
          if(mysqli_query($baglanti, $fıledelete)){
              
              
             
 
         
                  $filenames2 = $_GET["names"];
                   $mypath = "profilres/".$filenames2;
                      
                        unlink($mypath);  
          
                    header("location:avatar.php?fıle=sılsucc"); 
                  exit();
                      
                  
        
      
                  
      
              
                  
           
              
              
          
          }else{
                header("location:avatar.php?fılever=hat"); 
          }
          
          
          
          
          
          
          
          
          
   
         
          
      }else{
         header("location:avatar.php?ind=bos"); 
               exit(); 
      }
    
    
    
    
}else{
     header("location:avatar.php?ind=hat"); 
               exit();
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
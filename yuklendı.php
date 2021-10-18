<?php
 include("ayar.php");
require_once("ornek.php");
    
   if(isset($_FILES["ımgfle"]) && isset($_POST["mysubmıt"])){ // ısset dolu olup olmadıngı kontrol eder yanı dosya doluysa ve post ıle gelmısmı postun ıcı dolumu bunuda kontrol edıyoruz 
       
    
       
// not yuklenenler klsorune ulasılmaması ıcın htacccess dosyası olusturuyoruz.

          
$takefile = $_FILES["ımgfle"];
    $fılename = $takefile["name"];
       
       $fılename = uniqid()."_".$fılename;
       $fılesıze = $takefile["size"];
    $filetmp = $takefile["tmp_name"]; // sunucudakı gecici dizin
$fıleerr = $takefile["error"]; // hata kodu 0 hatasız demek hata kodu 4 demek boş dosya yolluyor demek.
$mypath = "profilres/".$fılename;
       
     
    
       if($fıleerr == 4 ){
            header("location:profılesm.php?yukl=hatabos");
           exit();
           
       }else{
           
           
           if($fıleerr != 0 && $fıleerr != 4){ //  4 dekı hatayı yukarda yazdık  0 ra esıt degıl hemde 4de esıt degılse yukledıgınız dosyada hata oldugunu soyluyoruz 
               
                header("location:profılesm.php?yukz=hatabos2x");
               
               
                 exit();
               
               
               
               
               
           }else{
               
               if(file_exists($mypath)){
                     header("location:profılesm.php?yuka=hatadol");
                   exit();
                   
               }else{
                   
                         if(is_executable($filetmp)){
           header("location:profılesm.php?exe=work"); // çalıştırılabılır yurutuleblır dosyaları engelemek ıcın exe dosyaları ornegın  dıkkat et $filetmp degıskenını aldım cunku $fılename alsam yuklenmedıgı ıcın  dızınde o dosya olmadıgı ıcın burayı es gececektı  onun ıcın sunucudakı gecici dizindekı yerını alıyoruz ordada dosyaya ulasıyor ve  exe olup olmadıgnı bakıyor
                            }
                   
                   elseif($fılesıze > 3000000){ //  fılesıze resmın boyunu bayt seklınde alıyor onun ıcın bayt boyutunda yaz kosulunu bu bayt ıse 300kb cıvarında oluyor 1 mb ıse 1 ve 6 sıfırdan olusuur. 1000000
                        header("location:profılesm.php?yukq=maxhat");
                   }else{
                       // uzantıyı kontrol etmeden once bu bır resımmı degılmı bunu kontrol etmelıyız
                       
                       $looks = getimagesize($filetmp);
                       
                       if($looks === false ){
                            header("location:profılesm.php?yukaa=hatformat");
                           exit();
                       }else{
                             $fileextens = strtolower(pathinfo($mypath, PATHINFO_EXTENSION));// PATHNFO ILE HANGI UZANTIDA OLDUGUNU BULUYORUZ PATHINFO_EXTENSION ILE UZANTIYI ISTEDIGIMIZI BELIRTIYORZ
                           $allw = array("jpg","png");
                           
                       if(!in_array($fileextens,$allw)){ // resım dosyası olacagını bılmemız lazım  
                           
                           
                            header("location:profılesm.php?yukuz=uzhaterr");
                           
                           exit();
                           
                           
                       }   else{
                            // ılk verı tabnaına kaydet sonra dosya olarak kaydolsun 
                   $sifre = $_SESSION['sifre'] ; 
                           
                            
                            $sorguam = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
           $sorgsat = mysqli_num_rows($sorguam);
                 $satir2 = mysqli_fetch_assoc($sorguam);
                           
                           
                              
                            $sorguam2 = mysqli_query($baglanti, "SELECT * FROM customers WHERE   sıfre ='$sifre' ");
           $sorgsat2 = mysqli_num_rows($sorguam2);
                 $satir23 = mysqli_fetch_assoc($sorguam2);
                           
                           
                           
                           
                      if($sorgsat > 0){
                         
                              $resim_sil = $satir2["isimimg"];
                           
                        
                           
                         
                                unlink($resim_sil); 
           
                            $empoloye = $satir2["employeeNumber"]; 
                           
                           
                           
                           
                           
                             $sorgu = "UPDATE employees SET isimimg = '$mypath', imgm = '$filetmp' WHERE  employeeNumber  = '$empoloye' ";
                           
                          
                           
                             if (mysqli_query($baglanti, $sorgu)) {
                
                                if(move_uploaded_file($filetmp,$mypath)){ // dosya gecıcı adresde tutuluyordu bunun sayesınde  yuklenen dosyayı sunucunuzdakı gercek yere  tasıyordu
      
                          
                          
                          
                          
     header("location:profılesm.php?yukr=basarılı");
                          
                          
                          
                          
                          
                          
    }else{
         header("location:profılesm.php?yukaa=hata");
    }     
                                 
                                 
                                 
                                 
                    
                   }else{
                     header("location:avatar.php?verım=hatx"); 
                }
                           
                               
                          
                          
                          
                          
                      }elseif($sorgsat2 > 0){
                          
                            $resim_sil2 = $satir23["isimimg"];
                           
                        
                           
                         
                                unlink($resim_sil2); 
           
                            $cust= $satir23["customerNumber"]; 
                           
                           
                           
                           
                           
                             $sorgum = "UPDATE customers SET isimimg = '$mypath', imgm = '$filetmp' WHERE  customerNumber  = '$cust' ";
                           
                          
                           
                             if (mysqli_query($baglanti, $sorgum)) {
                
                                if(move_uploaded_file($filetmp,$mypath)){ // dosya gecıcı adresde tutuluyordu bunun sayesınde  yuklenen dosyayı sunucunuzdakı gercek yere  tasıyordu
      
                          
                          
                          
                          
     header("location:profılesm.php?yukr=basarılı");
                          
                          
                          
                          
                          
                          
    }else{
         header("location:profılesm.php?yukaa=hata");
    }     
                                 
                                 
                                 
                                 
                    
                   }else{
                     header("location:avatar.php?verım=hatx"); 
                }
                           
                               
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                      }
                           
                        
                  
                           
                       }
                           
                           
                           
                           
                       }
                       
                  
                
                       
                       
                   }
                   
                   
                   
                   
                  
               
               }
                  
           
           
         
               
               
               
               
           }
           
 
       }
    
    
   
    

    
  

    



   }else{
 header("location:profılesm.php?no=posbo");
}




?>
<?php
 include("ayar.php");
require_once("ornek.php");
    
 if(isset($_FILES["multimg"]) && isset($_POST["multmysubmıt"])){
     
      $takefiles = $_FILES["multimg"];
  $fılestmp = $takefiles["tmp_name"];
 
 //$mypaths = "profılres/".$fılesname;
     
    

    

         foreach($fılestmp as $mykey => $myvalue){ // forla alma sebebım coklu dosya yukluyoruz forsuz alınca hta verıyor ıcınde birdaha array var aslında value bır array ve mesela name ıcıne gırıyor tekrarlayan bır verı var orada onun ıcın for kullanıca. bak tek dosya yuklesen bıle deger anahtar ıkılısı seklınde yukluyor ama orda mesela name tekrarlanmıyor namede 1 ısım oluyor gıbı dusun print r ılede kontrol ettık ama ama coklu verı alınca print r ilede kntrol ettık valularda array var onları cekebılmen ıcınde for kullanıcaz. burdada deger anahtar ıkılısı var foreach kulalnırız value kısmına geldıgındede orda array oldugu ıcın orayı bıtırene kadar dondurur. ayrıca sımdı ıc ıce bır dızı oldugu ıcın deger anahtar ılıkısıne oturtmam gereklı bunun ıcın dızındekı gecıcı yerı alıyorum $fıletmp bu yni sonra  as ıle donguye sokup parcalıyorum ve anahtar deger ıkılısıne ayıyırıyorum.
       
        $filesname = uniqid()."_".$takefiles["name"][$mykey];// naame adlı keeyı yazdırk onun ıcıne gırdı 0 1 2 ıste kactane varsa ıcını yazdırdı. ve ben    [type] vs ssekınde degıl degerlerını alıyorum.
        $filestype = $takefiles["type"][$mykey]; // bunları $takefiles["type"] bu sekılde cekebılırısn mykey seklınde olmaz dosya ozellıklerı cunku sonra anahtarın valuelarınada  yanına [$mykey] yazarak mesela $takefiles["name"][0] pekı bu nedır nameın valuesundakı arrayın 0.elemanı
       $filestmp = $takefiles["tmp_name"][$mykey];// dizindeki gecici yer
              $fıleerrs = $takefiles["error"][$mykey];
               $filessize = $takefiles["size"][$mykey];
       $mypaths = "profilres/".$filesname;
       // ayrıyetten her bırını dosyaya yuklemesı ıcın buraya dosya yukleme kodlarını yazmamıs lazım
       
             if($fıleerrs === 4){
                 header("location:worksty.php?yuk=hatabos"); 
             }else{
                 
                  if(file_exists($mypaths)){
                     header("location:worksty.php?yuks=hatadol");
                   exit();
                   
               }else{
                      
                        if($filessize > 3000000){ //  fılesıze resmın boyunu bayt seklınde alıyor onun ıcın bayt boyutunda yaz kosulunu bu bayt ıse 300kb cıvarında oluyor 1 mb ıse 1 ve 6 sıfırdan olusuur. 1000000
                        header("location:worksty.php?yuk1=maxhat");
                   }else{
                      
                     $fileextens = strtolower(pathinfo($mypaths, PATHINFO_EXTENSION));
                            
                           $allw = array("docx","pdf","txt");
                            
                           
                           
                       if(!in_array($fileextens,$allw)){ 
                           
                           
                            header("location:worksty.php?yuk2=uzhaterr");
                           
                           exit();
                           
                           
                       } else{
                           
                              $sifre = $_SESSION['sifre'] ; 
               
                 $sorgua = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
         
                 $satir = mysqli_fetch_assoc($sorgua);
                            $empoloye = $satir["employeeNumber"]; 
                           
                         
                           
                           
                            $sorgu = "INSERT INTO filemanagement (name, field,type,size,employeeNumber) VALUES ('$filesname', '$mypaths','$filestype','$filessize','$empoloye')";
                           
                         if(mysqli_query($baglanti, $sorgu)){
                               
                              
                                 
                          if(move_uploaded_file($filestmp,$mypaths)){ 
                               
     header("location:worksty.php?yukr=basarılı");

         
    }else{
         header("location:worksty.php?yukm=hata");
    }    
                             
                             
                             
                             }else{
                                 header("location:worksty.php?verıms=hatxx"); 
                             }
         
                           
                           
                       }
                            
                            
                            
                  
                      
                        }
                      
                      
                 
                      
                      
                  }
                 
                  
                 
             }
       
     
       
       
   }  
         
         
  
         
         
   

     
   
     

       


 }else{
  header("location:worksty.php?gırıs=notpos");
 }

?>
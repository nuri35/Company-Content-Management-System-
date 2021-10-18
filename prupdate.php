<?php
 include("ayar.php");
require_once("ornek.php");

require "guvenlık.php";

if(isset($_POST["mysub"])){
    
 
    
    $data = $_POST["data"];
  
if(!isset($_POST["tokenss"])){
    
     die("token bulunamadı");
     
    
}elseif($_POST["tokenss"] !== $_SESSION["tokenforms"]){//sessıona atanan tokenla namedekı esıt degılse
 
    
      die("sORUN VAR DIKKAT!"); 
     
}else{
    
    foreach($data as  $mykey => $myvalue){
        
  
        
        if(empty(security($myvalue))){
        header("location:avatar.php?yuk=hatabos");
           exit();
        
    }
        
          
        }
        
 
    
 for($i = 0; $i<1;$i++){
      $patternnumber = "/[^0-9 ]/";  // rakam harıcınde bırşey gırdıyse demek sonuc 1 doncek
   $mypatt = array("/-/","/\(/","/\)/");
     $myreppat = array(" ","","");
     $represut = preg_replace($mypatt, $myreppat, $data[0]);
     
  
     
      if(preg_match($patternnumber,security($represut)) == 1){ // pregmatchall a gerek yok 1 tane bıle rakam harıcı bırsey gırıldıyse zaten numara degıldır o
       
          header("location:avatar.php?gırıss=notnum");
          
   }else{
       
    
          if(security($data[0])){
             $data[0] = $represut;
             // ben burda 10 hanelı basında 0 olmayan cep telefonu ıcın 5 ıle baslayan ev telefonu ıcın 2 ıle baslayan bır şey yapmam lazım.   
        $lenght = preg_replace("/\s+/","",$data[0]); // boslukları getır bır veya daha fazlası olabılır bunu yaptık burda  ve ""yaparak o boşlukları sıldık replace yaptık 
            $lenght = trim($lenght); // basta vee sondakı boslukları yok eder  
              
              if(!(strlen($lenght) >9  && strlen($lenght) <11 )){
                   header("location:avatar.php?gırısx=tcntuz");
                  
              }else{
                  $patt = "/ ?5[0-9]{2}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}/"; // 10 hanelıyse burayıda kontrol etmelyıız enbastakı ? ile ya 0 tane yada 1 kez bosluk bırakacagım anlamına gelır ayrıca en basında 5 olup diger 2 rakam olacagını sonrasında boşluk veya boşluk olmayabılır dıcez sonra gine 3 tane rakam olacagını soylıcez
                  
                  $resx = preg_match($patt,$data[0],$takenumber); // basarılıysa hepsıne uyuyorsa 1 doner
                  if($resx == 1){
                    
                    
                       $dat1patt = "/^(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:.,;]{2,}[-a-z0-9+&@#\/%?=~_|]$/i"; // bır lınk kontrolu ıcın ılk once  ?: yaparız neyle devam et grup olustuurp onunla devam et dıyoruz  s ın basına soru ısaret koyduk ya s olur yada olmayabılrı anlamında sonra ftp yazıyoruz  yanı http dısında ftp seklındede yazılabılır ondan oyle yaptk grup olusturduk sonra grubu kapattık ve 2 nokta koydk ve slahh koyduk ve www ve . kymayı zorunlu kıldık. sonrası domaın ısmını cekmek ıcın seeyler yazıyoruz bunlar rakam sayı olabılır  bazı sımgelerden olusabılır pekı bunlar mınumum 2 ve daha fazla olabılcegını sylemıs olduk sonunda .coom net gıbı seyler ıcın bırdaha eklyıoruz
                      
                      
    $datrespat = preg_match($dat1patt,security($data[1]),$taknums);
    
    if($datrespat == 1){
        
     $fıltname = filter_var(security($data[2]),FILTER_VALIDATE_EMAIL);
        
    if($fıltname){
        // bu sefer ılk once password konrolunde 2 password uyumlumu unutma burda guncelleme ıslemı yapılıyor bu sayfada
       if(security($data[3]) == security($data[4])){   
// esıtse burada password regex kontorlu olcak
           
           $pass = $data[3];
          
           
           
        $sonc =   filter_var($pass, 
  FILTER_VALIDATE_REGEXP,
  array( "options"=> array( "regexp" => "/.{6,25}/"))
                             
                             
);
          
           
           if(!$sonc){
                header("location:avatar.php?gırısssx=nosıfuy"); 
               exit();
           }
               
           else{
               
               $sifre = $_SESSION['sifre'] ; 
               
                 $sorgua = mysqli_query($baglanti, "SELECT * FROM employees WHERE   sifre ='$sifre' ");
          $sorgsat = mysqli_num_rows($sorgua);
                 $satir = mysqli_fetch_assoc($sorgua);
               
                 $cus = mysqli_query($baglanti, "SELECT * FROM customers WHERE   sıfre ='$sifre' ");
          $sorgcus = mysqli_num_rows($cus);
                 $satir2 = mysqli_fetch_assoc($cus);
               
                if($sorgsat > 0){
            $empoloye = $satir["employeeNumber"];
        
            
               $sifrem = md5($data[3]);
                     
               $webs = urldecode($data[1]);
                    
               $sorgu = "UPDATE employees SET  mobileNumber = '$data[0]', webSite = '$webs',email = '$data[2]',sifre = '$sifrem' WHERE 	employeeNumber ='$empoloye'  ";
               
                if (mysqli_query($baglanti, $sorgu)) {
                header("location:logout.php?gırısbas=guncsucccess"); 
                    
                   }else{
                     header("location:avatar.php?verı=hat"); 
                }
                    
                    
                    
                    
        }elseif($sorgcus > 0){
                   $cusno = $satir2["customerNumber"];
                      $sifrem = md5($data[3]);
                     
               $webs = urldecode($data[1]);
                    
               $sorgu = "UPDATE customers SET  phone = '$data[0]', 	webSite = '$webs',email = '$data[2]',sıfre = '$sifrem' WHERE customerNumber ='$cusno'  ";
               
                if (mysqli_query($baglanti, $sorgu)) {
                header("location:logout.php?gırısbas=guncsucccess"); 
                    
                   }else{
                     header("location:avatar.php?verı=hat"); 
                }
                    
                    
                    
                    
                }
             
               
           }
           
       }else{
             header("location:avatar.php?gırısver=noverify"); 
       }
        
        
    }else{
        
         header("location:avatar.php?gırısem=noemaıl"); 
        
    }
        
    }else{
        header("location:avatar.php?gırısa=lınkprob"); 
    }
                      
             
                  }else{
                        header("location:avatar.php?gırısm=numntuyg");
                  }
                  
              }
              
              
          }
        
   }
     
 }
     
    
    
    
    
    
    
    
    
}
    
  

}else{
    
    
      header("location:avatar.php?gırıs=notpos");
 
}



?>
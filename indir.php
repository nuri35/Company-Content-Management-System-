<?php
 include("ayar.php");
require_once("ornek.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){ // hangı methotla gelıp gelmedıgnı kontrol edıyorsun postla gelenlerı hata verdrıyorsun
    
    if(isset($_GET["name"]) && !empty($_GET["name"])){ // ıcının dolu olup olmadıngı kontrol edıyorsun
         
       // $fılename = $_GET["id"];// buna ulaşmıcaz bız name ye ulasmamız lazım zaten name ısımlerıde benzersızdı 
        
        $fılename = $_GET["name"];
        $mypath = "profilres/".$fılename;
        
        // sımdı ındırmeden once sunucumda varmı yokmu bunu kontrol edıcez ama verı tabanından sılınce zaten klosorden heryerden sılıncek dolayısıyla goremıcen ama onlem onlemdır yapmamız gerekecektır.
        
        if(file_exists($mypath)){
           // sımdı buraya ındırme yapacagımız kodu koyucaz.
            
            header("Content-Description:File Transfer"); // ındırılcek dosyanın ıcerık acıklaması nedır bu bir dosya transferidir.
            header("Content-Type: application/octet-stream"); // ıcerıgının turunude vermek zorundasın octet-stream bunu dıyerek  belli birşeye sıkıstırmadık burda bunun yerıne pdf de zıpde verebilirdik boylelıkle kısıtlandırabılrıdık.bunuda  mime type  vıdeosunda tekrar etmıstık dosyanın karsılıgı olan turu gelıp buraya yazıyoruz ve kısıtlamıs oluyoruz 
            
            header("Content-Disposition:attachment;filename=".uniqid()."_".$fılename); // yanı burda ben eklı dosya seklınde verıyorum attachment dıyerek   bu dosyanın ındırılebılır olması ıcın  bunun eklı dosya oldugunu belırtmem lazım sonra filename diyerek dosyanın adını belirtmem lazım tırnakları kaptıyorum ardından  uniq işlemi yapıp dosyanın adını verıyorsun daha sonra kullanıcı tıklayıp ındırdıgınde unıiq bir ısım ve dosyanın ısmını verıcek
     
            header("Content-Transfer-Encoding:binary");// dosyanın transfer edılırken kodlamasının binnary ıkılı olacagını soyluyorum
            
         header("Expires:0");
             header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
             header("Pragma: public");// bu bırlesk 3 tane şey şu tarayıcıya şunu soyluyorum  benı onbellegine alma diyorum 
            
            
            header("Content-length:".filesize($mypath));// dosya boyutu niçin bunu gostermelıyım nicin cunku hanı bır vıdeo gırıp ındır dedıgınde kac mb oldugu vs yazar işte bununla yapılıyor
            
            // kısaca bu yukardakı headderlarla ılgılı ben dosyamın bılgılerını aktrıyorum.
            
          ob_clean();
            flush(); // bu ıksıyle benım hafızaya aldıgım şeyleri tekrardan temızle dıyorum.yanı arabellegi temızlemıs olur.arabellege alınmıs dosya cıktılarını temızler
            
            readfile($mypath); //readflie bir dosyayı okur ve cıktıyı strınge yazar dedık yanı  $mypath = "profilres/".$fılename; bunu okuyor ve stringe atıyor
            
             header("location:avatar.php"); 
            
            exit();
            
            
            
        }else{
            header("location:avatar.php?hata1=notdosyok"); 
               exit(); 
        }
        
        
        
        
    }else{
        
         header("location:avatar.php?hata2=notbasdown"); 
               exit();
    }
    
    
    
 

    
}else{
        header("location:avatar.php?hata3=dows"); 
               exit();
}




?>
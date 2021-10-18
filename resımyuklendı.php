
<?php
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");
    include("ayar.php");
 //yanı kullanıcıdan bır muzık dosyası yukletcen onun muzzık dosyası olup olmadıgına kontrol etmek ıstıcek onunu ıcın yapabılrısn eğer farklı dosya tıpı yuklemen ıcın   $dosya == mime typdakı dosya adını yazarak o seklde yazabılrısın
 
   $productName = mysqli_real_escape_string($baglanti, $_POST['productName']);  
   

// ılk array inputtaki name olan img yi yazarız dıger kısma ıse dosyanın formatı farklı olabılecegınden 2 deger yazıyoruz 2.deger ise dosyanın ısmı yanı gondercegının ısmını alır yanı mesela resımler.jpg png vs ad varya onu alır 
 $dosya = $_FILES['img']['tmp_name']; // 2.kısma type yazabılırsın hangı tıpte oldugunu verır sana 

// ıssetnot demek dosya gonderılmedıyse anlamında  if(!isset($dosya) ) O BUTONA BASMADIGI ICIN HALA GONDERILMEDI ONUN ICIN BU YAZAR 

   if(!isset($dosya)){
       
      echo 'lutfen resım secınız ';

}else{
    
        $img = file_get_contents($_FILES['img']['tmp_name']);  // bu resmın bınary seklınde yuklenmesını saglar boyle karmasık yazılar seklınde sımdı bunu resıme donusturcez  bunlara ılıskın degıskenler olusturduk bız bunu echo yaparak yuklenıp yuklenmedıgını anlayabılırız
      // $img_isim = substr($_FILES['img']['name'],-4,4);   //  addslashes  bu sql ınjeksın yememeyı saglar yanı bır hackerın sıze verı tabanına bırseyler eklemesını engeller
        $img_isim = $_FILES['img']['name'];
       //substr koymamın nedenı cok buyuk ısımlerı kesmesı artı birde bazen bir dosya resmı yuklemeye kalktıgımız zaman  ısmının arasında boşluk varsa aralarında cızgıler olmadıgı zaman dosya yolunu bulamıyor  hemde resım dosyasının ısmınden bırtane dha yolladıgında ustune yazar gereksız yanı
       $dosyaadi = $img_isim ;
       
       $dosyayolu = "resimdosya/".$dosyaadi;
       
       $maxboyut = 700000;
       
         $img_boyut =  getimagesize($_FILES['img']['tmp_name']); //resım yuklemedıysen baska bırsey yukledıysen resmın boyutunu algılayamıyorsa boyle bırsey yazılabılır asagıdakı gıbı
        $sorgu= "INSERT INTO depom (isim,img,productCode)  VALUES('$dosyayolu' ,'tmp_name','$productName')";
       
       if($img_boyut == false){ // resım boyutu degılse resım degılse yanı falsse doner boolen operatoru olarak,  type yazarak tıpını okuturum boylelıkle farklı bır tıp dosyaysa bunu kabl etmez   $img_type =  $_FILES['img']['type'] gibi  yada getimagesize($_FILES['img']['type']);    
        echo "Lütfen bir resim dosyası giriniz";
    }
       
       elseif($_FILES['img']['size'] > $maxboyut ){
           echo "dosyanız 700000 kb dan yüksek olamaz";
           
       }
       
    
       
    else{
        
        if (!$ekle=mysqli_query($baglanti, $sorgu)  ) {
             $islemSonuc = "Hatalı bir işlem: " . $sorgu . "<br>" . mysqli_error($baglanti);
            echo "$islemSonuc ";

    }
        
        else{
          echo "işlem basarılı";   
            
            // dosyanın yuklenıp yuklenmedıgını anlamak ıcın kullandık  uploaded fonksıyonunu 
            if(is_uploaded_file($_FILES['img']['tmp_name'])){
                
           // dosyayı tasımak ıcın bu fonksıyon    
                $tasi = move_uploaded_file($_FILES['img']['tmp_name'],$dosyayolu);
                
                if($tasi){
                    echo "dosya başarıyla taşındı";
                    
                }else{
                    echo "dosya tasınırken hata oluştu";
                }
                
                
                
            }else{ // tasınmadıysa bura goruncek.
                echo "dosya taşınırken bir hata oluştu";
            }
            
            
            
            
        }
        
       
   }

  }

?>



   
  
 
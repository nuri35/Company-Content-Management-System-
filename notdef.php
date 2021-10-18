<?php
declare(strict_types=1);
    /* Bağlantı bilgilerinin alınması*/
      require_once("ornek.php");

// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlarv// varıables farklı yazımlarv// varıables farklı yazımlar

$x=5; // ornegın x glbal degıskenıne  scope ıcınden ulasamıyorum 

$y=10; // globalları localde yanı bır fonksıyon ıcınde mesela kullanmak ıstersek fonksıyon ıcınde o degıskenın yanına global kelımesını ekle
function deneme(){
    
 global   $x; // global demenın bir yazım seklı
    $GLOBALS["y"]=$x+$GLOBALS["y"]; // global demenın bir yazım seklı
   
   
  static  $k=55; // normal olarak  fonksıyonda yerel degıskenler fonksıyon bıtınce k degıskenını mısal sıler kendını tutmaz dolayısıyla dısarda ona ulasamıyoruz undefıned der ancak bazen yerel degıskenı sılınmeısnı ıstemeyeız  yada baska yerde kullanmak ısterız ozman degıskenı ılk ılan ettıgın yerde statıck kelımeısnı kullan
    
    $k++; //   mesela arttırma operatoru kullanıyoruz bırdaha fonksıyonu calıstırdıgımızda 56 olmaz ıcerde degerı sıler fonksıyon bıttıgı ıcın
   // ama static kullandıgımız ıcın o fonksıyonda  tut sılme daha sonra tekrar kullanıcam daha sonra ekrana yazıdırıyorum 45 diye daha sonra   k degıskenının degerını 1 arttır e aklında tutar sılmez sstatıc dedık cunku normalde fonksıyon tamamlayınca degıskenlerı sıler ya 
      echo $k;  // statıc olmasaydı 55 sı 56 yapıp fonksıyon bıtınce sılecektı bırdaha cagırdıgmızda gıne 55 sı bır arttırıp 56 olurdu
}

deneme(); 
echo "<br>";

deneme(); echo  "<br>";
deneme(); echo  "<br>";



$renk= "kırmızı";
?>

<p>
    guller
    
    <?= $renk ?> 


</p> 

<?php
    // varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlar// varıables farklı yazımlarv// varıables farklı yazımlarv// varıables farklı yazımlar
    
    
    
    
    // phpde nesneler class ıle cagrılır  // phpde nesneler class ıle cagrılırv // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılırvvv
    
    class araba{ // ısmı araba olan bır sınıf nesne olusturduk
    // hemen ıcıne construcurımızı olusturuyoruz  yıne aynı ısımle  yanı aynı class ısımınde bir fonksıyon olusturuyorum
        function araba(){
            $this->model="q5"; // bu nesnemın yanı arabamın bir modelı olsun model diye bır ozellık verıyorum sımdı bu nesnemı asagıda cagırdım
        }
            
}
    
    
$takecar = new araba();
 echo  $takecar->model. "<br>"; // modelın degerı olan q5 sı cagırmıs olcak
     
    // phpde nesneler class ıle cagrılır  // phpde nesneler class ıle cagrılırv // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılırvvv    
    // phpde nesneler class ıle cagrılır  // phpde nesneler class ıle cagrılırv // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılırvvv    
    // phpde nesneler class ıle cagrılır  // phpde nesneler class ıle cagrılırv // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılır // phpde nesneler class ıle cagrılırvvv
    
    
     //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO V   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO  //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO V   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO
    
    
    
    //constant variable olusturmak normal degıskenler gıbı $ ile başlamaz bırkere tanımlandıgında degıstırelemzler.  gecerlı br sabit isim harf veya alt cizgi ile başlar 
    
    
    //define(name,value,case-insensitive) seklınde tanımlanır. ılkınde degıskenın ısmı 2.cısınde degıskenın alıcagı deger
    // define("langarray",["a","b","c"]) unutma sabıt degısken global degısken ozellıgını almaktadır.
    
    
    
   // declare(strict_types=1); //yanı burada strıct dıyerek türlerime katı davran demek ıstedıdm bunu yazınca yukarda sum fonksıyonun ıcıne ınt olarak belırlesek bıle bıze toplatmıcak  en son  sum(7,"12"); buradan tur sorununu duzeltırsın ve hatan duzelmıs olur

    
    
    
    // bu sekılde parametrelere hıc bırşey eklemezsen iint gibi ozman stringin içinde sayı varsa toplar direk yanı php gevşektir.ama gine uyarı verir
    function sum(int $x, int $y){ //ama burda parametrelerın başlarına int diyip tür bildirimi yaparsam gine uyarı verıyor  sımdı burda bu sekılde yaptıgımz ıcın toplama işlemınde karısıklık vverır  phpde ama bu sefer matamtıksel toplar 19 verır ama halbukı strıngle topladık ama ıcıne bakıp 7 den dolayı hemen topladı  ama uyarır seni tür karısıklıgı olduguna dair dolayısıyla en yukarda declare fonksıyonunu kullanırsın bunun olmamaası için. declareyı verdıgın an katı moda gecmıs olursun tür bildirimi yapmassan toplar ama gine uyarır ama katı mod oldugun ıcın tür bildirimi yapmalısın daha sonra yaptıktan ssonra  uyarmayı bırak sana toplattırmaz işlemi. dolayısıyla c dillerinde nasıl katılık var parametre veya degıskenın yanına int float diyorsun bunu zaten burdada yaparsın o ayrı ama declare yaptıgın için c dillerindeki gibi sana toplattırmaz sum(7,"12 saat"); artık bunu duzeltıp sum(7,12); bu sekılde yazdıgımızda sana snucu vermıs olur
    echo $x+$y ."<br>";
}
    sum(12,7 );
    
 
    
    // UYARI hanı fonksıyon yazıp foksıyonun ıcınde echo yapıp o fonksıyonu cagırıyorsak tamam sıkıtı olmaz echoyu fonksıyonda yaz
// functıonun ıcınde sadece echo dıyıp mesaj yazdırmıyorsak asagıdakı gıbı ıslemler yapıyorsak echo kullanmak sacma olur  
    
    function sumx(int $x, int $y){ // neden return kullanıp ıcerde echo yapmayıp dışarda echo kullanmalıyız
        // cunku ben ıcerde echo yaptıgımda sum fonksıyonunu cagırır sonra  z degıskenın verıyor ve degerırını ekrana  bastırıyor daha sonra dışarda echo yaptıgımda ve .sum(7,12) bnu yazdırdıgımda echoda sonuc boş donuyor cunku return yapmadık degerı dondurmedık  ama bız return yaparak degerı fonksıyona gerı dodndurup bunu dısarda ıstedıgım baska seyde fonksıyon olarak kullabılcez
        
        $z = $x+ $y;
        return $z ;
        
    }//bir işlem yaptıgımzda degıskenlerın yanında int vs seklınde belırleyebılrız 
    
    echo "7+ 12 ".sumx(7,12) ."<br>";
    
      echo "8x 11 ".(8*sumx(7,4))."<br>";
    
    
     // return $ z dedık bunun  return oldugunda hangı verı turune donmesını gerektıgınıde anlatabılrıız
    // katı modda oldugumuz ıcın gıne burada parametrede tur bıldırımı yaptık int diyerek hatalı kullanırız dıye bıze dırek sert bır hata verır
     function sumz(float $x, float $y):int{
         
    
        
       return (int) ($x+ $y);
         // sımdı bu degıskenlerı topla ve geri bana dondur dedık sonucu ama hangı verı turunde gerı dondursun bıze yanı float ıslemını tam sayı oalrak ıstersın   bu sekılde yapabılrız (int) ilede döndurme ıslemını z degıskenınde yaparsın
        
    }
    
    echo sumz(4.2 , 12.2);
    
                   
               
                    
    function ekle(&$value){
        
        $value +=5;
       
    }// sımdı burada return yapmadık fonksıyonu calsıtırıdıgmızda  bırsey olmaz daha sonra echo $mydeger dedgıımız yere 14 du yazdırır ama return yaparsan fonksıyonu gerı dondurur  ve o fnksıyonu cagırıdıgmz ıcınde  o ıcındekı ıslemı yapar  19 olarak bıze doner return yerıne parametre kısmında & da yapabılrısın
                                      
    $mydeger = 14;
    ekle($mydeger);
    echo $mydeger;
   
   echo  ekle($mydeger)."<br>"  ;  
    


    
    
    //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO V   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO  //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO V   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO   //NOT NOT NOT NO TNO
    
    
    
    
    
     //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR   //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR   //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR   //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR 
    
    
    
    // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR   // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR
    

    
     $anon = function (){
        echo "anonım fonksıyon"; // burdakı fonksıyonu bır degıskene atayarak anonım fonksıyon yapıyoruz
    };
    
    $anon();
    
    // pekı ya arraylerde nasıl tanımlanır // ıcınde bır fonksıyon yazıyorsan normal sekılde arrayın ıcınde ozman kabul etmez anoonım yazmalsııns
    
    
    $cars = array("Volvo", "BMW", "Toyota",
                 
                function(){
                   echo "arrayı cıınde anonım fnksıyondur"."<br>";
               }
                 
                 );
    
    echo $cars[3]();
    
     // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR  // ANONIM FONKSIYNLAR
    
    
    // FONKSIYONLARDA PARAMETRE BILGISIS // FONKSIYONLARDA PARAMETRE BILGISIS // FONKSIYONLARDA PARAMETRE BILGISIS // FONKSIYONLARDA PARAMETRE BILGISIS
    
    
    // fonskıyonları oyle bır yerde kullancazkı parametre sayımız belırsız olacak mesela verı tabanından verı cekerken.ozzman kac parametre oldugunu soyleyen kodu yazarız. pekı ben bu belırsız parametrelerı nasıl fonksıyon ıcınde alıp ekrana yazdıracam  func_get_args() bu fonksıyon ıle 
    
    
     function mesas(){// BURADA BURSURU VVERI YANI PARAMETRE OLABILIR ONUN ICIN BELIRSIZ OLACAKTIR BURASI
    //   return  func_num_args(); // KAC PARAMETRE ALDIGINI GOSTERİR BİZE
         $parvalues = func_get_args(); // bu alır parametrelerı ve arraye atar dolaysıyla bunlarıda for dongusuyle cekerım func_get_arg() var buda dızı mantıgında paranteze 0 1 2 felan yazıyor ve o dızıdekını getırıyor sadece echoyla bastırsın ve gorursu sonucu 
          
       foreach ($parvalues as $value) {
  echo "$value <br>";
}
         
               }
    
   $ısxlet = mesas("nurı","sen","sen","sen","sen"); 
    echo $ısxlet. "parametre bulunmakta " ;
    
    // FONKSIYONLARDA PARAMETRE BILGISIS // FONKSIYONLARDA PARAMETRE BILGISIS // FONKSIYONLARDA PARAMETRE BILGISIS // FONKSIYONLARDA PARAMETRE BILGISIS 
    
    
    
    // fonksıyon farklı yazımlar   // fonksıyon farklı yazımlar   // fonksıyon farklı yazımlar   // fonksıyon farklı yazımlar  // fonksıyon farklı yazımlar
    $run = "message";
    function message(){
        echo "calsıtım ";
        
    }
    
    $run();
     // fonksıyon farklı yazımlar   // fonksıyon farklı yazımlar   // fonksıyon farklı yazımlar   // fonksıyon farklı yazımlar  // fonksıyon farklı yazımlar
    
    //  fonksıyon otomatık calıstırmak ıcın   fonksıyon otomatık calıstırmak ıcın  fonksıyon otomatık calıstırmak ıcın 
    
     // 45.vıdeoda otomatık calısan fonksıyon kısmında return ıle ılgılıde bılgı verıyor fakat farklı bır yazım yok return calıscagın zaman bu vıdeodanda bılgı edınebılrıısn
    $runx = function(){
        echo "calsıtım asdasdsds ";
        
    };
    
    $runx();
     // fakat tam otomatık cagırmak ıcın
    
     ($runx = function(){
        echo "lan otomatık caıstım ";
        
    })(); // buradakı kume parantezındende parametre cagırabılrısın
    
    
      ($runxx = function($par2,$par3){
        echo "lan otomatık caıstım ";
        
    })("ads","asdads");
    
    
    
     //  fonksıyon otomatık calıstırmak ıcın   fonksıyon otomatık calıstırmak ıcın  fonksıyon otomatık calıstırmak ıcın 
    
    
    // recursive  fonksıyon  // recursive  fonksıyon  // recursive  fonksıyon  // recursive  fonksıyon 
    
    // aslında kendı kendını yenıleyen sıstemlerde recursıve yapılar kullanılır.
    
    function messagem($sayı){
        
        if($sayı <=5){
            echo $sayı."<br>";
            messagem($sayı + 1); // burda kendıkendını cagırıyor zaten recursive ne demek özyinelemeli demek yanı kendı kendını yenıleyen yapı yanı kendı kendını cagıran fonksıyon olusturmak ıstersen recursive yapılar olusturuuz messagem(2); bura 2 oldu kendını cagırdı ya yukarı kendı  messagem(2)  oldu  ıf ksuluna gırıyor boyle devam edıyor ıf kosulu saglanana kadar
        }
        
        
    }
    
    
    
    messagem(1);
      // recursive  fonksıyon  // recursive  fonksıyon  // recursive  fonksıyon  // recursive  fonksıyon 
    
    
    
    
    
    
    
    // not not    // not not    // not not     // not not     // not not     // not not 
    /*
      function operaton($last){
        
        for ($x = 0; $x <= $last; $x++) {
  echo "The number is: sx <br>";
} // bu yanlışşşş dogrusu bır aşagıda calsıır ama yanlıs
        
        
    }
    
    operaton(7);
    
    */
    //  fonksıyonlar ıcınde for yapmayız nadır bırseydır normalde nabarız  return ıle degerlerı alırız  fonksıyonu cagırdıktan sonra for dongusu yaparız  yanı for dongummuzu fonksıyondan aldıgımız sonuclardan sonra calısıtırız yanı nasıl ?
    
  
    
 function operaton($last){
     $numbers= array();   
     
        for ($i = 0; $i <= $last; $i++) {
            $numbers[$i]=($i+1); // yanı yukarda bız numbers dıyee array olusturduyduk bu arraya degerlerı verıyoruz farklı bır yazım .0.arraye 1 degerını atamıs olcaz bız bunları fonksıyondan sonra for ıe alabılmemzı ıcın array tanımlamamız lazım
} 
        
        return $numbers; // burdada numbers degerlerını return edıyoruz yanı bızım ıstedıgımız degerlerı dondurup fonsıyonu sonlandırıyor YİELD DA bu ısı yapar yanı return ıle aynı şeyı
     
     // fakat farkları return nerde olursa olsun fonksıyonu sonlandırır yanı returnnun altındakı komutlar calısmaz ya  ama yıeld ne yapar oda aynı şeyı yapar  degerlerı dondurmemızı saglıyor  ama return gıbı fonksıyonu sonlandırmaz. altındakı kodlar calısır yanı
     
     // yıeld nerde kullanıırız biz hep return kullanıcaz ama return kullanmadıgımız zamanlar ne functin ıcınde donguler kullandıgımızda yukardakı function ıcınde dongu kullanma bıcımı yanlıs
     
     // fakat gine kullanmak zorunda kalırsak burdakı ornek gıbı kullan. herneyse işte en dogru sekılde bu sekılde function ıcınde donguler kullanmak zorunda kaldıgımızda  bu nadır olur functıon ıcınde pek kullanmayız olursada return yerıne yıeald kullan 
     
     // yield kullanımı array mantıgındadır
     
    // yield ($i+1); bu skeılde yazabılrıız array tanımlamadan cunku sureklı her degerı  $resus degıskenenıne atıyor o sekılde dısardakı for ılede donduruyouz 
     
     // ÖNEMLI
     
     // array tanımlamadan  return  ($i+1); deseydık sadece bır defa calısıcaktı ve returnu gordugu ıcın sonlandıracaktı ve degerı gerı dondurup dısarda 1 sonucunu yazdıracaktı. hatta hata verıcek fcunkku dısarda foreachlık bır durum yok bırtane deger var .
     
    }
    
   $resus = operaton(7); // burdakı degerıde bır degıskene atadık ve fonksıyondan sonra foreach ıle bastırabılrızı fonksıyondan sonra cunku degerı aldık ılk fonksıyonu cagırdık bu sekılde fonksıyon ıcınde for kullanabılrızı ama nadırdır.
    
    foreach($resus as $myvalue){
        echo $myvalue;
        
    }
     // not not    // not not    // not not     // not not     // not not     // not not  // not not    // not not    // not not     // not not     // not not     // not not 
    
    
    
// iç içe fonksıyon  // iç içe fonksıyon  // iç içe fonksıyon // iç içe fonksıyon  // iç içe fonksıyon  // iç içe fonksıyon
     function main(){
        function mazz(){
            echo "<br>"."ben fonksıyon ıcındeyım"."<br>" ;
        }
        echo "<br>"."ben ana fonksıyon "."<br>" ;
        mazz();
    }
    main();
    mazz(); // ıcerdekınıde cagırmak ıstıyorsan  fakat dısardakı fonksıyonu cagırmadan ıcındekı fonksıyonu cagırısan hata verır.
   
     
    function mainx(){
        function mazzx(){
          return "<br>"."ben fonksıyon ıcındeyım"."<br>" ;
        }
        
        $ıcfonksıyon = mazzx();
        return "<br>"."ben ana fonksıyon "."<br>".$ıcfonksıyon ;
       
    }
   echo mainx();
    
    
    // iç içe fonksıyon  // iç içe fonksıyon  // iç içe fonksıyon // iç içe fonksıyon  // iç içe fonksıyon  // iç içe fonksıyon
    

   //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR   //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR   //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR   //FONKSIYONLAR   //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR  //FONKSIYONLAR 
    
    
?>

  <?= "php ne guzel la"; // kısa tek satır ıcın yapılacbılecek php tag acıp kapatma ozellıgıs ?> 

 <?php $print = "php ne guzel la"; // bu 2 kere yazdrcak ozman basına php koys?>  
<?= $print; ?> 




<?php
//NOT NOT NOT NOT

//UNUTMA  ORNEGIN BİR SAYAFADA FONKSIYON YAPTIN VE ONU BASKA  SAYFADA KULLANCAN REQUİRE İLE MESELA BASKA SAYFADA FONKSIYON YAZDIGIN SAYFAYI CAGIRIYON YA O CAGIRDIN SAYFALARDAN BİRSÜRÜ İNCLUDE DIYEREK VARSA O ÇAĞIRMA İŞLEMINIDE AYRI BIR DOSYADA YAPIP SADEECE O 1 TANE DOSYAYI SAYFANA EKLEMEN YETERLI OLACAKTIR EKLEDIGIN ZAMAN O FONKSIYONLARI SAYFANDA KULLANABIRISIN



/*  date_default_timezone_set("Europe/Istanbul");


echo date("U")."<br>"; // o an yazdgın anın 1623346022 zaaman damgasını verdı

$datem = time(); // buda aynı sekılde zaman damgasını verır.
echo $datem
echo date("d.m.Y H.i.s",1623346022)."<br>"; // bu sayısal zaman damgasınıda bu sekılde acabılrısın  ornegın  zaman damgasını verı tabanında tutuyorsunuzdur boyle bır verınız vvar gelıp bu sekılde acabılrısınzı ve kullanııca gosterısnız ıstedıgınızı belkı bır verı makale ekledınız  ve veritabanına  ekledıgınz makaleyı zaman damgasıyla ekledınız ve ordakı zaman damgasını ceker burda acabılrısınız.*/
?>


                          }


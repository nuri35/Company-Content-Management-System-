

<?php
    
require_once("ornek.php");

  include("ayar.php");
  


if(isset($_POST['loggın'])){

        
            
          if(!empty($_POST['tur'])) {
              
              
    
  $deger = $_POST['tur'];
               $deger2 = $_POST['tur'];
              
              
    $benıhatıra= $_POST['benıhatıra'];
    
 $firstName= addslashes($_POST['firstName']);
    $sifre=addslashes(md5($_POST['sifre']));
     // burda md5lı ayarlama yapmak ıcın sonuc olarak sımdı verı tabnaında md5lı ama bız bow olarak gırıdıgmızde kabul etmıyor fakat burayı md5lı seklınde sıfreyı alırsak post ıle kullanıcı bow dıye gırdıgınde md5 se dondurup md5 olarak verı tabanında eslesenle gırıs yapmıs olucan
    
              
          $sortur = mysqli_query($baglanti, "SELECT * FROM customers  WHERE customerName = '$firstName' AND sıfre = '$sifre' AND admin_yetki2 = '$deger' ");
      
        $sontur= mysqli_num_rows($sortur);
              
              
               $sortur2 = mysqli_query($baglanti, "SELECT * FROM employees  WHERE firstName = '$firstName' AND 	sifre = '$sifre' AND admin_yetki = '$deger2' ");
      
        $sontur2= mysqli_num_rows($sortur2);
              
              
              
if(($sontur > 0 || $sontur2 > 0)){
    
    

    if($firstName && $sifre){
        
       
     
        
        
        
  
          $sorgux = mysqli_query($baglanti, "SELECT * FROM employees  WHERE hak = 0 AND firstName = '$firstName' AND sifre = '$sifre'  ");
      
        $verisaym= mysqli_num_rows($sorgux);
        

        $sorgu = mysqli_query($baglanti, "SELECT * FROM employees  WHERE firstName = '$firstName' AND sifre = '$sifre'   ");
      
        $verisay = mysqli_num_rows($sorgu); // kullanıcı gırdıkten sonra sorgu degıskenınde bunları getır dıyoruz eşit olan uyanı getır dıyoruz  ust kısımda ama ekrana basmıyoruz bıze lazım degıl cunku bıze lazım olan num_rows fonksıyonu bununla  eger kayıt varsa kactane kayıt oldugunu dondurcek. varsa 1 doner yoksa 0 false doner//
     
        // bak verı tabanında sıfreler kabak olarak ortada  mysql ınjek olaylarında verı tabanına sızmalarda  direk olarka şifrenızı kabak gibi kullanıcıya gostermıs oluyorsunuz
        // onemlı not: şifre alanını sıfrelememız lazım  yanı bunu md5 olarak saklamamız lazım yanı bu nedır gerı dondurulemez sıfreleme kodudur  md5 generator yaz oraya mesela bır sıfre yazdıgında 0412ffc5e7e1a19d8d23b4e288b3ced4 boyle bır hash verır sana o sıfrenın karsılıgı o oluyor yanı  bu kodu bırdaha cozemezsınız  kıramazsınız verı tabanındada boyle saklayabılrıız sıfre alanını
        
        // pekı mdr5 sı phpde nasıl kullanıcaz   bunu anlatıcaz tumler phpde anlattık
   $sorguz = mysqli_query($baglanti, "SELECT * FROM employees  WHERE hak = 0 AND firstName = '$firstName' AND sifre != '$sifre'  ");
      
        $verisayz= mysqli_num_rows($sorguz);
        
       
        
      
         $sorguz = mysqli_query($baglanti, "SELECT * FROM employees  WHERE hak = 0 AND firstName = '$firstName' AND sifre != '$sifre'  ");
      
        $verisayz= mysqli_num_rows($sorguz);
            
              $as = mysqli_query($baglanti, "SELECT * FROM employees  WHERE hak = 0 AND firstName = '$firstName' AND sifre = '$sifre'  ");
      
        $ad= mysqli_num_rows($as);
        
        
         $cus = mysqli_query($baglanti, "SELECT * FROM customers  WHERE hakım = 0 AND customerName = '$firstName' AND sıfre = '$sifre'  ");
      // customer number musterının kullanıcı adı olsun
        $cusnum= mysqli_num_rows($cus);
        
          $cus2 = mysqli_query($baglanti, "SELECT * FROM customers  WHERE  customerName = '$firstName' AND sıfre = '$sifre'  ");
      // customer number musterının kullanıcı adı olsun
        $cusnum2= mysqli_num_rows($cus2);
        
        
          //token olusturma 
            
            //XSRF ya da CSRF, websitelerini hedef alan kötü niyetli bir exploit türüdür. XSRF ile websitesinin güvendiği bir kullanıcı üzerinden, websitesine izin verilmeyen ya da kullanıcının farkında olmadığı komutlar gönderilir.ne demek bu yanı siz logın oluyorsunzu soru sorabılrısınız dosya yuklersınız vs bırısı sızın kullanıcı adınızla  bu ıslemlerı  yapmasını ıstemezsınnız kotu ıcerıkler yolluyabılır eger sitenizde csrf zaafıyetı varsa benı sevmeyen bırısıı benım adıma bırsey paylaşabılır nasılmı mesela eskıden msn den lınk yollarlardı lınke gırınce bırden sıfren degısırdı  calınırdı vvs
        
        
        
            //mesela sız tarayıcıdan gırıs yapmıs gorunuyorsunzu degılmı gırdınız mesela hedef  kısıde sıze web sayfası gonderıdıgnde tıkladıgınızda içerisiinde ajax request calsıyor.meslea soru cevap kısmında bır post ıslemı var bunu zararlı kullanıcı bılebılır nereye post edıldıgını ınputda name kısmını bıle bılebılır  vs sız o zararlı sıteye gırdıgınzde ılgılı adrese  o post edlecek ılgılı  bılgıyı yolluyor fakkat kulancı adı sıfre vs yolllamıyor cunku sız o sıtye gırdıınıgızde  ajax client tarafında calısıtgı ıcın aslında sızın oturum bılgılerınızle bu ıslemı yapmıs oluyor
            
            //ornegın zararlı kullanıcı nereye post eedıldıgını actıon mesela boşssa demek aynı sayfaya post edılıyr sonra ınputtakı name bılgısını bılıyor bu sefer arkadas sıze zararlı bır sıte yolladı vve gırdınız aslında arkaplandada  scrıpt kısmında ne yaptı orada zararlı bırşeylerı post ettı ınputtkı name vve nereye post edılcegını bılıyor  sız bu addrese gırdıgınız ıcın post ıslemı basarılı oldu ve o postakı bılgı ornegın soru cevapta paylaşıldı sızın adınıza ee server kısmında sadece bız post edlıp edılmedıgıne bakıyoruz e bıde kullanıcnın gırıs yapıp yapmadıgnı kontrol edıyoruz ama clıent tarafında ıstek attıgı ıcın ama sız zaten gırıs yaptıgınız ıcın bu gırıs kontrolunu es gecıyor ve zaten post ıslemını ıssetle kontrol edıyor clıent tarafındada zaten post oldugu ııcın hack yıyırosun dolayısıyla sızın adınza ıslem yapmıs oluyr.mesela bu ayarlar sayfasında yenı sıfre belırlemekte olabılırdı onlemek ıcın sunu yap token olsutur logın.phpye bak
        
        //ıste bızde logın ıslemlerıne uyarlıyoruz
        
        if(!isset($_POST["tokens"])){ // HERHANGI BIR TOKEN GONDERILMEMISSE YANI
            //oornegın zararlı kullanıcı post ederken zaten token olmadıgı ıcın bura calısmıs olur ulaşamaz hedefıne  cunku cllıent tarafında o tokenı alamıcak
           
            
            die("token bulunamadı");
              header("location: logın.php "); 
        }
        
        if($_POST["tokens"] !== $_SESSION["token2"]){
            
             die("sORUN VAR DIKKAT!"); 
             header("location: logın.php "); 
            
        }else{ //sımdı bu korumayla bırlıkte  gonderılen zararlı lınke gırılınce  token bulunamadı dıyecektı cunku clıent tarafında o tokenı alamyacak boyle bır acıgı kapatmıs olacagız.
            
            
        //SESSIONLARLA ILGILI ;
        // sessıon ıle verılerı serverda tutuyoruz. tum sayfalarda kullanmak ıcın bır degıskenı .oturum yonetımı ıcın yapılır.yanı bırden cok sayfadan kullanılacak bılgılerı depolamanın bır yoludur
        
        //bılgısyr senı bılır ve tanır  uygulamayı nezaman baslatacagını ve ne zaman bıtırecegını bılır anck http adresı durumu korumadıgı ıcın web  sunucusu kım oldugunu veya ne  yaptıgınızı bılmıyor .oturum degıskenlerı ,kullanıcı bılgılerını bırden cok sayfada ornegın kullanıcı adı bunları depolayarak bu sorunu cozer  Sonuc olarak sız oturum actıgınızda kullanıcı gırısıyle  server sızın tum sayfalarda oturum actıgnızı bılıyor bunu nasıl bılıyor  sessıonlarla bılıyor .ayrıca tek bir kullancı hakkkında bılgı tutar.

        if(($verisay > 0 && $ad != 1) || ($cusnum !=1 && $cusnum2 > 0 ) ){ //girş basarılıysa kullanıcı adına aıt sessıonlar olusur
        require_once("ornek.php");
            
            
            
            session_regenerate_id(true); //Siteye login olurken bize tahsis edilen Session id değeri ile login olduktan sonra tahsis edilen Session id değerinin aynı olmasından dolayı bu saldırı başarılı olur. Kurban sitede dolaşırken Session Id değeri aynı olmamasını saglar
            
            //Saldırgan saldıracağı site için bir Session Id değeri üretir. Saldırgan mail vb. yollarla bu Session Id değerinin kurbana yollar.Kurban aşağıdaki url adresini içinde barındıran (http://goo.gl/J9G6cO) linki tıklayınca saldırganın saldırı için hazırladığı Session id (PHPSESSID=nhpprj9s9dv9gvlmdkebiitkm3) değerini sunucuya kabul ettirmiş oldu. ıste burda tam gıne kurban logın olurken hackerın vverdıgı ıd degısıyor dolayısıyla ıcındekı bılgılere ulaşamamıs olup basarısız oluyor
            
//logedın adlı sessıon            
$_SESSION["LogedIn"]=true; // bu yeterlı degıl guvenlık onlemlerı ıcın hacker sızın sessıon ıdnızı google ayarlardan alabılır google ayarlara gırıp sessıona baktıgımızda ıcerık başlıgı altındakı yerı alırlar yanı  bunu onlemek ıcın   en basa uste session_regenerate_id yaz sımdı nıye yazdık sıızn sessıon ıdnızın daha oncekı sessıonlarla olan ılıskısını keser yenı bır sessıon olayı baslatır burda oturum sabitleme saldırısını onlemıs oluyorsun yanı sızın oturumunuz sabıt, sabit bir,  oturum sabıtleme denılen bir sabıtleme var  sızın sessıonuzu alıp kullanıyor ama bben burda sessıonu yenılıyorum dıyorumkı oturum öncekıyle simdiki sessıonum aynı olmasın  yanı yenı bır sessıon elde edıyorum  cunku hacker sız oturmunuzu acmadan  sessıonunuzu elde edebılır bunu onlemek ıcın  ama buda yeterlı degıl sıteye gırıs yapan kısının IP bılgılerımı ve browser bılgılerınıde al sessıona ata asagıda yaptık bunu
            
            
      
            
            
            
            
           $_SESSION['firstName'] = $firstName; // postakı gelen verıyı sessıon oellıgıne atadım.
         $_SESSION['sifre'] = $sifre;   // şifre saklamana gerek yok. tavsiye edilmez. cookie zaten doğru bildiyse başlıyor. saklamaya gerek yok. ama kalsın ŞİFRE SESSIONDA TUTULMAZ ORNEK DIYE YAZDIM
            
             $_SESSION['logInIp'] = $_SERVER["REMOTE_ADDR"]; // IP ADRESINI ALDIM fakatt kısınınde ıp adresı degısebılıyor   TABIKIDE AG IPSI SABIT KALMIYOR MESELA  FARKLI CIHAZDAN GIRINCE FARKLI BIR IP ATIYOR onun ıcınde kısı dogrulamsı yapabılrısn, FARKLI CIHAZLAR AYNI AĞI KULLANINCA BOŞTA OLAN IP ATIYOR(herzaman degıl farklı cıhazdan aynı agı kullandım ıp degısmedı) eger olursada  OZMANDA KIŞI DOGRULAMASI YAPABILRISN ama kesınlıkle farklı agdan gırıyor kişi hemde farklı bır tarayıcıdan gırıyor ozman kısı dogrulmsı olabılır
                $_SESSION['userAgent'] = $_SERVER["HTTP_USER_AGENT"]; // BROWSER BILGILERIMI ALDIM  
            
            // BU IP VS BU BILGILERIDE HER GIRIS YAPILDIGINDA VERI TABANINDA TUTARSIN ISTERSEN AYRI BIR OTURUM TABLOSUNDA YADA KULLANICI TABLOSUNDA SON SUTUNA EKLERSIN ÇIKIS YAPILINCA ORDAKI KISIMLARIDA BOŞALTIRSIN PEKI BU IP adresını ve BROWSER BILGILERINI NEDEN ALDIK 
            // CUNKU : EGER HACKER SESSION OTURUM BILGINIZI ÇALARSA AYNI IPDEN MI GİRİŞ YAPILMIŞ ONA BAKICAZ FARKLIYSA HATA VERICEK CUNKU DEMEKKI BİRİLERİ SİZİN OTURUM BİLGİLERİNİZİ ELE GECIRMIS  bırde browser bılgılerını alarak kontrol ettırıyoruz 
            
            
     
               //BİR AÇIK DAHA VAR ORNEGIN JAVASCRİPT ILE COOKILERE SESSION BILGILERINE ULASILABILIYOR GUVENLIK AÇIGIDIR BUNA ULASIRSA KİŞİ GIDICEK EDİTLİCEK BU IDYI DAHA SONRA KENDI SESSION ID SINE YAPISTIRCAK ARTIK SIZIN YERINIZE ADMIN OLARAK GIRIŞ YAPMIS OLACAK BUNU NASIL ONLUCEZ
            
            //1: GUVENLI OLMASI ICIN CONSOLE LOGDADA GORUNUYOR ORADAKI applicatıon ksımında  COOKİES KISMINA GIRERSEN HTTPONLY VE SECURE ALANI VAR HTTPONLY AKTIF HALE GETIRMELYIIZ SECURE ISE HTTPS BAGLANTILARIYLA YAPIN DEMEK  YANI 2 SINI TRUE YAPIN DIYOR BIZ SADECE LOCALDE CALISTIGIMZ ICIN HTTPONLY I NASIL GERCEKLESTIRDIGIMIZI YAPICAZ SERVER ALDIGIMIZDA SSL SERTIFIKALI OZAMN SECURE KISMINIDA YAPARIZ 
            
                // PEKI NASIL : bunu ornek.phpde yaptık bakarsın bunun sayesınde bu sorunu cozmus oluruz
            
            
            
                      $sorgum = mysqli_query($baglanti, " UPDATE employees SET hak = 3 WHERE firstName = '$firstName' "); 
                      
              // not NOT ONEMLI : NEDEN ARRAY FORMATINDA TANIMLANMIS SESSION  
            
            // ORNEGIN KULLANICI bılgılerını bır sessıonda toplamak ıstıyor  e tıcaret sıtelerını dusunun sepet ıslemlerını bır yerde satış ıslemlerını bır sessionda vs farklı farklı sessıonlara ıhtıyac duyulabılır. her sessıonun gorevınıde tek tek tanımlamak mantıksızz olur ornegın  bır ksıının maıl e posta ısım vs sessıonlarını tek tek ttanımlamak yerıne bır arrayde tutmak daha mantıklı
            
            //ORNEK: aslında tum bılgılerını bır arrayde tutup bu arraydekılerı sessıon ozellıgıne atadım sessıon ozellıgın ısmıde user olsun
            
        /*   $_SESSION['USER']=array("firstnme" =>"sanaz",
                                   "lastname" => "kenız",
                                   "yas"=> "32"
                                  
                                  );
            */ 
            // ulaşmak ııcın
            
           // print_r($_SESSION['USER']);
              
              // echo $_SESSION['USER']["firstnames"];
            
            
            if(isset($_POST['benıhatıra'])){
                  
                  // cokie atama işlemleri 
                
                //cookilerin verileri tarayıcıda tutulur sessıonlar ıse sadece ıdlerı tarayıcılarda tutulmaktadır.ama normal oalrak sessıondakı verıler serverda tutulmaktadır
                  
                //php zıyaretcılerını bu 2 yontem ıle tanımaktadır.ve onlara göre ıslem sunmaktadır.mesela sunucunuzdakı sıtenız dıyorkı benı kım zıyaret etmıs a kısı ve a kısısıyle b kısısını bu 2 yyöntem sayesınde ayırt edebılıyor sessıonlar array seklınde suncuda tutulmaktadır.cookı tarayıcıda tutuldugu ıcın guvenılmez pek fazla dolayısıyla cok onemlı bılgılerı cooki session ıslemı ypcaksan cookılerle tutma sakın tutcaksanda sıfre gıbı sıfrelenmıs sekılde tutarız 
                
                //session tarayıcı kapandıgı anda sessıon oturumumuz bıter yada sessıonda 2 saat sıtede bırsey yapmassan sonlanır veya alışverssepetı yaptım logout oldugumda butun sessıon verılerını nasıl sılıyorsam kendı yaptıgım uygulamamdada logout oldugunda  alısverıssepetımıde sılms oldum boyle bırsey yptım uygulama olarak
                
                //cookıler zaman vermessen tarayıcı kapatıtgında sılınır yada karsıtaraf olaarak sen zaman verebılrısın buna ornegın sıfremı hatırlada 1 gun verdım mesela cookılerse sessıonlarla alısverıssepetı yapabılrısın ben yaptım bu cookı sessıoonlarla noluyo aslında sessıonla depoluyor verılerı mesela cookıyle yapsaydım gıdıp geldım hala sepetımde cookıyı pcye depoluyor  ve alısversı spetınde hangı urunu oldugunu urun ekledıgını ordan hatırlıyor 
                
                //ornegın coklu dıl destegı vs de bır ornektır ornegın sıte ıngılzıce turkceye cevırdınız sız gırdıgınızde otomatık turkce oluyor nasıl aklında tutuyor sıte sızın onceden yaptıgınzı nasıl tanıyor cookılerle pcye depoladıgı verılerle turkce olmasıyla ılgılı bır degerı cookıye aktarıyoruz ppcye depoluyor verıyı geldıgınızde bu verıyı okuyor isset($_COOKIE["sifre(turkcedılıleılgılıverı)"]) bunu buluyor eger varsa okuyup ona göre ıslemı yapaıyor
            
           // mesela cookie ııcn ornek hagnı reklam urunlerıne zaafın varsa onun ıcınde cookie ornegı var ama o google reklamları ıcın mesela tarayıcına bıraktıgı size ait olan cookilerle siz nerden hangı urunu alıyorsanız ona bakıyor  sonra akıllı algorıtmasıyla onune onunla ılgılı içerige ait reklamları getırıyor sessıon ıse daha cok oturum yonetme ıcındır
            
                //sonuc olarak cookıler mesela kullancıı sıteyı tekrar zıyaret ettıgınde bazı seylerın tekrar uygulanmasına gerek duyulmamasını saglamak ıcındır
                
                  setcookie("firstName",$firstName,strtotime("+1 day"),"/",null,null,null);  // strtotime bu fonksıyon tarayıcıda bunların ne kadar kalacagını belırler. ynı 1 gun gecerlı  eger sen 1 gun ıcersıınde gıne gırersen 1 gun 1 gun o devam eder sure.
               
                   setcookie("sifre",$sifre,strtotime("+1 day"),"/",null,null,null);  // mesela time()+19 dıyerek suankı zamana  19 eklıyeyerek 19 snlık bır cookie time()fonksıyonuda saylsal verır sana  yanı saniye cinsinden  ben burda time()+19 tıme mı sanıye cınsınden alıp 1 gun sonrasınında sanıye cınsını almak ıcın ugrasıp buraya yazmıyorum onun yerıne strtotime fonksıyonunu kullanıyorum bu fonksıyonla str olarak gırıdıgm zamanı sayısal sanıye cınsıne dondurerek zaman seklınde verıyor ozman ben +1 gün diyerek 1 gun sonrasındaki zamanın saniye cınsını buraya yaazabılrım. 
                // 1 gün istemek ıcın boylede yapabılrısın time()+ (60*60*24) 60*60 1 saat yapar yanı 60 sanıyeyı yani 1 dakikayı 60 dakiyayla çarparsan 1 saat yapar  1 saatide 24 le carparsan 24 saat 1 gün yapar
                
                   // 4.parametre path
                // not: setcookie($name,$value,$time,$path,$domain) lerde 4.parametre olarak path alır yanı sitede hangı dızın ıcerısınde calısması gerektgını belırtır. bütün stede aktif olması ıstenırse "/" degerı gırılır.
                //  setcookie("firstName",$firstName,strtotime("+1 day"),"/php"); belkı php klsorumun ıcınde aktıf olmasını ıstıorumdur.
                
                // 5.parametre domain
             /*   Örneğin;
wikipedia.org (alan adı)
tr.wikipedia.org (alt alan adı) bu sekılde doomain ve alt alan adım var cookie calıstıgı site içerisinde  hangı alt alanlar üzerinde calıscagını belırtır. yazılmaz ise calıstıgı sitedeki ana domain baz alınır tüm site üzerinde calısır.
                */
               //  setcookie("firstName",$firstName,strtotime("+1 day"),"/php",null); eger yazdıysam yazdıgım subdomaindede calsıır ama   yazılmadıysa  hepsinde geçerli olur.
                
                
                
                   // 6.parametre secure
               // setcookie($name,$value,$time,$path,$domain,$secure)
              //  setcookie("firstName",$firstName,strtotime("+1 day"),"/php",null,true); // eger yapılırsa https baglantılarında  cerez kullanımı gerceklestırılı.
                
                
                
                   // 7.parametre just_http
               // setcookie($name,$value,$time,$path,$domain,$secure,$just_http) // buda aktif edilirse sadece cookie sunucu üzerinden erişebilir olacaktır   javascriptle tarayıcı  uzerınden cookie duzenlenmıyecektır.
              //  setcookie("firstName",$firstName,strtotime("+1 day"),"/php",null,true,true); 
            
                
           }else{
                  setcookie("firstName",$firstName,strtotime("-1 day"),"/"); 
               
                   setcookie("sifre",$sifre,strtotime("-1 day"),"/");  // cokieyı sılmek ıstıyorsan verdıgın sureyı elınden alıcaksın.
           }
              
            header("location: tumler.php ");   //php ders 78 de bunu fonksıyonda yazp burda sadece fonksıyonu cagırabılrısın farklı yazım dedgıl yazmadım ve projemde bu sekılde yapmka ıstedım
          
        
            
        }elseif($firstName && $sifre){
            
             $sorguk = mysqli_query($baglanti, "SELECT * FROM employees  WHERE firstName = '$firstName' AND sifre != '$sifre'   ");
      
        $verisaym = mysqli_num_rows($sorguk);
            
             $sorguz = mysqli_query($baglanti, "SELECT * FROM employees  WHERE hak = 0 AND firstName = '$firstName' AND sifre != '$sifre'  ");
      
        $verisayz= mysqli_num_rows($sorguz);
            
              $as = mysqli_query($baglanti, "SELECT * FROM employees  WHERE hak = 0 AND firstName = '$firstName' AND sifre = '$sifre'  ");
      
        $ad= mysqli_num_rows($as);
            
             $sorguc = mysqli_query($baglanti, "SELECT * FROM employees  WHERE hak = 0 AND ((firstName = '$firstName' AND sifre != '$sifre')  OR  (firstName = '$firstName' AND  sifre =  '$sifre')) AND zamankıt IS NULL ");
      
        $verisayza= mysqli_num_rows($sorguc);
            
            if($verisayza > 0){
                $sorgum = mysqli_query($baglanti, "UPDATE employees SET zamankıt = CURTIME() WHERE firstName = '$firstName' AND sifre != '$sifre' OR  (firstName = '$firstName' AND  sifre =  '$sifre') "); 
                 
            header("location:logın.php?kıt=yes"); 
              }
            
            
            elseif($ad > 0 || $verisayz >0 ){
                
                  $sorguz = mysqli_query($baglanti, "SELECT zamankıt FROM employees WHERE (firstName = '$firstName' AND sifre != '$sifre') OR (firstName = '$firstName' AND sifre = '$sifre')  ");
               $satir = mysqli_fetch_assoc($sorguz);
                
                
                 $deger = mysqli_query($baglanti, "SELECT * FROM employees  WHERE firstName = '$firstName' AND sifre != '$sifre'   ");
      
                    $verider = mysqli_num_rows($deger);
                     
                   
                
                 $az = mysqli_query($baglanti, "SELECT * FROM employees  WHERE   firstName = '$firstName' AND sifre = '$sifre'  ");
      
        $al= mysqli_num_rows($az);
                     
                
                date_default_timezone_set("Europe/Istanbul");
                        
                        date_default_timezone_get();
         
         $date1=date_create($satir["zamankıt"]); 
 
             $date2=date_create(date("H:i:s"));
             $diff=date_diff($date1,$date2);
           $a = $diff->format("%H");
                        
                
                
                 if( $a >= 02  ){
                     
                      $sorgum = mysqli_query($baglanti, " UPDATE employees SET hak = 3 WHERE firstName = '$firstName' "); 
                       $sorgums = mysqli_query($baglanti, "UPDATE employees SET zamankıt = NULL WHERE firstName = '$firstName' "); 
                     
                     
                      $deger = mysqli_query($baglanti, "SELECT * FROM employees  WHERE firstName = '$firstName' AND sifre != '$sifre'   ");
      
                    $verider = mysqli_num_rows($deger);
                     
                     
                     
                      $az = mysqli_query($baglanti, "SELECT * FROM employees  WHERE   firstName = '$firstName' AND sifre = '$sifre'  ");
      
        $al= mysqli_num_rows($az);
                     
            
                    
                     
                    
                    
                    if($verider>0){
                        
            
                         $sorgum = mysqli_query($baglanti, " UPDATE employees SET hak = hak - 1 WHERE firstName = '$firstName' AND sifre != '$sifre'
                 ");
                
                
                 header("location:logın.php?loggın=no");   
                        
                        
                        
                    }else{
           
                        
                      
        

           $_SESSION['firstName'] = $firstName; // postakı gelen verıyı sessıon oellıgıne atadım.
         $_SESSION['sifre'] = $sifre;   // şifre saklamana gerek yok. tavsiye edilmez. cookie zaten doğru bildiyse başlıyor. saklamaya gerek yok. ama kalsın 
     
                      
                      
                      
              
             
            if(isset($_POST['benıhatıra'])){
                  
                  // cokie atama işlemleri 
                  
                  setcookie("firstName",$firstName,strtotime("+1 day"));  // strtotime bu fonksıyon tarayıcıda bunların ne kadar kalacagını belırler. ynı 1 gun gecerlı  eger sen 1 gun ıcersıınde gıne gırersen 1 gun 1 gun o devam eder sure.
               
                   setcookie("sifre",$sifre,strtotime("+1 day")); 
           }else{
                  setcookie("firstName",$firstName,strtotime("-1 day")); 
               
                   setcookie("sifre",$sifre,strtotime("-1 day"));  // cokieyı sılmek ıstıyorsan verdıgın sureyı elınden alıcaksın.
           }
              
            
           
              header("location: tumler.php ");   
          
          
            
            
        
            
      
                           
                        
                        
                    }
                    
                        
                       
                    
                       
                            
                            
        
                          
                
                     
                     
                 }else{
                      header("location:logın.php?kıt=yes"); 
                 }
                
                
                
            }
            
            
            elseif($verisaym>0){
                 $sorgum = mysqli_query($baglanti, " UPDATE employees SET hak = hak - 1 WHERE firstName = '$firstName' AND sifre != '$sifre'
                 ");
          
                
                 header("location:logın.php?loggın=no");   
             
                   
                   
            }else{
                 header("location:logın.php?loggın=no");    
               }
        
                 
                
                
            } 
            
        }
        
        
        
       
            
        }
            
          }
      
        
        else{
     header("location:logın.php?tur=notesıt");    
            
                
        }
            
            
            // get uygulamak ıcın soru ısaretı koyuyoruz yanı ? ıle get login dedık sonra esıttır ne alıcak dedık noyu o sekılde
            
          
             }else{
      header("location:logın.php?not=tur"); 
}
       
             }
        
         
   
    
    
    
 
    


    




















?>
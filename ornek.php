<?php
//session_set_cookie_params($time,$path,$domain,$secure,$httpOnly) 1.session ıcın zaman belırt gerek yok tarayıcı kaapanınca sılınsın 2.nerelerde gecerlı olsun / dıyerek ana dızınden ıtıbaren gecerlı olcagını soyluyoz  4. dede ssl sertıfıkası yok false yapcaz ama zaten ssl sertıfıkalı alcagımız zaman true olcak ora. 3.PARAMETREDE LOCALDEYIZ ONUN ICIN BYLE YAZDIK domain yazcaz normalde yanı sitenizin ismini verceksınzı
session_set_cookie_params(null,"/","localhost",false,true);// son parametre olarak true yapıcam javasccrptın sessıonlarıma cookilerime ulaşmasını ıstemıyorsam 
 session_start();
    /* VeritabanÄ± baÄŸlantÄ± bilgileri */
    $sunucu = "localhost";
    $kullanici = "root";
    $sifre = "";
    $veritabani = "classicmodels";
    $port = 3306;

    /* VeritabanÄ±na baÄŸlantÄ± */
    $baglanti = mysqli_connect($sunucu, $kullanici, $sifre, $veritabani, 3306)
        or die("VeritabanÄ±na baÄŸlantÄ± gerÃ§ekleÅŸtirilemedi..!");

    /* TÃ¼rkÃ§e karakterler iÃ§in dÃ¼zenleme */
    mysqli_set_charset($baglanti,"utf8");




   
?>

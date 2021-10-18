<?php


require_once("ornek.php");

 include("ayar.php");



$isim= $_GET["ressil"];

$code= $_GET["productCode"];

// ılkonce verı tabanından sıler sonra dosyadan sıler
if($isim == "ok"){
    
   
            // noot:  echo $_GET["resimsil"];şimdi bunu hagnı aşamada sıldırmem lazım  bunu burdada yazabırız fakat affected rows kısmında  yazmak daha mantıklı cunku ya productcode yanlış gonderırsenız o satırı sılemezsek resım gıderse ne olur bunun ıcın ayrıca  mysql satırını sıldıgımızı nerden anlıyoruz (mysql_affected_rows satırında  yanı bu satır dogruysa hanı bız gonderıyorduk ya başarılı dıye ıste ozman  echo $_GET["resimsil"]; bunu mysql_affected_rows satırına yazmak daha mantıklı 
   
    
    $ressil = mysqli_query($baglanti, "DELETE  FROM depom WHERE  productCode = '$code'  " );
    
    if(mysqli_affected_rows($baglanti)){  // mysql_affected_rows — Önceki MySQL işleminde etkilenen satırların sayısını al//
        
        //mysql_affected_rows ( resource $bağlantı_belirteci = ? ) : int  bağlantı_belirteci ile ilişkili son INSERT, UPDATE, REPLACE veya DELETE sorgusundan etkilenen satır sayısını döndürür.//
 
        $resim_sil = $_GET['resimsil'];
        
        unlink($resim_sil);  //bu nereye gıdıcek phpmyadmindeki isim yoluna gidicek //
        
        
    
        
        header('location:kk.php');
    }
    
    
    else{
        header('location:kk.php?durum=no');
    }
    
    
}

  




?>


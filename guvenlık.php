<?php


function security($text){
    
    $text = trim($text); // kullanıcı bosluk verdıkten sonra yazabılır bunu onlemek ıcın
     $text = htmlspecialchars($text);
     $text = addslashes($text);
     $text = strip_tags($text);
    
     $text = htmlentities($text);
  $text=  html_entity_decode($text);
   
    return $text;
}













?>
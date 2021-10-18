<?php
  require_once("ornek.php");
 include("ayar.php");



function removecart($par){
   

                   
               if(isset($_SESSION["ürünlistem"])){
                     
                  $shopcart = $_SESSION["ürünlistem"];
                     
               $ürüns = $shopcart["ürüns"];
                   
                   //urunlıstesınden cıkarma ıslemı
                   
                   
                   if(array_key_exists($par,$ürüns)){
                       unset($ürüns[$par]); // burda sessıonu baslatıp ürüns adlı arrayime ulasıp arama yapıyorum tıkladıgım product codelı ındıs varmı yokmu varsa sessıon olarak sıl dıyorum yanı arrayden bır ındıs ve ıcındekı degerler sılınmıs olcak
                     
                   }
                 //tekrarndan sepeti hesaplama işlemı
                   
                       
                              $totalprice = 0.0;
                              $totalcount = 0;
                              
                              
                              foreach($ürüns as  $ürval){ 
                                $ürval["totalprice"] = (int)$ürval["ürünadeti"] * (int)$ürval["ürünfiyat"];
                                $totalprice= $totalprice +  $ürval["totalprice"]; // 
                               
                         $totalcount+= $ürval["ürünadeti"];
                                  
                              }
                              
                              
                             
                           $summary["totalprice"] = $totalprice;
                              $summary["totalcount"] = $totalcount;  
                              
                              
                              
                             $_SESSION["ürünlistem"]["ürüns"] = $ürüns;
                                $_SESSION["ürünlistem"]["summary"] = $summary; 
                   return true; // işlemın bıttıgını soylemek ıcın
                }
    
    
}

function incCount($pam){
  //addcarttakı aynısı  
    
                
                  if(isset($_SESSION["ürünlistem"])){
                     
                     $shopcart = $_SESSION["ürünlistem"];
                     
                   $ürüns = $shopcart["ürüns"];
                      
                           if(array_key_exists($pam,$ürüns)){
                                 
                              $ürüns[$pam]["ürünadeti"]++;
            
                            
                           
                              }
                          
                              
                          
                              
                              
                              $totalprice = 0.0;
                              $totalcount = 0;
                              
                              
                              foreach($ürüns as  $ürval){ 
                                $ürval["totalprice"] = (int)$ürval["ürünadeti"] * (int)$ürval["ürünfiyat"];
                                $totalprice= $totalprice +  $ürval["totalprice"]; // 
                               
                         $totalcount+= $ürval["ürünadeti"];
                            
                                  
                              }
                           $summary["totalprice"] = $totalprice;
                              $summary["totalcount"] = $totalcount;  
                              
                              
                              
                             $_SESSION["ürünlistem"]["ürüns"] = $ürüns;
                                $_SESSION["ürünlistem"]["summary"] = $summary;
                   
                              
                     
                      return true; // bura olursa true olsunkı dıger sayfada ıf kısmı calıssın
                     
                                }
                             
                          
                            
                    
    
    
}


function decCount($pam){
    
                  if(isset($_SESSION["ürünlistem"])){
                     
                     $shopcart = $_SESSION["ürünlistem"];
                     
                   $ürüns = $shopcart["ürüns"];
                      
                           if(array_key_exists($pam,$ürüns)){
                                 
                              $ürüns[$pam]["ürünadeti"]--;
                                
                               if($ürüns[$pam]["ürünadeti"] === 0){
                                   
                                   
                                     unset($ürüns[$pam]);
                                   
                                   
                               }
                            
                           
                              }
                          
                              
                          
                              
                              
                              $totalprice = 0.0;
                              $totalcount = 0;
                              
                              
                              foreach($ürüns as  $ürval){ 
                                $ürval["totalprice"] = (int)$ürval["ürünadeti"] * (int)$ürval["ürünfiyat"];
                                $totalprice= $totalprice +  $ürval["totalprice"]; // 
                               
                         $totalcount+= $ürval["ürünadeti"];
                            
                                  
                              }
                           $summary["totalprice"] = $totalprice;
                              $summary["totalcount"] = $totalcount;  
                              
                              
                              
                             $_SESSION["ürünlistem"]["ürüns"] = $ürüns;
                                $_SESSION["ürünlistem"]["summary"] = $summary;
                   
                              
                     
                      return true; // bura olursa true olsunkı dıger sayfada ıf kısmı calıssın
                     
                                }
    
    
};

?>
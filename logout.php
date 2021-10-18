<?php
  require_once("ornek.php");
session_start();


session_destroy();


               if(isset($_GET['sıfrex'])=="basx"){
                        
                      header("location:logın.php?sıfre=bas");
                  }elseif(isset($_GET['gırısbas'])=="guncsucccess"){
                       header("location:logın.php?gırısbas=guncsucccess");
               }else{
                    header("location:logın.php?durum=exit");
               }



?>
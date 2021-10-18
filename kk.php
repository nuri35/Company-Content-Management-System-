
<html>
    <meta charset="utf-8">
<head>
    
    
    </head>
<body>
    
 <?php



include("ornek.php");
$do = @$_GET["do"];
        
        switch ($do){
                
                
            case "delete":
                include("delete.php");    // tumler phpyi kk phpye cagırmıs olduk dolasııyla kk phpde resmı sıle bastııgımda delete.php calısacak
                break; 
                
                 case "duzenle":
                include("duzenle.php");   
                break; 
                
               
                
                default:
               
include("tumler.php");
break;

                
        }



?>   
    

    
    
    
    
    
    
    
    </body>
















</html>
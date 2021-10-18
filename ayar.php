<?php
    
require_once("ornek.php");




if(isset($_SESSION["LogedIn"])){
    
}else{
     header("location:logın.php");
}

?>
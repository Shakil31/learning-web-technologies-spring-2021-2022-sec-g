<?php
    $uerror = "";
    $username = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["gmail"]==null){
            $uerror = "Invalid Gmail!!!";
        }else{
            $Gmail = $_REQUEST["gmail"];
        }
    }
?>
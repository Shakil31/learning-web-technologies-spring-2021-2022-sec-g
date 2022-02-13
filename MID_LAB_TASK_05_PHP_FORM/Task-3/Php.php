<?php
    $uerror = "";
    $username = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["date"]==null){
            $uerror = "Invalid Date!!!";
        }else{
            $Date = $_REQUEST["date"];
        }
    }
?>
<?php
    $uerror = "";
    $Checkbox = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["checkbox"]==null){
            $uerror = "Invalid Input!!!";
        }else{
            $Checkbox = $_REQUEST["checkbox"];
            echo "$Checkbox";
        }
    }
?>

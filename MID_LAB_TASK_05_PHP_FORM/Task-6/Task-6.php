<?php
    $uerror = "";
    $bld = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["bld"]==null){
            $uerror = "Invalid Input!!!";
        }else{
            $Checkbox = $_REQUEST["bld"];
            echo "$Checkbox";
        }
    }
?>

<?php
    $uerror = "";
    $username = "";
    if(isset($_REQUEST["submit"])){
        if($_REQUEST["gender"]==null){
            $uerror = "Invalid Gender!!!";
        }else{
            $Gender = $_REQUEST["gender"];
        }
    }
?>
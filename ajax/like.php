<?php

include 'conf/config.php';
include 'conf/opendb.php';
include '../functions/proposal_functions.php';



//Include The Database Connection File
session_start();
$ref_no=$_GET["ref_no"];
$user_name=$_SESSION["user_name"];
if(check_dislike_status($user_name, $ref_no)==1){

    proposal_like_delete($user_name,$ref_no);
    proposal_like($user_name,$ref_no);
}
else{
    if(check_like_status($user_name, $ref_no)==1){
    }
    else{
        proposal_like($user_name,$ref_no);
    }
}

$like_count=get_like_count($ref_no, 1);
echo $like_count;
//echo "{count:".$like_count.",}"
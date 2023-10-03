<?php

function get_header(){
    require_once('includes/header.php');
    }
    
    function get_footer(){
        require_once('includes/footer.php');
        }  
function LoggedID() {
    return $_SESSION['username'] ? true : false;
}
function needLoged() {
    $check=LoggedID();
    if (!$check) {
        header('location:../index.php');
    } 
}

?>
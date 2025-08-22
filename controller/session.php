<?php 
@session_start();
   function delSession(){ 
    session_destroy();
    session_unset();
    $_SESSION=Array();
    }
    function testSession($type){
     if (empty($_SESSION) || $_SESSION['type']!== $type){
     header('Location:index.php');
 }}

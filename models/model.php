<?php
require_once("models/rb.php");
R::setup('mysql:host=localhost;dbname=cabinett', 'root', '');

function type($email)
{
    $type = R::findOne("users", "email=?", [$email]);
    return ($type["type"]);
}

function exist($email,$password)
{
$password=md5($password);
$res= R::findOne('users',"email=? AND mtp=?" ,[$email,$password]);
  if(empty($res))
  return false;
  return true;
}

<?php
session_start();


function setUserInfo($id, $username ,$userip )
{
    $_SESSION['ID'] = $id;
    $_SESSION['username'] = $username;
    $_SESSION['userip'] = $userip;
}
function delUserName()
{
   unset($_SESSION['username']);
}

function getUserName()
{
    $name = $_SESSION['username'];
    return $name;
}
function getUserId()
{
    $userid = $_SESSION['userid'];
    return $userid;
}

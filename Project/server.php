<?php
session_start();
$username ="";
$email="";
$errors = array();
$db = mysqli_connect('localhost','root','','Projectdata') or die("could not connect to database");
$username = mysqli_real_escape_string($db,$_POST['username']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$password1 = mysqli_real_escape_string($db,$_POST['password1']);
$password2 = mysqli_real_escape_string($db,$_POST['password2']);

if(empty($username))
{
    array_push($errors,"usename is required")
};
if(empty($email))
{
    array_push($errors,"Email is required")
};
if(empty($password1))
{
    array_push($errors,"password is required")
};
if($password1 != $password2)
{
    array_push($errors,"Passwords do not match")
};
$user_check_query = "select * from User where username='$username' or email = '$email' Limit 1";
?>
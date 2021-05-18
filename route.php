<?php
include_once("admin/connection.inc.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($dbc, $_POST['username']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    $result = mysqli_query($dbc, "SELECT *FROM users WHERE username= '$username' and
    password='$password'");
    $count = mysqli_num_rows($result);
    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $usertype = $data['usertype'];
    if($count == 1){
        $_SESSION['session_user'] = $username;
        if($usertype == 'admin'){
            header("location: ../admin/categories.php");
        }
        else{
            header("location: ../shop/index.php");
        }
    }
}
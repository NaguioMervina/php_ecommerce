<?php
require('connection.inc.php');
require('functions.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeMerch</title>
    <link rel="stylesheet" href="shop/style.css">
    <link rel="stylesheet" href="shop/lightslider.css"/>
    <script src="shop/js/jquery.js"></script>
    <script src="shop/lightslider.js"></script>


    <link rel="shortcut icon" href="shop/images/logo/1.png">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


</head>
<body>
    <nav>
        <div class="navigation">
            <a href="#" class="logo">
                <img src="shop/images/logo/1.png" alt="">
            </a>

            <div class="toggle">

            </div>



            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Poster</a>
                    <span class="sale-lable">Sale</span>

                </li>

                <li><a href="#">Sticker</a></li>
                <li><a href="#">Jacket</a></li>
                <li><a href="#">Tshirt</a>
                    <span class="sale-lable">Sale</span>
                </li>
                <li><a href="#">Shop</a></li>
            </ul>

            <div class="right-menu">
                <a href="javascript:void(0);" class="search">
                    <i class='bx bx-search'></i>
                </a>
                <a href="javascript:void(0);" class="user">
                    <i class='bx bxs-user'></i>
                </a>
                <a href="#">
                    <i class='bx bxs-cart' >
                    <span class="num-cart">0</span>
                </i>
                </a>
            </div>
        </div>
    </nav>

    <div class="search-bar">
        <div class="search-input">
            <input type="text" placeholder="Search For Merch..."/>
            <a href="javascript:void(0);" class="search-cancel">
                <i class='bx bxs-x-circle'></i>
            </a>
        </div>
    </div>

            <div class="form">

                <div class="login-form">

                    <a href="javascript:void(0);" class="form-cancel">
                        <i class='bx bx-x'></i>
                    </a>
                    
                    <strong>Log In</strong>
                    <img src="shop/images/logo/1.png" alt="">

                    <form>
                        <input type="email" placeholder="@gmail.com" name="email" required>
                        <input type="password" placeholder="Password.." name="password" required>
                        <input type="submit" value="Log In">
                    </form>
                    <div class="form-btn">
                        <a href="#" class="forget">Forget Your Password?</a>
                        <a href="javascript:void(0);" class="sign-up">Create Account</a>
                    </div>  
                </div>




                <div class="signup-form">

                    <a href="javascript:void(0);" class="form-cancel">
                        <i class='bx bx-x'></i>
                    </a>
                    
                    <strong>Sign Up</strong>
                    <img src="shop/images/logo/1.png" alt="">

                    <form>
                        <input type="text" placeholder="Full Name" name="fullname" required>
                        <input type="email" placeholder="@gmail.com" name="email" required>
                        <input type="password" placeholder="Password.." name="password"required>
                        <input type="submit" value="Sign up">
                    </form>
                    <div class="form-btn">
                        <a href="javascript:void(0);" class="already-acc">Already Have Account?</a>
                   
                    </div>  
                </div>
            </div>
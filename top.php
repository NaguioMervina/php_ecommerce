<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}

$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Poster</a>
                    <span class="sale-lable">Sale</span>

                </li>

                <li><a href="#">Sticker</a></li>
                <li><a href="#">Jacket</a></li>
                <li><a href="#">Tshirt</a>
                    <span class="sale-lable">Sale</span>
                </li>
                <li>
                
										
                </li>
            </ul>

            <div class="right-menu">
                <a href="javascript:void(0);" class="search">
                    <i class='bx bx-search'></i>
                </a>
                <a href="javascript:void(0);" class="user">
                    <i class='bx bxs-user'></i>
                    <?php if(isset($_SESSION['USER_LOGIN'])){
											echo '<a href="logout.php">Logout</a>';
										}else
										?>
										
                </a>
                <a href="cart.php">
                    <i class='bx bxs-cart' >
                    <span class="num-cart"><?php echo $totalProduct?></span>
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

                    <form id="login-form" method="post">
                        <input type="email" id="login_email" placeholder="@gmail.com" name="email" required>
                        <input type="password" id="login_password" placeholder="Password.." name="password" required>
                        <button type="button" class="fv-btn" value="Log In" onclick="user_login()">Login</button>
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
                        <input type="text" placeholder="Full Name" id="name" name="fullname" required>
                        <input type="email" placeholder="@gmail.com" id="email"  name="email" required>
                        <input type="password" placeholder="Password.." id="password" name="password"required>
                        <input type="password" placeholder="Confirm Password.." name="password"required>
                        <button type="button" class="fv-btn" onclick="user_register()">Register</button>
                    </form>
                    <div class="form-btn">
                        <a href="javascript:void(0);" class="already-acc">Already Have Account?</a>
                   
                    </div>  
                </div>
            </div>
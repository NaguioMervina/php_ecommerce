<?php 
require('top.php'); ?>

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
    <input type="password" placeholder="Confirm Password.." name="password"required>
    <input type="submit" value="Sign up">
</form>
<div class="form-btn">
    <a href="javascript:void(0);" class="already-acc">Already Have Account?</a>

</div>  
</div>
<?php require('footer.php')?> 
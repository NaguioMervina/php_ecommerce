<?php
session_start();
$con=mysqli_connect("localhost","root","","data_ecomm");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecomm/');
define('SITE_PATH','http://localhost/php/ecomm/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'pictures/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'pictures/product/');
?>
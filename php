<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php session_start();?>
<?php include("db.php");?>
<?php include("functions.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OSC</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="CSS Hover Effects/css/hover.css">
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>

<!----- Start Top Bar ----->
<?php include("topbar.php");?>
<!----- End Top Bar ----->


<!----- News Bar Start----->
<?php include("newsbar.php");?>
<!----- News Bar End----->


<!----- Logo Bar Start ----->
<?php include("logobar.php");?>
<!----- Logo Bar End ----->



<!----- Menu Bar Start ----->
<?php include("menubar.php");?>
<!----- Menu Bar End ----->


<!----- Slider Start----->
<?php include("slider.php");?>
<!----- Slider End----->


<!----- Dynamic Menu Start ----->
<?php include("dynamicmenu.php");?>
<!----- Dynamic Menu End ----->


<!-----Section Start----->

<div id="section">
	<div id="message_bar">
    <?php
    if(isset($_SESSION['customer_email']))
	{
	echo "Welcome! ".$_SESSION['customer_email']." "."at Online Shopping Center ";
	}
	else
	{
	echo "Welcome! Guest at Online Shopping Center";
	}
	?>
    <i class="fa fa-shopping-cart"></i>:<?php get_items(); ?>
    <i class="fa fa-money"></i><?php get_price(); ?> 
    <a href="cart.php">
    <input type="button" name="cart_btn" value="Go2Cart">
    </a>
    <?php
    if(!isset($_SESSION['customer_email']))
	{
	echo "<a href='/shop/checkout.php'><input type='button' value='Login'></a>";
	}
	else
	{
	echo "<a href='/shop/logout.php'><input type='button' value='Logout'></a>";
	}
	?>
   
    </div>
    
    <div id="data_bar">
    	<div id="left_data_bar">
        
        <center><h1>Categories</h1></center>
        <br>
        <ul>
        <?php getcategory(); ?>
        </ul>
        <br>
        <center><h1>Brands</h1></center>
        <br>
        <ul>
        <?php getbrands(); ?>	
        </ul>
        </div>
        
        <div id="right_data_bar">
        <center><h2>Display Products</h2></center>
        <br />
        <?php cart(); ?>
        <?php getpro(); ?>
        <?php getcatpro(); ?>
        <?php getbrandpro(); ?>
        </div>
        
    </div>
</div>

<!-----Section End----->



<!-----Footer Start---->
<?php include("footer.php");?>
<!-----Footer End---->


<!-----Copy Right Bar Start ---->
<?php include("copyrightbar.php");?>
<!-----Copy Right Bar End ---->

</body>
</html>

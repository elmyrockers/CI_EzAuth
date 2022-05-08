<?php
/* Smarty version 4.1.0, created on 2022-05-07 04:09:00
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6276372c1cc976_86970874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32d301dddc6ae2687d17fbe64075824f673ad35b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Auth\\login.tpl',
      1 => 1651914502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276372c1cc976_86970874 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Diet Recommender System</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/assets/auth/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/assets/auth/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/assets/auth/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/assets/auth/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/assets/auth/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/assets/auth/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/auth/css/vendors.css" rel="stylesheet">
    <link href="/assets/auth/css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/assets/auth/css/custom.css" rel="stylesheet">
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div class="container-fluid p-0">
		<div class="row no-gutters row-height">
			<div class="col-lg-6 background-image" data-background="url(/assets/auth/img/GoodbadMAIN.jpg)">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	                <a href="#0" id="logo"><img src="/assets/auth/img/logo2.png" alt="" width="100" height="auto"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="#0"><i class="social_facebook"></i></a></li>
	                        <li><a href="#0"><i class="social_twitter"></i></a></li>
	                        <li><a href="#0"><i class="social_instagram"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <h1>Diet Recommender System</h1>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	                    <a href="https://www.youtube.com/watch?v=Ct8Gxo8StBU" class="btn_1 rounded pulse_bt plus_icon btn_play">Explore Popular Recipes<i class="arrow_triangle-right"></i></a>
	                </div>
	            </div>
			</div>
	        <div class="col-lg-6 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                    	<?php echo $_smarty_tpl->tpl_vars['flash']->value;?>

	                        <h4 class="mb-3">Sign In</h4>
	                        <form class="input_style_1" method="post" action="/auth/login">
	                            <div class="form-group">
	                                <label for="email_address">Email Address</label>
	                                <input type="email" name="email" id="email_address" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="password">Password</label>
	                                <input type="password" name="password" id="password" class="form-control" required>
	                            </div>
	                            <div class="clearfix mb-3">
	                                <div class="float-left">
	                                    <label class="container_check">Remember Me
	                                        <input type="checkbox" name="remember">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                                <div class="float-right">
	                                    <a id="forgot" href="javascript:void(0);">Forgot Password?</a>
	                                </div>
	                            </div>
	                            <button type="submit" class="btn_1 full-width">Login</button>
	                        </form>
	                        <p class="text-center mt-3 mb-0">Don't have an account? <a href="/auth/register">Sign Up</a></p>
	                        <form class="input_style_1" method="post" action="/auth/forgot_password">
	                            <div id="forgot_pw">
	                                <h4 class="mb-3">Forgot Password</h4>
	                                <div class="form-group">
	                                    <label for="email_forgot">Login email</label>
	                                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
	                                </div>
	                                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
	                                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© 2022 - All Rights Reserved.</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->
	
	<!-- COMMON SCRIPTS -->
    <?php echo '<script'; ?>
 src="/assets/auth/js/common_scripts.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/auth/js/common_func.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}

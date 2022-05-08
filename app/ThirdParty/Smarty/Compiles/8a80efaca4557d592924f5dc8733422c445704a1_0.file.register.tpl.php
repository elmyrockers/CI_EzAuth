<?php
/* Smarty version 4.1.0, created on 2022-05-07 04:08:54
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Auth\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627637261e6983_70802069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a80efaca4557d592924f5dc8733422c445704a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Auth\\register.tpl',
      1 => 1651914531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627637261e6983_70802069 (Smarty_Internal_Template $_smarty_tpl) {
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

	                        <h4 class="mb-3">Sign Up</h4>
	                        <form class="input_style_1" method="post">
								<div class="form-group">
	                                <label for="full_name">Username</label>
	                                <input type="text" name="username" id="full_name" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="email_address">Email Address</label>
	                                <input type="email" name="email" id="email_address" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="password1">Password</label>
	                                <input type="password" name="password" id="password1" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="password2">Confirm Password</label>
	                                <input type="password" id="password2" class="form-control" required>
	                            </div>
	                            <div id="pass-info" class="clearfix"></div>
	                                <div class="mb-4">
	                                    <label class="container_check">I agree to the <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and Privacy Policy</a>.
	                                        <input type="checkbox" id="agree" required>
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            <button type="submit" class="btn_1 full-width">Sign Up</button>
	                        </form>
	                        <p class="text-center mt-3 mb-0">Already have an account? <a href="/auth/login">Sign In</a></p>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© 2022 - All Rights Reserved.</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
    <?php echo '<script'; ?>
 src="/assets/auth/js/common_scripts.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/auth/js/common_func.js"><?php echo '</script'; ?>
>

	<!-- SPECIFIC SCRIPTS -->
	<?php echo '<script'; ?>
 src="/assets/auth/js/pw_strenght.js"><?php echo '</script'; ?>
>	

</body>
</html><?php }
}

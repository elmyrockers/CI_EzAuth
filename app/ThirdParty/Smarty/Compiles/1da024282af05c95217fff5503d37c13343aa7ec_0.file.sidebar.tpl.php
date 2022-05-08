<?php
/* Smarty version 4.1.0, created on 2022-05-07 12:31:24
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Elements\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6276acec38f592_28575857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1da024282af05c95217fff5503d37c13343aa7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Elements\\sidebar.tpl',
      1 => 1651944680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276acec38f592_28575857 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value['role'] == '0') {?> <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['role'] == '1') {?> 	<?php $_smarty_tpl->_assignInScope('active', array('dashboard'=>'','students'=>''));
} elseif ($_smarty_tpl->tpl_vars['user']->value['role'] == '2') {?> 	<?php $_smarty_tpl->_assignInScope('active', array('dashboard'=>'','teachers'=>'','students'=>''));?>
}
<?php }
$_tmp_array = isset($_smarty_tpl->tpl_vars['active']) ? $_smarty_tpl->tpl_vars['active']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['method']->value] = 'active opened';
$_smarty_tpl->_assignInScope('active', $_tmp_array);?>




	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="#">
						<!-- <img src="/assets/member/images/logo@2x.png" width="120" alt="" /> -->
						<img src="/assets/member/images/logo2.png" style="border-radius: 50%; padding: 10px; background-color: white;" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<!-- <li class="active opened active has-sub"> -->
									<?php if ($_smarty_tpl->tpl_vars['user']->value['role'] == '2') {?> 
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['dashboard'];?>
">
							<a href="/admin/dashboard">
								<i class="entypo-gauge"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['teachers'];?>
">
							<a href="/admin/teachers">
								<i class="entypo-info"></i>
								<span class="title">Teachers</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['students'];?>
">
							<a href="/admin/students">
								<i class="entypo-archive"></i>
								<span class="title">Students</span>
							</a>
						</li>
									<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['role'] == '1') {?>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['dashboard'];?>
">
							<a href="/teacher/dashboard">
								<i class="entypo-gauge"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['students'];?>
">
							<a href="/teacher/students">
								<i class="entypo-archive"></i>
								<span class="title">Students</span>
							</a>
						</li>
									<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['role'] == '0') {?>
					
					<?php }?>

			</ul>
			
		</div>

	</div><?php }
}

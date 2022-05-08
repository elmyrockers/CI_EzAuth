<?php
/* Smarty version 4.1.0, created on 2022-05-06 12:54:22
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Emails\email_verification.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627560ceaaed00_94395525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc677dfeb024d4f903c0fa5cc6fa872879e5c392' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Emails\\email_verification.html.tpl',
      1 => 1651481537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627560ceaaed00_94395525 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to verify your email:<br>

<?php echo $_smarty_tpl->tpl_vars['verificationLink']->value;
}
}

<?php
/* Smarty version 4.1.0, created on 2022-05-06 12:54:22
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Emails\email_verification.txt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627560ceb3f5a8_05836834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08371fb5aac56da8eafe14ce2c5ca467913c4ad0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Emails\\email_verification.txt.tpl',
      1 => 1651481553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627560ceb3f5a8_05836834 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to verify your email:

<?php echo $_smarty_tpl->tpl_vars['verificationLink']->value;
}
}

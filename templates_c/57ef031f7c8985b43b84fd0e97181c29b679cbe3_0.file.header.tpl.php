<?php
/* Smarty version 3.1.30, created on 2017-11-25 08:19:43
  from "D:\TAD1062\UniServerZ\www\Reporter\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a19279f112e51_61085412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ef031f7c8985b43b84fd0e97181c29b679cbe3' => 
    array (
      0 => 'D:\\TAD1062\\UniServerZ\\www\\Reporter\\templates\\header.tpl',
      1 => 1511597521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a19279f112e51_61085412 (Smarty_Internal_Template $_smarty_tpl) {
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
 需要等於 $smarty->assign('Title', $page_title); -->
<title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
<!-- 線上版 -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" -->
<!-- crossorigin="anonymous"> -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/my.css">

<?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
><?php }
}

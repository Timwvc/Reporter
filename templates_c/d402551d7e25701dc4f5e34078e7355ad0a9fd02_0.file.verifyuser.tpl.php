<?php
/* Smarty version 3.1.30, created on 2017-11-11 03:34:41
  from "D:\TAD1062\UniServerZ\www\Reporter\templates\verifyuser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a066fd1c53fb0_14045054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd402551d7e25701dc4f5e34078e7355ad0a9fd02' => 
    array (
      0 => 'D:\\TAD1062\\UniServerZ\\www\\Reporter\\templates\\verifyuser.tpl',
      1 => 1510371265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a066fd1c53fb0_14045054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

    <div class="img-container">
        <div class="container">
             <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <h1 class="pt-5">巷集談-街道新聞</h1>

            <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

        </div>
    </div>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>

</html><?php }
}

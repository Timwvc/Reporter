<?php
/* Smarty version 3.1.30, created on 2017-11-11 03:23:00
  from "D:\TAD1062\UniServerZ\www\Reporter\templates\main_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a066d1409b704_03791668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b147dc8f92260467d4cf06ed3de5a91a99ab411' => 
    array (
      0 => 'D:\\TAD1062\\UniServerZ\\www\\Reporter\\templates\\main_login.tpl',
      1 => 1510370531,
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
function content_5a066d1409b704_03791668 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
    <div class="img-container">
        <div class="container">
            <!-- 加入導覧列功能 -->
             <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- <nav class="nav">
                <a href="index.php" class="nav-link text-white">首頁</a>
                <a href="gallery.php" class="nav-link text-white">圖集</a>
                <a href="admin.php" class="nav-link text-white">管理</a>
            </nav> -->

    <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div id="message"></div>
    </form>
            <!-- <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
                <h2 class="form-signup-heading">Register</h2>
                <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
                <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                <br>
                <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
                <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

                <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                <div id="message"></div>
            </form> -->
        </div>
    </div>
    <!-- <div>
        <p class="lipsum(3,20-50)"></p>
        <p class="lipsum(4,20-50)"></p>
        <p class="lipsum(5,20-50)"></p>
        <p class="lipsum(3,20-50)"></p>
    </div> -->

    <!-- <?php echo '<script'; ?>
 src=" https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js "><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js "><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js " integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn "
        crossorigin="anonymous "><?php echo '</script'; ?>
> -->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}

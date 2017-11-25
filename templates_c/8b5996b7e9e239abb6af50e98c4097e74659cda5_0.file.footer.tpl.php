<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:52:40
  from "D:\TAD1062\UniServerZ\www\Reporter\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe6c8599d42_74050673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5996b7e9e239abb6af50e98c4097e74659cda5' => 
    array (
      0 => 'D:\\TAD1062\\UniServerZ\\www\\Reporter\\templates\\footer.tpl',
      1 => 1510991551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe6c8599d42_74050673 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer">
<footer class="bg-dark text-white py-4 fixed-bottom">
    <div class="container">
        <div class "mt-3 d-none d-sm-block">

        以台南社大師生為主體寫作者的《巷集談-街道新聞》，秉持公民素人發聲 、開放以及非營利的宗旨，除希望培力更多公民記者、自由寫手之外，更希望以關注台南市未來城鄉永續發展過程中，保障公民參與審議的權利為精神，成為台南市公民傳播媒體的草根平台。
        </div>
        <div class="m-2 d-block d-sm-none text-center">
             成為台南市公民傳播媒體的草根平台
        </div>
    </div>
</footer>
</div>

<?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // 網頁調整
    $(document).ready(function () {
        var images = ['nut.jpg', 'vegetables.jpg', 'mashroom.jpg', 'tomatos.jpg'];

        $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });

        // var txt = ['大家好', '歡迎光臨', '吃飽没'];
        // $('title').text(txt[Math.floor(Math.random() * txt.length)]);


        // $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());

        //執行動作
    });
    //視窗調整
    $(window).resize(function () {
        // $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());

        //執行動作
    });

<?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
> --><?php }
}

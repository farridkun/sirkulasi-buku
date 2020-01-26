<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:22:18
  from "C:\xampp\htdocs\latihan\libray-cms\themes\default\public.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2daeaaa9bb97_22247115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca6194199983b5c93f4ec2d520351e56c11a3a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\themes\\default\\public.tpl',
      1 => 1519033216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/header.tpl' => 1,
    'file:general/footer.tpl' => 1,
    'file:auth/login.tpl' => 1,
  ),
),false)) {
function content_5e2daeaaa9bb97_22247115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" class="" dir="<?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>rtl<?php } else { ?>ltr<?php }?>">
    <head <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11895790445e2daeaaa82241_05448811', 'headerPrefix');
?>
>
        <meta charset="UTF-8">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1526743595e2daeaaa83561_18036540', 'metaTitle');
?>
</title>
        <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8355545985e2daeaaa84662_29537954', 'metaDescription');
?>
">
        <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3345684155e2daeaaa85523_47080404', 'metaKeywords');
?>
">
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
"/>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11825720215e2daeaaa875f1_58779084', 'socialNetworksMeta');
?>

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/plugins.css">
        <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.rtl.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/responsive.rtl.css">
        <?php } else { ?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.css">
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/responsive.css">
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9004786515e2daeaaa8c7d9_17103830', 'headerCss');
?>

    </head>
    <body>
        <?php if (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly") && isset($_smarty_tpl->tpl_vars['user']->value)) || !$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly")) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:general/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18645474915e2daeaaa94892_12819189', 'content');
?>

            <?php $_smarty_tpl->_subTemplateRender('file:general/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:auth/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1503184605e2daeaaa97cc0_02886921', 'footerJs');
?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/plugins.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/custom.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12071549895e2daeaaa9abf3_37760543', 'customJs');
?>

    </body>
</html><?php }
/* {block 'headerPrefix'} */
class Block_11895790445e2daeaaa82241_05448811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerPrefix' => 
  array (
    0 => 'Block_11895790445e2daeaaa82241_05448811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerPrefix'} */
/* {block 'metaTitle'} */
class Block_1526743595e2daeaaa83561_18036540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_1526743595e2daeaaa83561_18036540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Library CMS<?php
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_8355545985e2daeaaa84662_29537954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_8355545985e2daeaaa84662_29537954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_3345684155e2daeaaa85523_47080404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_3345684155e2daeaaa85523_47080404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'socialNetworksMeta'} */
class Block_11825720215e2daeaaa875f1_58779084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'socialNetworksMeta' => 
  array (
    0 => 'Block_11825720215e2daeaaa875f1_58779084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'socialNetworksMeta'} */
/* {block 'headerCss'} */
class Block_9004786515e2daeaaa8c7d9_17103830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_9004786515e2daeaaa8c7d9_17103830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_18645474915e2daeaaa94892_12819189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18645474915e2daeaaa94892_12819189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_1503184605e2daeaaa97cc0_02886921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_1503184605e2daeaaa97cc0_02886921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/popper.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_12071549895e2daeaaa9abf3_37760543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_12071549895e2daeaaa9abf3_37760543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'customJs'} */
}

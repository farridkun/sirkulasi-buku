<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:18:29
  from "C:\xampp\htdocs\latihan\libray-cms\private\Templates\admin\general\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2dadc57c85b9_98107491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d65f5c3f2683cf7416641566091a7305db9e220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Templates\\admin\\general\\footer.tpl',
      1 => 1519033206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2dadc57c85b9_98107491 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer">
    <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("footerCredits");?>

</footer><?php }
}

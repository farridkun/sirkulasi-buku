<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:22:19
  from "C:\xampp\htdocs\latihan\libray-cms\themes\default\general\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2daeab21c6b4_12653764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd313e1f7fbf990431e66aa4ac24d909a292050' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\themes\\default\\general\\footer.tpl',
      1 => 1519033216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2daeab21c6b4_12653764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p><?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("footerCredits");?>
</p>
            </div>
        </div>
    </div>
</footer>
<button class="back-to-top" id="back-to-top" role="button"><i class="ti-angle-up"></i></button><?php }
}

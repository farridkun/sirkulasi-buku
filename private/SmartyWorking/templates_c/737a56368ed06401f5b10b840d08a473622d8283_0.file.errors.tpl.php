<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:17:04
  from "C:\xampp\htdocs\latihan\libray-cms\themes\default\errors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2dad70356515_33527451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737a56368ed06401f5b10b840d08a473622d8283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\themes\\default\\errors.tpl',
      1 => 1519033216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2dad70356515_33527451 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_SESSION['messages']) && count($_SESSION['messages']) > 0) {?>
    <div class="row">
        <div class="col-sm-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['messages'], 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
                <div class="alert <?php if ($_smarty_tpl->tpl_vars['message']->value->getStatus() == 'INFO') {?>alert-success<?php } elseif (strcmp($_smarty_tpl->tpl_vars['message']->value->getStatus(),'WARNING') === 0) {?>alert-warning<?php } else { ?>alert-danger<?php }?> alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value->getMessage();?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
<?php }
}
}

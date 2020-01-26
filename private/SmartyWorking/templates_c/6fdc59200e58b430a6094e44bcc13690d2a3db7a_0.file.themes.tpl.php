<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:18:53
  from "C:\xampp\htdocs\latihan\libray-cms\private\Templates\admin\themes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2dadddeac555_94928747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fdc59200e58b430a6094e44bcc13690d2a3db7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Templates\\admin\\themes.tpl',
      1 => 1519033206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2dadddeac555_94928747 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20992004535e2daddde73423_42069237', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5010082245e2daddde7c309_00564429', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18003390495e2daddde84679_11974020', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14502226105e2daddde9fe73_20262569', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7000696455e2dadddea24f3_90740237', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_20992004535e2daddde73423_42069237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20992004535e2daddde73423_42069237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Themes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_5010082245e2daddde7c309_00564429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_5010082245e2daddde7c309_00564429',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_18003390495e2daddde84679_11974020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18003390495e2daddde84679_11974020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['themes']->value) && count($_smarty_tpl->tpl_vars['themes']->value) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme', false, 'themeName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['themeName']->value => $_smarty_tpl->tpl_vars['theme']->value) {
?>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;
echo $_smarty_tpl->tpl_vars['theme']->value->getLocation();
echo $_smarty_tpl->tpl_vars['theme']->value->getCover();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getTitle();?>
">
                        <div class="card-body">
                            <h5 class="text-center mb-3"><?php echo $_smarty_tpl->tpl_vars['theme']->value->getTitle();?>
</h5>
                            <p class="mb-1"><strong class="pr-1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Author<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong>
                                <a href="http://kaasoft.pro"><?php echo $_smarty_tpl->tpl_vars['theme']->value->getAuthor();?>
</a>
                            </p>
                            <p class="mb-1"><strong class="pr-1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Version<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['theme']->value->getVersion();?>
</p>
                            
                            <a href="#" class="btn btn-block <?php if (strcmp($_smarty_tpl->tpl_vars['themeName']->value,$_smarty_tpl->tpl_vars['activeTheme']->value) === 0) {?>btn-success disabled<?php } else { ?>btn-light<?php }?> mt-3 activateTheme" data-theme="<?php echo $_smarty_tpl->tpl_vars['themeName']->value;?>
"><?php if (strcmp($_smarty_tpl->tpl_vars['themeName']->value,$_smarty_tpl->tpl_vars['activeTheme']->value) === 0) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Activated<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Activate<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></a>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_14502226105e2daddde9fe73_20262569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_14502226105e2daddde9fe73_20262569',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jasnyupload/fileinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_7000696455e2dadddea24f3_90740237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_7000696455e2dadddea24f3_90740237',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var themeActivateUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("themeActivate");?>
';
        $('.activateTheme').on('click', function (e) {
            e.preventDefault();
            var theme = $(this).attr('data-theme');
            var _this = $(this);
            $.ajax({
                dataType: 'json',
                method: 'POST',
                data: 'activeThemeName=' + theme,
                url: themeActivateUrl,
                beforeSend: function (data) {
                    app.card.loading.start($(_this).closest('.card'));
                },
                success: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            app.notification('success', data.success);
                            $(".activateTheme").toggleClass('btn-light btn-success disabled').not(_this).text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Activate<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                            //$(".activateTheme")
                            $(_this).text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Activated<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                        }
                    }
                },
                error: function (jqXHR, exception) {
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                },
                complete: function (data) {
                    app.card.loading.finish($(_this).closest('.card'));
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}

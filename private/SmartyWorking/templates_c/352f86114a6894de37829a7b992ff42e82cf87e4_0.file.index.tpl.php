<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:18:27
  from "C:\xampp\htdocs\latihan\libray-cms\private\Templates\admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2dadc3c3b0d3_86109043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352f86114a6894de37829a7b992ff42e82cf87e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Templates\\admin\\index.tpl',
      1 => 1519033206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2dadc3c3b0d3_86109043 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_986337855e2dadc3bae9a8_97641182', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18355428925e2dadc3bba182_27716003', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_986337855e2dadc3bae9a8_97641182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_986337855e2dadc3bae9a8_97641182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Dashboard<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_18355428925e2dadc3bba182_27716003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18355428925e2dadc3bba182_27716003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 200) {?>
        <div class="row">
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><?php echo number_format($_smarty_tpl->tpl_vars['bookTotal']->value,0,".",",");?>
</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Total Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h6>
                        <span class="text-white font-light text-uppercase fs12">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card">
                    <div class="box bg-primary text-center">
                        <h1 class="font-light text-white"><?php echo number_format($_smarty_tpl->tpl_vars['issueCount']->value,0,".",",");?>
</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h6>
                        <span class="text-white font-light text-uppercase fs12">(<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
last month<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><?php echo number_format($_smarty_tpl->tpl_vars['returnCount']->value,0,".",",");?>
</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Returned Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h6>
                        <span class="text-white font-light text-uppercase fs12">(<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
last month<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><?php echo number_format($_smarty_tpl->tpl_vars['lostCount']->value,0,".",",");?>
</h1>
                        <h6 class="text-white text-uppercase font-bold mb-0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Lost Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h6>
                        <span class="text-white font-light text-uppercase fs12">(<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
last month<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
)</span>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['lastIssuedBooks']->value) && $_smarty_tpl->tpl_vars['lastIssuedBooks']->value != null) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-title ml-3 mt-3"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Issued Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h4>
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 140px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publishing Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastIssuedBooks']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookView",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>

                                        <?php }?>
                                    </td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {
echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();
}?></td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13()) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>

                                        <?php }?>
                                    </td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['lastRequestedBooks']->value) && $_smarty_tpl->tpl_vars['lastRequestedBooks']->value != null) {?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-title ml-3 mt-3"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Requested Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h4>
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 140px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publishing Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 150px;"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastRequestedBooks']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookView",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>

                                        <?php }?>
                                    </td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {
echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();
}?></td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13()) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>

                                        <?php }?>
                                    </td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php }
}
}
/* {/block 'content'} */
}

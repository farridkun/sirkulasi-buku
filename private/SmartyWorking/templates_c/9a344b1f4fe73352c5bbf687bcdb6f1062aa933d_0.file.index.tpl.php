<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:22:18
  from "C:\xampp\htdocs\latihan\libray-cms\themes\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2daeaa56a567_19160012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a344b1f4fe73352c5bbf687bcdb6f1062aa933d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\themes\\default\\index.tpl',
      1 => 1519033216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:books/rating.tpl' => 2,
  ),
),false)) {
function content_5e2daeaa56a567_19160012 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Smarty\\plugins\\block.t.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11544615445e2daeaa3c6c94_33843573', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16513450405e2daeaa3d2a04_14943547', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9965427265e2daeaa3d5429_79977566', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18208689955e2daeaa3d7c07_23705943', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16389987875e2daeaa3d9893_71872574', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12919016575e2daeaa564331_04295495', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18275494645e2daeaa565d14_56242696', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_11544615445e2daeaa3c6c94_33843573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_11544615445e2daeaa3c6c94_33843573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['indexPage']->value != null) {
if ($_smarty_tpl->tpl_vars['indexPage']->value->getMetaTitle() != null) {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getTitle();
}
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_16513450405e2daeaa3d2a04_14943547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_16513450405e2daeaa3d2a04_14943547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['indexPage']->value != null) {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getMetaDescription();
}
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_9965427265e2daeaa3d5429_79977566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_9965427265e2daeaa3d5429_79977566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['indexPage']->value != null) {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getMetaKeywords();
}
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_18208689955e2daeaa3d7c07_23705943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_18208689955e2daeaa3d7c07_23705943',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/owl.theme.default.min.css">
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_16389987875e2daeaa3d9893_71872574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16389987875e2daeaa3d9893_71872574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showCarousel")) {?>
        <?php $_smarty_tpl->_assignInScope('colorArray', array('green-bg','purple-bg','blue-bg','burgundy-bg','beige-bg','pink-bg'));
?>
        <?php $_smarty_tpl->_assignInScope('colorIndex', 0);
?>
        <section class="home-book-carousel owl-carousel">
            <?php if (isset($_smarty_tpl->tpl_vars['topRatedBooks']->value) && $_smarty_tpl->tpl_vars['topRatedBooks']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topRatedBooks']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
                    <div class="book <?php echo $_smarty_tpl->tpl_vars['colorArray']->value[$_smarty_tpl->tpl_vars['colorIndex']->value];?>
">
                        <div class="row">
                            <div class="book-cover col-lg-4 col-4">
                                <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover()) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath('small');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid"></a>
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid"></a>
                                <?php }?>
                            </div>
                            <div class="book-info col-lg-8 col-8">
                                <div class="book-title">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                                </div>
                                <div class="book-attr">
                                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?>
                                        <span class="book-publishing-year"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();
if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null) {?>, <?php }?></span><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
                                        <?php $_smarty_tpl->_assignInScope('bookAuthors', $_smarty_tpl->tpl_vars['book']->value->getAuthors());
?>
                                        <span class="book-author"><?php echo $_smarty_tpl->tpl_vars['bookAuthors']->value[0]->getLastName();
echo $_smarty_tpl->tpl_vars['bookAuthors']->value[0]->getFirstName();?>
</span>
                                    <?php }?>
                                </div>
                                <div class="book-rating">
                                    <?php $_smarty_tpl->_subTemplateRender('file:books/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['book']->value->getRating(),'readOnly'=>true), 0, true);
?>

                                    <div class="whole-rating d-inline-block">
                                        <span><?php echo $_smarty_tpl->tpl_vars['book']->value->getBookRatingVotesNumber();?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Votes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['book']->value->getDescription()) {?>
                                    <div class="book-short-description"><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['book']->value->getDescription())),150);?>
</div>
                                <?php }?>
                                <div class="book-settings">
                                    <a href="#"><i class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('colorIndex', $_smarty_tpl->tpl_vars['colorIndex']->value+1);
?>
                    <?php if ($_smarty_tpl->tpl_vars['colorIndex']->value == count($_smarty_tpl->tpl_vars['colorArray']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('colorIndex', 0);
?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </section>
    <?php }?>
    <section class="home-book-list">
        <div class="container">
            <div class="row book-list">
                
                <div class="col-lg-9">
                    <div class="row">
                        <?php if (isset($_smarty_tpl->tpl_vars['books']->value) && $_smarty_tpl->tpl_vars['books']->value != null) {?>
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                                </div>
                            </div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="row book">
                                        <div class="book-cover col-lg-4 col-4">
                                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover()) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath('small');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid"></a>
                                            <?php } else { ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="img-fluid"></a>
                                            <?php }?>
                                        </div>
                                        <div class="book-info col-lg-8 col-8">
                                            <div class="book-title">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                                            </div>
                                            <div class="book-attr">
                                                <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?>
                                                    <span class="book-publishing-year"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();
if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null) {?>, <?php }?></span><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
                                                    <?php $_smarty_tpl->_assignInScope('bookAuthors', $_smarty_tpl->tpl_vars['book']->value->getAuthors());
?>
                                                    <span class="book-author"><?php echo $_smarty_tpl->tpl_vars['bookAuthors']->value[0]->getLastName();
echo $_smarty_tpl->tpl_vars['bookAuthors']->value[0]->getFirstName();?>
</span>
                                                <?php }?>
                                            </div>
                                            <div class="book-rating">
                                                <?php $_smarty_tpl->_subTemplateRender('file:books/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['book']->value->getRating(),'readOnly'=>true), 0, true);
?>

                                                <div class="whole-rating d-inline-block">
                                                    <span><?php echo $_smarty_tpl->tpl_vars['book']->value->getBookRatingVotesNumber();?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Votes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getDescription()) {?>
                                                <div class="book-short-description"><?php echo smarty_modifier_truncate(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['book']->value->getDescription())),90);?>
</div>
                                            <?php }?>
                                            <div class="book-settings">
                                                <a href="#"><i class="fa fa-ellipsis-v"></i></a>
                                            </div>
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
                </div>
                <div class="col-lg-3">
                    <?php if (isset($_smarty_tpl->tpl_vars['authors']->value) && $_smarty_tpl->tpl_vars['authors']->value != null && count($_smarty_tpl->tpl_vars['authors']->value) > 0) {?>
                        <div class="row mini-list-authors">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Popular Authors<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                                </div>
                            </div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author', false, NULL, 'author', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
                                <div class="col-lg-12 col-md-6 author">
                                    <div class="author-photo">
                                        <?php if ($_smarty_tpl->tpl_vars['author']->value->getPhoto() != null) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['author']->value->getPhoto()->getWebPath('medium');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
" class="rounded-circle"></a>
                                        <?php } else { ?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noUserImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
" class="rounded-circle"></a>
                                        <?php }?>
                                        
                                    </div>
                                    <div class="author-info">
                                        <div class="author-name">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
</a>
                                        </div>
                                        <div class="author-books"><?php echo $_smarty_tpl->tpl_vars['author']->value->getBookCount();?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && $_smarty_tpl->tpl_vars['posts']->value != null) {?>
                        <div class="row mini-list-posts">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last News<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                                </div>
                            </div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post', false, NULL, 'post', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                                <div class="col-lg-12 col-md-6 post">
                                    <?php if ($_smarty_tpl->tpl_vars['post']->value->getImage() != null) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postViewPublic",array("postUrl"=>$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('small');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
" class="img-fluid">
                                        </a>
                                    <?php }?>
                                    <div class="post-info">
                                        <div class="post-meta">
                                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->getPublishDateTime(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                                        </div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postViewPublic",array("postUrl"=>$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
" class="post-title">
                                            <?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>

                                        </a>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_12919016575e2daeaa564331_04295495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_12919016575e2daeaa564331_04295495',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_18275494645e2daeaa565d14_56242696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_18275494645e2daeaa565d14_56242696',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showCarousel")) {?>
        <?php echo '<script'; ?>
>
            $('.home-book-carousel').owlCarousel({
                center: true,
                items: 3,
                loop: true,
                margin: 0,
                merge: true,
                <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>rtl:true,<?php }?>
                responsive: {
                    2600: {
                        items: 6
                    },
                    2000: {
                        items: 5
                    },
                    1800: {
                        items: 4
                    },
                    1200: {
                        items: 3
                    },
                    600: {
                        items: 2
                    },
                    0: {
                        items: 1
                    }
                }
            });
        <?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block 'customJs'} */
}

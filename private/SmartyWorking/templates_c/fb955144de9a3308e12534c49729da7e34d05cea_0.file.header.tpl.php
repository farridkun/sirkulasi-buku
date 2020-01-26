<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:22:18
  from "C:\xampp\htdocs\latihan\libray-cms\themes\default\general\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2daeaad58936_50655272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb955144de9a3308e12534c49729da7e34d05cea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\themes\\default\\general\\header.tpl',
      1 => 1519033216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2daeaad58936_50655272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'printMenu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\SmartyWorking\\templates_c\\fb955144de9a3308e12534c49729da7e34d05cea_0.file.header.tpl.php',
    'uid' => 'fb955144de9a3308e12534c49729da7e34d05cea',
    'call_name' => 'smarty_template_function_printMenu_19916505315e2daeaac20632_59152200',
  ),
));
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Smarty\\plugins\\block.t.php';
?>
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicIndex");?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" alt="Logo"></a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse justify-content-center" id="header-menu">
                        
                        <ul class="navbar-nav primary-menu">
                            <?php if (isset($_smarty_tpl->tpl_vars['menu1']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu1']->value->getRootNodes(), 'rootNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rootNode']->value) {
?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['rootNode']->value), true);?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="menu-icons d-flex text-right align-items-center justify-content-end">
                    <div class="search-box">
                        <a href="#" class="search-open"><i class="ti-search"></i></a>
                    </div>
                    <div class="user-dropdown">
                        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null) {?>
                            <a href="#" class="user-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ti-user"></i></a>
                            <ul class="dropdown-menu">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->getId() != null) {?>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit",array("userId"=>$_smarty_tpl->tpl_vars['user']->value->getId()));?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Profile<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() <= 100) {?>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userBooksView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
My Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRequestListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Request Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                <?php } else { ?>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Requested Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueListView");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                    </li>
                                <?php }?>
                                <li class="divider"></li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicLogout");?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Logout<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <a href="#" data-toggle="modal" data-target="#login-box" class="open-login-box">
                                <i class="ti-lock"></i>
                            </a>
                        <?php }?>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['languages']->value)) {?>
                        <div class="languages">
                            <a href="#" class="lang-select" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ti-world"></i></a>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['language']->value->isActive()) {?>
                                        <li>
                                            <a class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['language']->value->getCode() == $_smarty_tpl->tpl_vars['activeLanguage']->value->getCode()) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("languageChange",array("languageCode"=>$_smarty_tpl->tpl_vars['language']->value->getCode()));?>
"><i class="flag flag-<?php echo $_smarty_tpl->tpl_vars['language']->value->getShortCode();?>
"></i> <?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>

                                            </a>
                                        </li>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>
                        </div>
                    <?php }?>
                </div>
                <div class="menu-toggler" data-toggle="collapse" data-target="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="bar"></div>
                </div>
            </div>




            <div class="col-12">
                <div class="search-header hide">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearchPublic");?>
" method="post">
                        <input class="form-control search-input" name="searchText" aria-describedby="search" type="search">
                        <button type="submit" class="btn" id="header-search"><i class="ti-search"></i></button>
                        <span class="search-close">
                        <i class="ti-close"></i>
                    </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal login-box" id="login-box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card card-no-border">
                    <div class="card-body">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" class="d-flex ml-auto mr-auto mb-4 mt-2" alt="Login">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicLogin");?>
" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="login" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" value="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="password" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8 col-xs-8">
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" name="rememberMe" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Remember me<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <button class="btn btn-success btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableRegistration")) {?>
                                        <div class="col-md-12 mt-2">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRegistration");?>
" class="btn btn-primary btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign Up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }
/* smarty_template_function_printMenu_19916505315e2daeaac20632_59152200 */
if (!function_exists('smarty_template_function_printMenu_19916505315e2daeaac20632_59152200')) {
function smarty_template_function_printMenu_19916505315e2daeaac20632_59152200($_smarty_tpl,$params) {
$params = array_merge(array('node'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
                            <?php if (isset($_smarty_tpl->tpl_vars['node']->value) && $_smarty_tpl->tpl_vars['node']->value->getValue() !== null) {?>
                                <?php $_smarty_tpl->_assignInScope('menuItem', $_smarty_tpl->tpl_vars['node']->value->getValue());
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['node']->value->getParent() == null) {?>nav-item<?php }
if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null && $_smarty_tpl->tpl_vars['node']->value->getParent() == null) {?> dropdown<?php } elseif ($_smarty_tpl->tpl_vars['node']->value->getParent() != null && $_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?> dropdown-submenu<?php }?> <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->getClass() != null) {
echo $_smarty_tpl->tpl_vars['menuItem']->value->getClass();
}?>">
                                    <a href="<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->getPageId() != null) {
echo $_smarty_tpl->tpl_vars['pageUrls']->value[$_smarty_tpl->tpl_vars['menuItem']->value->getPageId()];
} elseif ($_smarty_tpl->tpl_vars['menuItem']->value->getPostId() != null) {
echo $_smarty_tpl->tpl_vars['postUrls']->value[$_smarty_tpl->tpl_vars['menuItem']->value->getPostId()];
} elseif ($_smarty_tpl->tpl_vars['menuItem']->value->getLink() != null) {
echo $_smarty_tpl->tpl_vars['menuItem']->value->getLink();
}?>" class="<?php if ($_smarty_tpl->tpl_vars['node']->value->getParent() != null) {?>dropdown-item<?php }?>" <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?> data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getTitle();?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null && $_smarty_tpl->tpl_vars['node']->value->getParent() == null) {?>
                                            <i class="ti-angle-down"></i>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['node']->value->getParent() != null && $_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?>
                                            <i class="ti-angle-right ml-auto"></i>
                                        <?php }?>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?>
                                        <ul class="dropdown-menu<?php if ($_smarty_tpl->tpl_vars['node']->value->getParent() != null) {?> menu-left<?php }?>">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value->getChildren(), 'subNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subNode']->value) {
?>
                                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['subNode']->value), true);?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>
                                    <?php }?>
                                </li>
                            <?php }?>
                        <?php
}}
/*/ smarty_template_function_printMenu_19916505315e2daeaac20632_59152200 */
}

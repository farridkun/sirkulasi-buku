<?php
/* Smarty version 3.1.31, created on 2020-01-26 16:18:28
  from "C:\xampp\htdocs\latihan\libray-cms\private\Templates\admin\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e2dadc410dc85_11755240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74ee5ee8be61bba719828f2ddd303f3751b8139' => 
    array (
      0 => 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Templates\\admin\\admin.tpl',
      1 => 1519033206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/header.tpl' => 1,
    'file:admin/general/leftSidebar.tpl' => 1,
    'file:admin/errors.tpl' => 1,
    'file:admin/general/footer.tpl' => 1,
  ),
),false)) {
function content_5e2dadc410dc85_11755240 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\xampp\\htdocs\\latihan\\libray-cms\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>rtl<?php } else { ?>ltr<?php }?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="KAASoft">
        <meta name="robots" content="noindex,nofollow">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13605374155e2dadc40e1dc5_25427454', 'title');
?>
 | Library CMS</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15366876855e2dadc40e2f13_81731167', 'headerCss');
?>

        <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/style.rtl.css" rel="stylesheet">
        <?php } else { ?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/style.css" rel="stylesheet">
        <?php }?>
        <link rel="shortcut icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
">
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            <?php $_smarty_tpl->_subTemplateRender('file:admin/general/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender('file:admin/general/leftSidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title pull-left">
                                <h3 class="text-info mb-4"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11270793035e2dadc40ed545_60000942', 'title');
?>
</h3>
                            </div>
                            <div class="head-controls pull-right">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7301912315e2dadc40ef047_33346677', 'toolbar');
?>

                            </div>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:admin/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12508165855e2dadc40f0976_05006586', 'content');
?>

                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:admin/general/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7845443765e2dadc40f3a29_57151503', 'footerImportantJs');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9034219415e2dadc40f8600_55900104', 'footerPageJs');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16255340495e2dadc40f9559_95426664', 'footerAPPJs');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1533515675e2dadc40fab90_63523554', 'footerCustomJs');
?>

    </body>
</html><?php }
/* {block 'title'} */
class Block_13605374155e2dadc40e1dc5_25427454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13605374155e2dadc40e1dc5_25427454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_15366876855e2dadc40e2f13_81731167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_15366876855e2dadc40e2f13_81731167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
            <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <?php
}
}
/* {/block 'headerCss'} */
/* {block 'title'} */
class Block_11270793035e2dadc40ed545_60000942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11270793035e2dadc40ed545_60000942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
No Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_7301912315e2dadc40ef047_33346677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_7301912315e2dadc40ef047_33346677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'toolbar'} */
/* {block 'content'} */
class Block_12508165855e2dadc40f0976_05006586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12508165855e2dadc40f0976_05006586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footerImportantJs'} */
class Block_7845443765e2dadc40f3a29_57151503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerImportantJs' => 
  array (
    0 => 'Block_7845443765e2dadc40f3a29_57151503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/noty/noty.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/tooltipster/jquery.tooltipster.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/metismenu/metisMenu.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/sticky-kit/sticky-kit.min.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'footerImportantJs'} */
/* {block 'footerPageJs'} */
class Block_9034219415e2dadc40f8600_55900104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_9034219415e2dadc40f8600_55900104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerAPPJs'} */
class Block_16255340495e2dadc40f9559_95426664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerAPPJs' => 
  array (
    0 => 'Block_16255340495e2dadc40f9559_95426664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'footerAPPJs'} */
/* {block 'footerCustomJs'} */
class Block_1533515675e2dadc40fab90_63523554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_1533515675e2dadc40fab90_63523554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 200) {?>
                <?php echo '<script'; ?>
>
                    $(document).click(function (e) {
                        var elem = $(".header-search-input");
                        if (!elem.is(e.target) && elem.has(e.target).length === 0 && $('.header-search-input:focus').length === 0) {
                            $(".header-search-results").hide();
                        }
                    });
                    $('.header-search-input').on('focus', function () {
                        if ($('.header-search-results li').length > 0) {
                            $('.header-search-results').show();
                        }
                    });
                    $(document).on('click', 'li.user', function (e) {
                        e.preventDefault();
                        window.location.href = $(this).attr('data-url');
                    });
                    $(document).on('click', 'li.book', function (e) {
                        e.preventDefault();
                        window.location.href = $(this).attr('data-url');
                    });
                    $('#search-book').on('click', function (e) {
                        e.preventDefault();
                        var url, form = $(this).closest('form');
                        var searchText = $('.header-search-input').val();
                        var resultList = $('.header-search-results');
                        var searchBy = $('#searchBy').val();
                        if (searchBy == 'books') {
                            url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearch",array());?>
'
                        } else {
                            url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userSearch",array());?>
'
                        }
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: {
                                searchText: searchText
                            },
                            dataType: 'json',
                            beforeSend: function () {
                                $('.header-search-icon').removeClass('fa-search').addClass('fa-spinner fa-spin');
                                $(resultList).hide().mCustomScrollbar("destroy");
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        $(resultList).empty().show();
                                        if (searchBy === 'books') {
                                            $.each(data.books, function (index, item) {
                                                $(resultList).append(bookTemplate(item));
                                            });
                                        } else {
                                            $.each(data, function (index, item) {
                                                $(resultList).append(userTemplate(item));
                                            });
                                        }
                                        $(resultList).mCustomScrollbar({
                                            advanced: {
                                                updateOnContentResize: true,
                                                updateOnImageLoad: true
                                            },
                                            theme: "minimal"
                                        });
                                    }
                                }
                            },
                            complete: function () {
                                $('.header-search-icon').removeClass('fa-spinner fa-spin').addClass('fa-search');
                            },
                            error: function (jqXHR, exception) {
                                app.notification('error', app.getErrorMessage(jqXHR, exception));
                            }
                        });
                    });
                    function userTemplate(user) {
                        var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userEdit");?>
';
                        var template = '<li class="flex-row d-flex user" data-url="' + url.replace("[userId]", user.id) + '">';
                        template += '<div class="user-meta">';
                        template += '<h4><strong>#' + user.id + '</strong> ' + user.firstName + ' ' + user.lastName + ' ';
                        if (user.role) {
                            template += '<span>(' + user.role.name + ')</span>';
                        }
                        template += '</h4>';
                        template += "<div><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
:</strong> " + user.email + "</div>";
                        template += '</div>';
                        template += '</li>';
                        return template;
                    }
                    function bookTemplate(book) {
                        var url = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit");?>
';
                        var i, lastIndex, template = '<li class="flex-row d-flex book" data-url="' + url.replace("[bookId]", book.id) + '">';
                        template += '<div class="book-cover">';
                        if (book.cover) {
                            template += '<img src="' + book.cover.webPath + '" class="img-fluid">';
                        } else {
                            template += '<img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" class="img-fluid">';
                        }
                        template += '</div>';
                        template += '<div class="book-meta">';
                        template += '<h4>' + book.title + '';
                        if (book.publishingYear) {
                            template += ' <span>(' + book.publishingYear + ')</span>';
                        }
                        template += '</h4>';

                        if (book.publisher) {
                            template += "<div><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.publisher.name + "</div>";
                        }
                        if (book.ISBN13) {
                            template += "<div><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN13:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN13 + "</div>";
                        } else if (book.ISBN10) {
                            template += "<div><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN10 + "</div>";
                        }
                        if (book.genres.length > 0) {
                            template += "<div><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                            lastIndex = book.genres.length - 1;
                            for (i = 0; i < book.genres.length; i++) {
                                template += book.genres[i].name;
                                if (lastIndex != i) {
                                    template += ", ";
                                }
                            }
                            template += "</div>";
                        }
                        if (book.authors.length > 0) {
                            template += "<div><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                            lastIndex = book.authors.length - 1;
                            for (i = 0; i < book.authors.length; i++) {
                                if (book.authors[i].firstName) {
                                    var text = book.authors[i].firstName + ' ' + book.authors[i].lastName;
                                } else {
                                    text = book.authors[i].lastName;
                                }
                                template += text;
                                if (lastIndex != i) {
                                    template += ", ";
                                }
                            }
                            template += "</div>";
                        }
                        template += '</div>';
                        template += '</li>';
                        return template;
                    }
                <?php echo '</script'; ?>
>
            <?php }?>
        <?php
}
}
/* {/block 'footerCustomJs'} */
}

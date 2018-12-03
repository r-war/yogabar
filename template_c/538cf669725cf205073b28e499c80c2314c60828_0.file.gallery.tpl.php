<?php /* Smarty version 3.1.27, created on 2018-11-10 04:24:31
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\gallery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:94025be64f6fd08101_64997231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '538cf669725cf205073b28e499c80c2314c60828' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\gallery.tpl',
      1 => 1541820215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94025be64f6fd08101_64997231',
  'variables' => 
  array (
    'gallery_cat' => 0,
    'gallery' => 0,
    'gallery_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5be64f6fdc3934_39087132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5be64f6fdc3934_39087132')) {
function content_5be64f6fdc3934_39087132 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '94025be64f6fd08101_64997231';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body class="innerbg">
    <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container">
        <div class="gallery">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="category">
                <ul class="portfolio-filter text-center">
                    <li class="active" data-filter="*">All</li>
                    <?php
$_from = $_smarty_tpl->tpl_vars['gallery_cat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['gallery']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
$foreach_gallery_Sav = $_smarty_tpl->tpl_vars['gallery'];
?>
                    <li data-filter=".<?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_cat'];?>
</li>
                    <?php
$_smarty_tpl->tpl_vars['gallery'] = $foreach_gallery_Sav;
}
?> 
                </ul>
            </div>
            <div class="portfolio-items">
                <div class="row">
                    <?php
$_from = $_smarty_tpl->tpl_vars['gallery_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['gallery']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
$foreach_gallery_Sav = $_smarty_tpl->tpl_vars['gallery'];
?>
                    <div class="col-md-4 single-item <?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_cat'];?>
">
                        <img src="/web/gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_path'];?>
">
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['gallery'] = $foreach_gallery_Sav;
}
?>
                </div>
            </div>
        </div>
        <div class="soical-media visible-sm visible-xs">
            <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>

        <div class="web_soical-media">
            <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        // Add isotope click function
        $( document ).ready(function() {
            $('.portfolio-filter li').on( 'click', function(){
                $(".portfolio-filter li").removeClass("active");
                $(this).addClass("active");
         
                var selector = $(this).attr('data-filter');
                $(".portfolio-items").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    },
                    
                });
                return false;
            });

            $(".portfolio-items").isotope({
                itemSelector: '.single-item',
                layoutMode: 'fitRows',
            });
        });
    <?php echo '</script'; ?>
><?php }
}
?>
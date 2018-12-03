<?php /* Smarty version 3.1.27, created on 2017-02-01 16:31:29
         compiled from "/home/yogabar/public_html/templates/default/snapshot.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2036679769589261c1bee018_83248491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a744f72d405a7fbe0880621cfb74748818bc7c' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/snapshot.tpl',
      1 => 1485641360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036679769589261c1bee018_83248491',
  'variables' => 
  array (
    'gallery_rs' => 0,
    'gallery' => 0,
    'cat' => 0,
    'key' => 0,
    'result_cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589261c1db5722_38135097',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589261c1db5722_38135097')) {
function content_589261c1db5722_38135097 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2036679769589261c1bee018_83248491';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-12 ">
	    <div  class="white-bg">
	    	<div class="container">	
	    		<div class="row">
	    			<h3>Gallery</h3>
	    		</div>
	    				<?php $_smarty_tpl->tpl_vars["catchk"] = new Smarty_Variable("1", true, 0);?>
							<?php $_smarty_tpl->tpl_vars["cat"] = new Smarty_Variable('', true, 0);?>
							<?php
$_from = $_smarty_tpl->tpl_vars['gallery_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['gallery']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
$foreach_gallery_Sav = $_smarty_tpl->tpl_vars['gallery'];
?>
								<?php if ($_smarty_tpl->tpl_vars['gallery']->value['img_category'] != $_smarty_tpl->tpl_vars['cat']->value) {?>
									<?php $_smarty_tpl->tpl_vars["cat"] = new Smarty_Variable($_smarty_tpl->tpl_vars['gallery']->value['img_category'], true, 0);?>
									<?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
										</div>
									</div>
									<?php }?>
									<div class="row">	    		
										<div id="" class="col-sm-12" >
											<h5><?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_category'];?>
</h5>									
								<?php }?> 
								<a style="float:left;padding:1px;" href="gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_path'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['name'];?>
" data-dialog>
						      <img src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['name'];?>
">
						    </a>						  
							<?php
$_smarty_tpl->tpl_vars['gallery'] = $foreach_gallery_Sav;
}
if (!$_smarty_tpl->tpl_vars['gallery']->_loop) {
?>
								<div class="row">	    		
									<div id="" class="col-sm-12" >
										No image found.									
							<?php
}
?>	    
							</div>
						</div>
						<font color="deeppink">
						<div class="row">
							<div class="col-sm-12" >
								<a href="snapshot.php">All</a>
								<?php
$_from = $_smarty_tpl->tpl_vars['result_cat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
									|
									<?php if ($_GET['cat'] == $_smarty_tpl->tpl_vars['cat']->value['img_category']) {?>
										<?php echo $_smarty_tpl->tpl_vars['cat']->value['img_category'];?>

									<?php } else { ?>
									 <font color="deeppink"><a href="snapshot.php?cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value['img_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['img_category'];?>
</a></font>
									<?php }?>
								<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
							</div>
						</div>
						</font>
					<div id="blueimp-gallery-dialog" data-show="fade" data-hide="fade">
				    <!-- The gallery widget  -->
				    <div class="blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls">
			        <div class="slides"></div>
			        <a class="prev">‹</a>
			        <a class="next">›</a>
			        <a class="play-pause"></a>
				    </div>
					</div>
	    	</div>
	    </div>	    
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/south-street/jquery-ui.css" id="theme">
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="js/jquery.image-gallery.min.js"><?php echo '</script'; ?>
>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		  </div>
  	</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
<?php /* Smarty version 3.1.27, created on 2017-02-02 05:03:24
         compiled from "/home/yogabar/public_html/templates/default/blog_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1840047940589311fc5063d9_59030210%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97bbe2d7cb073b06fbda96b59cf9c5d96ffcf093' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/blog_detail.tpl',
      1 => 1485806566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840047940589311fc5063d9_59030210',
  'variables' => 
  array (
    'blog_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589311fc5c1230_10259069',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589311fc5c1230_10259069')) {
function content_589311fc5c1230_10259069 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1840047940589311fc5063d9_59030210';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">
	    <div id="animation" class="white-bg blog_div">
	    	<div class="container">	
	    			<div class="row">
	    				<div class="">
	    					<h2><?php echo $_smarty_tpl->tpl_vars['blog_rs']->value['name'];?>
 </h2>	    
	    				</div>
	    			</div>
	    		
	    		<div class="row">
	    			<div class="">	    	
	    				<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['blog_rs']->value['description'],'../','');?>

	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="">
	    				<a href="blog.php">Back to blog list</a>
	    			</div>
	    		</div>
	    	</div>
	    </div>
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
<?php /* Smarty version 3.1.27, created on 2017-01-31 01:32:48
         compiled from "/home/yogabar/public_html/dev/templates/default/blog_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214627147058903da0ec1d09_86179918%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4291945c1966cb94d5e5fe8bbcd4f2b5ec7e525b' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/blog_detail.tpl',
      1 => 1485847966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214627147058903da0ec1d09_86179918',
  'variables' => 
  array (
    'blog_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58903da0f3a4b3_63955193',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58903da0f3a4b3_63955193')) {
function content_58903da0f3a4b3_63955193 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/yogabar/public_html/dev/includes/smarty/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '214627147058903da0ec1d09_86179918';
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
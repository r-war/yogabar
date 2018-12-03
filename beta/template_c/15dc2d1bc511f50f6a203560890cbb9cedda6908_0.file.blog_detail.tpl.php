<?php /* Smarty version 3.1.27, created on 2015-10-25 09:31:21
         compiled from "/home/yogabar/public_html/beta/templates/default/blog_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:774741845562ce7b98a4c79_46542714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15dc2d1bc511f50f6a203560890cbb9cedda6908' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/blog_detail.tpl',
      1 => 1445710683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '774741845562ce7b98a4c79_46542714',
  'variables' => 
  array (
    'blog_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562ce7b99c34b0_52092235',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562ce7b99c34b0_52092235')) {
function content_562ce7b99c34b0_52092235 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/yogabar/public_html/beta/includes/smarty/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '774741845562ce7b98a4c79_46542714';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">
	    <div id="animation" class="white-bg">
	    	<div class="container">	
	    			<div class="row">
	    				<div class="">
	    					<h2><?php echo $_smarty_tpl->tpl_vars['blog_rs']->value['name'];?>
 </h2> <sub>created at</sub> <?php echo $_smarty_tpl->tpl_vars['blog_rs']->value['created_at'];?>
	    
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
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
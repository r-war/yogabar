<?php /* Smarty version 3.1.27, created on 2017-02-02 02:33:42
         compiled from "/home/yogabar/public_html/templates/default/blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2882584115892eee6be7765_20948035%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3069f3bab6c5f96db27db84696eee1b46b3bc5fe' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/blog.tpl',
      1 => 1485641870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2882584115892eee6be7765_20948035',
  'variables' => 
  array (
    'blog_rs' => 0,
    'blog' => 0,
    'paginate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5892eee6de9fb5_10353825',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5892eee6de9fb5_10353825')) {
function content_5892eee6de9fb5_10353825 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_paginate_prev')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/function.paginate_prev.php';
if (!is_callable('smarty_function_paginate_middle')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/function.paginate_middle.php';
if (!is_callable('smarty_function_paginate_next')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/function.paginate_next.php';

$_smarty_tpl->properties['nocache_hash'] = '2882584115892eee6be7765_20948035';
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
	    					<h2>Blogs</h2>
	    				</div>
	    			</div>    		
			    	<div class="row">
		        	<?php
$_from = $_smarty_tpl->tpl_vars['blog_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['blog']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
$foreach_blog_Sav = $_smarty_tpl->tpl_vars['blog'];
?>
							  <div class="col-sm-6">
							  	<a href="blog_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a> 
							  	<br/>
							  	<?php ob_start();
echo $_smarty_tpl->tpl_vars['blog']->value['description'];
$_tmp1=ob_get_clean();
echo smarty_modifier_truncate(smarty_modifier_replace($_tmp1,'../',''),600,"... <a href='blog_detail.php?id=".((string)$_smarty_tpl->tpl_vars['blog']->value['id'])."'>read more</a>",true);?>

							  </div>
							<?php
$_smarty_tpl->tpl_vars['blog'] = $foreach_blog_Sav;
}
if (!$_smarty_tpl->tpl_vars['blog']->_loop) {
?>							
								<div class="col-sm-12">No Records Found</div>						
							<?php
}
?>
						</div>
						<div class="row">
		    			<div class="col-sm-6">
		  					
								Showing <?php echo $_smarty_tpl->tpl_vars['paginate']->value['first'];?>
-<?php echo $_smarty_tpl->tpl_vars['paginate']->value['last'];?>
 out of <?php echo $_smarty_tpl->tpl_vars['paginate']->value['total'];?>
 displayed.
							</div>
							<div class="col-sm-6">
								
								Page: <?php echo smarty_function_paginate_prev(array(),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_middle(array('page_limit'=>"2"),$_smarty_tpl);?>
 <?php echo smarty_function_paginate_next(array(),$_smarty_tpl);?>

		  				</div>
						</div> 
					</div>
				</div>
	    </div>
		  <div class=" col-md-5 col-md-offset-6 soical-media">
		    <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		  </div>
  	</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
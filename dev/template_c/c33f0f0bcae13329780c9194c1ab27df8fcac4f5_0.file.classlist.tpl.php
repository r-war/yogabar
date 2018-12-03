<?php /* Smarty version 3.1.27, created on 2016-07-19 07:47:22
         compiled from "/home/yogabar/public_html/dev/templates/default/classlist.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:863298804578e215a2ded03_25369409%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c33f0f0bcae13329780c9194c1ab27df8fcac4f5' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/classlist.tpl',
      1 => 1468932439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '863298804578e215a2ded03_25369409',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578e215a346638_20869635',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578e215a346638_20869635')) {
function content_578e215a346638_20869635 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '863298804578e215a2ded03_25369409';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-8 col-md-offset-4">
	    <div id="animation" class="white-bg">  
	    	<div class="container">	
	    			<div class="row">
	    				<div class="col-md-12">
	    					<h2 style="font-size: 20px;">Class Descriptions</h2>
	    				</div>
	    			</div>    		
			    	<div class="row">
		        	
				 <div class="col-sm-12">


<?php echo '<script'; ?>
 src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"><?php echo '</script'; ?>
>

<healcode-widget data-type="class_lists" data-widget-partner="mb" data-widget-id="7c17464451b" data-widget-version="0.1"></healcode-widget>

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
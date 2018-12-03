<?php /* Smarty version 3.1.27, created on 2016-07-19 07:45:20
         compiled from "/home/yogabar/public_html/dev/templates/default/enrollment.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1583758301578e20e0621e79_19653367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2af03c331bd5acb50da6b8bb438156b53c5c48' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/enrollment.tpl',
      1 => 1468932317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1583758301578e20e0621e79_19653367',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578e20e0684607_41888374',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578e20e0684607_41888374')) {
function content_578e20e0684607_41888374 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1583758301578e20e0621e79_19653367';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-8 col-md-offset-4 ">
	    <div id="animation" class="white-bg" style="width:100%">  
	    	<div class="container">	
	    			<div class="row">
	    				<div class="col-lg-12">
	    					<h2 style="font-size: 20px;">Events & Workshops - Detail View</h2>
	    				</div>
	    			</div>    		
			    	<div class="row">
		        	
				 <div class="col-sm-12">


<?php echo '<script'; ?>
 src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"><?php echo '</script'; ?>
>

<healcode-widget data-type="enrollments" data-widget-partner="mb" data-widget-id="7c22108451b" data-widget-version="0.1"></healcode-widget>
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
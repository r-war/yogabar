<?php /* Smarty version 3.1.27, created on 2017-11-07 10:23:02
         compiled from "/home/yogabar/public_html/dev/templates/default/appointments.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8843858725a01dde682cf07_84989559%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96b4ef58e2b4269b8c13340381f2f2d65fa5bc54' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/appointments.tpl',
      1 => 1489084240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8843858725a01dde682cf07_84989559',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a01dde69d2473_93002496',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a01dde69d2473_93002496')) {
function content_5a01dde69d2473_93002496 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8843858725a01dde682cf07_84989559';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-8 col-md-offset-4">
	    <div  class="white-bg" style="width:100%;">  
	    	<div class="container">	
	    			<div class="row">
	    				<div class="col-lg-12">
	    					<h2 style="font-size: 20px; font-weight: normal;">Appointments</h2>
	    				</div>
	    			</div>    		
			    	<div class="row">
		        	
								 <div class="col-sm-12">
										<?php echo '<script'; ?>
 src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript" width="100%"><?php echo '</script'; ?>
>

										<healcode-widget data-type="appointments" data-widget-partner="mb" data-widget-id="7c17517451b" data-widget-version="0.1"></healcode-widget>

								</div>
					</div>

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
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
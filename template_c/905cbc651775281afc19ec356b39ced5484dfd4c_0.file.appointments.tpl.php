<?php /* Smarty version 3.1.27, created on 2018-10-27 05:32:43
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\appointments.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:58735bd3dc5b5a9467_27834406%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '905cbc651775281afc19ec356b39ced5484dfd4c' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\appointments.tpl',
      1 => 1489125639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58735bd3dc5b5a9467_27834406',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3dc5b641a03_01226803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3dc5b641a03_01226803')) {
function content_5bd3dc5b641a03_01226803 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '58735bd3dc5b5a9467_27834406';
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
<?php /* Smarty version 3.1.27, created on 2017-12-19 04:15:55
         compiled from "/home/yogabar/public_html/templates/default/schedule.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5795808485a38e6dbb5a543_40553554%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b076b0ae23963c07baaff6396b4dede8d0e4bf1e' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/schedule.tpl',
      1 => 1513678544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5795808485a38e6dbb5a543_40553554',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a38e6dbbc68e5_60949856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a38e6dbbc68e5_60949856')) {
function content_5a38e6dbbc68e5_60949856 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5795808485a38e6dbb5a543_40553554';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-8 col-md-offset-4">
	    <div class="white-bg" style="width:100%;">  
	    	<div class="container">	
	    			<div class="row">
	    				<div class="col-lg-12">
	    					<h2 style="font-size: 20px;">One Week Class Schedule</h2>
	    				</div>
	    			</div>    		
			    	<div class="row">
		        	
				 <div class="col-sm-12">


<?php echo '<script'; ?>
 src="https://widgets.healcode.com/javascripts/healcode.js" type="text/javascript"><?php echo '</script'; ?>
>

<healcode-widget data-type="schedules" data-widget-partner="mb" data-widget-id="7c30180451b" data-widget-version="0.1"></healcode-widget>
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
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
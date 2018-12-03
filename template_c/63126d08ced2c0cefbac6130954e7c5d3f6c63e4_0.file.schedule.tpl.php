<?php /* Smarty version 3.1.27, created on 2018-10-29 04:23:38
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\schedule.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:88855bd67d3a7dfd80_66189366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63126d08ced2c0cefbac6130954e7c5d3f6c63e4' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\schedule.tpl',
      1 => 1513678544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88855bd67d3a7dfd80_66189366',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd67d3a858f28_71049176',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd67d3a858f28_71049176')) {
function content_5bd67d3a858f28_71049176 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '88855bd67d3a7dfd80_66189366';
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
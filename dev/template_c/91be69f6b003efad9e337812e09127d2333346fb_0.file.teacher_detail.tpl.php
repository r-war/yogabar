<?php /* Smarty version 3.1.27, created on 2016-02-09 04:04:59
         compiled from "/home/yogabar/public_html/templates/default/teacher_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64341310256b9b9cbc58258_79833438%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91be69f6b003efad9e337812e09127d2333346fb' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/teacher_detail.tpl',
      1 => 1455012280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64341310256b9b9cbc58258_79833438',
  'variables' => 
  array (
    'teacher_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b9b9cbd13245_96117597',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b9b9cbd13245_96117597')) {
function content_56b9b9cbd13245_96117597 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '64341310256b9b9cbc58258_79833438';
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
	    					<h2><?php echo $_smarty_tpl->tpl_vars['teacher_rs']->value['name'];?>
 </h2> <!--<sub>created at</sub> <?php echo $_smarty_tpl->tpl_vars['teacher_rs']->value['created_at'];?>
	    -->
	    				</div>
	    			</div>
	    		
	    		<div class="row">
	    			<div class="">	    	
	    				<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['teacher_rs']->value['description'],'../','');?>

	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="">
	    				<a href="teacher.php">Back to Teacher Profile list</a>
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
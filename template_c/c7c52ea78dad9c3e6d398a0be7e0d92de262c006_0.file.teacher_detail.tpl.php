<?php /* Smarty version 3.1.27, created on 2018-10-27 06:20:03
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\teacher_detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24635bd3e773e12ba3_04396712%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7c52ea78dad9c3e6d398a0be7e0d92de262c006' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\teacher_detail.tpl',
      1 => 1485641320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24635bd3e773e12ba3_04396712',
  'variables' => 
  array (
    'teacher_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3e773e93a35_33050508',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3e773e93a35_33050508')) {
function content_5bd3e773e93a35_33050508 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp5\\htdocs\\yogabar\\includes\\smarty\\libs\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '24635bd3e773e12ba3_04396712';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">
	    <div  class="white-bg">
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
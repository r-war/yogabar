<?php /* Smarty version 3.1.27, created on 2015-10-13 04:52:37
         compiled from "/home/yogabar/public_html/beta/templates/default/admin/package_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1255410927561cd465622877_67012078%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7ea3122ee6c4b7b3617ce232a6fcb05c09508a' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/admin/package_edit.tpl',
      1 => 1444729460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255410927561cd465622877_67012078',
  'variables' => 
  array (
    'package_add' => 0,
    'package_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd465772e15_80385766',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd465772e15_80385766')) {
function content_561cd465772e15_80385766 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1255410927561cd465622877_67012078';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Package Edit</h2>	  
	    	<?php if (isset($_smarty_tpl->tpl_vars['package_add']->value)) {?>
		  	<div class="success" id="msg-flash">
		  		<?php echo $_smarty_tpl->tpl_vars['package_add']->value;?>

		  	</div>
		  	<br/>
		  	<?php }?>  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Name:</label>
						<input type="text" id="name" name="name" class="required" 
						value="<?php echo (($tmp = @$_POST['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['package_rs']->value['name'] : $tmp);?>
">
					</p>
					<p>
						<label for="txt_description">Price:</label>
						<input type="text" id="price" name="price" class="required" value="<?php echo (($tmp = @$_POST['price'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['package_rs']->value['price'] : $tmp);?>
">
					</p>	
					<p>
						<label for="image">Group Type:</label>
						<label for="group_type_1" style="font-weight:normal;">
							<input type="radio" id="group_type_1" name="group_type" value="1" <?php if (($_smarty_tpl->tpl_vars['package_rs']->value['group_type_id'] == 1)) {?> checked="checked"<?php }?>>
							Group Class
						</label>
						<label for="group_type_2" style="font-weight:normal;">
							<input type="radio" id="group_type_2" name="group_type" value="2" <?php if (($_smarty_tpl->tpl_vars['package_rs']->value['group_type_id'] == 2)) {?> checked="checked"<?php }?>>
							Private Class
						</label>
						<label for="group_type_3" style="font-weight:normal;">
							<input type="radio" id="group_type_3" name="group_type" value="3" <?php if (($_smarty_tpl->tpl_vars['package_rs']->value['group_type_id'] == 3)) {?> checked="checked"<?php }?>>
							Room Rental
						</label>

					</p>				
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="package.php">Back to package list</a>
					</p>
				</fieldset>
			</form>
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/cmxform.css">
	<?php echo '<script'; ?>
 src="../js/jquery-validation/lib/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/jquery-validation/dist/additional-methods.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	$(document).ready(function() {
			$("#myform").validate();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
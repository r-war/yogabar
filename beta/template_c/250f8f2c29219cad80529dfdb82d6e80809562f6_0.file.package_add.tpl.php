<?php /* Smarty version 3.1.27, created on 2015-10-13 04:52:15
         compiled from "/home/yogabar/public_html/beta/templates/default/admin/package_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:724779904561cd44f9fdc79_72870872%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250f8f2c29219cad80529dfdb82d6e80809562f6' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/admin/package_add.tpl',
      1 => 1444729416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724779904561cd44f9fdc79_72870872',
  'variables' => 
  array (
    'package_add' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd44fa80987_59203620',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd44fa80987_59203620')) {
function content_561cd44fa80987_59203620 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '724779904561cd44f9fdc79_72870872';
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
	    	<h2>Package Add</h2>	  
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
						<input type="text" id="name" name="name" class="required">
					</p>
					<p>
						<label for="txt_description">Price:</label>
						<input type="text" id="price" name="price" class="required">
					</p>	
					<p>
						<label for="image">Group Type:</label>
						<label for="group_type_1" style="font-weight:normal;">
							<input type="radio" id="group_type_1" name="group_type" value="1" checked="checked">
							Group Class
						</label>
						<label for="group_type_2" style="font-weight:normal;">
							<input type="radio" id="group_type_2" name="group_type" value="2">
							Private Class
						</label>
                                                <label for="group_type_3" style="font-weight:normal;">
							<input type="radio" id="group_type_3" name="group_type" value="3">
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
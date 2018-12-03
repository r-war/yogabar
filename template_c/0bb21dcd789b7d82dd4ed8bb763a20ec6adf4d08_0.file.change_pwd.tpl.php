<?php /* Smarty version 3.1.27, created on 2016-02-08 00:32:10
         compiled from "/home/yogabar/public_html/templates/default/admin/change_pwd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64334305956b8366a4fd242_74543725%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bb21dcd789b7d82dd4ed8bb763a20ec6adf4d08' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/change_pwd.tpl',
      1 => 1445238139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64334305956b8366a4fd242_74543725',
  'variables' => 
  array (
    'change_pwd_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b8366a9112c1_32353474',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b8366a9112c1_32353474')) {
function content_56b8366a9112c1_32353474 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64334305956b8366a4fd242_74543725';
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
	    	<h2>Change Password</h2>	  
	    	<?php if (isset($_smarty_tpl->tpl_vars['change_pwd_msg']->value)) {?>
		  	<div class="success" id="msg-flash">
		  		<?php echo $_smarty_tpl->tpl_vars['change_pwd_msg']->value;?>

		  	</div>
		  	<br/>
		  	<?php }?>  	
	    	<form class="cmxform" id="fileForm" enctype="multipart/form-data"  method="post" action="">
				<fieldset>					
					<p>
						<label for="title">New Password:</label>
						<input type="text" id="title" name="title" class="required">
					</p>					
					<p>
						<input class="submit" type="submit" value="Submit">
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
		$("#fileForm").validate();
	});
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
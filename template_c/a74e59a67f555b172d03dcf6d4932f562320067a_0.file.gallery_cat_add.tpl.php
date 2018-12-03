<?php /* Smarty version 3.1.27, created on 2018-11-07 08:43:43
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\gallery_cat_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:240265be297af3f9376_00580551%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a74e59a67f555b172d03dcf6d4932f562320067a' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\gallery_cat_add.tpl',
      1 => 1541575321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240265be297af3f9376_00580551',
  'variables' => 
  array (
    'gallery_add' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5be297af453108_26665471',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5be297af453108_26665471')) {
function content_5be297af453108_26665471 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '240265be297af3f9376_00580551';
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
	    	<h2>Gallery Category Add</h2>	  
	    	<?php if (isset($_smarty_tpl->tpl_vars['gallery_add']->value)) {?>
		  	<div class="success" id="msg-flash">
		  		<?php echo $_smarty_tpl->tpl_vars['gallery_add']->value;?>

		  	</div>
		  	<br/>
		  	<?php }?>  	
	    	<form class="cmxform" id="fileForm" enctype="multipart/form-data"  method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Title:</label>
						<input type="text" id="title" name="title" class="required">
					</p>				
					
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="gallery_cat.php">Back to Gallery category list</a>
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
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />   
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"><?php echo '</script'; ?>
>
	
	 <?php echo '<script'; ?>
 type='text/javascript'>//<![CDATA[
    $(window).load(function(){
    $("#category").autocomplete({
        source: "autosearch.php",
        minLength: 2,
        select: function(event, ui) {
            event.preventDefault();
            $("#category").val(ui.item.label);
            $("#selected-category").val(ui.item.label);
        },
        focus: function(event, ui) {
            event.preventDefault();
            $("#category").val(ui.item.label);
        }
    });
    });//]]> 
    <?php echo '</script'; ?>
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
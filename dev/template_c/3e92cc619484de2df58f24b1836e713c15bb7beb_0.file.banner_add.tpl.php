<?php /* Smarty version 3.1.27, created on 2017-01-30 03:05:58
         compiled from "/home/yogabar/public_html/dev/templates/default/admin/banner_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:580083371588f01f6e8d908_22029809%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e92cc619484de2df58f24b1836e713c15bb7beb' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/admin/banner_add.tpl',
      1 => 1485767156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '580083371588f01f6e8d908_22029809',
  'variables' => 
  array (
    'gallery_add' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588f01f6f0bd23_83050326',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588f01f6f0bd23_83050326')) {
function content_588f01f6f0bd23_83050326 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '580083371588f01f6e8d908_22029809';
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
	    	<h2>Banner Add</h2>	  
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
						<label for="image">Image:</label>
						<input type="file" id="image" name="image" class="required" accept="image/*">
					</p>					
					
					<p>
						<label for="title">Description</label>
						 <textarea  cols="30" rows="5" id="descr" name='descr'  ></textarea>
					</p>
                                        <p>
						<label for="title">Sub link URL</label>
						<input type="text" id="surl" name="surl" >
					</p>

					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="banner_edit.php">Back to Banner list</a>
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
?>

<?php }
}
?>
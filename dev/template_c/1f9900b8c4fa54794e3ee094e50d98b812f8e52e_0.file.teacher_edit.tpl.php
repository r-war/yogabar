<?php /* Smarty version 3.1.27, created on 2016-02-08 22:33:24
         compiled from "/home/yogabar/public_html/templates/default/admin/teacher_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205344254756b96c14b82736_13140579%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f9900b8c4fa54794e3ee094e50d98b812f8e52e' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/teacher_edit.tpl',
      1 => 1454958586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205344254756b96c14b82736_13140579',
  'variables' => 
  array (
    'teacher_add' => 0,
    'teacher_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b96c14db45f4_21471530',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b96c14db45f4_21471530')) {
function content_56b96c14db45f4_21471530 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205344254756b96c14b82736_13140579';
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
	    	<h2>Teacher Edit</h2>	  
	    	<?php if (isset($_smarty_tpl->tpl_vars['teacher_add']->value)) {?>
		  	<div class="success" id="msg-flash">
		  		<?php echo $_smarty_tpl->tpl_vars['teacher_add']->value;?>

		  	</div>
		  	<br/>
		  	<?php }?>  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Name:</label>
						<input type="text" id="title" name="title" value="<?php echo (($tmp = @$_POST['title'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['teacher_rs']->value['name'] : $tmp);?>
" class="required">
					</p>
					<p>
						<label for="txt_description">Description:</label>
						<textarea id="content" name="content"><?php echo (($tmp = @$_POST['content'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['teacher_rs']->value['description'] : $tmp);?>
</textarea>
					</p>	
					<p>
						<label for="image">Is Active:</label>
						<input type="checkbox" id="is_active" <?php if ($_smarty_tpl->tpl_vars['teacher_rs']->value['is_active'] == 1) {?>checked="checked"<?php }?> name="is_active">
					</p>				
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="teacher.php">Back to Teacher list</a>
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
 src="../js/tiny_mce/tiny_mce.js"><?php echo '</script'; ?>
>
	
<?php echo '<script'; ?>
>
	tinyMCE.init({
		mode: "textareas",
		theme : "advanced",
		width:550,
		height:400,
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks,jbimages",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,image,jbimages,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],
		relative_urls : false,
		// update validation status on change
		onchange_callback: function(editor) {
			tinyMCE.triggerSave();
			$("#" + editor.id).valid();
		}
	});
	$(function() {
		var validator = $("#myform").submit(function() {
			// update underlying textarea before submit validation
			tinyMCE.triggerSave();
		}).validate({
			ignore: "",
			rules: {
				title: "required",
				content: "required"
			},
			errorPlacement: function(label, element) {
				// position error label after generated textarea
				if (element.is("textarea")) {
					label.insertAfter(element.next());
				} else {
					label.insertAfter(element)
				}
			}
		});
		validator.focusInvalid = function() {
			// put focus on tinymce on submit validation
			if (this.settings.focusInvalid) {
				try {
					var toFocus = $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []);
					if (toFocus.is("textarea")) {
						tinyMCE.get(toFocus.attr("id")).focus();
					} else {
						toFocus.filter(":visible").focus();
					}
				} catch (e) {
					// ignore IE throwing errors when focusing hidden elements
				}
			}
		}
	})
	<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
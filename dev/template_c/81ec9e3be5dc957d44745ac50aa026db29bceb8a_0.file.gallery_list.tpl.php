<?php /* Smarty version 3.1.27, created on 2016-06-06 02:18:48
         compiled from "/home/yogabar/public_html/dev/templates/default/admin/gallery_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2137783881575523d89192b8_59316523%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81ec9e3be5dc957d44745ac50aa026db29bceb8a' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/admin/gallery_list.tpl',
      1 => 1444782096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2137783881575523d89192b8_59316523',
  'variables' => 
  array (
    'gallery_rs' => 0,
    'gallery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575523d89cb3b3_87964608',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575523d89cb3b3_87964608')) {
function content_575523d89cb3b3_87964608 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2137783881575523d89192b8_59316523';
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
	    	<h2>Gallery List</h2>
	    	<span style="float:right;"><a href="gallery_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="gallery_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Thumb</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
	            </tr>
		        </thead> 		       
        		<tbody>
            	<?php
$_from = $_smarty_tpl->tpl_vars['gallery_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['gallery']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
$foreach_gallery_Sav = $_smarty_tpl->tpl_vars['gallery'];
?> 
            	<tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['name'];?>
</td>
                <td><img src="../gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_path'];?>
" width="90" height="90"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_category'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['created_at'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['updated_at'];?>
</td>                
                <td><a href="gallery.php?id=<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id'];?>
" onclick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							<?php
$_smarty_tpl->tpl_vars['gallery'] = $foreach_gallery_Sav;
}
if (!$_smarty_tpl->tpl_vars['gallery']->_loop) {
?>
							<tr>
								<td colspan="5">No Records Found</td>
							</tr>
							<?php
}
?>
        		</tbody>
    				</table>
				</div> 
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.dataTables.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
	    $('#gallery_list').DataTable();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
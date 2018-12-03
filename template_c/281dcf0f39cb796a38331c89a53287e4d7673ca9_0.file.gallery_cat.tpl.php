<?php /* Smarty version 3.1.27, created on 2018-11-07 08:21:43
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\gallery_cat.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:193335be29287449197_64369915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '281dcf0f39cb796a38331c89a53287e4d7673ca9' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\gallery_cat.tpl',
      1 => 1541575299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193335be29287449197_64369915',
  'variables' => 
  array (
    'gallery_rs' => 0,
    'i' => 0,
    'gallery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5be2928749f0b0_76168280',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5be2928749f0b0_76168280')) {
function content_5be2928749f0b0_76168280 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '193335be29287449197_64369915';
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
	    	<span style="float:right;"><a href="gallery_cat_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="gallery_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>S/N</th>
                <th>name</th>
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
            	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            	<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['name_cat'];?>
</td>                
                <td><a href="gallery_cat.php?id=<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id'];?>
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
<?php /* Smarty version 3.1.27, created on 2015-10-13 04:52:09
         compiled from "/home/yogabar/public_html/beta/templates/default/admin/package.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1563639864561cd4494fe1d5_63464873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52782254576621858bb36c6008a4f4fff717e94b' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/admin/package.tpl',
      1 => 1444729929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1563639864561cd4494fe1d5_63464873',
  'variables' => 
  array (
    'package_rs' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd4495a08b1_97630896',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd4495a08b1_97630896')) {
function content_561cd4495a08b1_97630896 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1563639864561cd4494fe1d5_63464873';
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
	    	<h2>Package List</h2>
	    	<span style="float:right;"><a href="package_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="package_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Group Type</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
                <th></th>
	            </tr>
		        </thead> 		       
        		<tbody>
            	<?php
$_from = $_smarty_tpl->tpl_vars['package_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?> 
            	<tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</td>
                <td> <?php if ($_smarty_tpl->tpl_vars['package']->value['group_type_id'] == 1) {?> Group Class <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['group_type_id'] == 2) {?> Private Class <?php } else { ?> Room Rental <?php }?> </td>
                <td><?php echo $_smarty_tpl->tpl_vars['package']->value['created_at'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['package']->value['updated_at'];?>
</td>                
                <td><a href="package_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" >Edit</a></td>
                <td><a href="package.php?id=<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" onclick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							<?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
if (!$_smarty_tpl->tpl_vars['package']->_loop) {
?>
							<tr>
								<td colspan="6">No Records Found</td>
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
	    $('#package_list').DataTable();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
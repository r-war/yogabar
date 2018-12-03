<?php /* Smarty version 3.1.27, created on 2015-12-07 06:41:32
         compiled from "/home/yogabar/public_html/templates/default/admin/package.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13179223056657e7cc83a39_67719262%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1902267efe0071949038ca43ffbafa199129b9c1' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/package.tpl',
      1 => 1449492085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13179223056657e7cc83a39_67719262',
  'variables' => 
  array (
    'package_rs' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56657e7ccfd8b2_42575659',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56657e7ccfd8b2_42575659')) {
function content_56657e7ccfd8b2_42575659 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13179223056657e7cc83a39_67719262';
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
                <td> <?php if ($_smarty_tpl->tpl_vars['package']->value['group_type_id'] == 1) {?> Group Class <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['group_type_id'] == 2) {?> Private Class <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['group_type_id'] == 3) {?> Booking Studio <?php } else { ?> Year End Bundle <?php }?> </td>
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
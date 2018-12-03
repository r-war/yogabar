<?php /* Smarty version 3.1.27, created on 2018-10-27 05:35:08
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:94515bd3dcec7319a1_71710924%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a99be67b4c089cd3357ae833e477f2720fb30ea2' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\blog.tpl',
      1 => 1442828872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94515bd3dcec7319a1_71710924',
  'variables' => 
  array (
    'blog_rs' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3dcec80c5d7_05861139',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3dcec80c5d7_05861139')) {
function content_5bd3dcec80c5d7_05861139 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '94515bd3dcec7319a1_71710924';
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
	    	<h2>Blog List</h2>
	    	<span style="float:right;"><a href="blog_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="blog_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Is Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
                <th></th>
	            </tr>
		        </thead> 		       
        		<tbody>
            	<?php
$_from = $_smarty_tpl->tpl_vars['blog_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['blog']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
$foreach_blog_Sav = $_smarty_tpl->tpl_vars['blog'];
?> 
            	<tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['is_active'] == 1 ? "Yes" : "No";?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['created_at'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['updated_at'];?>
</td>                
                <td><a href="blog_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
" >Edit</a></td>
                <td><a href="blog.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
" onclick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							<?php
$_smarty_tpl->tpl_vars['blog'] = $foreach_blog_Sav;
}
if (!$_smarty_tpl->tpl_vars['blog']->_loop) {
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
	    $('#blog_list').DataTable();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
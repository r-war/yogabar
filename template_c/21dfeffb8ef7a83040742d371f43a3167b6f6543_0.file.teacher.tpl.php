<?php /* Smarty version 3.1.27, created on 2016-02-08 13:20:43
         compiled from "/home/yogabar/public_html/templates/default/admin/teacher.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:83641179456b8ea8b63c1c6_59752658%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21dfeffb8ef7a83040742d371f43a3167b6f6543' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/teacher.tpl',
      1 => 1454958585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83641179456b8ea8b63c1c6_59752658',
  'variables' => 
  array (
    'teacher_rs' => 0,
    'teacher' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b8ea8b727d15_02107565',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b8ea8b727d15_02107565')) {
function content_56b8ea8b727d15_02107565 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '83641179456b8ea8b63c1c6_59752658';
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
	    	<h2>Teacher Profile</h2>
	    	<span style="float:right;"><a href="teacher_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="teacher_list" class="display table" cellspacing="0" width="100%">
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
$_from = $_smarty_tpl->tpl_vars['teacher_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['teacher']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
$foreach_teacher_Sav = $_smarty_tpl->tpl_vars['teacher'];
?> 
            	<tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['teacher']->value['is_active'] == 1 ? "Yes" : "No";?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['teacher']->value['created_at'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['teacher']->value['updated_at'];?>
</td>                
                <td><a href="teacher_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
" >Edit</a></td>
                <td><a href="teacher.php?id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
" onClick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							<?php
$_smarty_tpl->tpl_vars['teacher'] = $foreach_teacher_Sav;
}
if (!$_smarty_tpl->tpl_vars['teacher']->_loop) {
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
	    $('#teacher_list').DataTable();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
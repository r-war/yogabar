<?php /* Smarty version 3.1.27, created on 2015-10-25 00:14:57
         compiled from "/home/yogabar/public_html/templates/default/admin/events.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:539170393562c65513c5d94_86229728%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bce48596da1e9bd4b1538f15c7b1b23c9ce89ae' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/events.tpl',
      1 => 1442868798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '539170393562c65513c5d94_86229728',
  'variables' => 
  array (
    'events_rs' => 0,
    'events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c65514537e2_46378389',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c65514537e2_46378389')) {
function content_562c65514537e2_46378389 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '539170393562c65513c5d94_86229728';
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
	    	<h2>Events List</h2>
	    	<span style="float:right;"><a href="events_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="events_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Date/Time</th>
                <th>Is Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th ></th>
                <th ></th>
	            </tr>
		        </thead> 		       
        		<tbody>
            	<?php
$_from = $_smarty_tpl->tpl_vars['events_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['events'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['events']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['events']->value) {
$_smarty_tpl->tpl_vars['events']->_loop = true;
$foreach_events_Sav = $_smarty_tpl->tpl_vars['events'];
?> 
            	<tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
</td>
							  <td><?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['events']->value['is_active'] == 1 ? "Yes" : "No";?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['events']->value['created_at'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['events']->value['updated_at'];?>
</td>                
                <td><a href="events_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
" >Edit</a></td>
                <td><a href="events.php?id=<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
" onclick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							<?php
$_smarty_tpl->tpl_vars['events'] = $foreach_events_Sav;
}
if (!$_smarty_tpl->tpl_vars['events']->_loop) {
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
	    $('#events_list').DataTable();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
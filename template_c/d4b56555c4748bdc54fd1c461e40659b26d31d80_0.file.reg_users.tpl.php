<?php /* Smarty version 3.1.27, created on 2017-02-01 23:48:11
         compiled from "/home/yogabar/public_html/templates/default/admin/reg_users.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5125971955892c81b4feaa8_16286693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4b56555c4748bdc54fd1c461e40659b26d31d80' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/reg_users.tpl',
      1 => 1483301506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5125971955892c81b4feaa8_16286693',
  'variables' => 
  array (
    'user_list' => 0,
    'userlist' => 0,
    'package_rs' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5892c81b5b8364_46680854',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5892c81b5b8364_46680854')) {
function content_5892c81b5b8364_46680854 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5125971955892c81b4feaa8_16286693';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg"> 
	<?php echo $_smarty_tpl->getSubTemplate ("admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container" >
	  <!-- Main component for a primary marketing message or call to action -->
	 <!-- <div class="col-md-3"></div>-->
	  <div class="col-md-12 ">  	
	    <div id="animation" class="white-bg" style="width:100%;">
	    	<h2>Users List</h2>
	    	<!--<span style="float:right;"><a href="package_add.php" id="Add">Add</a></span> -->
	    	<br />
	    	<div class="table-responsive">
				  <table id="users_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>mobile</th>
                <th>Card details</th>
                <th>Package details</th>
                <th>Action</th>
                <th>Mail Verification</th>
                 
              
	            </tr>
		        </thead> 		       
        		<tbody><tr>
<?php
$_from = $_smarty_tpl->tpl_vars['user_list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['userlist'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['userlist']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userlist']->value) {
$_smarty_tpl->tpl_vars['userlist']->_loop = true;
$foreach_userlist_Sav = $_smarty_tpl->tpl_vars['userlist'];
?> 
 <td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['user_name'];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['email'];?>
</td> 
  <td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['mobile_no'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['cardDtStr'];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['package_id'];?>
</td>
 <td><a href="reg_users.php<?php echo $_smarty_tpl->tpl_vars['userlist']->value['blkArg'];?>
" onclick="return confirm('Are You Sure?')"><?php if ($_smarty_tpl->tpl_vars['userlist']->value['blocked'] == 1) {?> Active  <?php } else { ?> Blocked <?php }?></a></td>
 <td> <?php if ($_smarty_tpl->tpl_vars['userlist']->value['active'] == 1) {?> Success  <?php } else { ?> Not yet <?php }?> </td> </tr>
<?php
$_smarty_tpl->tpl_vars['userlist'] = $foreach_userlist_Sav;
}
if (!$_smarty_tpl->tpl_vars['userlist']->_loop) {
?>
							<tr>
								<td colspan="6">No Records Found</td>
							</tr>
							<?php
}
?>
            	<!-- <?php
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
?> -->
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
	    $('#users_list').DataTable();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2017-03-23 14:14:35
         compiled from "/home/yogabar/public_html/templates/default/admin/coupon.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:38914232758d41e9b115fc0_76753000%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12cc80b0f2db03c3360d4ffa81aa133fa133d79f' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/coupon.tpl',
      1 => 1490296450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38914232758d41e9b115fc0_76753000',
  'variables' => 
  array (
    'coupon_rs' => 0,
    'coupon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d41e9b18a394_51370708',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d41e9b18a394_51370708')) {
function content_58d41e9b18a394_51370708 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '38914232758d41e9b115fc0_76753000';
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
	    	<h2>Coupon List</h2>
	    	<span style="float:right;"><a href="coupon_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="coupon_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Code</th>
                <th>Discount</th>
                <th>Coupon Valid From</th>
                <th>Coupon Valid From</th>
                <th>Edit</th>
                <th>Delete</th>
                 
               
	            </tr>
		        </thead> 		       
        		<tbody>
            	<?php
$_from = $_smarty_tpl->tpl_vars['coupon_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['coupon'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['coupon']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['coupon']->value) {
$_smarty_tpl->tpl_vars['coupon']->_loop = true;
$foreach_coupon_Sav = $_smarty_tpl->tpl_vars['coupon'];
?> 
            	<tr>
							  <td><?php echo $_smarty_tpl->tpl_vars['coupon']->value['code'];?>
</td>

 <td><?php echo $_smarty_tpl->tpl_vars['coupon']->value['coupon_from'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['coupon']->value['coupon_to'];?>
</td>

                <?php if ($_smarty_tpl->tpl_vars['coupon']->value['dis_type_id'] == 1) {?>
                 <td><?php echo $_smarty_tpl->tpl_vars['coupon']->value['discount'];?>
%</td>
                <?php } else { ?>
                  <td>$<?php echo $_smarty_tpl->tpl_vars['coupon']->value['discount'];?>
</td>
                <?php }?>
                
                
                               
                <td><a href="coupon_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['coupon']->value['id'];?>
" >Edit</a></td>
                <td><a href="coupon.php?id=<?php echo $_smarty_tpl->tpl_vars['coupon']->value['id'];?>
" onClick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							<?php
$_smarty_tpl->tpl_vars['coupon'] = $foreach_coupon_Sav;
}
if (!$_smarty_tpl->tpl_vars['coupon']->_loop) {
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
	    $('#coupon_list').DataTable();
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2017-09-20 05:44:25
         compiled from "/home/yogabar/public_html/dev/templates/default/admin/package.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:109626242659c246895b0b97_41883481%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '642823368cde3faed9c74ada456f0ead576970a8' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/admin/package.tpl',
      1 => 1487039292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109626242659c246895b0b97_41883481',
  'variables' => 
  array (
    'package_rs' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c24689713cb0_95731269',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c24689713cb0_95731269')) {
function content_59c24689713cb0_95731269 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109626242659c246895b0b97_41883481';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin" style='width:900px !important;'>
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
                 <th>Edit</th> 
                 <th>Delete</th>   
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
                <td><a  lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
' class='actdeact' ><?php if ($_smarty_tpl->tpl_vars['package']->value['active'] == 1) {?> Active <?php } else { ?> Deactive <?php }?> </a> </td> <td>  
<?php if ($_smarty_tpl->tpl_vars['package']->value['pak_Intervel_id'] == 2) {?>
<a href="package_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" >Edit</a>
        <?php }?>  </td>
    <td><?php if ($_smarty_tpl->tpl_vars['package']->value['pak_Intervel_id'] == 2) {?>
<a  lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
' class='actDel' >Delete</a>
        <?php }?>  </td>          
               <!-- <td><a href="package_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" >Edit</a></td>
                <td><a href="package.php?id=<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" onclick="return confirm('Are You Sure?')">Delete</a></td> -->
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
$("#package_list").on("click", ".actdeact", function() { 
//$( ".actdeact" ).on( "click", function() { 
     var ids=$(this).attr('lang') ;


$.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
	                data: $( "#myform" ).serialize()+"&id="+ids+"&mode=planActDeact",
	                success:function(data){
	                	
                             if(data)
                             {
                                alert("Changes made successfully");

                             }
                             else
                             {
                                alert("Try again");
                             }

                            location.href="package.php";
		             
	      		}
	        });


});

$("#package_list").on("click", ".actDel", function() { 

var ids=$(this).attr('lang');


var txt;
var r = confirm("Sure want to delete");
if (r == true) {
     
 


$.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
	                data: $( "#myform" ).serialize()+"&id="+ids+"&mode=planDel",
	                success:function(data){
	                	 
                             if(data==1)
                             {
                                alert("Package deleted successfully");

                             }
                             else
                             {
                                alert("Try again");
                             }

                            location.href="package.php";
		             
	      		}
	        })
}

});

 
		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
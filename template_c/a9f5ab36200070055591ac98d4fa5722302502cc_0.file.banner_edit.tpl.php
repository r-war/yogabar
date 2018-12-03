<?php /* Smarty version 3.1.27, created on 2018-10-27 05:35:32
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\banner_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214915bd3dd04f167b0_78843509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f5ab36200070055591ac98d4fa5722302502cc' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\banner_edit.tpl',
      1 => 1484118718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214915bd3dd04f167b0_78843509',
  'variables' => 
  array (
    'banner_rs' => 0,
    'gallery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3dd0508bd63_49168671',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3dd0508bd63_49168671')) {
function content_5bd3dd0508bd63_49168671 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '214915bd3dd04f167b0_78843509';
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
	    	<h2>Banner List</h2>
	    	<span style="float:right;"><a href="banner_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="gallery_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Title</th>
                <th>Thumb</th>
                <th>Description</th>
                <th>Link URL</th>
                <th>Mode</th>
                <th>Delete</th>
                 
	            </tr>
		        </thead> 		       
        		<tbody>
            	<?php
$_from = $_smarty_tpl->tpl_vars['banner_rs']->value;
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
							  <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['ban_title'];?>
</td>
                <td><img src="../gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['img_path'];?>
" width="90" height="90"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['bann_desc'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['gallery']->value['btn_link'];?>
</td>
                <td><a  lang='<?php echo $_smarty_tpl->tpl_vars['gallery']->value['ban_id'];?>
' class='actdeact' ><?php if ($_smarty_tpl->tpl_vars['gallery']->value['active'] == 1) {?> Active <?php } else { ?> Deactive <?php }?> </a></td>                
                <td><a href="banner_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['gallery']->value['ban_id'];?>
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

 
 $('#gallery_list').on( 'click', '.actdeact', function () {

     

var ids=$(this).attr('lang') ;


$.ajax({
	            	type: "POST",
	                url: "gallAddAjax.php",
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

                            location.href="banner_edit.php";
		             
	      		}
	        });


});



		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
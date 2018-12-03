<?php /* Smarty version 3.1.27, created on 2017-02-02 05:06:14
         compiled from "/home/yogabar/public_html/templates/default/card_details.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:34150979589312a6db8178_27186631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2734d92b9b26e35507de2d54c2602fbc5498de94' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/card_details.tpl',
      1 => 1486033462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34150979589312a6db8178_27186631',
  'variables' => 
  array (
    'userCardList' => 0,
    'userlist' => 0,
    'package_rs' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589312a6f3d239_82538277',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589312a6f3d239_82538277')) {
function content_589312a6f3d239_82538277 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '34150979589312a6db8178_27186631';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg" style="width:60%; float:right;">
       
    <h2>Card details </h2>
        <span style="float:right;"><span id='ErrMsg'></span>&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span>  &nbsp;<a href="card_dt_add.php" id="Add">Add</a></span>  
        <br />
        <div class="table-responsive">
          <table id="users_list" class="display table" cellspacing="0" width="100%">
            <thead>
              <tr>
                 <th>Name</th>
                 <th>Card No</th>
                  <th>Card Expired On</th>
                <!--<th>Customer Id </th> -->
                 <!-- <th>Edit </th>
                   <th>Delete </th><span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span>  -->
               
              </tr>
            </thead>           
            <tbody><tr>
<?php
$_from = $_smarty_tpl->tpl_vars['userCardList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['userlist'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['userlist']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userlist']->value) {
$_smarty_tpl->tpl_vars['userlist']->_loop = true;
$foreach_userlist_Sav = $_smarty_tpl->tpl_vars['userlist'];
?> 
  
 <td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['holder_name'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['cardDtStr'];?>
</td> 
<td><?php echo $_smarty_tpl->tpl_vars['userlist']->value['expr_date'];?>
</td> 

<!--<td> <?php if ($_smarty_tpl->tpl_vars['userlist']->value['active'] == 1) {?> Active  <?php } else { ?> Deactive <?php }?> </td> --> 
 <!--<td><a href="card_dt_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['userlist']->value['c_id'];?>
">Edit</a></td> -->
 <td><input type='button' class='btn btn-default center-block delCls' lang='<?php echo $_smarty_tpl->tpl_vars['userlist']->value['tk_id'];?>
' name='del_<?php echo $_smarty_tpl->tpl_vars['userlist']->value['tk_id'];?>
'  id='del_l<?php echo $_smarty_tpl->tpl_vars['userlist']->value['tk_id'];?>
' value='Delete'>   </td>  
  </tr>
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
      <div class=" col-md-6 col-md-offset-4 soical-media">
        <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>

  </div>

 <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type="text/javascript" src="../web/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
		    

    $(document).ready(function() { 
  $('#ErrMsg').html("");
  $(".delCls").click(function () { 

	var r = confirm("Are sure ");
	if (r == true) 
	{
         $('#ldimg').show();
         var Dels=$(this).attr('lang');

         $.ajax({
	type: "POST",
	url: "frntdelAjax.php",
	data: $("#frmsub").serialize()+"&mode=CardDel&ids="+Dels,
	dataType: 'HTML', 
	success:function(data){
          $('#ldimg').hide();
          if(data==1)
          {
              $('#ErrMsg').html("Data deleted successfully");

              setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                          location.href='card_details.php'; 
                             
             });
             }, 2000);

              
          }
          else if(data==0)
          {
              $('#ErrMsg').html("Session out");
               setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                          location.href='logout.php';
                             
             });
             }, 2000);
              
          }
          else
          {
               $('#ErrMsg').html("No data found");
               setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                          location.href='card_details.php'; 
                             
             });
             }, 2000);

          }       
  
	 
	}
	});

        
           


	    
	} 
	else
	{
	    
	}

 });


   });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
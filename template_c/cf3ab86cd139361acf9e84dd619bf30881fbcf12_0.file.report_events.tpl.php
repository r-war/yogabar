<?php /* Smarty version 3.1.27, created on 2018-11-02 09:19:31
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\report_events.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:253355bdc0893a2d9a3_79767280%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3ab86cd139361acf9e84dd619bf30881fbcf12' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\report_events.tpl',
      1 => 1520327132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253355bdc0893a2d9a3_79767280',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bdc0893ad5941_21752846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bdc0893ad5941_21752846')) {
function content_5bdc0893ad5941_21752846 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '253355bdc0893a2d9a3_79767280';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container-fluid">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Events Registration/Subscription List</h2>
	    	<!--<span style="float:right;"><a href="package_add.php" id="Add">Add</a></span> -->
	    	<br />
	    	<div class="table-responsive">
                   <form action='event_sub.php' name='reFrm' method='post' id='reFrm' >
				  <table id="package_list"  class="display table" cellspacing="0" width="80%">
                                  <tr> <td>From date </td> <td> <p><input type="text" autocomplete="off" id="frmDt" name='frmDt' /></p> </td> </tr>             

 <tr> <td>To date </td> <td> <p><input type="text"  id="toDt" autocomplete="off" name='toDt' /></p> </td> </tr>  
 <tr><td>Event type </td> <td><select id='catType' name='catType'> <option value="1" >Workshop</option><option value="2" >Retreat</option> </select> </td> </tr>               
  <tr> <td align='center' colspan='2'> <button type="submit" id='subBtn' class='subbtncls'   
                         > Get Report</button>   </td> </tr>
			          <table>
</form>
				</div> 
			</div>	   
  	</div>
	</div> 
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<!--<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.dataTables.js"><?php echo '</script'; ?>
> -->

      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    
    <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.9.1.js"><?php echo '</script'; ?>
>
   
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"><?php echo '</script'; ?>
>

 
	<?php echo '<script'; ?>
 src="../js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {

 $( "#frmDt" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd-mm-yy',
     showOn: "button",
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                 
      onSelect: function(selected) {
          $("#toDt").datepicker("option","minDate", selected)
        }
    });

$( "#toDt" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd-mm-yy',
showOn: "button",
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                 
    });
	     


 

 $("#subBtn").click(function(event) {  
                  
 

var frmv=$('#frmDt').val() ;
var tov=$('#toDt').val() ;
if( frmv !=""  && tov !="" )
{
  $('#reFrm').submit();
}
else
{ event.preventDefault();
 alert("From and to date are not empty");

}

 

 

    });

//

		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
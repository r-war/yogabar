<?php /* Smarty version 3.1.27, created on 2017-03-23 13:58:30
         compiled from "/home/yogabar/public_html/dev/templates/default/admin/coupon_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184541042858d41ad7037495_75289361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c440f3690865b22ffc75d43f36c37eacac07fb2' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/admin/coupon_add.tpl',
      1 => 1490295290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184541042858d41ad7037495_75289361',
  'variables' => 
  array (
    'coupon_add' => 0,
    'discount_type' => 0,
    'discountTyp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d41ad7153b87_98566628',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d41ad7153b87_98566628')) {
function content_58d41ad7153b87_98566628 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184541042858d41ad7037495_75289361';
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
	    	<h2>Coupon Add</h2>	  
	    	<?php if (isset($_smarty_tpl->tpl_vars['coupon_add']->value)) {?>
		  	<div class="success" id="msg-flash">
		  		<?php echo $_smarty_tpl->tpl_vars['coupon_add']->value;?>

		  	</div>
		  	<br/>
		  	<?php }?>  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Coupon Code:</label>
						<input type="text" id="name" name="name" class="required">
					</p>

                                       <p>
					<label for="title">Discount type:</label>
                                        <select id='distype' name='distype' class="required" >
                                        <option value="" >--Select discount type-- </option>
					<?php
$_from = $_smarty_tpl->tpl_vars['discount_type']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['discountTyp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['discountTyp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['discountTyp']->value) {
$_smarty_tpl->tpl_vars['discountTyp']->_loop = true;
$foreach_discountTyp_Sav = $_smarty_tpl->tpl_vars['discountTyp'];
?> 
                                         <option value=" <?php echo $_smarty_tpl->tpl_vars['discountTyp']->value['dis_type_id'];?>
 " ><?php echo $_smarty_tpl->tpl_vars['discountTyp']->value['discount_type'];?>
</option> 

                                        <?php
$_smarty_tpl->tpl_vars['discountTyp'] = $foreach_discountTyp_Sav;
}
?>
                                        </select>
					</p>
                                       

					<p>
						<label for="discount">Coupon Discount:</label>
			                        <input type="text" id="discount" name="discount" class="required">
					</p>

					<p>
						<label for="discount">Coupon Valid From Date:</label>
			                       <input type="text" autocomplete="off" id="frmDt" class="required" name='frmDt' />
					</p>

					<p>
						<label for="discount">Coupon Valid End Date:</label>
			                         <input type="text"  id="toDt" autocomplete="off" class="required" name='toDt' />
					</p>	
						
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="coupon.php">Back to Coupon list</a>
					</p>
				</fieldset>
			</form>
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/cmxform.css">
	<?php echo '<script'; ?>
 src="../js/jquery-validation/lib/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/jquery-validation/dist/additional-methods.js"><?php echo '</script'; ?>
>


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
>
	$(document).ready(function() {
			$("#myform").validate();



 

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
	     

		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
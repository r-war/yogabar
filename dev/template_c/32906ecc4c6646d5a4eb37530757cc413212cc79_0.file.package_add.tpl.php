<?php /* Smarty version 3.1.27, created on 2017-09-20 05:44:48
         compiled from "/home/yogabar/public_html/dev/templates/default/admin/package_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170730848159c246a1029f98_74277911%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32906ecc4c6646d5a4eb37530757cc413212cc79' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/admin/package_add.tpl',
      1 => 1485998434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170730848159c246a1029f98_74277911',
  'variables' => 
  array (
    'package_add' => 0,
    'PushSelecVal' => 0,
    'TotMnt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c246a117f618_39600599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c246a117f618_39600599')) {
function content_59c246a117f618_39600599 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170730848159c246a1029f98_74277911';
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
	    	<h2>Package Add</h2>	  
	    	<?php if (isset($_smarty_tpl->tpl_vars['package_add']->value)) {?>
		  	<div class="success" id="msg-flash">
		  		<?php echo $_smarty_tpl->tpl_vars['package_add']->value;?>

		  	</div>
		  	<br/>
		  	<?php }?>  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>
				    <p>
						<label for="title">Package ID*:</label>
						<input type="text" id="pid" name="pid" class="required">
					</p>					
					<p>
						<label for="title">Package Name*:</label>
						<input type="text" id="name" name="name" class="required">
					</p>
					<p>
						<label for="txt_description">Price*:</label>
						<input type="text" id="price" name="price" class="required">
					</p>
					<p>
                      <label for="txt_description">Intervel Type*:</label>
                          <select id='selIntr' name='selIntr' > 
 				<?php echo $_smarty_tpl->tpl_vars['PushSelecVal']->value;?>

                          
                        </select><select id='totMon' name='totMon' > 
                            <?php echo $_smarty_tpl->tpl_vars['TotMnt']->value;?>

                             </select>
                           
					</p>

                                  <p>
 			 

				 	
					<p>
						<label for="image">Group Type:</label>
						<label for="group_type_1" style="font-weight:normal;">
							<input type="radio" id="group_type_1" name="group_type" value="1" checked="checked">
							Group Class
						</label>
						<label for="group_type_2" style="font-weight:normal;">
							<input type="radio" id="group_type_2" name="group_type" value="2">
							Private Class
						</label>
                                                <label for="group_type_3" style="font-weight:normal;">
							<input type="radio" id="group_type_3" name="group_type" value="3">
							Booking Studio
						</label>
						
						   <label for="group_type_4" style="font-weight:normal;">
							<input type="radio" id="group_type_4" name="group_type" value="4">
							Promotion Package
						   </label>
						

						</label>
					</p>				
					<p>
						<input class="submit" type="submit" value="Submit"> &nbsp;<span id='ldimg' style='display:none;'><image src='../images/loadingImg.gif'></span>
					</p>
					<p>
						<a href="package.php">Back to package list</a>
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
	<?php echo '<script'; ?>
>
	$(document).ready(function() {
$('#totMon').val("");
$ /* 
package_add.php
var options = $("#sel_dept");
				options.empty();
				options.append($("<option />").val("0").text("--Select--"));
				$.each(data, function() {
				options.append($("<option />").val(this.dept_id).text(this.deptname));
				});
*/

$("#selIntr").change(function() {
	var options = $("#totMon"); 
	var getVal=$('#selIntr').val();
	options.empty();     
	options.append($("<option />").val("").text("---No of Month---"));
	if(getVal==2)
	{
		options.append($("<option />").val("1").text("1"));
		$("#totMon").val(1);

	}
        else if(getVal==1)
        {
          for(var i=2; i<=12; i++)
          {
             options.append($("<option />").val(i).text(i));
          }

        }
});
			 
$("#myform").validate({
    
        
        rules: {
            pid: "required",
            name:"required",
            price:{
                required: true,
                number: true,
            },
            selIntr:"required",
            totMon:{
                required: true,
                
            },

            
            
        },
        
        
        messages: {
            pid: "Enter Package ID",
            name:"Please enter Package Name",
            price:{

            	 required: "Enter Package Price",
                 number:"Please enter Digit only",
            	},
            selIntr:"Select Intervel ",
            totMon:{

            	 required: "Select Total Number of Month",
                  
            	},  
            
             
            
        },
        
        submitHandler: function(form) {
        	$('#ldimg').show();
           $.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
	                data: $( "#myform" ).serialize()+"&mode=planAdd",
	                success:function(data){

  
	                	$('#ldimg').hide();
	                	var SpData=data.split("#$#");
	                	if(SpData[0]==1)
	                	{
                              alert(SpData[1]);
                             $("#pid,#name,#price,#selIntr,#totMon").val("");
                             
	                	}
	                	else if(SpData[0]==2)
	                	{
                             alert(SpData[1]);
                             
	                	}
	                	else
	                	{

                          alert("Please try later")
	                	}
		             
	      		}
	        });
        

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
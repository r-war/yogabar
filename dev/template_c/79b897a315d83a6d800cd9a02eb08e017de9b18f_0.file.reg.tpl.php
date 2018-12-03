<?php /* Smarty version 3.1.27, created on 2017-01-02 01:08:19
         compiled from "/home/yogabar/public_html/dev/templates/default/reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19951414365869fc6333f077_45176635%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b897a315d83a6d800cd9a02eb08e017de9b18f' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/reg.tpl',
      1 => 1483340413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19951414365869fc6333f077_45176635',
  'variables' => 
  array (
    'contact_post' => 0,
    'contact_post_err' => 0,
    'name' => 0,
    'email' => 0,
    'err_recaptcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5869fc63431a23_75029364',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5869fc63431a23_75029364')) {
function content_5869fc63431a23_75029364 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19951414365869fc6333f077_45176635';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div id="animation" class="white-bg" style="width:100%;">
       <!-- <div class="col-md-6 contact">
          <header>Address </header>
          <address>
            <h4>Far east shopping center, </h4>
            <h4>#16-01,545, orchard road, </h4>
            <h4>Singapore – 238883</h4>
            <h4>info@yogabar.sg</h4>
          </address>
          <figure><img src="images/img_location.png" alt="location" class="img-responsive"/></figure>
          For Marketing related Enquries, Please contact: marketing@yogabar.sg
        </div> -->
        <div class="col-md-6 contact">
          <header>Registration Form : </header>
          <?php if (isset($_smarty_tpl->tpl_vars['contact_post']->value)) {?>            
            <p style="color:green"><?php echo $_smarty_tpl->tpl_vars['contact_post']->value;?>
</p>
          <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['contact_post_err']->value)) {?>            
            <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['contact_post_err']->value;?>
</p>
          <?php }?>


<form method="post" id="loginForm" name="loginForm" action=''>

<p>
              <input type="text" autofocus  name="uname"   value='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' placeholder="Name" class="form-control1" id="uname">
            </p>


<p>
              <input type="email" value='<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
' required  autofocus  name="uemail" size='20' placeholder="Email" class="form-control1" id="uemail">
            </p>

<p>
              <input type="password" autofocus required  name="password" size='20' placeholder="Password" class="form-control1" id="password">
            </p> 

<p>
              <input type="password" autofocus required  name="confirmpassword" size='20' placeholder="Re-Password" class="form-control1" id="confirmpassword">
            </p> 



<p><input tabindex="3" type="button" value="Submit" onClick="validatePassword();">  &nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span>  </p>

<p><span id='errmsg'> </span> </p>
  <!--<table cellpadding="0" border="1">
 <p>
    <td>Password</td>
    <td><input tabindex="1" size="40" type="text" name="uname" id="uname"/></td>
   </p> 

<tr>
    <td>Password</td>
    <td><input tabindex="1" size="40" type="email" name="uemail" id="uemail"/></td>
   </tr>
 
   <tr>
    <td>Password</td>
    <td><input tabindex="1" size="40" type="password" name="password" id="password"/></td>
   </tr>
   <tr>
    <td>Confirm Password</td>
    <td><input tabindex="1" size="40" type="password" name="confirmpassword" id="confirmpassword"/></td>
   </tr>
   <tr>
    <td colspan="2" align="center"><input tabindex="3" type="button" value="Submit" onClick="validatePassword();"/></td>     
   </tr>
  </table>    
 </form> -->
         <!-- <form method="post" id="myform" name="myform" action="">
 


 <p>
              <input type="text" autofocus  name="uname"   value='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' placeholder="Name" class="form-control1" id="uname">
            </p>

            
            <p>
              <input type="email" value='<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
' required  autofocus  name="email" size='25' placeholder="Email" class="form-control1" id="inputEmail">
            </p>

  <p>
              <input type="password" autofocus required  name="pass" size='25' placeholder="Password" class="form-control1" id="pass">
            </p> 

 <p>
              <input type="password" autofocus required  name="repass" size='20' placeholder="Re-Password" class="form-control1" id="repass">
            </p> 

<!--<p>
              <input type="password"  name="repass"     id="rePass">
            </p> -->

          <!--  <p>
              <input type="tel" autofocus  name="phone"  placeholder="Phone" class="form-control" id="inputPhone">
            </p>
            <p>
              <textarea placeholder="Message" autofocus required class="form-control" name="message" id="message" rows="6"></textarea> -->
            <!--</p>
            <?php if (isset($_smarty_tpl->tpl_vars['err_recaptcha']->value)) {?>            
              <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['err_recaptcha']->value;?>
</p>
            <?php }?>
            <p><div style="width:100%;" class="g-recaptcha" data-sitekey="6LeqZwwTAAAAAELTuYPJxubR_YkApD5zS9eCRfpk"></div></p> -->
            <!--<p class="pull-left">
             <input type="submit" id='frmSubmit' name='frmSubmit' class="btn btn-default" value="Submit">
            </p> -->
          </form>
          
        </div>
      </div>
      <div class=" col-md-6 col-md-offset-4 soical-media">
        <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>

  </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


 

 <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/cmxform.css">
	<?php echo '<script'; ?>
 src="js/jquery-validation/lib/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery-validation/dist/additional-methods.js"><?php echo '</script'; ?>
> 


<!--<?php echo '<script'; ?>
 type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"><?php echo '</script'; ?>
> -->
 <?php echo '<script'; ?>
>

function validatePassword(){ $('#errmsg').html("");
 var validator = $("#loginForm").validate({
  rules: { 
   uname :"required", 
uemail:{
   		required: true,
		email: true

              },
                    
   password:{
   		required: true,
		minlength: 6

              },
   confirmpassword:{
    equalTo: "#password"
      }  
     },                             
     messages: {
       uname :"Enter the name",
uemail:{

            	 required : "Please enter email id ",
                 email : "Please enter valid email id ",
            	},

password:{

            	 required : "Please enter password ",
                 minlength : "Password must be at least 6 characters",
            	},
        
      confirmpassword :" Enter Confirm Password Same as Password"
     }
 });
 if(validator.form()){
   //$('#loginForm').submit();
$('#errmsg').html("");
$('#ldimg').show();
$.ajax({
	            	type: "POST",
	                url: "registerAjx.php",
	                data: $( "#loginForm" ).serialize()+"&mode=addReg",
	                success:function(data){
$('#ldimg').hide();

    if(data==0)
    {
   $('#errmsg').html("Email id already exists");
   }else if(data==1)
    {
        $('#uname,#uemail,#password,#confirmpassword').val("");
       $('#errmsg').html("<font color='green'>Please check your mail id</font>");

   }
   else if(data==2)
  {
      $('#errmsg').html("<font color='red'>Sending E-mail faild, try again</font>");

   }
   else
   {
  $('#errmsg').html("<font color='red'>Please try again</font>");

   }
 
	                	 
		             
	      		}
	        });


 }
}

 <?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	$(document).ready(function() {



/** $("#myform").validate({
    rules: {
        pass: {
            required: true,
            minlength: 5
        },
       rePass: {
            required: true,
            minlength: 5,
            equalTo: "#pass",
        }
    },
    messages: {
        pass: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        },
        rePass: {
            required: "Please provide a passwordxx",
            minlength: "Your password must be at least 5 characters long",
            equalTo: "Please enter the same password as above"
        }
    }
});
 **/

/*			 
$("#myform").validate({
    
        
        rules: {
            uname: { required:true, minlength : 6
},
            inputEmail:{
   		required: true,
		email: true

              },
            inputrePass:{
               
                minlength: 6,
            } 
           

            
            
        },
        
        
        messages: {
             uname:{

            	 required: "Please enter Package Price",
                 minlength:"minimum six letters must",
            	},
            inputEmail:{

            	 required: "Please enter email id ",
                 email:"Please enter valid email id ",
            	},
            inputrePass:{

            	 
                 minlength:"minimum six letters must",
            	} 
            
             
            
        },
        
        submitHandler: function(form) { alert(1);
        	$('#ldimg').show();
           $.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
	                data: $( "#myformzzzzzzzzzzzzzzzz" ).serialize()+"&mode=planAdd",
	                success:function(data){

 
	                	$('#ldimg').hide();
	                	var SpData=data.split("#$#");
	                	if(SpData[0]==1)
	                	{
                             alert(SpData[1]);
                             $("#pid,#name,#price,#selIntr").val("");
                             
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
    }); */

 



		});


	<?php echo '</script'; ?>
>
<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2017-03-09 02:00:36
         compiled from "/home/yogabar/public_html/templates/default/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7573945258c10ba4d80669_79526987%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1abc05d9ba98f51ce40e2d8c7f44cebbe9e3cb4b' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/login.tpl',
      1 => 1489046435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7573945258c10ba4d80669_79526987',
  'variables' => 
  array (
    'name' => 0,
    'email' => 0,
    'contact_post' => 0,
    'contact_post_err' => 0,
    'Loginemail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c10ba4f3db69_32020703',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c10ba4f3db69_32020703')) {
function content_58c10ba4f3db69_32020703 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7573945258c10ba4d80669_79526987';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div  class="white-bg" style="width:100%;">
        <div class="frm_log contact">
          <div class="frm_head">Registration</div>
         <form method="post" id="loginForm" name="loginForm" action=''>

<p>
              <input type="text" autofocus  name="uname"   value='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' placeholder="Name" class="form-control" id="uname">
            </p>


<p>
              <input type="email" value='<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
' required  autofocus  name="uemail" size='20' placeholder="Email" class="form-control" id="uemail">
            </p>

<p>
              <input type="password" autofocus required  name="password" size='20' placeholder="Password" class="form-control" id="password">
            </p> 

<p>
              <input type="password" autofocus required  name="confirmpassword" size='20' placeholder="Re-Password" class="form-control" id="confirmpassword">
            </p> 

<span style="float: left;margin-top: 7px;margin-right:10px;">CAPTCHA Code:<img src="captcha.php" border="0" alt="CAPTCHA!" id="captcha" style='padding-top:0px;border: 1px solid '></span>
<a href="#" id="new"><img src="./images/reload.png" style="width: 44px;margin-left:10px;" /></a>
 <br>
 
<p><input type="text" autofocus required  name="captcha1" size='20' placeholder="Captcha" class="form-control" id="captcha1"> </p>
 



<p><input tabindex="3" type="button" value="Registration" class="btn btn-default" onClick="validatePassword();">  &nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span>  </p>

<p><span id='errmsg'> </span> </p>
</form>
        </div>  
        <div class="frm_log log_frm contact">
            <div class="frm_head">Login Form </div>
          <?php if (isset($_smarty_tpl->tpl_vars['contact_post']->value)) {?>            
            <p style="color:green"><?php echo $_smarty_tpl->tpl_vars['contact_post']->value;?>
</p>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['contact_post_err']->value)) {?>            
            <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['contact_post_err']->value;?>
</p>
          <?php }?>
           <form method="post" action="">
             
            <p>
              <input type="email" autofocus required name="email" size='25' placeholder="Email" value='<?php echo $_smarty_tpl->tpl_vars['Loginemail']->value;?>
' class="form-control" id="inputEmail">
            </p>

<p>
              <input type="password" autofocus required name="pass" size='25' placeholder="Password" class="form-control" id="inputPass">
            </p>
           
             
            <p class="pull-left">
              <input type="submit" id='frmSubmit' name='frmSubmit' class="btn btn-default" value="Submit">
            </p>
          </form>  
          
        </div>
      </div>
      <div class=" centra soical-media">
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
      },
 captcha1:"required"   
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
     },
 captcha1:"Enter Captcha code"
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
     $("#captcha").attr("src","captcha.php?_="+((new Date()).getTime()));
 $('#captcha1').val("");
$('#ldimg').hide();
    if(data==4)
    {
$('#errmsg').html("Invalid captcha try again");

    }
    else if(data==0)
    {
   $('#errmsg').html("Email id already exists");
   }else if(data==1)
    {
        $('#uname,#uemail,#password,#confirmpassword').val("");
       $('#errmsg').html("<font color='green'>Please check your mail id for activate your account</font>");

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

$(document).ready(function(){  
$("#new").click(function() {   
$("#captcha").attr("src", "captcha.php?"+Math.random());
});    
});

 <?php echo '</script'; ?>
>
<?php }
}
?>
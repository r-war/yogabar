{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div  class="white-bg" style="width:100%;">
        <div class="frm_log contact">
          <div class="frm_head">Registration</div>
         <form method="post" id="loginForm" name="loginForm" action=''>

<p>
              <input type="text" autofocus  name="uname"   value='{$name}' placeholder="Name" class="form-control" id="uname">
            </p>


<p>
              <input type="email" value='{$email}' required  autofocus  name="uemail" size='20' placeholder="Email" class="form-control" id="uemail">
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
          {if isset($contact_post) }            
            <p style="color:green">{$contact_post}</p>
          {/if}

          {if isset($contact_post_err) }            
            <p style="color:red">{$contact_post_err}</p>
          {/if}
           <form method="post" action="">
             
            <p>
              <input type="email" autofocus required name="email" size='25' placeholder="Email" value='{$Loginemail}' class="form-control" id="inputEmail">
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
      <div class=" col-md-6 col-md-offset-5 soical-media">
        {include file="social.tpl"}
      </div>

  </div>
{include file="footer-no-bounce.tpl"}

<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/cmxform.css">
	<script src="js/jquery-validation/lib/jquery.js"></script>
	<script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="js/jquery-validation/dist/additional-methods.js"></script> 

<script>

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

 </script>

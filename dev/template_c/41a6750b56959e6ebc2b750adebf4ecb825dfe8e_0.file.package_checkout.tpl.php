<?php /* Smarty version 3.1.27, created on 2017-03-24 04:08:14
         compiled from "/home/yogabar/public_html/dev/templates/default/package_checkout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:194990494258d4e1fe4893f2_11010673%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a6750b56959e6ebc2b750adebf4ecb825dfe8e' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/package_checkout.tpl',
      1 => 1490345720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194990494258d4e1fe4893f2_11010673',
  'variables' => 
  array (
    'getAllSubunSubList' => 0,
    'package' => 0,
    'card_dt' => 0,
    'card_dtls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d4e1fe64c362_96841717',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d4e1fe64c362_96841717')) {
function content_58d4e1fe64c362_96841717 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194990494258d4e1fe4893f2_11010673';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>



	  <div class="col-md-7 ">
	    <div  style="float:left;width:100%;position:relative;padding-top:70px;">
	      <form   id='packFrmC' name="packFrmC" method="post" >

                         					
         


<div class="package2">
    <div class="stripe">
    </div>
   <div class="pheader2">
       <h4 class="text-center">Package Pay/Subscription</h4>
   </div>
<div class="pbody">
 

      <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?> 

   <input type='hidden' name='tblrow' id='tblrow'  value="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
">
  
       <p>
           
           Package: <?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>

       </p>

       
        <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>
       <div class="cards">
            <select id='cardDt' name='cardDt' > 
                                         <option selected='true' value="0">--Select Card--</option>
                                          <?php
$_from = $_smarty_tpl->tpl_vars['card_dt']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['card_dtls'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['card_dtls']->_loop = false;
$_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['keys']->value => $_smarty_tpl->tpl_vars['card_dtls']->value) {
$_smarty_tpl->tpl_vars['card_dtls']->_loop = true;
$foreach_card_dtls_Sav = $_smarty_tpl->tpl_vars['card_dtls'];
?> 
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['card_dtls']->value['tk_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['card_dtls']->value['cardDtStr'];?>
</option>
                                         <?php
$_smarty_tpl->tpl_vars['card_dtls'] = $foreach_card_dtls_Sav;
}
?>
                                         
                                        
                                        </select> 


           <a href="card_dt_add.php" class="acard_detail">Add Card Details</a>
 <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>
 <?php if ($_smarty_tpl->tpl_vars['package']->value['pak_Intervel_id'] == 'Pay') {?>
  
       <h5 class="text-center">Do you have a coupon code?</h5>
   
<!-- <div class="input-group">
	 <input type='text' name='cCode' id='cCode' style="width: 200px"><span class="input-group-addon" id="basic-addon2"><button  type="button"   id='vryfyCpn'>Verify coupon</button> </span>
</div> -->
<div class="row">
 <div class="col-md-12">
    <div class="form-group">
       <div class="input-group">
       
       <input type="text" name="cCode" id="cCode" class="form-control" />
       <span class="input-group-btn">
           <button   id='vryfyCpn' class="btn btn-primary btn-block" style="font-size: 13px;padding: 7px;"  >
               Verify coupon
           </button>
            <span id='clrCupn' style="display:none;"><a href="" id='aclr' class="acard_detail">Clear coupon code</a>
       </span>
       </div>
    </div>
</div>
</div>
 <?php }?>
<button  type="button" class="btn btn-primary center-block btn-md" lang='0' id='sbtn'><span  style="padding-right:2px;font-size: 20px;color:885630 " >&#36;</span><?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value['pak_Intervel_id'];?>
</button><br><span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span> 
    <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?> 
<br>
 <span id='ErrMsg'>    </span>
<br>
  <span> <img style='width:103px' src='./images/Powered-By-Stripe.png' >   </span>
       </div>
    
 
   </div>
</div>


                 




        	
 
			 


	        
	     

                

 
	        
	        
	              	 	
        	 
				</form>
	  	</div>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		  </div>
  	</div>
	</div>

 
<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
    var tblrow= $('#cardDt').val(0);	    

    $(document).ready(function() {

    $('#aclr').click(function(event){ 
       event.preventDefault();
 $('#ldimg').show();
       $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#packFrmC").serialize()+"&mode=revertCpn",
	dataType: 'HTML', 
	success:function(data){ 
		var SplDta=data.split("#$#");
 $('#ldimg').hide();
		if(SplDta[0]==1)
		{
			location.href="package.php";
		}
		else if(SplDta[0]==2)
		{

			$('#sbtn').html("<span style='padding-right:2px;font-size: 20px;color:885630'>$</span>"+SplDta[1]+" pay");
     $('#sbtn').attr('lang',0);
     $('#cCode').val("")
     $('#vryfyCpn').html("Verify coupon");
     $('#clrCupn').hide();
$('#cCode').attr('disabled',false);
     $('#vryfyCpn').attr('disabled', false); 


		}


	}
	});



    }); 	
      
     $("#vryfyCpn").click(function(event){  
 event.preventDefault();
		var CCodes=$('#cCode').val();
		$('#ErrMsg').text("");
 
		if(CCodes!="")
		{
     $('#sbtn').attr('disabled',true);

			$.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#packFrmC").serialize()+"&mode=chkCoupon",
	dataType: 'HTML', 
	success:function(data){
        $('#sbtn').attr('disabled', false); 
  $('#ldimg').hide();
  var SplDta=data.split("#$#"); 
  if(SplDta[0]==0)
  {

  	alert('Session out');
  	location.href="logout.php";

  }
  else if(SplDta[0]==1)
  {
  	  $('#ErrMsg').html("<font color='red'>"+SplDta[1]+"</font>");
     
  }
  else if(SplDta[0]==2)
  {   
     $('#sbtn').html("<span style='padding-right:2px;font-size: 20px;color:885630'>$</span>"+SplDta[1]+" pay");
     $('#sbtn').attr('lang',1);
     $('#vryfyCpn').text("Verified");
     $('#clrCupn').show();
     $('#cCode').attr('disabled',true);
     $('#vryfyCpn').attr('disabled', true); 
  }

                 

	 
	}
	});

		}
		else
		{
            $('#ErrMsg').text('Please enter coupon code');

		}

 

     });    
        
$("#sbtn").click(function(){  
	 
var Selval=$('#cardDt').val();
var chkDiscount=$('#sbtn').attr('lang');

var cCodes=$('#cCode').val();
 
 

  if(Selval>0){
    $('#ErrMsg').html("");
    $('#ldimg').show();
    $('#sbtn').attr('disabled', true); 
             $('#ldimg').show();

        $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#packFrmC").serialize()+"&mode=sub&chkDis="+chkDiscount+"&cCodechk="+cCodes,
	dataType: 'HTML', 
	success:function(data){
        
  $('#ldimg').hide();
                var SplDta=data.split("#$#"); 
 $('#sbtn').attr('disabled', false); 
        	if(SplDta[0]==0){
                     
                     $('#ErrMsg').html("Session out");
                     setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                             location.href="logout.php";
             });
             }, 2000);

                     
                 }
                 else if(SplDta[0]==7)
                 {
                    
                  $('#ErrMsg').html("Invalid card Details");
                   
                   setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                            location.href="package.php";
             });
             }, 2000);

                  }
                 else if(SplDta[0]==1)
                 {
                    
                   
                  $('#ErrMsg').html(SplDta[1]);
                  setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                            location.href="package.php";
             });
             }, 2000);
                    
                     
                 }
                 else if(SplDta[0]==3){  
                   
		          
                  $('#ErrMsg').html(SplDta[1]);
                  setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                            location.href="user_pack.php";
             });
             }, 2000);

                  
                    
                  
    
                 }
                 else if(SplDta[0]==4){ 
 			 
                   $('#ErrMsg').html(SplDta[1]);
                 //alert("First month payment success and Subscription has been faild");
                setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                            location.href="package.php";
             });
             }, 2000);
  
                 
                 }

	 
	}
	});

   }
   else
   {
 $('#ErrMsg').html("Please select card detail");
setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
             });
             }, 2000);
 
 
   }

}); 

        // $("input[type='image']").click(function () {   
        	 
        // 	if ($("#chkYes").is(":checked")) {     
	       //  	if ($('#code').val()=='') {        
	       //  		alert('Please Enter your Coupon');
	       //  		$('#code').focus();
	       //  		return false; 
	       //  	} else {
	        		
			     //    $.ajax({
			     //        	type: "POST",
			     //            url: "ajax.php",
			     //            data: { code: $("#code").val(), pvt2: $("#pvt2").val() },
			     //            success:function(data){
				    //        if(data=='invalidcoupon') {
				    //        alert('invalid coupon');
				    //        $("#txt").html('');
				    //        return false;
				    //        }
				    //        else {
				    //        $("#txtHint").val(data);
				    //        $("#txt").html('Your Amount : $'+data);
				    //         $("#redirect").show();
				    //        setTimeout(function(){
					   //    $('#paypal').submit();
					   // },3000);
				           
			     //  		  }
			     //  		}
			     //    });
	        		
	       //  	}
	        	
	       //  	return false;
        // 	}

        // });    
        
 //        $("#verify_coupon").click(function (e) {

	//           e.preventDefault();
	
	//             $.ajax({
	//             	type: "POST",
	//                 url: "ajax.php",
	//                 data: { code: $("#code").val(), pvt2: $("#pvt2").val() },
	//                 success:function(data){
	// 	           if(data=='invalidcoupon') {
	// 	           alert('invalid coupon');
	// 	           $("#txt").html('');
	// 	           return false;
	// 	           }
	// 	           else {
	// 	           $("#txtHint").val(data);
	// 	           $("#txt").html('Your Amount : $'+data);
	// 	           return true;
	//       		  }
	//       		}
	//         });
		     
	// });
        

    });     
<?php echo '</script'; ?>
>




<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>
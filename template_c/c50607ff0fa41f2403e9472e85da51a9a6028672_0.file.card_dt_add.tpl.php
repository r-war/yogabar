<?php /* Smarty version 3.1.27, created on 2017-03-29 08:16:05
         compiled from "/home/yogabar/public_html/templates/default/card_dt_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:151538806958dbb395cd1c88_14774580%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c50607ff0fa41f2403e9472e85da51a9a6028672' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/card_dt_add.tpl',
      1 => 1490297033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151538806958dbb395cd1c88_14774580',
  'variables' => 
  array (
    'contact_post' => 0,
    'contact_post_err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58dbb395ed8529_75576700',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58dbb395ed8529_75576700')) {
function content_58dbb395ed8529_75576700 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '151538806958dbb395cd1c88_14774580';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div  class="white-bg" style="width:60%;float:right;">
       
        <div class="col-md-12 contact">
          <header>Add Card Details : </header>
          <span style="float:right;"><a href="card_details.php" id="Add">View card details</a></span>  
        <br />
          <?php if (isset($_smarty_tpl->tpl_vars['contact_post']->value)) {?>            
            <p  class='errM' style="color:green"><?php echo $_smarty_tpl->tpl_vars['contact_post']->value;?>
</p>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['contact_post_err']->value)) {?>            
            <p   class='errM' style="color:red"><?php echo $_smarty_tpl->tpl_vars['contact_post_err']->value;?>
</p>
          <?php }?>
     

 

<h1>
       
    </h1>
     <form novalidate autocomplete="on" action='card_dt_add.php' id='myformval' name='myformval'  method="POST">
      <div class="form-group">
        <label for="cc-number"  class="control-label">Card number<font color='#EA8D66'>*</font><small class="text-muted"><!--[<span class="cc-brand"></span>]--></small></label>
        <input id="cc-number" name='cc-number' type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required>
      </div>

      <div class="form-group">
        <label for="cc-exp" class="control-label">Card expiry<font color='#EA8D66'>*</font></label>
        <input id="cc-exp" name='cc-exp' type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="MM / YY" required>
      </div>

      <div class="form-group">
        <label for="cc-cvc" class="control-label">Card CVC<font color='#EA8D66'>*</font></label>
        <input id="cc-cvc" name='cc-cvc' type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="•••" required>
      </div>


 <div class="form-group">
        <label for="cc-name" class="control-label">Card Holder's Name<font color='#EA8D66'>*</font> </label>
        <input id="cc-name" name='cc-name' type="text" class="input-lg form-control cc-name" autocomplete="off" placeholder="Name" required>
      </div>  
    <div class="form-group"><button type="submit" id='sbtn' class="btn btn-default center-block">Add</button>&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span> &nbsp;<span id='ErrMsg'> </span> </div> 

     


 
</form> 
 

   
        </div>
      </div>
      <div class=" col-md-4 col-md-offset-7 soical-media" style="padding-left: 70px;">
        <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>

  </div><?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="https://js.stripe.com/v2/"><?php echo '</script'; ?>
> 
 <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
 
 

<?php echo '<script'; ?>
 type="text/javascript" src="../web/js/jquery.payment.js"><?php echo '</script'; ?>
> 


 <style type="text/css" media="screen">
    .has-error input {
      border-width: 2px;
    }

    .validation.text-danger:after {
      content: 'Validation failed';
    }

    .validation.text-success:after {
      content: 'Validation passed';
    }
  </style>

  <?php echo '<script'; ?>
>
    jQuery(function($) {  
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');
       
       
      $.fn.toggleInputError = function(erred) {  
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };

      $('form').submit(function(e) { $('#ErrMsg').html(""); $('.errM').html("");
        //e.preventDefault();
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);
  
        var cnameVal= $('.cc-name').val();
        var nameVald=0;

  
  
        if(cnameVal.length >0)
        {     
           

                 var regex =/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;

            if(cnameVal.search(regex) == 0) 
             {

              $('.cc-name').toggleInputError(false);
               nameVald=1;
             }
             else
             {
                  nameVald=1;
                  $('.cc-name').toggleInputError(true);
    
             } 
            
            
        }
        else
         {
            nameVald=1;
          $('.cc-name').toggleInputError(true);
   

          }
        


     $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
        var allValidation=$('.has-error').length;
        if(allValidation==0 && nameVald==1)
        { $('#ErrMsg').html("");  
      $('#myformval').submit();
            // $('#sbtn').prop('disabled', true); 
            //  $('#ldimg').show();
            //   $.ajax({
            //     type: "POST",
            //       url: "frntAjax.php",
            //       data: $("#myformval").serialize()+"&mode=CardAdd",
            //       success:function(data){  
                    // $('#ldimg').hide();
                    // $('#sbtn').prop('disabled', false); 

                    // var sExpData=data.split('@#@');
                    // if(sExpData[0]==0)
       //              {
       //               //alert("Session out!!!");
       //               $('#ErrMsg').html("Session out!!!");
       //                setTimeout(function(){
       // $("#ErrMsg").fadeOut("slow", function () {
       // $('#ErrMsg').text('');
       // $('#ErrMsg').show();
       //                 location.href="logout.php";
                             
       //       });
       //       }, 2000);
                    
                     
       //              }
       //              else if(sExpData[0]==3)
       //              {
       //                 //alert();
       //                  $('#ErrMsg').html(sExpData[1]);
       //                        setTimeout(function(){
       // $("#ErrMsg").fadeOut("slow", function () {
       // $('#ErrMsg').text('');
       // $('#ErrMsg').show();
                             
       //       });
       //       }, 2000);
       //              } 
       //              else if(sExpData[0]==1)
       //              {
       //                 //alert("Invaid details try again");
       //                      $('#ErrMsg').html("Invaid details try again");
       //                        setTimeout(function(){
       // $("#ErrMsg").fadeOut("slow", function () {
       // $('#ErrMsg').text('');
       // $('#ErrMsg').show();
                             
       //       });
       //       }, 2000);
       //              }
       //              else if(sExpData[0]==4)
       //              {
 
       //                  //alert(sExpData[1]);
       //                   $('#ErrMsg').html(sExpData[1]);
       //                   setTimeout(function(){
       // $("#ErrMsg").fadeOut("slow", function () {
       // $('#ErrMsg').text('');
       // $('#ErrMsg').show();
                             
       //       });
       //       }, 2000);
                         
       //              }
       //              else if(sExpData[0]==10)
       //              {
                   
       //               $('#cc-number,#cc-exp,#cc-cvc,#cc-name').val("");
       //               // alert("Details add successfully");
       //                $('#ErrMsg').html("Details added successfully"); 

       //                 setTimeout(function(){
       // $("#ErrMsg").fadeOut("slow", function () {
       // $('#ErrMsg').text('');
       // $('#ErrMsg').show();
       //                      location.href="package.php";
       //       });
       //       }, 2000);
                      

       //              }
       //              else if(sExpData[0]==11)
       //              {
       //                  $('#cc-number,#cc-exp,#cc-cvc,#cc-name').val("");
       //                //alert("Details add successfully");
       //                 $('#ErrMsg').html("Details added successfully"); 
       //                  setTimeout(function(){
       // $("#ErrMsg").fadeOut("slow", function () {
       // $('#ErrMsg').text('');
       // $('#ErrMsg').show();
       //                     location.href="package_checkout.php";
       //       });
       //       }, 2000);

                      
       //              }
       //              else if(sExpData[0]==20)
       //              {
       //                  $('#cc-number,#cc-exp,#cc-cvc,#cc-name').val("");
       //                //alert("Details add successfully");
       //                 $('#ErrMsg').html("Details added successfully"); 
       //                  setTimeout(function(){
       // $("#ErrMsg").fadeOut("slow", function () {
       // $('#ErrMsg').text('');
       // $('#ErrMsg').show();
       //                     location.href="events_checkout.php";
       //       });
       //       }, 2000);

                      
               //      }  
               
               //     }
               // });
        }
        else
        {
          e.preventDefault();
        }  
      });
    });
  <?php echo '</script'; ?>
>


 
<?php }
}
?>
{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div  class="white-bg" style="width:60%;float:right;">
       
        <div class="col-md-12 contact">
          <header>Add Card Details : </header>
          <span style="float:right;"><a href="card_details.php" id="Add">View card details</a></span>  
        <br />
          {if isset($contact_post) }            
            <p style="color:green">{$contact_post}</p>
          {/if}

          {if isset($contact_post_err) }            
            <p style="color:red">{$contact_post_err}</p>
          {/if}
     

 

<h1>
       
    </h1>
     <form novalidate autocomplete="on" id='myformval' name='myformval'  method="POST">
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
        <input id="cc-name" name='cc-name' type="tel" class="input-lg form-control cc-name" autocomplete="off" placeholder="Name" required>
      </div>  
    <div class="form-group"><button type="submit" id='sbtn' class="btn btn-lg btn-primary">Submit</button>&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span> &nbsp;<span id='ErrMsg'> </span> </div> 

     


 
</form> 
 

   
        </div>
      </div>
      <div class=" col-md-4 col-md-offset-7 soical-media" style="padding-left: 70px;">
        {include file="social.tpl"}
      </div>

  </div>{include file="footer-no-bounce.tpl"}
<script type="text/javascript" src="https://js.stripe.com/v2/"></script> 
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 
 

<script type="text/javascript" src="../web/js/jquery.payment.js"></script> 


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

  <script>
    jQuery(function($) {  
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');
       
       
      $.fn.toggleInputError = function(erred) {  
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };

      $('form').submit(function(e) { $('#ErrMsg').html("");
        e.preventDefault();
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);
  
        var cnameVal= $('.cc-name').val();
        var nameVald=0;

  
  
        if(cnameVal.length >0)
        {     
           



            if(cnameVal.search(/[^a-zA-Z]+/) === -1) 
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
            $('#sbtn').prop('disabled', true); 
             $('#ldimg').show();
              $.ajax({
	            	type: "POST",
	                url: "frntAjax.php",
	                data: $("#myformval").serialize()+"&mode=CardAdd",
	                success:function(data){
 	                	$('#ldimg').hide();
                    $('#sbtn').prop('disabled', false); 

                    var sExpData=data.split('@#@');
                    if(sExpData[0]==0)
                    {
                     //alert("Session out!!!");
                     $('#ErrMsg').html("Session out!!!");
                      setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                       location.href="logout.php";
                             
             });
             }, 2000);
                    
                     
                    }
                    else if(sExpData[0]==3)
                    {
                       //alert();
                        $('#ErrMsg').html(sExpData[1]);
                              setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                             
             });
             }, 2000);
                    } 
                    else if(sExpData[0]==1)
                    {
                       //alert("Invaid details try again");
                            $('#ErrMsg').html("Invaid details try again");
                              setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                             
             });
             }, 2000);
                    }
                    else if(sExpData[0]==4)
                    {
 
                        //alert(sExpData[1]);
                         $('#ErrMsg').html(sExpData[1]);
                         setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                             
             });
             }, 2000);
                         
                    }
                    else if(sExpData[0]==10)
                    {
                   
                     $('#cc-number,#cc-exp,#cc-cvc').val("");
                     // alert("Details add successfully");
                      $('#ErrMsg').html("Details added successfully"); 

                       setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                            location.href="package.php";
             });
             }, 2000);
                      

                    }
                    else if(sExpData[0]==11)
                    {
                        $('#cc-number,#cc-exp,#cc-cvc').val("");
                      //alert("Details add successfully");
                       $('#ErrMsg').html("Details added successfully"); 
                        setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                           location.href="package_checkout.php";
             });
             }, 2000);

                      
                    } 
	             
	      		       }
	             });
        }  
      });
    });
  </script>


 


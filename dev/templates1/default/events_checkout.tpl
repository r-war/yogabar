{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
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
       <h4 class="text-center">Events Pay</h4>
   </div>
<div class="pbody">
 

      {foreach $getEvent as $key => $event_package} 

   <input type='text' name='tblrow' id='tblrow'  value="{$event_package['id']}">
  
       <p>
           
           Events: {$event_package['events_name']}
       </p>

       
        {/foreach}
       <div class="cards">
            <select id='cardDt' name='cardDt' > 
                                         <option selected='true' value="0">--Select Card--</option>
                                          {foreach $card_dt as $keys => $card_dtls} 
                                        <option value="{$card_dtls['tk_id']}">{$card_dtls['cardDtStr']}</option>
                                         {/foreach}
                                         
                                        
                                        </select> 


           <a href="card_dt_add.php" class="acard_detail">Add Card Details</a>
 {foreach $getEvent as $key => $event_package}
<button  type="button" class="btn btn-primary center-block btn-md" id='sbtn'><span  style="padding-right:2px;font-size: 20px;color:885630 " >&#36;</span>{$event_package['price']} </button><br><span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span> 
    {/foreach} 
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
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>

 
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
    var tblrow= $('#cardDt').val(0);	    

    $(document).ready(function() {
      
         
        
$("#sbtn").click(function(){  
	 
var Selval=$('#cardDt').val();
 

  if(Selval>0){
    $('#ldimg').show();
    $('#sbtn').attr('disabled', true); 
             $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "eventsPay_ajax.php",
	data: $("#packFrmC").serialize()+"&mode=sub",
	dataType: 'HTML', 
	success:function(data){
        //alert(data)
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

        $("input[type='image']").click(function () {   
        	 
        	if ($("#chkYes").is(":checked")) {     
	        	if ($('#code').val()=='') {        
	        		alert('Please Enter your Coupon');
	        		$('#code').focus();
	        		return false; 
	        	} else {
	        		
			        $.ajax({
			            	type: "POST",
			                url: "ajax.php",
			                data: { code: $("#code").val(), pvt2: $("#pvt2").val() },
			                success:function(data){
				           if(data=='invalidcoupon') {
				           alert('invalid coupon');
				           $("#txt").html('');
				           return false;
				           }
				           else {
				           $("#txtHint").val(data);
				           $("#txt").html('Your Amount : $'+data);
				            $("#redirect").show();
				           setTimeout(function(){
					      $('#paypal').submit();
					   },3000);
				           
			      		  }
			      		}
			        });
	        		
	        	}
	        	
	        	return false;
        	}

        });    
        
        $("#verify_coupon").click(function (e) {

	          e.preventDefault();
	
	            $.ajax({
	            	type: "POST",
	                url: "ajax.php",
	                data: { code: $("#code").val(), pvt2: $("#pvt2").val() },
	                success:function(data){
		           if(data=='invalidcoupon') {
		           alert('invalid coupon');
		           $("#txt").html('');
		           return false;
		           }
		           else {
		           $("#txtHint").val(data);
		           $("#txt").html('Your Amount : $'+data);
		           return true;
	      		  }
	      		}
	        });
		     
	});
        

    });     
</script>




{include file="footer-no-bounce.tpl"}



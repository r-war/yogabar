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

   <input type='hidden' name='tblrow' id='tblrow'  value="{$event_package['id']}">
<input type='hidden' name='hidregid' id='hidregid'  value="{{$reg_id}} ">
  
       <p>
           
           Events: {$event_package['name']}
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


 {foreach $getEvent as $key => $event_package}
<button  type="button" class="btn btn-primary center-block btn-md" lang='0' id='sbtn'><span  style="padding-right:2px;font-size: 20px;color:885630 " >&#36;</span>{$event_package['price']} Pay </button><br><span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span> 
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


    	$('#aclr').click(function(event){ 
       event.preventDefault();
 $('#ldimg').show();
       $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#packFrmC").serialize()+"&mode=revertEveCpn",
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
	data: $("#packFrmC").serialize()+"&mode=chkEveCoupon",
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


//     	 $('#aclr').click(function(event){ 
//        event.preventDefault();
//  $('#ldimg').show();
//        $.ajax({
// 	type: "POST",
// 	url: "subscrib_ajax.php",
// 	data: $("#packFrmC").serialize()+"&mode=revertEveCpn",
// 	dataType: 'HTML', 
// 	success:function(data){

// 	alert(data); 
// 		var SplDta=data.split("#$#");
//  $('#ldimg').hide();
// 		if(SplDta[0]==1)
// 		{
// 			location.href="notes.php";
// 		}
// 		else if(SplDta[0]==2)
// 		{

// 			$('#sbtn').html("<span style='padding-right:2px;font-size: 20px;color:885630'>$</span>"+SplDta[1]+" pay");
//      $('#sbtn').attr('lang',0);
//      $('#cCode').val("")
//      $('#vryfyCpn').html("Verify coupon");
//      $('#clrCupn').hide();
// $('#cCode').attr('disabled',false);
//      $('#vryfyCpn').attr('disabled', false); 


// 		}


// 	}
// 	});



//     	 $("#vryfyCpn").click(function(event){  
//  event.preventDefault();
// 		var CCodes=$('#cCode').val();
// 		$('#ErrMsg').text("");
 
// 		if(CCodes!="")
// 		{
//      $('#sbtn').attr('disabled',true);

// 			$.ajax({
// 	type: "POST",
// 	url: "subscrib_ajax.php",
// 	data: $("#packFrmC").serialize()+"&mode=chkEveCoupon",
// 	dataType: 'HTML', 
// 	success:function(data){
//         $('#sbtn').attr('disabled', false); 
//   $('#ldimg').hide();alert(data); 
//   var SplDta=data.split("#$#");

//   if(SplDta[0]==0)
//   {

//   	alert('Session out');
//   	location.href="logout.php";

//   }
//   else if(SplDta[0]==1)
//   {
//   	  $('#ErrMsg').html("<font color='red'>"+SplDta[1]+"</font>");
     
//   }
//   else if(SplDta[0]==2)
//   {   
//      $('#sbtn').html("<span style='padding-right:2px;font-size: 20px;color:885630'>$</span>"+SplDta[1]+" pay");
//      $('#sbtn').attr('lang',1);
//      $('#vryfyCpn').text("Verified");
//      $('#clrCupn').show();
//      $('#cCode').attr('disabled',true);
//      $('#vryfyCpn').attr('disabled', true); 
//   }

                 

	 
// 	}
// 	});

// 		}
// 		else
// 		{
//             $('#ErrMsg').text('Please enter coupon code');

// 		}

 

//      });
      
         
        
$("#sbtn").click(function(){  
	 
var Selval=$('#cardDt').val();
var chkDiscount=$('#sbtn').attr('lang');

var cCodes=$('#cCode').val();
  

  if(Selval>0){
    $('#ldimg').show();
    $('#sbtn').attr('disabled', true); 
             $('#ldimg').show();
             $('#ErrMsg').html('');
        $.ajax({
	type: "POST",
	url: "eventsPay_ajax.php",
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
                             location.href="notes.php";
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
                             location.href="notes.php";
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
</script>




{include file="footer-no-bounce.tpl"}



{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div id="animation" class="white-bg">
	      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

                                        					
        	<h3> Enjoy our packages as below:</h3>        
        	<h4>Packages</h4>

                <ul>
		{foreach $getAllSubunSubList as $key => $package} 
		{if {$package['group_type_id']}==1}

		<li>
		<input type="radio" {$package['subcrib']} name="amount" id='opt_{$package['id']}' data-toggle="modal" data-target="#myModalNorm"  onclick="radioEvent('{$package['name']}', this.value,'{$package['id']}','{$ChkLogin}');" value="{$package['price']}" >
		<span class="doller">${$package['price']}&nbsp; </span >{$package['name']}
		</li>
		{/if}
		{/foreach}
		      </ul>  




        	
        	

			<h4>Booking Studio</h4>
			<ul>
			{foreach $getAllSubunSubList as $key => $package}
			{if {$package['group_type_id']}==3} 
			<li>

			<input type="radio" {$package['subcrib']} name="amount" id='opt_{$package['id']}'  data-toggle="modal" data-target="#myModalNorm" onclick="radioEvent('{$package['name']}' , this.value,'{$package['id']}','{$ChkLogin}');" value="{$package['price']}" >
			<span class="doller"> ${$package['price']}&nbsp;</span>{$package['name']}

			{/if}

			</li>

			{/foreach}
			</ul>



	        
	        
	        
	         <h4>Promotion Package</h4>

                <ul>
		       {foreach $getAllSubunSubList as $key => $package} 
                         {if {$package['group_type_id']}==4} 
		        <li>
                 
		          <input type="radio" {$package['subcrib']} name="amount" id='opt_{$package['id']}'    data-toggle="modal" data-target="#myModalNorm" onClick="radioEvent('{$package['name']}' , this.value,'{$package['id']}','{$ChkLogin}');" value="{$package['price']}" >
                   <span class="doller"> ${$package['price']}&nbsp;</span>{$package['name']}
                   
                     
                   
		         
		        </li>
                       {/if}
		        {/foreach} 
	        </ul>

 
	        
	        
	        <ul>
	        	<li>
	        	* Private class valid for a month, with min of once a week class. Venue can be your  home or any convenient place.
        		</li>
        		<li>
        		* Peak-hour (Monday - friday : 6pm-9pm, Sat & sun 7am - 8pm)
				</li>
				<li>
				* Off-peak hours ( monday - friday : 7am - 6pm, Sat & Sun : After 8pm)
				</li>
        	</ul>        	 	
        	<h4>CORPORATE CLASS</h4>
        	<ul>
        		<li>
        			Kindly send us your inquiry to info@yogabar.sg
        		</li>
        		
					</ul>
				</form>
	  	</div>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Package Subscription/Coupon Code 
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
          

          
           
            {if isset($smarty.session.UID)}
                 <div id="animation" class="white-bg">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="frmsub">
            
                                        <input type="hidden" name="tblrow" id="tblrow" value="">
                    			<span id="sel-package" style="color:red; color:#C80815;"></span><br/>
 <br/>    
					<label style='font-color:green;'>Package Subscription Card
                                        
                                        <select id='cardDt' name='cardDt' > 
                                         <option selected='true' value="0">--Select Card--</option>
                                          {foreach $card_dt as $keys => $card_dtls} 
                                        <option value="{$card_dtls['tk_id']}">{$card_dtls['cardDtStr']}</option>
                                         {/foreach}
                                         
                                        
                                        </select> 
                   </label>
<label><a href='card_dt_add.php'>Add Card Details </a>  </label>
                      <br/>
        <!--<span>Do you have Coupon Code?</span> -->
<!--<label for="chkYes">
    <input type="radio" id="chkYes" name="chkPassPort" />
    Yes
</label> -->
<!--<label for="chkNo">
    <input type="radio" id="chkNo" name="chkPassPort" checked/>
    No
</label> -->
<!--<hr />
<div id="dvPassport1" style="display: none">
   
</div>
<div id="dvPassport" style="display: none">
   Coupon Code:
    <input type="text" id="code" name="code"/>
    <button type="button" id="verify_coupon">Verify Coupon!</button>

</div> -->
<!--<div id="txtHint">
               
                </div> -->
                 <div id="txt" style="color:red;">
              <button type="button" lang='0' id="sbtn">Subscribe Package</button> &nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span> 
                </div>  
                
               <!-- <span id="redirect" style="display:none;"><h3>Redirecting to Paypal..You need to wait for 3 seconds..</h3></span><br/> -->

                <ul> 
                    <li style='padding-right:20px;'>   </li>
                </ul>
 
  
  
{foreach $numrows as $key => $rows}  
		        <li><br/>
		          
		        
		        </li>
		        {/foreach}

                </form>
                </div> 
                  {else}

    
              <div id="animation" class="white-bg">

<label style='font-color:green;'><a href="login.php">Click here to login </a></label>
<label style='font-color:green;'><a href="register.php">Click here to registration </a></label>

            </div>
            {/if}
            </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>
<script type="text/javascript">
function radioEvent(package, value,ids,chkLogin) 
{ 

$("#pvt2").val(value);
 $('#txtHint').val(value);
$('#tblrow').val(ids);
$('#cardDt').val(0);
$("#sbtn").attr('lang', '0'); 
 if(chkLogin==1){
 $("#sel-package").html("Your package: "+package);
 
 }
else
{

 location.href='login.php';
} 
}
</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
    var tblrow= $('#cardDt').val(0);	    

    $(document).ready(function() {
      
       $("input[name='chkPassPort']").click(function () {  
            if ($("#chkYes").is(":checked")) {             
                $("#dvPassport").show();
                $("#dvPassport1").hide();
            }             
            if ($("#chkNo").is(":checked")) {             
                $("#dvPassport1").show();
                $("#dvPassport").hide();
            }
           
        });   
        
$("#sbtn").click(function(){  
	
var Selval=$('#cardDt').val();

  if(Selval>0){

    $('#sbtn').attr('disabled', true); 
             $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#frmsub").serialize()+"&mode=sub",
	dataType: 'HTML', 
	success:function(data){
        //alert(data)
  $('#ldimg').hide();
                var SplDta=data.split("#$#"); 
 $('#sbtn').attr('disabled', false); 
        	if(SplDta[0]==0){
                     alert("Session out") ;
                     location.href="logout.php";
                 }
                 else if(SplDta[0]==7)
                 {
                   alert("Invalid card Details");
                   location.href="package.php";

                  }
                 else if(SplDta[0]==1)
                 {
                    
                   alert(SplDta[1]);
                  // $('#opt_'+SplDta[1]).attr('disabled', true);
                  location.href="package.php";
                    
                     
                 }
                 else if(SplDta[0]==3){  
                   
		          alert(SplDta[1]);
                  // $('#opt_'+SplDta[1]).attr('disabled', true);
                  location.href="package.php";
                    
                  
    
                 }
                 else if(SplDta[0]==4){ 
 alert(SplDta[1]);
                 alert("First month payment success and Subscription has been faild");
                 location.href="package.php";
                 }

	 
	}
	});

   }
   else
   {
 
alert("Plese select card detail");
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

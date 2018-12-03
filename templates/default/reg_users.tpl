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
        	<h4>Users List</h4>
        	<!--<ul>
	          {foreach $group_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount" data-toggle="modal" data-target="#myModalNorm"  onclick="radioEvent('{$package['name']}', this.value);" value="{$package['price']}" {if ($key==0)} checked="checked" {/if}>
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
		      </ul>-->
        	 
 
	        <h4>Booking Studio</h4>
	       <!-- <ul>
		       {foreach $room_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount"   data-toggle="modal" data-target="#myModalNorm" onclick="radioEvent('{$package['name']}' , this.value);" value="{$package['price']}" >
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
	        </ul>
	        -->
	        
	         <h4>Promotion Package</h4>
	       <!-- <ul>
		       {foreach $yy_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount"  data-toggle="modal" data-target="#myModalNorm" onClick="radioEvent('{$package['name']}' , this.value);" value="{$package['price']}" >
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
	        </ul>-->
	        
	        
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
                    Coupon Code
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="animation" class="white-bg">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="paypal">
                 <input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="dsiswianti@gmail.com">
					<input type="hidden" name="item_name"  value="Yogabar Package">				
					<input type="hidden" name="amount" id="txtHint" value="">
					<input type="hidden" name="currency_code" value="SGD">              
                      			<input type="hidden" name="pvt2" id="pvt2" value="">
                      			<span id="sel-package" style="color:red; color:#C80815;"></span><br/>
                   
                      <br/>
        <span>Do you have Coupon Code?</span>
<label for="chkYes">
    <input type="radio" id="chkYes" name="chkPassPort" />
    Yes
</label>
<label for="chkNo">
    <input type="radio" id="chkNo" name="chkPassPort" checked/>
    No
</label>
<hr />
<div id="dvPassport1" style="display: none">
   
</div>
<div id="dvPassport" style="display: none">
   Coupon Code:
    <input type="text" id="code" name="code"/>
    <button type="button" id="verify_coupon">Verify Coupon!</button>

</div>
<div id="txtHint">
               
                </div>
                <div id="txt" style="color:red;">
              
                </div>
                
                <span id="redirect" style="display:none;"><h3>Redirecting to Paypal..You need to wait for 3 seconds..</h3></span><br/>
    <ul>
        		<li>
        			Kindly send us your inquiry to info@yogabar.sg
        		</li>
        		<li style="padding-bottom:5px;padding-top:5px">
        			You can pay by paypal or pay by cash or transfer.
        		</li>
        		<li>
		       		<input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
						</li>
					</ul>
{foreach $numrows as $key => $rows} 
		        <li><br/>
		          
		          
		        </li>
		        {/foreach}

                </form>
                </div>
                
            </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>
<script type="text/javascript">
function radioEvent(package, value) 
{ alert(1);
 $("#sel-package").html("Your package: "+package);
 $("#pvt2").val(value);
 $('#txtHint').val(value);
}
</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
		    

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
{include file="footer.tpl"}

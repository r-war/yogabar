{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div id="animation" class="white-bg">
	      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="dsiswianti@gmail.com">
					<input type="hidden" name="item_name" value="yogabar package">
					<input type="hidden" name="currency_code" value="SGD">
                                        					
        	<h3> Enjoy our packages as below:</h3>        
        	<h4>GROUP CLASS</h4>
        	<ul>
	          {foreach $group_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount" data-toggle="modal" data-target="#myModalNorm"  onclick="radioEvent(this.value);" value="{$package['price']}" {if ($key==0)} checked="checked" {/if}>
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
		      </ul>
        	<h4>PRIVATE CLASS</h4>
	        <ul>
		       {foreach $private_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount"  data-toggle="modal" data-target="#myModalNorm" id="pvt"  onclick="radioEvent(this.value);" value="{$package['price']}" >
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
	        </ul>
	        <h4>Booking Studio</h4>
	        <ul>
		       {foreach $room_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount"   data-toggle="modal" data-target="#myModalNorm" onclick="radioEvent(this.value);" value="{$package['price']}" >
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
	        </ul>
	        
	        
	         <h4>Promotion Package</h4>
	        <ul>
		       {foreach $yy_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount"  data-toggle="modal" data-target="#myModalNorm" onClick="radioEvent(this.value);" value="{$package['price']}" >
		          <span class="doller">$</span>{$package['name']}
		        </li>
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
        		<li style="padding-bottom:5px;padding-top:5px">
        			You can pay by paypal or pay by cash or transfer.
        		</li>
        		<li>
		       		<input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
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
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                 <input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="dsiswianti@gmail.com">
					<input type="hidden" name="item_name"  value="Yogabar Package">
				
					<input type="hidden" name="amount" id="txtHint" value="">
					<input type="hidden" name="amount" id="pvt2"  value="">	
					<input type="hidden" name="currency_code" value="SGD">
              
                      <input type="hidden" name="pvt2" id="pvt2" value="">
                   
                      <br/>
        <span>Do you have Coupon Code?</span>
<label for="chkYes">
    <input type="radio" id="chkYes" name="chkPassPort" />
    Yes
</label>
<label for="chkNo">
    <input type="radio" id="chkNo" name="chkPassPort" />
    No
</label>
<hr />
<div id="dvPassport1" style="display: none">
   
</div>
<div id="dvPassport" style="display: none">
   Coupon Code:
    <input type="text" id="code" name="code"/>
    <button type="button" id="test">Verify Coupon!</button>

</div>
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
		        <li>
		          
		          
		        </li>
		        {/foreach}
<div id="txtHint">
                <input type="hidden" name="amount"   data-toggle="modal" data-target="#myModalNorm">
                </div>
                </form>
                </div>
                
            </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>

<script type="text/javascript">
function radioEvent(value) 
{
 $("#pvt2").val(value);
 }
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name='chkPassPort']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#dvPassport").show();
            } 
             else if ($("#chkNo").is(":checked")) {
                $("#dvPassport1").show();
            } 
            else {
                $("#dvPassport1").hide();
            }
           
        });
    });
</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
    
   $("#test").click(function(e){
          e.preventDefault();

            $.ajax({
            	type: "POST",
                url: "ajax.php",
                data: { code: $("#code").val(), pvt2: $("#pvt2").val() },
                success:function(data){
	           if(data=='invalidcoupon')
	           alert('invalid coupon');
	           else
	         alert('Your Amount : $' + data);
	           $("#txtHint").val(data);
	          
      		  }
        });
     
    });
});
</script>
{include file="footer.tpl"}
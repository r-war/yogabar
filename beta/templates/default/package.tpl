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
		          <input type="radio" name="amount" value="{$package['price']}" {if ($key==0)} checked="checked" {/if}>
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
		      </ul>	              
        	<h4>PRIVATE CLASS</h4>
	        <ul>
		       {foreach $private_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount" value="{$package['price']}" >
		          <span class="doller">$</span>{$package['name']}
		        </li>
		        {/foreach}
	        </ul>
	        <h4>Booking Studio</h4>
	        <ul>
		       {foreach $room_rs as $key => $package} 
		        <li>
		          <input type="radio" name="amount" value="{$package['price']}" >
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
{include file="footer.tpl"}
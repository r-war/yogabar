{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div  class="scroll white-bg padding-10 ">
        	<h2>{$faq_rs.name}</h2>
            
            <div class="row">
	    			<div class="">	    	
	    				{$faq_rs.description|replace:'../':''}
	    			</div>
	    	</div>
                
	     <!-- <h2>F.A.Q</h2>
	      <p>
<li><font color="Crimson">What should i wear & what to bring ? </font></br>
Wear something you’re comfortable in – fitting, stretchy clothes that won’t fall everywhere when you’re moving around. Yoga mat & water refilled are provided.  </li>

<li><font color="Crimson">How to go to Yogabar studio?</font></br>
We are located 5 min from Orchard MRT. People often confuse between Far East Plaza (scotts road), Our studio ls Far East shopping centre, across of Thai Embassy and opposite of Liat Tower. </li>

<li><font color="Crimson">How to book our classes? </font></br>
1st you have sign up as member by buying one of our packages. Click on the packages menu, once your payment is accept by us now you can book your class. We will use your email address which you use during payment in our database to create your profile in our booking system. </li>

<li><font color="Crimson">How often can I book the class?</font></br>
No limitation for each booking as long as you have enough credit to use. </li>

<li><font color="Crimson">Do you offer private class/one on one? </font></br>
Yes, We do. You can check our price list under packages. For private class you need to advice us the day and time which you request. Venue can be done in our studio or at your convenience place. </li>


<li><font color="Crimson">Can we book for one time event? </font></br>
Yes, you can. The fee depends on the number of people and duration of the class. </li>

<li><font color="Crimson">Do you offer corporate class?</font></br>
Yes, We do. Please send your enquiry to info @yogabar.sg.</li>

<li><font color="Crimson">Can I get a refund if I cancel my package?</font></br>
Sorry to let go, but all packages is not refundable. </li>
</p>
	    </div>-->
	    <div class=" col-md-6 col-md-offset-4 soical-media">
	     	{include file="social.tpl"}
	    </div>
  	</div>
	</div>
{include file="footer.tpl"}
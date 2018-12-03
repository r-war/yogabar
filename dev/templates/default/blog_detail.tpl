{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">
	    <div id="animation" class="white-bg blog_div">
	    	<div class="container">	
	    			<div class="row">
	    				<div class="">
	    					<h2>{$blog_rs.name} </h2>	    
	    				</div>
	    			</div>
	    		
	    		<div class="row">
	    			<div class="">	    	
	    				{$blog_rs.description|replace:'../':''}
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="">
	    				<a href="blog.php">Back to blog list</a>
	    			</div>
	    		</div>
	    	</div>
	    </div>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>
{include file="footer-no-bounce.tpl"}
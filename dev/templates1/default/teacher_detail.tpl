{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">
	    <div  class="white-bg">
	    	<div class="container">	
	    			<div class="row">
	    				<div class="">
	    					<h2>{$teacher_rs.name} </h2> <!--<sub>created at</sub> {$teacher_rs.created_at}	    -->
	    				</div>
	    			</div>
	    		
	    		<div class="row">
	    			<div class="">	    	
	    				{$teacher_rs.description|replace:'../':''}
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="">
	    				<a href="teacher.php">Back to Teacher Profile list</a>
	    			</div>
	    		</div>
	    	</div>
	    </div>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>
{include file="footer.tpl"}
{include file="admin/header.tpl"}
<body class="innerbg">
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">  	
	    <div id="animation" class="white-bg padding-10 ">
	    	<h2>Admin Panel</h2>
	    	<br/>
	    	{if isset($login_error)}
		  	<div class="error" id="msg-flash">
		  		{$login_error}
		  	</div>
		  	<br/>
		  	{/if}
				<form method="post" action="">
	        <div class="form-group">
			      <label class="control-label" for="input-email">Username:</label>
			      <input type="text" name="username" value="" placeholder="Username" id="input-email" class="form-control" />
			    </div>
			    <div class="form-group">
			      <label class="control-label" for="input-password">Password:</label>
			      <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />			      
			    </div>
          <div class="form-group">
            <input type="submit" class="btn btn-default" value="Submit">
          </div>
        </form>
			</div>	   
  	</div>
	</div>
{include file="admin/footer.tpl"}
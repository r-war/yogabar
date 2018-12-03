{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Change Password</h2>	  
	    	{if isset($change_pwd_msg)}
		  	<div class="success" id="msg-flash">
		  		{$change_pwd_msg}
		  	</div>
		  	<br/>
		  	{/if}  	
	    	<form class="cmxform" id="fileForm" enctype="multipart/form-data"  method="post" action="">
				<fieldset>					
					<p>
						<label for="title">New Password:</label>
						<input type="text" id="title" name="title" class="required">
					</p>					
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
				</fieldset>
			</form>
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/cmxform.css">
	<script src="../js/jquery-validation/lib/jquery.js"></script>
	<script src="../js/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="../js/jquery-validation/dist/additional-methods.js"></script>
	{literal}
	
<script>
$(document).ready(function() {
		$("#fileForm").validate();
	});
</script>
{/literal}
{include file="admin/footer.tpl"}
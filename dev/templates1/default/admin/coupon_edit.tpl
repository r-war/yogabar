{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Coupon Edit</h2>	  
	    	{if isset($coupon_add)}
		  	<div class="success" id="msg-flash">
		  		{$coupon_add}
		  	</div>
		  	<br/>
		  	{/if}  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Code:</label>
						<input type="text" id="name" name="name" class="required" 
						value="{$smarty.post.code|default:$coupon_rs.code}">
					</p>
					<p>
						<label for="txt_description">Discount:</label>
						<input type="text" id="discount" name="discount" class="required" value="{$smarty.post.discount|default:$coupon_rs.discount}">
					</p>	
					<p>
								
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="coupon.php">Back to package list</a>
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
	<script>
	$(document).ready(function() {
			$("#myform").validate();
		});
	</script>
{include file="admin/footer.tpl"}
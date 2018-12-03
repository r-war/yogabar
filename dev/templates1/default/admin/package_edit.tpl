{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Package Edit</h2>	  
	    	{if isset($package_add)}
		  	<div class="success" id="msg-flash">
		  		{$package_add}
		  	</div>
		  	<br/>
		  	{/if}  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Name:</label>
						<input type="text" id="name" name="name" class="required" 
						value="{$smarty.post.name|default:$package_rs.name}">
					</p>
					<p>
						<label for="txt_description">Price:</label>
						<input type="text" id="price" name="price" class="required" value="{$smarty.post.price|default:$package_rs.price}">
					</p>	
					<p>
						<label for="image">Group Type:</label>
						<label for="group_type_1" style="font-weight:normal;">
							<input type="radio" id="group_type_1" name="group_type" value="1" {if ($package_rs.group_type_id==1)} checked="checked"{/if}>
							Group Class
						</label>
						<label for="group_type_2" style="font-weight:normal;">
							<input type="radio" id="group_type_2" name="group_type" value="2" {if ($package_rs.group_type_id==2)} checked="checked"{/if}>
							Private Class
						</label>
						<label for="group_type_3" style="font-weight:normal;">
							<input type="radio" id="group_type_3" name="group_type" value="3" {if ($package_rs.group_type_id==3)} checked="checked"{/if}>
							Booking Studio
						</label>
						<label for="group_type_4" style="font-weight:normal;">
							<input type="radio" id="group_type_4" name="group_type" value="4" {if ($package_rs.group_type_id==4)} checked="checked"{/if}>
							Promotion Package
						</label>
						
					</p>				
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="package.php">Back to package list</a>
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
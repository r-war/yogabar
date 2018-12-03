{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Gallery Add</h2>	  
	    	{if isset($gallery_add)}
		  	<div class="success" id="msg-flash">
		  		{$gallery_add}
		  	</div>
		  	<br/>
		  	{/if}  	
	    	<form class="cmxform" id="fileForm" enctype="multipart/form-data"  method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Title:</label>
						<input type="text" id="title" name="title" class="required">
					</p>
					<p>
						<label for="image">Image:</label>
						<input type="file" id="image" name="image" class="required" accept="image/*">
					</p>					
					
					<p>
						<label for="title">Category:</label>
						<input type="text" id="category" name="category" class="">
					</p>
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="gallery.php">Back to Gallery list</a>
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
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />   
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	
	 <script type='text/javascript'>//<![CDATA[
    $(window).load(function(){
    $("#category").autocomplete({
        source: "autosearch.php",
        minLength: 2,
        select: function(event, ui) {
            event.preventDefault();
            $("#category").val(ui.item.label);
            $("#selected-category").val(ui.item.label);
        },
        focus: function(event, ui) {
            event.preventDefault();
            $("#category").val(ui.item.label);
        }
    });
    });//]]> 
    </script>
<script>
$(document).ready(function() {
		$("#fileForm").validate();
	});
</script>
{/literal}
{include file="admin/footer.tpl"}
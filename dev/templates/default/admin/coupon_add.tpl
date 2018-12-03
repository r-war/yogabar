{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Coupon Add</h2>	  
	    	{if isset($coupon_add)}
		  	<div class="success" id="msg-flash">
		  		{$coupon_add}
		  	</div>
		  	<br/>
		  	{/if}  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>					
					<p>
						<label for="title">Coupon Code:</label>
						<input type="text" id="name" name="name" class="required">
					</p>

                                       <p>
					<label for="title">Discount type:</label>
                                        <select id='distype' name='distype' class="required" >
                                        <option value="" >--Select discount type-- </option>
					{foreach $discount_type as $discountTyp} 
                                         <option value=" {$discountTyp['dis_type_id']} " >{$discountTyp['discount_type']}</option> 

                                        {/foreach}
                                        </select>
					</p>
                                       

					<p>
						<label for="discount">Coupon Discount:</label>
			                        <input type="text" id="discount" name="discount" class="required">
					</p>

					<p>
						<label for="discount">Coupon Valid From Date:</label>
			                       <input type="text" autocomplete="off" id="frmDt" class="required" name='frmDt' />
					</p>

					<p>
						<label for="discount">Coupon Valid End Date:</label>
			                         <input type="text"  id="toDt" autocomplete="off" class="required" name='toDt' />
					</p>	
						
					<p>
						<input class="submit" type="submit" value="Submit">
					</p>
					<p>
						<a href="coupon.php">Back to Coupon list</a>
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


	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

 
	<script src="../js/jquery-validation/dist/jquery.validate.min.js"></script>

	<script>
	$(document).ready(function() {
			$("#myform").validate();



 

 $( "#frmDt" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd-mm-yy',
     showOn: "button",
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                 
      onSelect: function(selected) {
          $("#toDt").datepicker("option","minDate", selected)
        }
    });

$( "#toDt" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd-mm-yy',
showOn: "button",
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                 
    });
	     

		});
	</script>
{include file="admin/footer.tpl"}

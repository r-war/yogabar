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
					<label for="title">Discount type:</label>
                                        <select id='distype' name='distype' class="required" >
                                        <option value="" >--Select discount type-- </option>
					{foreach $discount_type as $discountTyp} 

                                         {if $discountTyp['dis_type_id']==$smarty.post.dis_type_id|default:$coupon_rs.dis_type_id}
<option selected='true' value=" {$discountTyp['dis_type_id']} " >{$discountTyp['discount_type']}</option> 
                                         {else}
<option value=" {$discountTyp['dis_type_id']} " >{$discountTyp['discount_type']}</option> 
                                         {/if} 
                                         

                                        {/foreach}
                                        </select>

					</p>
					<p>
						<label for="txt_description">Discount:</label>
						<input type="text" id="discount" name="discount" class="required" value="{$smarty.post.discount|default:$coupon_rs.discount}">
					</p>

	<p>
						<label for="discount">Coupon Valid From Date:</label>
			                       <input type="text" autocomplete="off" id="frmDt" value='{$smarty.post.coupon_from|default:$coupon_rs.coupon_from}'class="required" name='frmDt' />
					</p>

					<p>
						<label for="discount">Coupon Valid End Date:</label>
			                         <input type="text" value='{$smarty.post.coupon_to|default:$coupon_rs.coupon_to}' id="toDt" autocomplete="off" class="required" name='toDt' />
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

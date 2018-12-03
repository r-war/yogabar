{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Coupon List</h2>
	    	<span style="float:right;"><a href="coupon_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="coupon_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Code</th>
                <th>Discount</th>
                <th>Coupon Valid From</th>
                <th>Coupon Valid From</th>
                <th>Edit</th>
                <th>Delete</th>
                 
               
	            </tr>
		        </thead> 		       
        		<tbody>
            	{foreach $coupon_rs as $coupon} 
            	<tr>
							  <td>{$coupon['code']}</td>

 <td>{$coupon['coupon_from']}</td>
  <td>{$coupon['coupon_to']}</td>

                {if $coupon['dis_type_id']==1}
                 <td>{$coupon['discount']}%</td>
                {else}
                  <td>${$coupon['discount']}</td>
                {/if}
                
                
                               
                <td><a href="coupon_edit.php?id={$coupon['id']}" >Edit</a></td>
                <td><a href="coupon.php?id={$coupon['id']}" onClick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							{foreachelse}
							<tr>
								<td colspan="6">No Records Found</td>
							</tr>
							{/foreach}
        		</tbody>
    				</table>
				</div> 
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.dataTables.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    $('#coupon_list').DataTable();
		});
	</script>
{include file="admin/footer.tpl"}

{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Package List</h2>
	    	<span style="float:right;"><a href="package_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="package_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Group Type</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
                <!--<th></th> -->
	            </tr>
		        </thead> 		       
        		<tbody>
            	{foreach $package_rs as $package} 
            	<tr>
							  <td>{$package['name']}</td>
                <td>{$package['price']}</td>
                <td> {if $package['group_type_id'] eq 1} Group Class {elseif $package['group_type_id'] eq 2} Private Class {elseif $package['group_type_id'] eq 3} Booking Studio {else} Year End Bundle {/if} </td>
                <td>{$package['created_at']}</td>
                <td>{$package['updated_at']}</td> 
                <td><a  lang='{$package['id']}' class='actdeact' >{if $package['active'] eq 1} Active {else} Deactive {/if} </a> </td>               
               <!-- <td><a href="package_edit.php?id={$package['id']}" >Edit</a></td>
                <td><a href="package.php?id={$package['id']}" onclick="return confirm('Are You Sure?')">Delete</a></td> -->
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
	    $('#package_list').DataTable();

$( ".actdeact" ).on( "click", function() { 
     var ids=$(this).attr('lang') ;


$.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
	                data: $( "#myform" ).serialize()+"&id="+ids+"&mode=planActDeact",
	                success:function(data){
	                	
                             if(data)
                             {
                                alert("Changes made successfully");

                             }
                             else
                             {
                                alert("Try again");
                             }

                            location.href="package.php";
		             
	      		}
	        });


});


		});
	</script>
{include file="admin/footer.tpl"}

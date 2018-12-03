{include file="admin/header.tpl"}
<body class="innerbg"> 
	{include file="admin/nav.tpl"}
	<div class="container" >
	  <!-- Main component for a primary marketing message or call to action -->
	 <!-- <div class="col-md-3"></div>-->
	  <div class="col-md-12 ">  	
	    <div id="animation" class="white-bg" style="width:100%;">
	    	<h2>Users List</h2>
	    	<!--<span style="float:right;"><a href="package_add.php" id="Add">Add</a></span> -->
	    	<br />
	    	<div class="table-responsive">
				  <table id="users_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>mobile</th>
                <th>Card details</th>
                <th>Package details</th>
                <th>Action</th>
                <th>Mail Verification</th>
                 
              
	            </tr>
		        </thead> 		       
        		<tbody><tr>
{foreach $user_list as $userlist} 
 <td>{$userlist['user_name']}</td>
 <td>{$userlist['email']}</td> 
  <td>{$userlist['mobile_no']}</td>
  <td>{$userlist['cardDtStr']}</td>
 <td>{$userlist['package_id']}</td>
 <td><a href="reg_users.php{$userlist['blkArg']}" onclick="return confirm('Are You Sure?')">{if $userlist['blocked'] eq 1} Active  {else} Blocked {/if}</a></td>
 <td> {if $userlist['active'] eq 1} Success  {else} Not yet {/if} </td> </tr>
{foreachelse}
							<tr>
								<td colspan="6">No Records Found</td>
							</tr>
							{/foreach}
            	<!-- {foreach $package_rs as $package} 
            	<tr>
							  <td>{$package['name']}</td>
                <td>{$package['price']}</td>
                <td> {if $package['group_type_id'] eq 1} Group Class {elseif $package['group_type_id'] eq 2} Private Class {elseif $package['group_type_id'] eq 3} Booking Studio {else} Year End Bundle {/if} </td>
                <td>{$package['created_at']}</td>
                <td>{$package['updated_at']}</td>                
                <td><a href="package_edit.php?id={$package['id']}" >Edit</a></td>
                <td><a href="package.php?id={$package['id']}" onclick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
							{foreachelse}
							<tr>
								<td colspan="6">No Records Found</td>
							</tr>
							{/foreach} -->
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
	    $('#users_list').DataTable();
		});
	</script>
{include file="admin/footer.tpl"}

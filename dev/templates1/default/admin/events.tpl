{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Events List</h2>
	    	<span style="float:right;"><a href="events_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="events_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Date/Time</th>
                <th>Is Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th ></th>
                <th ></th>
	            </tr>
		        </thead> 		       
        		<tbody>
            	{foreach $events_rs as $events} 
            	<tr>
							  <td>{$events['name']}</td>
							  <td>{$events['event_date']}</td>
                <td>{($events['is_active']==1)?"Yes":"No"}</td>
                <td>{$events['created_at']}</td>
                <td>{$events['updated_at']}</td>                
                <td><a href="events_edit.php?id={$events['id']}" >Edit</a></td>
                <td><a href="events.php?id={$events['id']}" onclick="return confirm('Are You Sure?')">Delete</a></td>
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
	    $('#events_list').DataTable();
		});
	</script>
{include file="admin/footer.tpl"}
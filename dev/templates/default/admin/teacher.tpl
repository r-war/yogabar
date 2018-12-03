{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Teacher Profile</h2>
	    	<span style="float:right;"><a href="teacher_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="teacher_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Is Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
                <th></th>
	            </tr>
		        </thead> 		       
        		<tbody>
            	{foreach $teacher_rs as $teacher} 
            	<tr>
							  <td>{$teacher['name']}</td>
                <td>{($teacher['is_active']==1)?"Yes":"No"}</td>
                <td>{$teacher['created_at']}</td>
                <td>{$teacher['updated_at']}</td>                
                <td><a href="teacher_edit.php?id={$teacher['id']}" >Edit</a></td>
                <td><a href="teacher.php?id={$teacher['id']}" onClick="return confirm('Are You Sure?')">Delete</a></td>
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
	    $('#teacher_list').DataTable();
		});
	</script>
{include file="admin/footer.tpl"}
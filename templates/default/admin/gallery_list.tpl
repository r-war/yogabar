{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Gallery List</h2>
	    	<span style="float:right;"><a href="gallery_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="gallery_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Name</th>
                <th>Thumb</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
	            </tr>
		        </thead> 		       
        		<tbody>
            	{foreach $gallery_rs as $gallery} 
            	<tr>
							  <td>{$gallery['name']}</td>
                <td><img src="../gallery/{$gallery['img_path']}" width="90" height="90"></td>
                <td>{$gallery['name_cat']}</td>
                <td>{$gallery['created_at']}</td>
                <td>{$gallery['updated_at']}</td>                
                <td><a href="gallery.php?id={$gallery['id']}" onclick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
              
							{foreachelse}
							<tr>
								<td colspan="5">No Records Found</td>
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
	    $('#gallery_list').DataTable();
		});
	</script>
{include file="admin/footer.tpl"}
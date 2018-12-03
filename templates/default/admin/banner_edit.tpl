{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Banner List</h2>
	    	<span style="float:right;"><a href="banner_add.php" id="Add">Add</a></span>
	    	<br />
	    	<div class="table-responsive">
				  <table id="gallery_list" class="display table" cellspacing="0" width="100%">
		        <thead>
	            <tr>
                <th>Title</th>
                <th>Thumb</th>
                <th>Description</th>
                <th>Link URL</th>
                <th>Mode</th>
                <th>Delete</th>
                 
	            </tr>
		        </thead> 		       
        		<tbody>
            	{foreach $banner_rs as $gallery} 
            	<tr>
							  <td>{$gallery['ban_title']}</td>
                <td><img src="../gallery/{$gallery['img_path']}" width="90" height="90"></td>
                <td>{$gallery['bann_desc']}</td>
                <td>{$gallery['btn_link']}</td>
                <td><a  lang='{$gallery['ban_id']}' class='actdeact' >{if $gallery['active'] eq 1} Active {else} Deactive {/if} </a></td>                
                <td><a href="banner_edit.php?id={$gallery['ban_id']}" onclick="return confirm('Are You Sure?')">Delete</a></td>
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

 
 $('#gallery_list').on( 'click', '.actdeact', function () {

     

var ids=$(this).attr('lang') ;


$.ajax({
	            	type: "POST",
	                url: "gallAddAjax.php",
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

                            location.href="banner_edit.php";
		             
	      		}
	        });


});



		});
	</script>
{include file="admin/footer.tpl"}

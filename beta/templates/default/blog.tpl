{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">
	    <div id="animation" class="white-bg">  
	    	<div class="container">	
	    			<div class="row">
	    				<div class="">
	    					<h2>Blogs</h2>
	    				</div>
	    			</div>    		
			    	<div class="row">
		        	{foreach $blog_rs as $blog}
							  <div class="col-sm-6">
							  	<a href="blog_detail.php?id={$blog['id']}">{$blog['name']}</a> <sub>created at</sub> {$blog['created_at']}
							  	<br/>
							  	{{$blog['description']}|replace:'../':''|truncate:600:"... <a href='blog_detail.php?id={$blog['id']}'>read more</a>":true}
							  </div>
							{foreachelse}							
								<div class="col-sm-12">No Records Found</div>						
							{/foreach}
						</div>
						<div class="row">
		    			<div class="col-sm-6">
		  					{* display pagination header *}
								Showing {$paginate.first}-{$paginate.last} out of {$paginate.total} displayed.
							</div>
							<div class="col-sm-6">
								{* display pagination info *}
								Page: {paginate_prev} {paginate_middle page_limit="2"} {paginate_next}
		  				</div>
						</div> 
					</div>
				</div>
	    </div>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>
{include file="footer.tpl"}
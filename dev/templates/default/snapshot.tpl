{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-12 ">
	    <div  class="white-bg">
	    	<div class="container">	
	    		<div class="row">
	    			<h3>Gallery</h3>
	    		</div>
	    				{assign "catchk" "1" nocache}
							{assign "cat" "" nocache}
							{foreach $gallery_rs as $key => $gallery}
								{if $gallery['img_category'] neq $cat}
									{assign "cat" $gallery['img_category'] nocache}
									{if $key neq 0}
										</div>
									</div>
									{/if}
									<div class="row">	    		
										<div id="" class="col-sm-12" >
											<h5>{$gallery['img_category']}</h5>									
								{/if} 
								<a style="float:left;padding:1px;" href="gallery/{$gallery['img_path']}" title="{$gallery['name']}" data-dialog>
						      <img src="{$gallery['thumb']}" alt="{$gallery['name']}">
						    </a>						  
							{foreachelse}
								<div class="row">	    		
									<div id="" class="col-sm-12" >
										No image found.									
							{/foreach}	    
							</div>
						</div>
						<font color="deeppink">
						<div class="row">
							<div class="col-sm-12" >
								<a href="snapshot.php">All</a>
								{foreach $result_cat as $cat}
									|
									{if $smarty.get.cat eq $cat['img_category']}
										{$cat['img_category']}
									{else}
									 <font color="deeppink"><a href="snapshot.php?cat={$cat['img_category']}">{$cat['img_category']}</a></font>
									{/if}
								{/foreach}
							</div>
						</div>
						</font>
					<div id="blueimp-gallery-dialog" data-show="fade" data-hide="fade">
				    <!-- The gallery widget  -->
				    <div class="blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls">
			        <div class="slides"></div>
			        <a class="prev">‹</a>
			        <a class="next">›</a>
			        <a class="play-pause"></a>
				    </div>
					</div>
	    	</div>
	    </div>	    
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/south-street/jquery-ui.css" id="theme">
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
			<script src="js/jquery.image-gallery.min.js"></script>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>
{include file="footer-no-bounce.tpl"}
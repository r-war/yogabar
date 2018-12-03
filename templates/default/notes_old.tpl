{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div class="white-bg">
	    	<h1>Events</h1>
	    	<br/>
	    	<div id="events">

	    	<!-- <ul class="list-group">
  <li class="list-group-item">New <span class="badge">12</span></li>
  <li class="list-group-item">Deleted <span class="badge">5</span></li> 
  <li class="list-group-item">Warnings <span class="badge">3</span></li> 
</ul> -->
	    	{foreach $events_rs as $key => $events} 
					<a  href="#;" data-id="{$events['id']}" class="showme" title="{$events['name']}">
			      {$events['name']} on {$events['event_date']} 
			    </a>
			    {if $key == 0}
			 <!--   <p>
			    	{{$events['description']}|replace:'../':''|truncate:600:"... <a href='#;' data-id='{$events['id']}' class='showme'>read more</a>":true}
			    <p>-->
			    {/if}
			    <br/>
				{foreachelse}
					No Events found.
				{/foreach}
				</div>				
	    </div>
	    <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">		    
		      <!-- Modal content-->
		      <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			   <h4 class="modal-title">Event</h4>
			</div>			<!-- /modal-header -->
			<div class="modal-body">
                   	  Content is loading...
	                </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		      
		    </div>
		  </div>


		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>
{literal}
<script src="js/jquery.min.js"></script>
<!-- BS JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    jQuery(function($){
         $('a.showme').click(function(ev){
             ev.preventDefault();
             var uid = $(this).attr('data-id');

             $.get('events.php?id=' + uid, function(html){
                 $('#myModal .modal-body').html(html);
                 $('#myModal').modal('show', {backdrop: 'static'});
             });
         });
    });

    $('.active').click(function(){
    	$(this).toggleClass( "open" );
    });
</script>
{/literal}
{include file="footer-no-bounce.tpl"}
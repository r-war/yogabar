{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
<div class="even_tab" style="background:#fff;">

	 
	<div class=" divider_row">
  
            <div class="col-md-4 col-sm-4 col-xs-3">
                <h4 class="text-center">Date</h4>                      
            </div>
                     <div class="col-md-4 col-sm-4 col-xs-3">
                <h4 class="text-center">Event</h4>                      
            </div>
                     <div class="col-md-4 col-sm-4 col-xs-3">
                <h4 class="text-center">Registration</h4>                      
            </div>
	</div>
	    {foreach $events_rs as $key => $events} 
		<div class="row divider_row ">
  
            <div class="col-md-4 col-sm-4 col-xs-3 text-center">
                11 - 12 March 2017                 
            </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 text-left">
                            <a  href="#;" data-id="{$events['id']}" class="showme" title="{$events['name']}">
			      {$events['name']} on  
{$events['event_date']}  
  


 </a>                  
            </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 text-center">
                <button class="btn btn-default btn-sm center-block">Register</button>                  
            </div>
	</div>
		{/foreach}	
	
	
	

</div>
	  <!-- Main component for a primary marketing message or call to action -->



	 <!-- <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div class="white-bg">
	    	<h1>Events</h1>
	    	<br/>
	    	<div id="events">

	    	   <ul class="list-group">
 <form action="events_checkout.php" id='evpackFrm' name="evpackFrm" method="post" >
 <input type='text' name="hidid" id="hidid" value=""  > 
<input type='text' name="cklog" id="cklog" value="{$ChkLogin}"  >  

	    	{foreach $events_rs as $key => $events} 
				<li class="list-group-item">
                                          
                                       <a  href="#;" data-id="{$events['id']}" class="showme" title="{$events['name']}">
			     <div class="col-sm-8"> {$events['name']} on  </div>
<div class="col-sm-4"><span class="badge">{$events['event_date']}  
  


</span> </a> {if $events['paylink']==1 &&   $events['events_name'] !=""    } 
   <button class='events' lang='{$events['id']}' type="button"  >Click to Pay $ {$events['price']} </button>
  {/if}   </div></li>
			    
</form>
			    {if $key == 0}
			 
			    {/if}
</ul>
			    <br/>
				{foreachelse}
					No Events found.
				{/foreach}
				</div>				
	    </div>-->
	    <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog modal_eve">		    
		       
		      <div class="modal-content" id='modalImg'>
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			   <h4 class="modal-title">Event</h4>
			</div>			 
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


   $('.events').click(function(ev){
             ev.preventDefault();

      var notsids=$(this).attr('lang');
      var cklogin=$('#cklog').val();

        if(notsids>0 && cklogin==1)
        {
 $('#hidid').val(notsids);
document.getElementById("evpackFrm").submit();

        }
        else
         { 
           location.href='login.php';
         } 

    });


    $('.active').click(function(){
    	$(this).toggleClass( "open" );
    });
</script>
{/literal}
{include file="footer-no-bounce.tpl"}

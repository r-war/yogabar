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
	    				<div class=""><div style="float:left;"><h2>Teacher Profile</h2></div>
                        <div style="float:right;">{foreach $teacher_rs as $teacher}
                            	<a href="teacher_detail.php?id={$teacher['id']}" >{$teacher['name']}</a>&nbsp;&nbsp;|
                             {/foreach}</div> 
             		</div>
	    	</div>    		
				<div class="row">
         	    		<div class="">	 
		        				{foreach $teacher_rs as $teacher}
							  		<div class="teacher">{$teacher['name']}
							  			<!--<a href="teacher_detail.php?id={$teacher['id']}"></a>  -->
							  			<br/>
							  			{{$teacher['description']}|replace:'../':''|truncate:600:"... <a href=
                                        'teacher_detail.php?id={$teacher['id']}'>read more</a>":true}
							  		</div>
									{foreachelse}							
										<div class="col-sm-12">No Records Found</div>						
									{/foreach}
						</div>
					</div>
	    </div>
        	    </div>
	  
  	</div>
        
          <div class="soical-media visible-sm visible-xs">
                {include file="social.tpl"}
            </div>
             
             <div class="web_soical-media">
                 {include file="social.tpl"}
             </div>
	</div>


{include file="footer.tpl"}
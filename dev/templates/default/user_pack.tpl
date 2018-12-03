{include file="header.tpl"}
<body class="innerbg">
	{include file="nav.tpl" }
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <!--<div class="col-md-5"></div> -->
	  <div class="col-md-12 ">
	    <div  class="white-bg" style="width:100%">
	      <form method="post" target="_top" class="user_packs">
 
                                        					
        	<h3> User Package Subscriptions List:</h3>        
        	 
		<table id="package_list" class="display table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Sl.No</th>
                    <th>Package Name</th>
                    <th>Discount Applied</th>
					<th>Price</th>
              		<th>Payment Status</th>
                    <th>Subscription Status</th>
					<th>Mode&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span></th>
                 	<!--<th>Mode&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span></th>-->
			   </tr>
			</thead>  


			<tbody> {assign var=Row  value=0} 
                   {assign var=UnChKRow  value=0} 
                        {foreach $getAllSubunSubList as $keys=>$package}

                        {if {$package['un_subscrib']}==1}
                            {assign var=UnChKRow value=$UnChKRow+1} 
                        {/if}
                         
                      {if {$package['un_subscrib']}==0}
                        

                        <tr>
                        <td>{$Row+1}</td> 
                        <td>{$package['name']}</td> 
                        <td>{if {$package['discount_applied']}==1}
                         Yes    
                        {else}
                         No
                        {/if}</td>
                        <td>
                         {if {$package['discount_applied']}==1}
                         ${$package['disPrice']}     
                        {else}
                        ${$package['price']}
                        {/if}
                        

                        </td> 
                        <td>   
                              
                               {if {$package['Paysucc']}==1}
                                Success <!--{$package['res_subcri_id']} -->
                                {else}
                                Failure 
                               {/if}
 
                               
                        </td> 

<td>   
                              
                               {if {$package['subcriSucc']}==1 }
                                Success 
                                {else}
                             {if {$package['pak_Intervel_id']}==1  }
			 <button type="button" class='subbtncls' lang='{$package['pay_id']}' 
                        id='sbtn_{$package['pay_id']}'> Subscribe</button>
                                {/if}
                               {/if}
 
                               
                        </td> 
                        <td>
                            
                            {if {$package['subcriSucc']}==1 && $package['Paysucc']==1 }
                                <button type="button" class='btncls' lang='{$package['pay_id']}' 
                        id='sbtn_{$package['pay_id']}'> UnSubscribe</button>
                                {else}
                                 ------
                               {/if}
                        </td>
                        <!--<td align='center'>
                        <span id='btnspan_{$package['subcr_id']}'>
                        {if {$package['deleted']}==1}
                        <button type="button" class='btncls' lang='{$package['subcr_id']}' 
                        id='sbtn_{$package['subcr_id']}'>{$package['subunsub']}</button>
                        {else}UnSubscribe{/if}
                        </span>
                        </td> -->
                        </tr>
                     {assign var=Row value=$Row+1} 
                     {/if}    

                {/foreach}

                {if {$Row}==0}
                <tr>
                <td align='center' colspan="6"><a href='package.php'>No Records Found Click here to add subscribe Package </a> </td>
                </tr>
                {/if}
                    {if {$UnChKRow}>0}
                    <br>
                    <th>Sl.No</th>
                    <th>Package Name</th>
                     <th>Discount Applied</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Subscription Status</th>
                    <th> </th> 
                    {/if}
                    {assign var=UNRow  value=0} 
                    {foreach $getAllSubunSubList as $keysUN=>$packageUn} 
                    {if {$packageUn['un_subscrib']}==1}
                    <tr>
                    <td>{$UNRow+1}</td> 
                    <td>{$packageUn['name']}</td> 
                    <td>No </td>
                    <td>{$packageUn['price']}</td> 
                    <td>{if {$package['Paysucc']}==1}
                                Success
                                {else}
                                Failure 
                               {/if}</td>
                     <td>UnSubscribeted</td>
<td> </td>  
                    </tr> 
                    {assign var=UNRow value=$UNRow+1} 
                    {/if}    
                {/foreach}

                          

			</tbody>
		</table>
        	 
 
	        
	        
	        
	        
	        
	        
	              	 	
        	
				</form>
	  	</div>
		  <div class=" col-md-5 col-md-offset-5 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

     

    $(document).ready(function() {
      
       
        
$(".btncls").click(function(){
	
var Selval=$(this).attr('lang');
 

var r = confirm("Are you want to UnSubscribed this package? ");
		if (r == true) {


                if(Selval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#frmsub").serialize()+"&mode=delsub&ids="+Selval,
	dataType: 'HTML', 
	success:function(data){
 $('#ldimg').hide();
         var Spldata=data.split('#$#');
 //alert(data)
             if(Spldata[0]==0)
             {
                alert("Session out");
                location.href="logout.php";
             }
             else if(Spldata[0]==1)
             {
                alert(Spldata[1]); 
               //location.href="user_pack.php";

             }
             else if(Spldata[0]==2)
             {
                alert(Spldata[1]); 
                location.href="user_pack.php";

            }
	 
	}
	});
 
   }
   else
   {
 
   alert("Invalid details")
   }


		    
		}  
 


  

});

$(".subbtncls").click(function(){
	
var UnSelval=$(this).attr('lang');

          if(UnSelval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#frmsub").serialize()+"&mode=misssub&ids="+UnSelval,
	dataType: 'HTML', 
	success:function(data){
 $('#ldimg').hide();
         var Spldata=data.split('#$#');
 //alert(data)
              if(Spldata[0]==0)
             {
                alert("Session out");
                location.href="logout.php";
             }
             else if(Spldata[0]==1)
             {
                alert(Spldata[1]); 
                location.href="user_pack.php";

             }
             else if(Spldata[0]==2)
             {
                alert(Spldata[1]); 
                location.href="user_pack.php";

            }
	 
	}
	});
 
   }
   else
   {
 
   alert("Invalid details")
   }




}); 

          
        
    
        

    });
</script>
{include file="footer-no-bounce.tpl"}

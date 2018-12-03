{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  
	  <div class="col-md-12 ">  	
	    <div class="white-bg" style="width:100%">
	    	<h2>Package Subscription List</h2>
	    	 <span style="float:right;"><a href="report.php" id="Add">Back</a></span> 
	    	<br />
	    	<div class="table-responsive">
				  <table id="package_list" class="display table" cellspacing="0" width="100%">
			<thead>
			<tr>
				<th>No</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Pak. Name</th>
				<th>Price</th>
				<th>Pay Dt. </th>
				<th>Pay Status</th>
				<th>Subscrip. Status&nbsp;<span id='ldimg' style='display:none;'>
				<image src='../images/loadingImg.gif'></span></th>
				 
			</tr>
			</thead>  


			<tbody> {assign var=Row  value=0} 
                       {assign var=UnChKRow  value=0} 
                        {foreach $getAllSubunSubList as $keys=>$package}

                        <tr>
                        <td>{$Row+1}</td> 
                          <td>{$package['user_name']}</td> 
                          <td>{$package['email']}</td> 
                        <td>{$package['name']}</td> 
                        <td>{$package['price']}</td> 
                        <td>{$package['created_at']}</td> 
                         <td>
                           {if {$package['Paysucc']}==1}
                                Success  <!--{$package['res_subcri_id']} -->
                                {else}
                                Failure 
                               {/if} 
                         </td>
                       
                        <td>
                              
                              {if $package['pak_Intervel_id']==1 }  
                          
                              
                              {if $package['Paysucc']==1 && $package['un_subscrib']==0 && $package['subcriSucc']==1}
                                  <span id="unsubmode_{$package['pay_id']}"> <button type="button" class='btncls' lang='{$package['pay_id']}' id='sbtn_{$package['pay_id']}'> UnSubscribe</button> </span>
                                 
                                {elseif $package['Paysucc']==1 && $package['un_subscrib']==0 && $package['subcriSucc']==0 }
                                  <span id="unsubmode_{$package['pay_id']}"> <button  type="button" class='subbtncls' lang='{$package['pay_id']}' 
                        id='sbtn_{$package['pay_id']}'> Subscribe</button> </span>
                                {elseif $package['Paysucc']==1 && $package['un_subscrib']==1 &&  $package['subcriSucc']==1}
                                   Unsubscribed 
                                {else}
                                   
                                 {/if}


                              
                              {else} 

                                single time 

                             
                              {/if} 
   
                             <!-- {if {$package['subcriSucc']}==1 }
                      
                                 {if $package['Paysucc']==1 && $package['un_subscrib']==0 }
                                  <span id="unsubmode_{$package['subcriSucc']}"> <button type="button" class='btncls' lang='{$package['pay_id']}' id='sbtn_{$package['pay_id']}'> UnSubscribe</button> </span>
                                 
                                {elseif $package['Paysucc']==0 && $package['un_subscrib']==0 }
                                   Missing subscription
                                {elseif $package['Paysucc']==1 && $package['un_subscrib']==1 }
                                   Unsubscribed 
                                 {/if}
                                                              
                            
                                
                                
                               {else}
                                 
                                single
                                 
                               {/if} -->
                            
                        </td> 

                      
                       
                        
                        </tr>
                     {assign var=Row value=$Row+1} 
                         

                {/foreach}

                 
				</div> 
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.dataTables.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    $('#package_list').DataTable();


$("#package_list").on("click", ".btncls",  function() { 


	
var Selval=$(this).attr('lang');
  

var r = confirm("Are you want to UnSubscribed this package? ");
		if (r == true) {


                if(Selval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_admin_ajax.php",
	data: $("#frmsub").serialize()+"&mode=delsub&ids="+Selval,
	dataType: 'HTML', 
	success:function(data){

//alert(data);
 $('#ldimg').hide();
         var Spldata=data.split('#$#');
 //alert(data)
             if(Spldata[0]==0)
             {
                alert("Session out");
                //location.href="logout.php";
             }
             else if(Spldata[0]==1)
             {
                alert(Spldata[1]); 
               //location.href="user_pack.php";

             }
             else if(Spldata[0]==2)
             {
                alert(Spldata[1]);
              $('#sbtn_'+Selval).attr('lang','');
$('#sbtn_'+Selval).html("");
            $('#sbtn_'+Selval).html("<font color='green'>UnSubscribred</font>") 

               // location.href="user_pack.php";

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


$("#package_list").on("click", ".subbtncls",  function() {



var UnSelval=$(this).attr('lang');
 
          if(UnSelval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_admin_ajax.php",
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
                location.href="report.php";

             }
             else if(Spldata[0]==2)
             {  
                  $( "#sbtn_"+UnSelval ).removeClass( "subbtncls" ).addClass( "btncls" );
                  $( "#sbtn_"+UnSelval ).html("UnSubscribe");
                 
                //alert(Spldata[1]); 
                //location.href="user_pack.php";

            }
	 
	}
	});
 
   }
   else
   {
 
   alert("Invalid details")
   }





 });


/* $( ".actdeact" ).on( "click", function() { 
     var ids=$(this).attr('lang') ;


$.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
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

                            location.href="package.php";
		             
	      		}
	        });


}); */


		});
	</script>
{include file="admin/footer.tpl"}
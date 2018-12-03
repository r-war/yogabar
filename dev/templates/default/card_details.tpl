{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg" style="width:60%; float:right;">
       
    <h2>Card details </h2>
        <span style="float:right;"><span id='ErrMsg'></span>&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span>  &nbsp;<a href="card_dt_add.php" id="Add">Add</a></span>  
        <br />
        <div class="table-responsive">
          <table id="users_list" class="display table" cellspacing="0" width="100%">
            <thead>
              <tr>
                 <th>Name</th>
                 <th>Card No</th>
                  <th>Card Expired On</th>
                <!--<th>Customer Id </th> -->
                 <!-- <th>Edit </th>
                   <th>Delete </th><span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span>  -->
               
              </tr>
            </thead>           
            <tbody><tr>
{foreach $userCardList as $userlist} 
  
 <td>{$userlist['holder_name']}</td>
<td>{$userlist['cardDtStr']}</td> 
<td>{$userlist['expr_date']}</td> 

<!--<td> {if $userlist['active'] eq 1} Active  {else} Deactive {/if} </td> --> 
 <!--<td><a href="card_dt_edit.php?id={$userlist['c_id']}">Edit</a></td> -->
 <td><input type='button' class='btn btn-default center-block delCls' lang='{$userlist['tk_id']}' name='del_{$userlist['tk_id']}'  id='del_l{$userlist['tk_id']}' value='Delete'>   </td>  
  </tr>
{foreachelse}
              <tr>
                <td colspan="6">No Records Found</td>
              </tr>
              {/foreach}
              <!-- {foreach $package_rs as $package} 
              <tr>
                <td>{$package['name']}</td>
                <td>{$package['price']}</td>
                <td> {if $package['group_type_id'] eq 1} Group Class {elseif $package['group_type_id'] eq 2} Private Class {elseif $package['group_type_id'] eq 3} Booking Studio {else} Year End Bundle {/if} </td>
                <td>{$package['created_at']}</td>
                <td>{$package['updated_at']}</td>                
                <td><a href="package_edit.php?id={$package['id']}" >Edit</a></td>
                <td><a href="package.php?id={$package['id']}" onclick="return confirm('Are You Sure?')">Delete</a></td>
              </tr>
              {foreachelse}
              <tr>
                <td colspan="6">No Records Found</td>
              </tr>
              {/foreach} -->
            </tbody>
            </table>
        </div>
      </div>
      <div class=" col-md-6 col-md-offset-4 soical-media">
        {include file="social.tpl"}
      </div>

  </div>

 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>  
<script type="text/javascript" src="../web/js/jquery.js"></script>
<script type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
		    

    $(document).ready(function() { 
  $('#ErrMsg').html("");
  $(".delCls").click(function () { 

	var r = confirm("Are sure ");
	if (r == true) 
	{
         $('#ldimg').show();
         var Dels=$(this).attr('lang');

         $.ajax({
	type: "POST",
	url: "frntdelAjax.php",
	data: $("#frmsub").serialize()+"&mode=CardDel&ids="+Dels,
	dataType: 'HTML', 
	success:function(data){
          $('#ldimg').hide();
          if(data==1)
          {
              $('#ErrMsg').html("Data deleted successfully");

              setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                          location.href='card_details.php'; 
                             
             });
             }, 2000);

              
          }
          else if(data==0)
          {
              $('#ErrMsg').html("Session out");
               setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                          location.href='logout.php';
                             
             });
             }, 2000);
              
          }
          else
          {
               $('#ErrMsg').html("No data found");
               setTimeout(function(){
			 $("#ErrMsg").fadeOut("slow", function () {
			 $('#ErrMsg').text('');
			 $('#ErrMsg').show();
                          location.href='card_details.php'; 
                             
             });
             }, 2000);

          }       
  
	 
	}
	});

        
           


	    
	} 
	else
	{
	    
	}

 });


   });
</script>
{include file="footer-no-bounce.tpl"}

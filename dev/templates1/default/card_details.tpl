{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg" style="width:60%; float:right;">
       
    <h2>Card details </h2>
        <span style="float:right;"><a href="card_dt_add.php" id="Add">Add</a></span>  
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
                   <th>Delete </th> -->
               
              </tr>
            </thead>           
            <tbody><tr>
{foreach $userCardList as $userlist} 
  
 <td>{$userlist['holder_name']}</td>
<td>{$userlist['cardDtStr']}</td> 
<td>{$userlist['expr_date']}</td> 

<!--<td> {if $userlist['active'] eq 1} Active  {else} Deactive {/if} </td> --> 
 <!--<td><a href="card_dt_edit.php?id={$userlist['c_id']}">Edit</a></td>
 <td><a href="card_details.php?id={$userlist['c_id']}" onclick="return confirm('Are You Sure?')">Delete</a></td> -->
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
 alert(1)
   $('.myButton').click(function() {
    alert(this.id);
});


   });
{include file="footer-no-bounce.tpl"}

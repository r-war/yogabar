{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div  class="white-bg" style="width:100%;">
       
        <div class="col-md-12 contact">
          <header>Edit card details : </header>
          <span style="float:right;"><label><a href="card_dt_add.php" id="Add">Add</a>&nbsp;<label><a href="card_details.php" id="Add">View</a></label></span> 
 
        <br />
          {if isset($contact_post) }            
            <p style="color:green">{$contact_post}</p>
          {/if}

          {if isset($contact_post_err) }            
            <p style="color:red">{$contact_post_err}</p>
          {/if}
            
             
             
              {if isset($smarty.session.UNAME)}
                	  
  <form method="POST" name='unameId' id='unameId' action="card_dt_edit.php?id={$ids}"> 
     
			<label>Name: <input type="tel" autofocus required  name="uname"
  value='{$uname}' placeholder="Card Holder's Name"   id="inputuName"> &nbsp; </label> 

<br>
 <label>Card No : <input type="tel" autofocus required  name="cardno" value='{$cardno}' placeholder="Card No"    id="inputcardno"></label>
<br>
 <label>CVV No : <input type="tel" autofocus required  name="cvno" value='{$cvno}' placeholder="CVV"    id="inputcv"></label>
<br> 
<label>Card Valid Month/Year : <select id='expmonth' name='expmonth' required >
<option value=''>--Select Year--</option>
{foreach $usermonthArr as $userlist}
 
 {$userlist}
 
 {/foreach}
 </select>
  
 
  <input type="tel" autofocus required  name="expyr" value='{$expyr}' placeholder="Year" size='5' maxlength='4'   id="inputexpyr">
<br>
  
 <input type='submit' name='frmSubmit' value='Update'>
 
      
	  	 
 	      {/if}
              
              </form> 

 

   
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

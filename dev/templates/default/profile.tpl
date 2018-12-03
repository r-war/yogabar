{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg pull-right col-md-5">
       
        <div class="col-md-12 contact">
          <h3 class="text-center">Profile </h3>
          <hr/>
          {if isset($contact_post) }            
            <p style="color:green">{$contact_post}</p>
          {/if}

          {if isset($contact_post_err) }            
            <p style="color:red">{$contact_post_err}</p>
          {/if}
            <form class="form-horizontal" method="POST" name='unameId' id='unameId' action="profile.php"> 
             
             
              {if isset($smarty.session.UNAME)}
                	{foreach $userList as $userListVal} 
			<div class="form-group">
        <label class="col-md-3">Name :  </label> 
          <div class="col-md-8">
             <input type="tel" autofocus  class="from-control"   name="uname" value='{$userListVal['user_name']}' placeholder="User Name"   id="inputuName"> 
          </div>
      </div>
        <div class="form-group">
        <label class="col-md-3">Mobile :  </label> 
          <div class="col-md-8">
             <input type="tel" autofocus   class="from-control" name="mobile" value='{$userListVal['mobile_no']}' placeholder="Mobile"    id="inputmobile"> 
          </div>
      </div>
        <div class="form-group">
        <label class="col-md-3">Email :  </label> 
          <div class="col-md-8">
          <input type="tel" readonly  autofocus   class="from-control" name="email" value='{$userListVal['email']}'     id="inputemail"> 
          </div>
      </div>
    
 <label><a href='change_pwd.php' class="btn btn-sm btn-default">Click here to change password</a></label>
<br>
<label><a href='card_dt_add.php' class="btn btn-sm btn-default">Click here to add card details</a></label>
<br>
 
<label><a href='card_details.php' class="btn btn-sm btn-default">Click here to view card details</a></label>
<br>
<label style="text-align: center;"><input type='submit' name='frmSubmit' class="btn btn-default" value='Update'></label>

			{/foreach} 
 	      {/if}
              
              </form> 

 <!-- <form method="POST" name='unameId1' id='unameId1' action="profile.php"> 
             <input type='hidden' id='hid' name='hid' value='cardde'>
            	{foreach $userList as $userListVal} 
			<label>Card details: <input type="tel" autofocus   name="carddt" value='{$userListVal['cardDtStr']}' placeholder="Card details" required  id="inputcarddt"> &nbsp;<input type='submit' value='Update'> </label> 
			{/foreach}   

 	      
              
             </form>  


<form method="POST" name='unameId2' id='unameId2' action="profile.php"> 
             <input type='hidden' id='hid' name='hid' value='mobile'>
            	{foreach $userList as $userListVal} 
			<label>Mobile : <input type="tel" autofocus   name="mobile" value='{$userListVal['mobile_no']}' placeholder="Mobile" required  id="inputmobile"> </label> 

<input type='submit' value='Update'>
			{/foreach}   

 	      
              
             </form> 


<form method="POST" name='unameId3' id='unameId3' action=""> 
             <input type='hidden' id='hid' name='hid' value='mobile'>
            	{foreach $userList as $userListVal} 
			<label>Email: <input type="tel" readonly autofocus   name="email" value='{$userListVal['email']}'     id="inputemail">  </label> 
			{/foreach}   

 	      
              
             </form> -->

 <!--<form method="POST" name='unameId1' id='unameId1' action="profile.php"> 

  {foreach $userList as $userListVal} 
<input type='hidden' id='hid' name='hid' value='cardde'>
 <label>Card details:<input type="tel" autofocus required name="carddt" value='{$userListVal['cardDtStr']}'  placeholder="Card details"   id="inputcarddt"> &nbsp;<input type='submit' value='Update'>  </label> <br>
{/foreach} 

</form>  -->  
        </div>
      </div>
      <div class=" col-md-3 col-md-offset-8  soical-media" style="padding-left: 60px;">
        {include file="social.tpl"}
      </div>

  </div>

 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>  
<script type="text/javascript" src="../web/js/jquery.js"></script>
<script type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
		    

    $(document).ready(function() { 
 
   /* $('.myButton').click(function() {
    alert(this.id);
}); */


   });
</script>
{include file="footer-no-bounce.tpl"}

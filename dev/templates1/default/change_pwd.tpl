{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg" style="width: 53%;float: right;">
       <!-- <div class="col-md-6 contact">
          <header>Address </header>
          <address>
            <h4>Far east shopping center, </h4>
            <h4>#16-01,545, orchard road, </h4>
            <h4>Singapore – 238883</h4>
            <h4>info@yogabar.sg</h4>
          </address>
          <figure><img src="images/img_location.png" alt="location" class="img-responsive"/></figure>
          For Marketing related Enquries, Please contact: marketing@yogabar.sg
        </div> -->
        <div class="col-md-6 contact">
          <header>Change Password : </header>
          {if isset($contact_post) }            
            <p style="color:green">{$contact_post}</p>
          {/if}

          {if isset($contact_post_err) }            
            <p style="color:red">{$contact_post_err}</p>
          {/if}
           <form class="cmxform" id="fileForm" enctype="multipart/form-data"  method="post" action="">
             
            <p>
              <input type="password" autofocus required  name="oldpwd" placeholder="Old password" class="form-control" id="inputoldpwd">
            </p>

<p>
              <input type="password" autofocus required name="newpass" placeholder="New password" class="form-control" id="inputnewpass">
            </p>
           
             
 
              <input type="submit" id='frmSubmit' name='frmSubmit' class="btn btn-default center-block" value="Submit">
    
          </form>  
          
        </div>
      </div>


<link href="../web/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../web/css/cmxform.css">
	<script src="../web/js/jquery-validation/lib/jquery.js"></script>
	<script src="../web/js/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="../web/js/jquery-validation/dist/additional-methods.js"></script>
	{literal}
	
<script>
$(document).ready(function() {
		$("#fileForm").validate();
	});
</script>
{/literal}

      <div class=" col-md-6 col-md-offset-4 soical-media">
        {include file="social.tpl"}
      </div>

  </div>
{include file="footer-no-bounce.tpl"}

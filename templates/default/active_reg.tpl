{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      




 <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div class="white-bg" style="width:600px">
 <form   id='packFrm' name="packFrm" method="post" >
 <h4>Account Activation Form : </h4>
      <table align='center' > <tr>  <td style='padding-left:100px;height:100px' >
          {if isset($contact_post) }            
             <span id='ErrMsg' ><h4 style="color:green">{$contact_post}</h4> </span>
            <script>
             $(document).ready(function() {   

           setTimeout(function(){
				location.href="login.php";	      
					   },2000);

         });
          </script> 
              

          {/if}

          {if isset($contact_post_err) }

            
           <span id='ErrMsg' >  <h4 style="color:red">{$contact_post_err}</h4> </span>
            

          {/if}
  </td></tr> 
           </table>
 </form>

	      	</div>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    {include file="social.tpl"}
		  </div>
  	</div>
	</div>


  </div>
{include file="footer-no-bounce.tpl"}

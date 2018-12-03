{include file="header.tpl"}
<body class="innerbg">
  {include file="nav.tpl" }
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg" style="width:100%;">
        <div class="col-md-6 contact">
          <header>Address </header>
          <address>
           <header><h3>Studio location:</h3></header>
            
            <h4>Far East Shopping Center, </h4>
            <h4>#16-01,545, Orchard Road, </h4>
            <h4>Singapore – 238883</h4>
            <h4>info@yogabar.sg</h4><br>
            <h4>Dwi Siswianti:</h4>
            
<h4>Mobile: (65) 87818254</h4>
<h4>Email: dwi@yogabar.sg</h4>
    
          </address>
          <figure><img src="images/img_location.png" alt="location" class="img-responsive"/></figure>
          For Marketing related Enquries, Please contact: marketing@yogabar.sg
        </div>
        <div class="col-md-6 contact">
          <header>Contact Form : </header>
          {if isset($contact_post) }            
            <p style="color:green">{$contact_post}</p>
          {/if}
          <form method="post" action="">
            <p>
              <input type="text" autofocus required name="name" placeholder="Name" class="form-control" id="inputName">
            </p>
            <p>
              <input type="email" autofocus required name="email" placeholder="Email" class="form-control" id="inputEmail">
            </p>
            <p>
              <input type="tel" autofocus required name="phone"  placeholder="Phone" class="form-control" id="inputPhone">
            </p>
            <p>
              <textarea placeholder="Message" autofocus required class="form-control" name="message" id="message" rows="6"></textarea>
            </p>
            {if isset($err_recaptcha) }            
              <p style="color:red">{$err_recaptcha}</p>
            {/if}
            <p><div style="width:100%;" class="g-recaptcha" data-sitekey="6LeqZwwTAAAAAELTuYPJxubR_YkApD5zS9eCRfpk"></div></p>
            <p class="pull-right">
              <input type="submit" class="btn btn-default" value="Submit">
            </p>
          </form>
          
        </div>
      </div>
      <div class=" centra soical-media">
        {include file="social.tpl"}
      </div>

  </div>
{include file="footer.tpl"}
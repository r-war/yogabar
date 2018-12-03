<?php /* Smarty version 3.1.27, created on 2017-11-07 10:23:17
         compiled from "/home/yogabar/public_html/dev/templates/default/contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12035030885a01ddf52d8c08_11292097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51f867c28327e99e887b6a5e6ff2d5909294e828' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/contact.tpl',
      1 => 1489005104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12035030885a01ddf52d8c08_11292097',
  'variables' => 
  array (
    'contact_post' => 0,
    'err_recaptcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a01ddf5407e54_98551515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a01ddf5407e54_98551515')) {
function content_5a01ddf5407e54_98551515 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12035030885a01ddf52d8c08_11292097';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg" style="width:100%;">
        <div class="col-md-6 contact">
          <header>Address </header>
          <address>
            <h4>Far east shopping center, </h4>
            <h4>#16-01,545, orchard road, </h4>
            <h4>Singapore – 238883</h4>
            <h4>info@yogabar.sg</h4>
          </address>
          <figure><img src="images/img_location.png" alt="location" class="img-responsive"/></figure>
          For Marketing related Enquries, Please contact: marketing@yogabar.sg
        </div>
        <div class="col-md-6 contact">
          <header>Contact Form : </header>
          <?php if (isset($_smarty_tpl->tpl_vars['contact_post']->value)) {?>            
            <p style="color:green"><?php echo $_smarty_tpl->tpl_vars['contact_post']->value;?>
</p>
          <?php }?>
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
            <?php if (isset($_smarty_tpl->tpl_vars['err_recaptcha']->value)) {?>            
              <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['err_recaptcha']->value;?>
</p>
            <?php }?>
            <p><div style="width:100%;" class="g-recaptcha" data-sitekey="6LeqZwwTAAAAAELTuYPJxubR_YkApD5zS9eCRfpk"></div></p>
            <p class="pull-right">
              <input type="submit" class="btn btn-default" value="Submit">
            </p>
          </form>
          
        </div>
      </div>
      <div class=" centra soical-media">
        <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>

  </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
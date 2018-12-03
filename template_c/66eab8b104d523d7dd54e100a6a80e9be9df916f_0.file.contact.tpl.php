<?php /* Smarty version 3.1.27, created on 2018-11-02 08:28:45
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:34235bdbfcadf10fb2_61641776%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66eab8b104d523d7dd54e100a6a80e9be9df916f' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\contact.tpl',
      1 => 1497934364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34235bdbfcadf10fb2_61641776',
  'variables' => 
  array (
    'contact_post' => 0,
    'err_recaptcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bdbfcae112f70_92872371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bdbfcae112f70_92872371')) {
function content_5bdbfcae112f70_92872371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '34235bdbfcadf10fb2_61641776';
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
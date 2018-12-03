<?php /* Smarty version 3.1.27, created on 2017-02-01 07:27:40
         compiled from "/home/yogabar/public_html/templates/default/change_pwd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10135291525891e24c85a272_82394746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df3d9819fba6669eb602f55cdfaeb1a5ce2e15c' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/change_pwd.tpl',
      1 => 1485955656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10135291525891e24c85a272_82394746',
  'variables' => 
  array (
    'contact_post' => 0,
    'contact_post_err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891e24c8c1bb4_97792977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891e24c8c1bb4_97792977')) {
function content_5891e24c8c1bb4_97792977 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10135291525891e24c85a272_82394746';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
          <header>Change Password:</header>
          <?php if (isset($_smarty_tpl->tpl_vars['contact_post']->value)) {?>            
            <p style="color:green"><?php echo $_smarty_tpl->tpl_vars['contact_post']->value;?>
</p>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['contact_post_err']->value)) {?>            
            <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['contact_post_err']->value;?>
</p>
          <?php }?>
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
	<?php echo '<script'; ?>
 src="../web/js/jquery-validation/lib/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../web/js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../web/js/jquery-validation/dist/additional-methods.js"><?php echo '</script'; ?>
>
	
	
<?php echo '<script'; ?>
>
$(document).ready(function() {
		$("#fileForm").validate();
	});
<?php echo '</script'; ?>
>


      <div class=" col-md-6 col-md-offset-4 soical-media">
        <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>

  </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2017-02-01 23:52:42
         compiled from "/home/yogabar/public_html/templates/default/active_reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15821781435892c92ad92fd9_59045058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f4fa5a4d458c6b0fa5434d333c789be3aa54f0' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/active_reg.tpl',
      1 => 1485665634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15821781435892c92ad92fd9_59045058',
  'variables' => 
  array (
    'contact_post' => 0,
    'contact_post_err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5892c92ae14150_51831657',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5892c92ae14150_51831657')) {
function content_5892c92ae14150_51831657 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15821781435892c92ad92fd9_59045058';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      




 <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div class="white-bg" style="width:600px">
 <form   id='packFrm' name="packFrm" method="post" >
 <h4>Account Activation Form : </h4>
      <table align='center' > <tr>  <td style='padding-left:100px;height:100px' >
          <?php if (isset($_smarty_tpl->tpl_vars['contact_post']->value)) {?>            
             <span id='ErrMsg' ><h4 style="color:green"><?php echo $_smarty_tpl->tpl_vars['contact_post']->value;?>
</h4> </span>
            <?php echo '<script'; ?>
>
             $(document).ready(function() {   

           setTimeout(function(){
				location.href="login.php";	      
					   },2000);

         });
          <?php echo '</script'; ?>
> 
              

          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['contact_post_err']->value)) {?>

            
           <span id='ErrMsg' >  <h4 style="color:red"><?php echo $_smarty_tpl->tpl_vars['contact_post_err']->value;?>
</h4> </span>
            

          <?php }?>
  </td></tr> 
           </table>
 </form>

	      	</div>
		  <div class=" col-md-6 col-md-offset-4 soical-media">
		    <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		  </div>
  	</div>
	</div>


  </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-09-24 10:02:53
         compiled from "/home/yogabar/public_html/beta/templates/default/admin/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1382347195604109d95f9c7_73173125%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1874cd6c57a51fb9586fc741becaa2c5b84cc80e' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/admin/login.tpl',
      1 => 1442728808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382347195604109d95f9c7_73173125',
  'variables' => 
  array (
    'login_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5604109dba55f3_96260264',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5604109dba55f3_96260264')) {
function content_5604109dba55f3_96260264 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1382347195604109d95f9c7_73173125';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">  	
	    <div id="animation" class="white-bg padding-10 ">
	    	<h2>Admin Panel</h2>
	    	<br/>
	    	<?php if (isset($_smarty_tpl->tpl_vars['login_error']->value)) {?>
		  	<div class="error" id="msg-flash">
		  		<?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>

		  	</div>
		  	<br/>
		  	<?php }?>
				<form method="post" action="">
	        <div class="form-group">
			      <label class="control-label" for="input-email">Username:</label>
			      <input type="text" name="username" value="" placeholder="Username" id="input-email" class="form-control" />
			    </div>
			    <div class="form-group">
			      <label class="control-label" for="input-password">Password:</label>
			      <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />			      
			    </div>
          <div class="form-group">
            <input type="submit" class="btn btn-default" value="Submit">
          </div>
        </form>
			</div>	   
  	</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
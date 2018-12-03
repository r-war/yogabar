<?php /* Smarty version 3.1.27, created on 2018-10-27 05:34:43
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:54605bd3dcd3781361_98944349%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba11fbbc862d0c39e390eb3c4cc58439d0a7663' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\login.tpl',
      1 => 1442691008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54605bd3dcd3781361_98944349',
  'variables' => 
  array (
    'login_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3dcd3825480_37479352',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3dcd3825480_37479352')) {
function content_5bd3dcd3825480_37479352 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '54605bd3dcd3781361_98944349';
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
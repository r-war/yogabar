<?php /* Smarty version 3.1.27, created on 2015-10-29 06:03:07
         compiled from "/home/yogabar/public_html/templates/default/book.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21352572635631fceb5cec93_75463813%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a762d8a897b335d52af52b3a7e7a297f8c9de337' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/book.tpl',
      1 => 1446116582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21352572635631fceb5cec93_75463813',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5631fceb62e725_91368662',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5631fceb62e725_91368662')) {
function content_5631fceb62e725_91368662 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21352572635631fceb5cec93_75463813';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div id="animation" class="scroll white-bg padding-10 ">
	      <h4>Mind-Body Connect</h4>
	      <ul>
	      	</br>
	      	<li>
	      		<a href="https://clients.mindbodyonline.com/classic/ws?studioid=248385&stype=-98"> HOME </a>
	      	</li>
	      </br>
	      	<li>
	      		<a href="https://clients.mindbodyonline.com/classic/ws?studioid=248385&stype=-7&sView=day"> CLASSES </a>
	      	</li>
	      	</br>
	      	<li>
	      		<a href="https://clients.mindbodyonline.com/classic/ws?studioid=248385&stype=-102"> APPOINTMENTS </a>
	      	</li>
	      	</br>
	      	<li>
	      		<a href="https://clients.mindbodyonline.com/classic/ws?studioid=248385&stype=-2&subTab=info"> MY INFO </a>
	      	</li>
	      	</br>

	      	<li>
	      	Download your MINDBODY Connect App 
	      	<br>
	      		<iframe id="getOurApp" scrolling="no" allowtransparency="true" src="https://clients.mindbodyonline.com/connect/appbutton" style="border: none; width: 135px; height: 31px;"></iframe>
	      	</li>

	      </ul>
	    </div>
	    <div class=" col-md-6 col-md-offset-4 soical-media">
	     	<?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	    </div>
  	</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
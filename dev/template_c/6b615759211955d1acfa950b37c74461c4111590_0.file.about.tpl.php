<?php /* Smarty version 3.1.27, created on 2015-10-25 00:10:03
         compiled from "/home/yogabar/public_html/templates/default/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2074821377562c642be84b73_38881924%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b615759211955d1acfa950b37c74461c4111590' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/about.tpl',
      1 => 1441479824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2074821377562c642be84b73_38881924',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c642bef6587_06995035',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c642bef6587_06995035')) {
function content_562c642bef6587_06995035 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2074821377562c642be84b73_38881924';
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
	      <h2>WELCOME TO YOGA BAR</h2>
	      <p> Yoga Bar sets the bar for wellness and a peace of mind. 
	        With yoga classes tailored for one and all.</p>
	      <p>Participants can look forward to an invigorating session for the mind. Body and soul. Escape the hustle and bustle of urban living for an hour’s peace and rejuvenation under the tutelage of your instructor.</p>
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
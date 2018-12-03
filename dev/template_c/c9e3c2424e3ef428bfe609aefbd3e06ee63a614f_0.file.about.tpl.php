<?php /* Smarty version 3.1.27, created on 2017-11-07 10:23:12
         compiled from "/home/yogabar/public_html/dev/templates/default/about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4756663835a01ddf0ee1889_42226161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e3c2424e3ef428bfe609aefbd3e06ee63a614f' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/about.tpl',
      1 => 1489084552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4756663835a01ddf0ee1889_42226161',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a01ddf0f369c9_29024331',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a01ddf0f369c9_29024331')) {
function content_5a01ddf0f369c9_29024331 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4756663835a01ddf0ee1889_42226161';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div  class="scroll white-bg padding-10 ">
	      <h2>WELCOME TO YOGA BAR</h2>
	      <p> Yoga Bar sets the bar for wellness and a peace of mind. 
	        With yoga classes tailored for one and all.</p>
	      <p>Participants can look forward to an invigorating session for the mind. Body and soul. Escape the hustle and bustle of urban living for an hour’s peace and rejuvenation under the tutelage of your instructor.</p>
	    </div>
	      
  	</div>
          <div class="soical-media visible-sm visible-xs">
                <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div>
             
             <div class="web_soical-media">
                 <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

             </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
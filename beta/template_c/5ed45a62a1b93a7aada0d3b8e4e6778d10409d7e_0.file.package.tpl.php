<?php /* Smarty version 3.1.27, created on 2015-10-24 01:12:08
         compiled from "/home/yogabar/public_html/beta/templates/default/package.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1061246475562b2138ea5b19_82332136%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed45a62a1b93a7aada0d3b8e4e6778d10409d7e' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/package.tpl',
      1 => 1445667120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1061246475562b2138ea5b19_82332136',
  'variables' => 
  array (
    'group_rs' => 0,
    'package' => 0,
    'key' => 0,
    'private_rs' => 0,
    'room_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562b21391c10f7_10792306',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562b21391c10f7_10792306')) {
function content_562b21391c10f7_10792306 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1061246475562b2138ea5b19_82332136';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div id="animation" class="white-bg">
	      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="dsiswianti@gmail.com">
					<input type="hidden" name="item_name" value="yogabar package">
					<input type="hidden" name="currency_code" value="SGD">
                                        					
        	<h3> Enjoy our packages as below:</h3>        
        	<h4>GROUP CLASS</h4>
	        <ul>
		        <?php
$_from = $_smarty_tpl->tpl_vars['group_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?> 
		        <li>
		          <input type="radio" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
" <?php if (($_smarty_tpl->tpl_vars['key']->value == 0)) {?> checked="checked" <?php }?>>
		          <span class="doller">$</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>

		        </li>
		        <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>
		      </ul>	              
        	<h4>PRIVATE CLASS</h4>
	        <ul>
		       <?php
$_from = $_smarty_tpl->tpl_vars['private_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?> 
		        <li>
		          <input type="radio" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
" >
		          <span class="doller">$</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>

		        </li>
		        <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>
	        </ul>
	        <h4>Booking Studio</h4>
	        <ul>
		       <?php
$_from = $_smarty_tpl->tpl_vars['room_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?> 
		        <li>
		          <input type="radio" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
" >
		          <span class="doller">$</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>

		        </li>
		        <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>
	        </ul>
	        <ul>
	        	<li>
	        	* Private class valid for a month, with min of once a week class. Venue can be your  home or any convenient place.
        		</li>
        		<li>
        		* Peak-hour (Monday - friday : 6pm-9pm, Sat & sun 7am - 8pm)
				</li>
				<li>
				* Off-peak hours ( monday - friday : 7am - 6pm, Sat & Sun : After 8pm)
				</li>
        	</ul>        	 	
        	<h4>CORPORATE CLASS</h4>
        	<ul>
        		<li>
        			Kindly send us your inquiry to info@yogabar.sg
        		</li>
        		<li style="padding-bottom:5px;padding-top:5px">
        			You can pay by paypal or pay by cash or transfer.
        		</li>
        		<li>
		       		<input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
						</li>
					</ul>
				</form>
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
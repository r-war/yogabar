<?php /* Smarty version 3.1.27, created on 2017-02-13 11:29:29
         compiled from "/home/yogabar/public_html/dev/templates/default/events.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:248723758a1ecf9079631_31677214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3e9a8fe912487038d78e995b00023102bbc3ea' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/events.tpl',
      1 => 1485682891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248723758a1ecf9079631_31677214',
  'variables' => 
  array (
    'events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58a1ecf9196d01_67156189',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58a1ecf9196d01_67156189')) {
function content_58a1ecf9196d01_67156189 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '248723758a1ecf9079631_31677214';
?>

		<?php if (isset($_smarty_tpl->tpl_vars['events']->value['error'])) {?>
			<div class"error"><?php echo $_smarty_tpl->tpl_vars['events']->value['error'];?>
</div>
		<?php } else { ?>			
			<b><?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
 at <?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
</b>
			<br/>	
			<br/>		
			<?php echo $_smarty_tpl->tpl_vars['events']->value['description'];?>
			
		<?php }

}
}
?>
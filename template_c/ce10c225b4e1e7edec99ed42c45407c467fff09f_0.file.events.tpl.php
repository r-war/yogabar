<?php /* Smarty version 3.1.27, created on 2017-02-11 08:11:25
         compiled from "/home/yogabar/public_html/templates/default/events.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1225997931589f1b8d453517_26709177%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce10c225b4e1e7edec99ed42c45407c467fff09f' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/events.tpl',
      1 => 1485641492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225997931589f1b8d453517_26709177',
  'variables' => 
  array (
    'events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_589f1b8d520f86_71036418',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_589f1b8d520f86_71036418')) {
function content_589f1b8d520f86_71036418 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1225997931589f1b8d453517_26709177';
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
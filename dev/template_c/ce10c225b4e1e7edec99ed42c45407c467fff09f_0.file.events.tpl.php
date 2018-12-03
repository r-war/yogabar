<?php /* Smarty version 3.1.27, created on 2015-10-25 00:12:17
         compiled from "/home/yogabar/public_html/templates/default/events.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1414792184562c64b1748423_93017995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce10c225b4e1e7edec99ed42c45407c467fff09f' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/events.tpl',
      1 => 1445710681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414792184562c64b1748423_93017995',
  'variables' => 
  array (
    'events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c64b17a22b7_13486619',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c64b17a22b7_13486619')) {
function content_562c64b17a22b7_13486619 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1414792184562c64b1748423_93017995';
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
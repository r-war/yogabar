<?php /* Smarty version 3.1.27, created on 2015-10-24 13:19:55
         compiled from "/home/yogabar/public_html/beta/templates/default/events.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:847151364562bcbcbb11d89_69992534%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c766184a50ce40ba03501933c4a71d33085bd051' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/events.tpl',
      1 => 1445710681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '847151364562bcbcbb11d89_69992534',
  'variables' => 
  array (
    'events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562bcbcbb615d1_31814733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562bcbcbb615d1_31814733')) {
function content_562bcbcbb615d1_31814733 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '847151364562bcbcbb11d89_69992534';
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
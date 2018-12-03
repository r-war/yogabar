<?php /* Smarty version 3.1.27, created on 2017-03-08 11:52:33
         compiled from "/home/yogabar/public_html/templates/default/events1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:201389531658c044e1809741_27255031%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d56e3bb8200b6a3a73c2d030e22e166f3c7148' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/events1.tpl',
      1 => 1488995541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201389531658c044e1809741_27255031',
  'variables' => 
  array (
    'events' => 0,
    'ChkLogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58c044e188e429_87529293',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58c044e188e429_87529293')) {
function content_58c044e188e429_87529293 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '201389531658c044e1809741_27255031';
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

<?php ob_start();
echo $_smarty_tpl->tpl_vars['events']->value['price'] > 0;
$_tmp1=ob_get_clean();
if ($_tmp1) {?>
 
<?php ob_start();
echo $_smarty_tpl->tpl_vars['ChkLogin']->value == 1;
$_tmp2=ob_get_clean();
if ($_tmp2) {?>

<form action="events_checkout.php" id='evpackFrm' name="evpackFrm" method="post" >
<input type='hidden' name="hidid" id="hidid" value="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
"  > 
<input type='submit'  name='' value='Pay'>	

<?php } else { ?>

 
 <form action="login.php" id='evpackFrm' name="evpackFrm" method="post" >
<input type='submit'  name='' value='Login to Pay'> 
 <?php }?>


 	<?php }?>
		
		<?php }?>

</form>




 
<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-10-25 00:09:07
         compiled from "/home/yogabar/public_html/templates/default/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:721703374562c63f3771193_37577075%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f82f389dc65a1dd1fe14fa6e7a116e6c0ed1cc59' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/footer.tpl',
      1 => 1443028809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '721703374562c63f3771193_37577075',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c63f3776239_22615870',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c63f3776239_22615870')) {
function content_562c63f3776239_22615870 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '721703374562c63f3771193_37577075';
?>
<!-- /container -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/responsive.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery1.3.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
 
  $(document).ready(function(){
	  $("#animation").effect("bounce",{times:3},300);
	});
 
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>
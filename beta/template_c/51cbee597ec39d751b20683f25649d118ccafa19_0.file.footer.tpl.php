<?php /* Smarty version 3.1.27, created on 2015-09-24 07:18:55
         compiled from "/home/yogabar/public_html/beta/templates/default/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17843168995603ea2f724775_02065691%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51cbee597ec39d751b20683f25649d118ccafa19' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/footer.tpl',
      1 => 1443028809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17843168995603ea2f724775_02065691',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5603ea2f72d1d8_82236346',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5603ea2f72d1d8_82236346')) {
function content_5603ea2f72d1d8_82236346 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17843168995603ea2f724775_02065691';
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
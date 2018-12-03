<?php /* Smarty version 3.1.27, created on 2018-11-16 12:34:11
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:280025beeab3392efc8_48297336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d3e3c31fdbccb63c8c66228ac01c100c9e044c2' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\header.tpl',
      1 => 1542368045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280025beeab3392efc8_48297336',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5beeab33979354_78089358',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5beeab33979354_78089358')) {
function content_5beeab33979354_78089358 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '280025beeab3392efc8_48297336';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../../assets/ico/favicon.png">
<title>Yoga Bar <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!-- responsive core CSS -->
<link href="css/responsive.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/custom.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.isotope.v3.0.2.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
</head>
<?php }
}
?>
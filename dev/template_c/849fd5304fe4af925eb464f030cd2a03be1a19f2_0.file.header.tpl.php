<?php /* Smarty version 3.1.27, created on 2017-01-29 03:51:37
         compiled from "/home/yogabar/public_html/dev/templates/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1076489680588dbb29709df9_49192412%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849fd5304fe4af925eb464f030cd2a03be1a19f2' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/header.tpl',
      1 => 1485682841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1076489680588dbb29709df9_49192412',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588dbb2970e7d2_50091090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588dbb2970e7d2_50091090')) {
function content_588dbb2970e7d2_50091090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1076489680588dbb29709df9_49192412';
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
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
</head>
<?php }
}
?>
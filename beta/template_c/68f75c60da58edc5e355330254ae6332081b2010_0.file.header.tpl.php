<?php /* Smarty version 3.1.27, created on 2015-09-24 07:18:55
         compiled from "/home/yogabar/public_html/beta/templates/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16078621015603ea2f69f363_48957850%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f75c60da58edc5e355330254ae6332081b2010' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/header.tpl',
      1 => 1442951445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16078621015603ea2f69f363_48957850',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5603ea2f6ba9c3_79624453',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5603ea2f6ba9c3_79624453')) {
function content_5603ea2f6ba9c3_79624453 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16078621015603ea2f69f363_48957850';
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
</head>
<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-10-25 00:09:07
         compiled from "/home/yogabar/public_html/templates/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:907531165562c63f3734e73_96669446%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '391c46f3f4e73e1d7b18497005a1d9a1ee713513' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/header.tpl',
      1 => 1442951445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '907531165562c63f3734e73_96669446',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c63f373dc37_44375013',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c63f373dc37_44375013')) {
function content_562c63f373dc37_44375013 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '907531165562c63f3734e73_96669446';
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
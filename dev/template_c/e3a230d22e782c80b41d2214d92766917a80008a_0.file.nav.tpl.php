<?php /* Smarty version 3.1.27, created on 2016-02-08 23:21:14
         compiled from "/home/yogabar/public_html/templates/default/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:188839440656b9774a8dd5d5_70218183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a230d22e782c80b41d2214d92766917a80008a' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/nav.tpl',
      1 => 1454995241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188839440656b9774a8dd5d5_70218183',
  'variables' => 
  array (
    'navhome' => 0,
    'home' => 0,
    'about' => 0,
    'package' => 0,
    'teacher' => 0,
    'news' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b9774a948402_30892279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b9774a948402_30892279')) {
function content_56b9774a948402_30892279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '188839440656b9774a8dd5d5_70218183';
?>
<div class="navbar-default <?php echo (($tmp = @$_smarty_tpl->tpl_vars['navhome']->value)===null||$tmp==='' ? 'navbar navbar-static-top' : $tmp);?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>
  <div class="container">
  <?php }?>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  </div>
  <a class="navbar-brand" href="#" title="Yogabar" alt="Yogabar">Yogabar</a>
  <div class="navbar-collapse collapse ">
    <ul class="nav navbar-nav <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>pull-right<?php }?>">
      <li class="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><a href="index.php">Home</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['about']->value;?>
"><a href="about.php">About</a></li>
      <li class=""><a href="https://clients.mindbodyonline.com/classic/ws?studioid=248385&stype=-102">Booking </a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
"><a href="package.php">Package</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['teacher']->value;?>
"><a href="teacher.php">Teacher</a></li>
      <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['news']->value;?>
"> 
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="snapshot.php">Snapshot</a></li>
          <li><a href="notes.php">Event</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
"><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>
  </div>
  <?php }?>
  <!--/.nav-collapse -->
</div><?php }
}
?>
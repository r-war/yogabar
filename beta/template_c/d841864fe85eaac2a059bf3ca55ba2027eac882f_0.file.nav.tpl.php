<?php /* Smarty version 3.1.27, created on 2015-10-12 07:08:22
         compiled from "/home/yogabar/public_html/beta/templates/default/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1934904066561ba2b63592d4_60559333%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd841864fe85eaac2a059bf3ca55ba2027eac882f' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/nav.tpl',
      1 => 1444651695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934904066561ba2b63592d4_60559333',
  'variables' => 
  array (
    'navhome' => 0,
    'home' => 0,
    'about' => 0,
    'package' => 0,
    'news' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561ba2b63c3147_62508812',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561ba2b63c3147_62508812')) {
function content_561ba2b63c3147_62508812 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1934904066561ba2b63592d4_60559333';
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
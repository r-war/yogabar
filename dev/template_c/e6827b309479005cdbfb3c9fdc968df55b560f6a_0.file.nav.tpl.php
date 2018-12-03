<?php /* Smarty version 3.1.27, created on 2016-02-08 13:20:39
         compiled from "/home/yogabar/public_html/templates/default/admin/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64594478456b8ea877b1623_92735834%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6827b309479005cdbfb3c9fdc968df55b560f6a' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/nav.tpl',
      1 => 1454958847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64594478456b8ea877b1623_92735834',
  'variables' => 
  array (
    'navhome' => 0,
    'home' => 0,
    'package' => 0,
    'blog' => 0,
    'teacher' => 0,
    'gallery' => 0,
    'events' => 0,
    'change_pwd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b8ea8781eba2_76092209',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b8ea8781eba2_76092209')) {
function content_56b8ea8781eba2_76092209 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64594478456b8ea877b1623_92735834';
?>
<div class="navbar-default <?php echo (($tmp = @$_smarty_tpl->tpl_vars['navhome']->value)===null||$tmp==='' ? 'navbar navbar-static-top' : $tmp);?>
">  
  <div class="container">  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <a class="navbar-brand" href="#" title="Yogabar" alt="Yogabar">Yogabar</a>
    <div class="navbar-collapse collapse ">
      <ul class="nav navbar-nav pull-right">
        <li class="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><a href="index.php">Home</a></li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
"><a href="package.php">Package</a></li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['blog']->value;?>
"><a href="blog.php">Blog</a></li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['teacher']->value;?>
"><a href="teacher.php">Teacher</a></li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['gallery']->value;?>
"><a href="gallery.php">Gallery</a></li>        
        <li class="<?php echo $_smarty_tpl->tpl_vars['events']->value;?>
"><a href="events.php">Events</a></li>  
        <li class="<?php echo $_smarty_tpl->tpl_vars['change_pwd']->value;?>
"><a href="change_pwd.php">Change password</a></li>
        <li class=""><a href="logout.php">Logout</a></li>        
      </ul>
    </div>
  </div>
</div><?php }
}
?>
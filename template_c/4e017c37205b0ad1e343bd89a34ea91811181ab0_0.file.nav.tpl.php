<?php /* Smarty version 3.1.27, created on 2018-11-16 04:45:49
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\admin\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:226235bee3d6d694367_37156787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e017c37205b0ad1e343bd89a34ea91811181ab0' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\admin\\nav.tpl',
      1 => 1541820441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226235bee3d6d694367_37156787',
  'variables' => 
  array (
    'navhome' => 0,
    'home' => 0,
    'package' => 0,
    'blog' => 0,
    'teacher' => 0,
    'gallery' => 0,
    'banner' => 0,
    'coupon' => 0,
    'events' => 0,
    'faq' => 0,
    'change_pwd' => 0,
    'Report' => 0,
    'users' => 0,
    'payreP' => 0,
    'evereP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bee3d6d9c4aa4_91033954',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bee3d6d9c4aa4_91033954')) {
function content_5bee3d6d9c4aa4_91033954 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '226235bee3d6d694367_37156787';
?>
<div class="navbar-default <?php echo (($tmp = @$_smarty_tpl->tpl_vars['navhome']->value)===null||$tmp==='' ? 'navbar navbar-static-top' : $tmp);?>
">  
  
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
        <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['gallery']->value;?>
">
          <a href="gallery.php" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="gallery.php">List gallery</a></li>
            <li><a href="gallery_cat.php">Gallery Category</a></li>
          </ul>
        </li> 
        <li class="<?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
"><a href="banner_add.php">Home Page Popup </a></li>  
        <li class="<?php echo $_smarty_tpl->tpl_vars['coupon']->value;?>
"><a href="coupon.php">Coupon</a></li>        
        <li class="<?php echo $_smarty_tpl->tpl_vars['events']->value;?>
"><a href="events.php">Events</a></li>  
        
        <li class="<?php echo $_smarty_tpl->tpl_vars['faq']->value;?>
"><a href="faq_add.php">FAQ</a></li>  
        <li class="<?php echo $_smarty_tpl->tpl_vars['change_pwd']->value;?>
"><a href="change_pwd.php">Change password</a></li>

<li class="dropdown <?php echo $_smarty_tpl->tpl_vars['Report']->value;?>
"> 
        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Report <b class="caret"></b></a>
        <ul class="dropdown-menu">
         <li class="<?php echo $_smarty_tpl->tpl_vars['users']->value;?>
"><a href="reg_users.php">Users</a></li> 
           <li class="<?php echo $_smarty_tpl->tpl_vars['payreP']->value;?>
"><a href="report.php">Payment Report</a></li> 
 <li class="<?php echo $_smarty_tpl->tpl_vars['evereP']->value;?>
"><a href="report_events.php">Events Report</a></li>
          
        </ul>
      </li>

        <li class=""><a href="logout.php">Logout</a></li>        
      </ul>
    </div>
  
</div>
<?php }
}
?>
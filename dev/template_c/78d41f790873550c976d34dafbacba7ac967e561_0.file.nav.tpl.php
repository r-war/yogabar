<?php /* Smarty version 3.1.27, created on 2018-02-26 01:51:27
         compiled from "/home/yogabar/public_html/dev/templates/default/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11526503365a93bc7fa860e7_58679325%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d41f790873550c976d34dafbacba7ac967e561' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/nav.tpl',
      1 => 1519631302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11526503365a93bc7fa860e7_58679325',
  'variables' => 
  array (
    'navhome' => 0,
    'home' => 0,
    'about' => 0,
    'appointments' => 0,
    'schedule' => 0,
    'package' => 0,
    'teacher' => 0,
    'blog' => 0,
    'event' => 0,
    'carddt' => 0,
    'profile' => 0,
    'changepwd' => 0,
    'history' => 0,
    'loginout' => 0,
    'Registration' => 0,
    'login' => 0,
    'news' => 0,
    'faq' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a93bc7fb6b643_80875603',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a93bc7fb6b643_80875603')) {
function content_5a93bc7fb6b643_80875603 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11526503365a93bc7fa860e7_58679325';
?>
<div class="navbar-default <?php echo (($tmp = @$_smarty_tpl->tpl_vars['navhome']->value)===null||$tmp==='' ? 'navbar navbar-static-top' : $tmp);?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>
  <div class="container">
  <?php }?>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  </div>
  <a class="navbar-brand" href="#" title="Yogabar" alt="Yogabar"></a>
 <div class="navbar-collapse collapse ">
    <!-- <ul class="nav navbar-nav <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>pull-right<?php }?>"> -->
        <ul class="nav navbar-nav">
      <li class="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><a href="index.php">Home</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['about']->value;?>
"><a href="about.php">About</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['appointments']->value;?>
"><a href="appointments.php">Appointments</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['schedule']->value;?>
"><a href="schedule.php">One Week Class Schedule</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
"><a href="package.php">Package</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['teacher']->value;?>
"><a href="teacher.php">Teacher</a></li>
    <!-- <li class="<?php echo $_smarty_tpl->tpl_vars['blog']->value;?>
"><a href="blog.php">Blog</a></li>-->
<!--     <li class="<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
"><a href="notes.php">Events</a></li> -->
  <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['event']->value;?>
"> 
        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
        <ul class="dropdown-menu">
 <li class="<?php echo $_smarty_tpl->tpl_vars['carddt']->value;?>
"><a href="notes.php">Workshop</a></li> 
         <li class="<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
"><a href="notes_re.php">Retreat</a></li>
          
        </ul>
      </li>
 
 
 <?php if (isset($_SESSION['UNAME'])) {?>

     <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
"> 
        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
        <ul class="dropdown-menu">
         <li class="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
"><a href="profile.php">Profile(<?php echo $_SESSION['UNAME'];?>
)</a></li>
           <li class="<?php echo $_smarty_tpl->tpl_vars['carddt']->value;?>
"><a href="card_dt_add.php">Payment card details</a></li> 
         <li class="<?php echo $_smarty_tpl->tpl_vars['changepwd']->value;?>
"><a href="change_pwd.php">Change password</a></li> 
	<li class="<?php echo $_smarty_tpl->tpl_vars['history']->value;?>
"><a href="user_pack.php">Payment history</a></li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['loginout']->value;?>
"><a href="logout.php">Logout</a></li>
        </ul>
      </li>

	<!--<li class="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
"><a href="profile.php">Profile(<?php echo $_SESSION['UNAME'];?>
)</a></li>
         <li class="<?php echo $_smarty_tpl->tpl_vars['changepwd']->value;?>
"><a href="change_pwd.php">Change password</a></li> 
	<li class="<?php echo $_smarty_tpl->tpl_vars['history']->value;?>
"><a href="user_pack.php">Payment history</a></li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['loginout']->value;?>
"><a href="logout.php">Logout</a></li> -->
 <?php }?>

 <?php if (!isset($_SESSION['UNAME'])) {?>
<!--<li class="<?php echo $_smarty_tpl->tpl_vars['Registration']->value;?>
"><a href="register.php">Registration</a></li> -->
 <li class="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"><a href="login.php">Login</a></li>
 <?php }?>
 
<!--
      <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['news']->value;?>
"> 
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="snapshot.php">Snapshot</a></li>
          <li><a href="notes.php">Event</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </li> -->
      <li class="<?php echo $_smarty_tpl->tpl_vars['faq']->value;?>
"><a href="faq.php">FAQ</a></li>
      <li class="<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
"><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>
  </div>
  <?php }?>
  <!--/.nav-collapse -->
</div>
<?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2018-11-10 04:31:55
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:308875be6512b0a4501_67638593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea7fdad90b6480f07b8083ca9b164814fafd9eff' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\nav.tpl',
      1 => 1541820710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308875be6512b0a4501_67638593',
  'variables' => 
  array (
    'navhome' => 0,
    'home' => 0,
    'about' => 0,
    'teacher' => 0,
    'schedule' => 0,
    'package' => 0,
    'blog' => 0,
    'event' => 0,
    'eventNt' => 0,
    'eventWrk' => 0,
    'eventRe' => 0,
    'gallery' => 0,
    'profile' => 0,
    'carddt' => 0,
    'changepwd' => 0,
    'history' => 0,
    'loginout' => 0,
    'news' => 0,
    'faq' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5be6512b12d0a0_52065153',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5be6512b12d0a0_52065153')) {
function content_5be6512b12d0a0_52065153 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '308875be6512b0a4501_67638593';
?>
<div class="navbar-default <?php echo (($tmp = @$_smarty_tpl->tpl_vars['navhome']->value)===null||$tmp==='' ? 'navbar navbar-static-top' : $tmp);?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>  <?php }?>
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target=".navbar-collapse"
      >
        <span class="icon-bar"></span> <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <a class="navbar-brand" href="#" title="Yogabar" alt="Yogabar"></a>
    <div class="navbar-collapse collapse ">
      <!--
        <ul class="nav navbar-nav <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>pull-right<?php }?>">
      -->
      <ul class="nav navbar-nav pull-right">
        <li class="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><a href="index.php">Home</a></li>
        <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['about']->value;?>
">
          <a href="about.php" class="dropdown-toggle" data-toggle="dropdown"
            >About <b class="caret"></b
          ></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $_smarty_tpl->tpl_vars['teacher']->value;?>
"><a href="teacher.php">Teacher</a></li>
            <li><a href="#">Classes</a></li>
          </ul>
        </li>
        
        <li class="<?php echo $_smarty_tpl->tpl_vars['schedule']->value;?>
">
          <a href="schedule.php">One Week Class Schedule</a>
        </li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
"><a href="package.php">Package</a></li>
        
        <!--
          <li class="<?php echo $_smarty_tpl->tpl_vars['blog']->value;?>
"><a href="blog.php">Blog</a></li>
          <li class="<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
"><a href="notes.php">Events</a></li>
        -->
        <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['eventNt']->value;?>
 ">
          <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown"
            >Events <b class="caret"></b
          ></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $_smarty_tpl->tpl_vars['eventWrk']->value;?>
"><a href="notes.php">Workshop</a></li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['eventRe']->value;?>
"><a href="notes_re.php">Retreat</a></li>
          </ul>
        </li>

        <li>
          <a href="https://www.1schoolproject.org" target="_blank"
            >One Dollar School Project</a
          >
        </li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['gallery']->value;?>
"><a href="gallery.php">Gallery</a></li>

        <?php if (isset($_SESSION['UNAME'])) {?>

        <li class="dropdown <?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
">
          <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown"
            >Profile <b class="caret"></b
          ></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
">
              <a href="profile.php">Profile(<?php echo $_SESSION['UNAME'];?>
)</a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['carddt']->value;?>
">
              <a href="card_dt_add.php">Payment card details</a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['changepwd']->value;?>
">
              <a href="change_pwd.php">Change password</a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['history']->value;?>
">
              <a href="user_pack.php">Payment history</a>
            </li>
            <li class="<?php echo $_smarty_tpl->tpl_vars['loginout']->value;?>
"><a href="logout.php">Logout</a></li>
          </ul>
        </li>

        <!--
          <li class="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
"><a href="profile.php">Profile(<?php echo $_SESSION['UNAME'];?>
)</a></li>
                  <li class="<?php echo $_smarty_tpl->tpl_vars['changepwd']->value;?>
"><a href="change_pwd.php">Change password</a></li> 

          <li class="<?php echo $_smarty_tpl->tpl_vars['history']->value;?>
"><a href="user_pack.php">Payment history</a></li>

                 <li class="<?php echo $_smarty_tpl->tpl_vars['loginout']->value;?>
"><a href="logout.php">Logout</a></li>
        -->
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

          </li>
        -->
        <li class="<?php echo $_smarty_tpl->tpl_vars['faq']->value;?>
"><a href="faq.php">FAQ</a></li>
        <li class="<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
"><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  <?php if (isset($_smarty_tpl->tpl_vars['navhome']->value) == false) {?>
  
  <?php }?>
  <!-- /.nav-collapse -->
</div>
<?php }
}
?>
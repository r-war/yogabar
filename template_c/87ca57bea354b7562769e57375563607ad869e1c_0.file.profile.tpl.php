<?php /* Smarty version 3.1.27, created on 2017-02-01 07:38:57
         compiled from "/home/yogabar/public_html/templates/default/profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14925306155891e4f1af02f6_95124662%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ca57bea354b7562769e57375563607ad869e1c' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/profile.tpl',
      1 => 1485641878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14925306155891e4f1af02f6_95124662',
  'variables' => 
  array (
    'contact_post' => 0,
    'contact_post_err' => 0,
    'userList' => 0,
    'userListVal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5891e4f1c3bce1_48106092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5891e4f1c3bce1_48106092')) {
function content_5891e4f1c3bce1_48106092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14925306155891e4f1af02f6_95124662';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    

      <div class="white-bg pull-right col-md-5">
       
        <div class="col-md-12 contact">
          <h3 class="text-center">Profile </h3>
          <hr/>
          <?php if (isset($_smarty_tpl->tpl_vars['contact_post']->value)) {?>            
            <p style="color:green"><?php echo $_smarty_tpl->tpl_vars['contact_post']->value;?>
</p>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['contact_post_err']->value)) {?>            
            <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['contact_post_err']->value;?>
</p>
          <?php }?>
            <form class="form-horizontal" method="POST" name='unameId' id='unameId' action="profile.php"> 
             
             
              <?php if (isset($_SESSION['UNAME'])) {?>
                	<?php
$_from = $_smarty_tpl->tpl_vars['userList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['userListVal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['userListVal']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userListVal']->value) {
$_smarty_tpl->tpl_vars['userListVal']->_loop = true;
$foreach_userListVal_Sav = $_smarty_tpl->tpl_vars['userListVal'];
?> 
			<div class="form-group">
        <label class="col-md-3">Name :  </label> 
          <div class="col-md-8">
             <input type="tel" autofocus  class="from-control"   name="uname" value='<?php echo $_smarty_tpl->tpl_vars['userListVal']->value['user_name'];?>
' placeholder="User Name"   id="inputuName"> 
          </div>
      </div>
        <div class="form-group">
        <label class="col-md-3">Mobile :  </label> 
          <div class="col-md-8">
             <input type="tel" autofocus   class="from-control" name="mobile" value='<?php echo $_smarty_tpl->tpl_vars['userListVal']->value['mobile_no'];?>
' placeholder="Mobile"    id="inputmobile"> 
          </div>
      </div>
        <div class="form-group">
        <label class="col-md-3">Email :  </label> 
          <div class="col-md-8">
          <input type="tel" readonly  autofocus   class="from-control" name="email" value='<?php echo $_smarty_tpl->tpl_vars['userListVal']->value['email'];?>
'     id="inputemail"> 
          </div>
      </div>
    
 <label><a href='change_pwd.php' class="btn btn-sm btn-default">Click here to change password</a></label>
<br>
<label><a href='card_dt_add.php' class="btn btn-sm btn-default">Click here to add card details</a></label>
<br>
 
<label><a href='card_details.php' class="btn btn-sm btn-default">Click here to view card details</a></label>
<br>
<label style="text-align: center;"><input type='submit' name='frmSubmit' class="btn btn-default" value='Update'></label>

			<?php
$_smarty_tpl->tpl_vars['userListVal'] = $foreach_userListVal_Sav;
}
?> 
 	      <?php }?>
              
              </form> 

 <!-- <form method="POST" name='unameId1' id='unameId1' action="profile.php"> 
             <input type='hidden' id='hid' name='hid' value='cardde'>
            	<?php
$_from = $_smarty_tpl->tpl_vars['userList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['userListVal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['userListVal']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userListVal']->value) {
$_smarty_tpl->tpl_vars['userListVal']->_loop = true;
$foreach_userListVal_Sav = $_smarty_tpl->tpl_vars['userListVal'];
?> 
			<label>Card details: <input type="tel" autofocus   name="carddt" value='<?php echo $_smarty_tpl->tpl_vars['userListVal']->value['cardDtStr'];?>
' placeholder="Card details" required  id="inputcarddt"> &nbsp;<input type='submit' value='Update'> </label> 
			<?php
$_smarty_tpl->tpl_vars['userListVal'] = $foreach_userListVal_Sav;
}
?>   

 	      
              
             </form>  


<form method="POST" name='unameId2' id='unameId2' action="profile.php"> 
             <input type='hidden' id='hid' name='hid' value='mobile'>
            	<?php
$_from = $_smarty_tpl->tpl_vars['userList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['userListVal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['userListVal']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userListVal']->value) {
$_smarty_tpl->tpl_vars['userListVal']->_loop = true;
$foreach_userListVal_Sav = $_smarty_tpl->tpl_vars['userListVal'];
?> 
			<label>Mobile : <input type="tel" autofocus   name="mobile" value='<?php echo $_smarty_tpl->tpl_vars['userListVal']->value['mobile_no'];?>
' placeholder="Mobile" required  id="inputmobile"> </label> 

<input type='submit' value='Update'>
			<?php
$_smarty_tpl->tpl_vars['userListVal'] = $foreach_userListVal_Sav;
}
?>   

 	      
              
             </form> 


<form method="POST" name='unameId3' id='unameId3' action=""> 
             <input type='hidden' id='hid' name='hid' value='mobile'>
            	<?php
$_from = $_smarty_tpl->tpl_vars['userList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['userListVal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['userListVal']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userListVal']->value) {
$_smarty_tpl->tpl_vars['userListVal']->_loop = true;
$foreach_userListVal_Sav = $_smarty_tpl->tpl_vars['userListVal'];
?> 
			<label>Email: <input type="tel" readonly autofocus   name="email" value='<?php echo $_smarty_tpl->tpl_vars['userListVal']->value['email'];?>
'     id="inputemail">  </label> 
			<?php
$_smarty_tpl->tpl_vars['userListVal'] = $foreach_userListVal_Sav;
}
?>   

 	      
              
             </form> -->

 <!--<form method="POST" name='unameId1' id='unameId1' action="profile.php"> 

  <?php
$_from = $_smarty_tpl->tpl_vars['userList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['userListVal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['userListVal']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userListVal']->value) {
$_smarty_tpl->tpl_vars['userListVal']->_loop = true;
$foreach_userListVal_Sav = $_smarty_tpl->tpl_vars['userListVal'];
?> 
<input type='hidden' id='hid' name='hid' value='cardde'>
 <label>Card details:<input type="tel" autofocus required name="carddt" value='<?php echo $_smarty_tpl->tpl_vars['userListVal']->value['cardDtStr'];?>
'  placeholder="Card details"   id="inputcarddt"> &nbsp;<input type='submit' value='Update'>  </label> <br>
<?php
$_smarty_tpl->tpl_vars['userListVal'] = $foreach_userListVal_Sav;
}
?> 

</form>  -->  
        </div>
      </div>
      <div class=" col-md-3 col-md-offset-8  soical-media" style="padding-left: 60px;">
        <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>

  </div>

 <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>  
<?php echo '<script'; ?>
 type="text/javascript" src="../web/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    var code= $('#code').val();
    var pvt2= $('#pvt2').val();
		    

    $(document).ready(function() { 
 
   /* $('.myButton').click(function() {
    alert(this.id);
}); */


   });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
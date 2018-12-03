<?php /* Smarty version 3.1.27, created on 2018-03-21 08:42:18
         compiled from "/home/yogabar/public_html/templates/default/events_wview.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13014947515ab2613a50d1e7_22242098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4436edbb997285ab51468d386f2e19a57cac4f' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/events_wview.tpl',
      1 => 1520485601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13014947515ab2613a50d1e7_22242098',
  'variables' => 
  array (
    'events' => 0,
    'ChkLogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab2613a77a2a8_81227831',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab2613a77a2a8_81227831')) {
function content_5ab2613a77a2a8_81227831 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13014947515ab2613a50d1e7_22242098';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg1">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="bg"></div>
   <style type="text/css">
  .innerbg1 .navbar-brand {
    background: url(./images/img_logo_inner.png) no-repeat;
    width: 117px;
    height: 68px;
    text-indent: -2000px;
}
  .navbar-default
  {
        margin-bottom: 0px;
  }
  .bg
  {
   /*     background-image: url(https://lh3.googleusercontent.com/NJFR9ZcdHL2urIHVt1OdOkofBm2uXtbS2iv_H6SrAY0eIaIijkjM_78-R8-dBoS0GocMVni5dw=w960);*/
    background-size: cover;
    background-position: center;
    color: rgba(255, 255, 255, 1);
    height: 278px;
        color: #000;
  }
  .innerbg
  {
    background-color: #ececec;
  }
/*  .innerbg1
  {
        background: url(https://lh3.googleusercontent.com/NJFR9ZcdHL2urIHVt1OdOkofBm2uXtbS2iv_H6SrAY0eIaIijkjM_78-R8-dBoS0GocMVni5dw=w960) left top no-repeat #fff;
            background-size: contain;
    background-position: initial;
        background-color: #ececec;
  }*/
  .mt_b
  {
        margin-bottom: 12px;
  }
    /* The container */
 
.custom_chk {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 6px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 133px;
}

/* Hide the browser's default checkbox */
.custom_chk input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #d0cfcf;
}

/* On mouse-over, add a grey background color */
.custom_chk:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.custom_chk input:checked ~ .checkmark {
    background-color: #1a1a1a;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.custom_chk input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.custom_chk .checkmark:after {
 left: 7px;
    top: 4px;
    width: 6px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
/* radio */
.radio_chk
{
          position: relative;
    left: 23px;
    margin-bottom: 12px;
        cursor: pointer;
        width: 56px;
}
.radio_chkradio_chk {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.radio_chk input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark_radio {
    position: absolute;
      top: 1px;
    left: -28px;
    height: 18px;
    width: 18px;
    background-color: #d0cfcf;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.radio_chk:hover input ~ .checkmark_radio {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.radio_chk input:checked ~ .checkmark_radio {
    background-color: #1a1a1a;
}

/* Crcheckmark_radioeate the indicator (the dot/circle - hidden when not checked) */
.checkmark_radio:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.radio_chk input:checked ~ .checkmark_radio:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.radio_chk .checkmark_radio:after {
    top: 6px;
    left: 6px;
    width: 6px;
    height: 6px;
  border-radius: 50%;
  background: white;
}
/* form */
.form_start
{
  background:#fff;padding:0px;box-shadow:0 0 3px #aaa;float:left;margin: 0 auto;display: block;float: none;    position: relative;
    bottom: 0;
    top: -153px;
}
.bg_reg {
    background-color: rgb(134, 134, 134);
    color: rgba(0, 0, 0, 1);
    height: 8px;
}
.p_rm h4
{
      margin-top: 15px;
}
.p_rm
{
  padding: 0px;
}
.p_rm h4, p
{
  padding-left: 12px;
}
.fields_start
{
 padding: 10px;
}
.soical-media
{
      margin: 0 auto;
    display: block;
    float: none;
        width: 50%;
}
.reg_grey_block
{
  background-color: #d9d9d9;
}
.reg_grey_block h2
{
      color: #626876;
      font-size: 30px;
    line-height: 81px;
    font-weight: normal;
}
  </style>
  <div class="container">
<div class="even_tab col-md-11 form_start">

            <?php if (isset($_smarty_tpl->tpl_vars['events']->value['error'])) {?>
      <div class"error"><?php echo $_smarty_tpl->tpl_vars['events']->value['error'];?>
</div>
    <?php } else { ?>      
    <!--   <b><?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
 at <?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
</b> -->
      <!-- <br/> 
      <br/>   
      <?php echo $_smarty_tpl->tpl_vars['events']->value['description'];?>
 -->
<?php ob_start();
echo $_smarty_tpl->tpl_vars['events']->value['price'] > 0;
$_tmp1=ob_get_clean();
if ($_tmp1) {?>
 
 

  <form action="events_reg.php" id='evpackFrm' name="evpackFrm" method="post" > 
  <input type='hidden' name="hidId" id="hidId" value="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
"  >
  <input type='hidden' name="hidregid" id="hidregid" value=""  >
  </form> 
<form name='reg' method='post'  id='reg'  >
<input type='hidden' name="hididval" id="hididval" value="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
"  >
<input type='hidden' name="hidlog" id="hidlog" value="<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
"  >
 
 

            <div class="divider_row" style="padding-bottom:0px;width:100%; float:left;margin-bottom: 5px;">
              <div class="col-md-12 col-sm-12 col-xs-12 p_rm">
              <div class="bg_reg"></div>
                  <h4 class="text-left"><?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
</h4>
                <!--   <p><?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
 at <?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
</p>   --> 
                  <!-- <p>Cultural yoga retreat to Jogjakarta on the 26 - 29 May 2018</p> -->
              </div>
              </div> 
             <!--  <img src="https://lh6.googleusercontent.com/uokIyCdThUnLU7Oxfv0Dkh6N7-r2hy6Dz_eWMoXVbNIiHC-ekq1VobzP0_85SpUJEQzc4cKSoQ=w800" class="img-responsive"/> -->
             <!--  <img src="./images/yoga_reg.png" class="img-responsive"/> -->
          <div class="reg_grey_block">
          <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['events']->value['description'];?>
<!-- Cultural yoga retreat
          <br/>In Jogjakarata<br/> 26 - 29 May'18 --></h2>
          </div>

          <div class="fields_start">
           <div class="clearfix"></div>
            <div class="text-center">
            <input tabindex="3" type="button" value="Sign up" class="btn btn-default" onClick="validatePassword();"> 
            </div>
          </div>
          </div>
       </form>
  <?php }?>
    <?php }?>

</div>
 <div class="soical-media visible-sm visible-xs">
                <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div>
             
             <div class="web_soical-media">
                 <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

             </div>
      
   
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/cmxform.css">
<?php echo '<script'; ?>
 src="js/jquery-validation/lib/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery-validation/dist/additional-methods.js"><?php echo '</script'; ?>
> --> 

  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/cmxform.css">
 <!--  <?php echo '<script'; ?>
 src="js/jquery-validation/lib/jquery.js"><?php echo '</script'; ?>
> -->
  <?php echo '<script'; ?>
 src="js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery-validation/dist/additional-methods.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.9.1.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="js/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
 }); 
 function validatePassword(){
 if($('#hidlog').val()==1)
 {  
   document.getElementById("evpackFrm").submit();
 }
 else{
   location.href='login.php';
 }

}            
<?php echo '</script'; ?>
>
<?php }
}
?>
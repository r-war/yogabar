<?php /* Smarty version 3.1.27, created on 2018-03-06 03:35:41
         compiled from "/home/yogabar/public_html/templates/default/events_reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5034481055a9e60ed998655_59493222%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37efc91bf33d60c9b1c05801039ed291822639d' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/events_reg.tpl',
      1 => 1520328639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5034481055a9e60ed998655_59493222',
  'variables' => 
  array (
    'events' => 0,
    'ChkLogin' => 0,
    'name' => 0,
    'unameVal' => 0,
    'mailVal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9e60edabf580_93058926',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9e60edabf580_93058926')) {
function content_5a9e60edabf580_93058926 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5034481055a9e60ed998655_59493222';
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
 
<?php ob_start();
echo $_smarty_tpl->tpl_vars['ChkLogin']->value == 1;
$_tmp2=ob_get_clean();
if ($_tmp2) {?>

  <form action="events_checkout.php" id='evpackFrm' name="evpackFrm" method="post" > 
  <input type='hidden' name="hidid" id="hidid" value="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
"  >
  <input type='hidden' name="hidregid" id="hidregid" value=""  >
  </form> 
<form name='reg' method='post'  id='reg'  >
<input type='hidden' name="hididval" id="hididval" value="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
"  >
<!-- <p>
              <input type="text" autofocus  name="uname"   value='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' placeholder="Name" class="form-control" id="uname">
            </p> -->


            <div class="divider_row" style="padding-bottom:0px;width:100%; float:left;margin-bottom: 5px;">
              <div class="col-md-12 col-sm-12 col-xs-12 p_rm">
              <div class="bg_reg"></div>
                  <h4 class="text-left">Registration</h4>
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
               <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
              <label for="exampleFormControlSelect2">Salutation </label>
              <select class="form-control" id="Salutation" name="Salutation">
              <option value=''>Choose</option>
              <option value='Mr'>Mr</option>
              <option value='Mrs'>Mrs</option>
              <option value='Ms'>Ms</option>
              </select>
              </div>
              <div class="form-group">
              <label for="fullname">Full Name (According to Passport):</label>
              <input type="text" class="form-control"  value='<?php echo $_smarty_tpl->tpl_vars['unameVal']->value;?>
' name='fname' id="fname" placeholder="Name">
              </div>
              <div class="form-group">
              <label for="surname">Surname </label>
              <input type="text" class="form-control" id="surname" name='surname' placeholder="Surname">
              </div>
              <div class="form-group">
              <label for="nirc">NIRC/FIN </label>
              <input type="text" class="form-control"  onkeypress="return alphaNum(event);" id="nirc" name='nirc' placeholder="NIRC/FIN">
              </div>
              <div class="form-group">
              <label for="nirc">Nationality  </label>
              </div>
              <div class="form-group">
             
              <label class="radio_chk">Singaporean
              <input type="radio" checked="checked" value="Singaporean" name="nationality">
              <span class="checkmark_radio"></span>
              </label>
              <label class="radio_chk">Malaysian
              <input type="radio" value="Malaysian" name="nationality">
              <span class="checkmark_radio"></span>
              </label>
              <label class="radio_chk">Other
              <input type="radio" value="Other" name="nationality">
              <span class="checkmark_radio"></span>
              </label>
              </div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    
              <div class="form-group">
              <label for="passport">Passport No</label>
              <input type="text"  onkeypress="return alphaNum(event);" class="form-control" id="passno" name="passno" placeholder="Passport no">
              </div>
                            <div class="form-group">
              <label for="date">Date of Expiry (6 month validity required for travel) </label>
              <input type="text" class="form-control mt_b" readonly="true"  autocomplete="off" id="ExpirDt" name='ExpirDt' placeholder="DD/MM/YYYY" />
             <!--  <input type="text" class="form-control" id="surname" placeholder="DD/MM/YYYY"> -->
              </div>
              <div class="form-group">
              <label for="gender">Gender</label>
              <label class="radio_chk">Female
              <input type="radio" checked="checked" value='Female' name="radio">
              <span class="checkmark_radio"></span>
              </label>
              <label class="radio_chk">Male
              <input type="radio" value='Male' name="radio">
              <span class="checkmark_radio"></span>
              </label>
              </div>
              <div class="form-group">
              <label for="dateof">Date Of Birth  </label>
              <input type="text" class="form-control" id="dob" name='dob' readonly="true" placeholder="DD/MM/YYYY">
              </div>
               <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['mailVal']->value;?>
' id="cemail" name='cemail' placeholder="Email">
              </div>
              </div>            
             <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">     
              <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" id="phone" name='phone' placeholder="Phone">
              </div>
              <div class="form-group">
              <label for="nameof">Name of Emergency Contact Person & relationship to participant </label>
              <input type="text" class="form-control" name='emgPerson' id="emgPerson" placeholder="Contact person">
              </div>
              <div class="form-group">
              <label for="nameof">Her/His Contact No.</label>
              <input type="text" class="form-control" name='ephone' id="ephone" placeholder="Contact no">
              </div>
              <p>
              I acknowledge that I have read and agree to the Terms & Conditions of (Yogabar) 
              </p>
              <label class="custom_chk" style="width: 100%;">Yes. (term & condition attached)
              <input type="checkbox" name="trm" id='trm'>
              <span class="checkmark"></span>
              </label>
              </div>
 <div class="clearfix"></div>
 <div class="text-center">
            <input tabindex="3" type="button" value="Click to Registration" class="btn btn-default" onClick="validatePassword();"> 
            </div>
</div>
             <!--  <button type="button" id='regBtn' name='regBtn' class='btn btn-default btn-sm center-block'  > </button> -->
              </div>
               

<?php } else { ?>

 
 <!-- <form action="login.php?p=<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
&ct=ev" id='evpackFrmL' name="evpackFrmL" method="post" > -->
<!-- <input type='submit' class='btn btn-default btn-sm center-block'  name='' value='Login to Pay'> -->

<!--  <button class='btn btn-default btn-sm center-block'>Login</button> -->
 <?php }?>


  <?php }?>
    
    <?php }?>

</form>


              <!-- <form name='reg' method='post'  id='reg' action='events_reg.php'>
              <div class="divider_row" style="padding-bottom:0px;width:100%; float:left;margin-bottom: 5px;">
              <div class="col-md-12 col-sm-12 col-xs-12 p_rm">
              <div class="bg_reg"></div>
                  <h4 class="text-left">Registration</h4>   
                  <p>Cultural yoga retreat to Jogjakarta on the 26 - 29 May 2018</p>
              </div>
              </div> 
              <img src="https://lh6.googleusercontent.com/uokIyCdThUnLU7Oxfv0Dkh6N7-r2hy6Dz_eWMoXVbNIiHC-ekq1VobzP0_85SpUJEQzc4cKSoQ=w800" class="img-responsive"/>
              <div class="fields_start">
              <div class="form-group">
              <label for="exampleFormControlSelect2">Salutation </label>
              <select class="form-control" id="Salutation ">
              <option>Choose</option>
              <option>Mr</option>
              <option>Mrs</option>
              <option>Ms</option>
              </select>
              </div>
              <div class="form-group">
              <label for="fullname">Full Name (According to Passport):</label>
              <input type="text" class="form-control" id="pwd" placeholder="Your answer">
              </div>
              <div class="form-group">
              <label for="surname">Surname </label>
              <input type="text" class="form-control" id="surname" placeholder="Your answer ">
              </div>
              <div class="form-group">
              <label for="nirc">NIRC/FIN </label>
              <input type="text" class="form-control" id="surname" placeholder="Your answer ">
              </div>
              <div class="form-group">
              <label for="nirc">Nationality  </label>
              </div>
              <label class="custom_chk">Singaporean
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
              </label>
              <label class="custom_chk">Malaysian
              <input type="checkbox">
              <span class="checkmark"></span>
              </label>
              <label class="custom_chk">Other
              <input type="checkbox">
              <span class="checkmark"></span>
              </label>
              <input type="text" class="form-control mt_b" id="nameof" placeholder="Your answer">
              <div class="form-group">
              <label for="passport">Passport No</label>
              <input type="text" class="form-control" id="surname" placeholder="Your answer">
              </div>
              <div class="form-group">
              <label for="date">Date of Expiry (6 month validity required for travel) </label>
              <input type="text" class="form-control" id="surname" placeholder="DD/MM/YYYY">
              </div>
              <div class="form-group">
              <label for="gender">Gender</label>
              <label class="radio_chk">Female
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark_radio"></span>
              </label>
              <label class="radio_chk">male
              <input type="radio" name="radio">
              <span class="checkmark_radio"></span>
              </label>
              </div>
              <div class="form-group">
              <label for="dateof">Date Of Birth  </label>
              <input type="text" class="form-control" id="dateof" placeholder="DD/MM/YYYY">
              </div>
              <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Your answer">
              </div>
              <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" id="phone" placeholder="Your answer">
              </div>
              <div class="form-group">
              <label for="nameof">Name of Emergency Contact Person & relationship to participant </label>
              <input type="text" class="form-control" id="nameof" placeholder="Your answer">
              </div>
              <div class="form-group">
              <label for="nameof">Her/His Contact No.</label>
              <input type="text" class="form-control" id="nameof" placeholder="Your answer">
              </div>
              <p>
              I acknowledge that I have read and agree to the Terms & Conditions of (Yogabar) 
              </p>
              <label class="custom_chk" style="width: 100%;">Yes. (term & condition attached)
              <input type="checkbox">
              <span class="checkmark"></span>
              </label>
              </div>
              </form> -->

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


function validatePassword(){

  var validator = $("#reg").validate({
  rules: { 
   fname :"required", 
   //Salutation:"required",
   surname:"required",
   nirc:"required",
   passno:"required",
   ExpirDt:"required",
   dob:"required",
   cemail:{ required:true ,email: true        },
   phone:"required",

   //emgPerson:"required",
  // ephone:"required",
   trm:"required"

     },                             
     messages: {
       fname :"Enter the name",
       surname:"Enter surname",
       nirc:"Enter NIRC/FIN",
       passno:"Enter passport no",
       ExpirDt:"Select date of expiry",
       dob:"Select date of birth",
       cemail:"Enter valid email",
       phone:"Enter phone number",
       trm:"Select terms & conditions"

 
     },
 
 });

 if(validator.form()) 
 {

  $.ajax({
                type: "POST",
                  url: "event_regAjx.php",
                  data: $( "#reg" ).serialize()+"&eveType=1",
                  success:function(data){
                     if(data>0)
                    {
                        $('#hidregid').val(data);
                        $('#evpackFrm').submit();
                    }
                    else
                    {
                      location.href='notes.php';
                    }
               
            }
          });


 }
 
  }



$(document).ready(function() {
 
 var cLogin=<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
;
 if(cLogin==0)
 {
   location.href='login.php';
 }
 //alert(cLogin)

$('input[type=radio][name=nationality]').change(function(){

//alert(this.value)
});

 $( "#ExpirDt" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd/mm/yy',
     // showOn: "button",
     //            buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
    onSelect: function(selected) {
          //$("#toDt").datepicker("option","minDate", selected)
        }
      
 });

 $( "#dob" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd/mm/yy',
      //maxDate:0,
     // showOn: "button",
     //            buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
    onSelect: function(selected) {
          //$("#toDt").datepicker("option","minDate", selected)
        }
      
 });

 
 }); 
 function alphaNum(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode(key);
  if (key.length == 0) return;
  var regex = /^[a-z0-9]+$/i;
  if (!regex.test(key)) {
    theEvent.returnValue = false;
    if (theEvent.preventDefault) theEvent.preventDefault();
  }
}            
<?php echo '</script'; ?>
><?php }
}
?>
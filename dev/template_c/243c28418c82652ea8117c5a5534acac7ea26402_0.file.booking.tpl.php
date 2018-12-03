<?php /* Smarty version 3.1.27, created on 2016-07-15 07:28:13
         compiled from "/home/yogabar/public_html/dev/templates/default/booking.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9034265995788d6dd239f75_03802691%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '243c28418c82652ea8117c5a5534acac7ea26402' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/booking.tpl',
      1 => 1468585691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9034265995788d6dd239f75_03802691',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5788d6dd2a4789_93094316',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5788d6dd2a4789_93094316')) {
function content_5788d6dd2a4789_93094316 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9034265995788d6dd239f75_03802691';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>





<div class="container">

<div class="col-md-9" style="padding-left: 300px;width: 500px;">
	    <div id="animation" class="white-bg">  
	    	<div class="container" style="width: 880px;">
<br/>
<div class="panel panel-default" style="width: 850px;">
  <div class="panel-heading"><h3 >Your Widgets</h3>
   </div>
</div>


<div class="panel panel-default" style="width: 850px;"> 
  <div class="panel-body">
    <div class="widget appointment-widgets even list-row row" style="padding:15px;">
      <div class="col-sm-3">
        <div class="chicklet appointment btn btn-success" style="width: 150px;">Appointment</div>
      </div>

      <div class="col-sm-1 deployed-icons">

          <span class="pull-right" style="width: 13px;"><img alt="Favicon" src="https://assets.healcode.com/favicon.ico" title="This widget is deployed at http://dev.yogabar.sg/web/booking.php"></span>
      </div>

      <div class="col-sm-6 widget_title">
        <a href="appointments.php">Appointments</a>
      </div>

</div>
<div class="clearfix"></div>
<div class="widget enrollment-widgets odd list-row row" style="padding:15px;">
      <div class="col-sm-3">
        <div class="chicklet enrollment btn btn-primary" style="width: 150px;">Enrollment</div>
      </div>

      <div class="col-sm-1 deployed-icons">

      </div>

      <div class="col-sm-6 widget_title">
        <a href="enrollment.php">Events &amp; Workshops - Detail View</a>
      </div>

</div>
<div class="clearfix"></div>
<div class="widget schedule-widgets even list-row row" style="padding:15px;">
      <div class="col-sm-3">
        <div class="chicklet schedule btn btn-warning" style="width: 150px;">Schedule</div>
      </div>

      <div class="col-sm-1 deployed-icons">

      </div>

      <div class="col-sm-6 widget_title">
        <a href="schedule.php">One Week Class Schedule</a>
      </div>

</div>
<div class="clearfix"></div>
<div class="widget class_list-widgets odd list-row row" style="padding:15px;">
      <div class="col-sm-3">
        <div class="chicklet class_list btn btn-info" style="width: 150px;">Class List</div>
      </div>

      <div class="col-sm-1 deployed-icons">

      </div>

      <div class="col-sm-6 widget_title">
        <a href="classlist.php">Class Descriptions</a>
      </div>

</div>
<div class="clearfix"></div>
<div class="widget staff_list-widgets even list-row row" style="padding:15px;">
      <div class="col-sm-3">
        <div class="chicklet staff_list btn btn-primary" style="width: 150px;">Staff List</div>
      </div>

      <div class="col-sm-1 deployed-icons">

      </div>

      <div class="col-sm-6 widget_title">
        <a href="stafflist.php">Staff Bios and Schedules</a>
      </div>
</div>
<div class="clearfix"></div>
<div class="widget prospect-widgets odd list-row row" style="padding:15px;">
      <div class="col-sm-3">
        <div class="chicklet prospect btn btn-success" style="width: 150px;">Prospect</div>
      </div>

      <div class="col-sm-1 deployed-icons">

      </div>

      <div class="col-sm-6 widget_title">
        <a href="prospect.php">Prospects - Contact Us or Intro Offer Pages</a>
      </div>
</div>
<div class="clearfix"></div>
<div class="widget registration-widgets even list-row row" style="padding:15px;">
      <div class="col-sm-3">
        <div class="chicklet registration btn btn-info" style="width: 150px;">Registration</div>
      </div>

      <div class="col-sm-1 deployed-icons">

      </div>

      <div class="col-sm-6 widget_title">
        <a href="registration.php">Yogabar Registration</a>
      </div>

</div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
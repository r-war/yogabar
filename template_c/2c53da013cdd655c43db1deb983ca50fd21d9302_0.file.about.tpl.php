<?php /* Smarty version 3.1.27, created on 2018-10-27 05:30:53
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:206035bd3dbedd520b5_29010398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c53da013cdd655c43db1deb983ca50fd21d9302' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\about.tpl',
      1 => 1497934420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206035bd3dbedd520b5_29010398',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3dbedef0216_89178972',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3dbedef0216_89178972')) {
function content_5bd3dbedef0216_89178972 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '206035bd3dbedd520b5_29010398';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div  class="scroll white-bg padding-10 ">
	      <h2>WELCOME TO YOGA BAR</h2>
	      <p>Yoga Bar sets the bar for wellness and a peace of mind. With yoga classes tailored for one and all. 
	       Participants can look forward to an invigorating session for the Mind, Body and soul. </p>
	       <p>Escape the hustle and bustle of urban living for an hour’s peace and rejuvenation under the tutelage of
your instructor. </p>
<p><b>The practices available are:</b> </p>
<p>✓ Hatha, Ashtanga, Hashta, Vinyasa Flow, Yin Yoga, Yoga Therapy, Yoga Wheel and morning Pranayama </p>
<p>✓ In our Yoga Bar Studio or private/ corporate venues. </p>
	     <!--  <p> Yoga Bar sets the bar for wellness and a peace of mind. 
	        With yoga classes tailored for one and all.</p>
	      <p>Participants can look forward to an invigorating session for the mind. Body and soul. Escape the hustle and bustle of urban living for an hour’s peace and rejuvenation under the tutelage of your instructor.</p> -->
          <p><b>Vision:</b> </p>
	      <p>To share the practice of Yoga and benefit others.</p>

	      <p><b>Mission:</b> </p>
	      <p>To make the practice of yoga accessible to all and encourage a regular and safe practice.
To create a community around the same shared values.</p>

      



	    </div>
	      
  	</div>
          <div class="soical-media visible-sm visible-xs">
                <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div>
             
             <div class="web_soical-media">
                 <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

             </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
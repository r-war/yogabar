<?php /* Smarty version 3.1.27, created on 2018-11-19 08:30:57
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\faq.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:142925bf266b161ceb2_99784367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd7ce5a3a6669be1ced9b45e763158da844f7c61' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\faq.tpl',
      1 => 1485641480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142925bf266b161ceb2_99784367',
  'variables' => 
  array (
    'faq_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bf266b179bc07_82914459',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bf266b179bc07_82914459')) {
function content_5bf266b179bc07_82914459 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp5\\htdocs\\yogabar\\includes\\smarty\\libs\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '142925bf266b161ceb2_99784367';
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
        	<h2><?php echo $_smarty_tpl->tpl_vars['faq_rs']->value['name'];?>
</h2>
            
            <div class="row">
	    			<div class="">	    	
	    				<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['faq_rs']->value['description'],'../','');?>

	    			</div>
	    	</div>
                
	     <!-- <h2>F.A.Q</h2>
	      <p>
<li><font color="Crimson">What should i wear & what to bring ? </font></br>
Wear something you’re comfortable in – fitting, stretchy clothes that won’t fall everywhere when you’re moving around. Yoga mat & water refilled are provided.  </li>

<li><font color="Crimson">How to go to Yogabar studio?</font></br>
We are located 5 min from Orchard MRT. People often confuse between Far East Plaza (scotts road), Our studio ls Far East shopping centre, across of Thai Embassy and opposite of Liat Tower. </li>

<li><font color="Crimson">How to book our classes? </font></br>
1st you have sign up as member by buying one of our packages. Click on the packages menu, once your payment is accept by us now you can book your class. We will use your email address which you use during payment in our database to create your profile in our booking system. </li>

<li><font color="Crimson">How often can I book the class?</font></br>
No limitation for each booking as long as you have enough credit to use. </li>

<li><font color="Crimson">Do you offer private class/one on one? </font></br>
Yes, We do. You can check our price list under packages. For private class you need to advice us the day and time which you request. Venue can be done in our studio or at your convenience place. </li>


<li><font color="Crimson">Can we book for one time event? </font></br>
Yes, you can. The fee depends on the number of people and duration of the class. </li>

<li><font color="Crimson">Do you offer corporate class?</font></br>
Yes, We do. Please send your enquiry to info @yogabar.sg.</li>

<li><font color="Crimson">Can I get a refund if I cancel my package?</font></br>
Sorry to let go, but all packages is not refundable. </li>
</p>
	    </div>-->
	    <div class=" col-md-6 col-md-offset-4 soical-media">
	     	<?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	    </div>
  	</div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
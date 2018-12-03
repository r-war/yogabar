<?php /* Smarty version 3.1.27, created on 2016-02-09 05:12:43
         compiled from "/home/yogabar/public_html/templates/default/teacher.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:189901784856b9c9ab24cf47_69143591%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5e7f897a948e29a30b6ef35cad673f4ac1743a' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/teacher.tpl',
      1 => 1455016356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189901784856b9c9ab24cf47_69143591',
  'variables' => 
  array (
    'teacher_rs' => 0,
    'teacher' => 0,
    'teacher1_rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56b9c9ab2c48f0_99201599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56b9c9ab2c48f0_99201599')) {
function content_56b9c9ab2c48f0_99201599 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/yogabar/public_html/includes/smarty/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '189901784856b9c9ab24cf47_69143591';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">
	    <div id="animation" class="white-bg">  
	    	<div class="container">	
	    			<div class="row">
	    				<div class=""><div style="float:left;"><h2>Teacher Profile</h2></div>
                        <div style="float:right;"><?php
$_from = $_smarty_tpl->tpl_vars['teacher_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['teacher']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
$foreach_teacher_Sav = $_smarty_tpl->tpl_vars['teacher'];
?>
                            	<a href="teacher.php?id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</a>&nbsp;&nbsp;|
                             <?php
$_smarty_tpl->tpl_vars['teacher'] = $foreach_teacher_Sav;
}
?></div> 
             		</div>
	    	</div>    		
				<div class="row">
         	    		<div class="">	 
		        				<?php
$_from = $_smarty_tpl->tpl_vars['teacher1_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['teacher']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
$foreach_teacher_Sav = $_smarty_tpl->tpl_vars['teacher'];
?>
							  		<div class=""><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>

							  			<!--<a href="teacher_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
"></a>  -->
							  			<br/>
							  			<?php ob_start();
echo $_smarty_tpl->tpl_vars['teacher']->value['description'];
$_tmp1=ob_get_clean();
echo smarty_modifier_truncate(smarty_modifier_replace($_tmp1,'../',''),600,"... <a href=
                                        'teacher_detail.php?id=".((string)$_smarty_tpl->tpl_vars['teacher']->value['id'])."'>read more</a>",true);?>

							  		</div>
									<?php
$_smarty_tpl->tpl_vars['teacher'] = $foreach_teacher_Sav;
}
if (!$_smarty_tpl->tpl_vars['teacher']->_loop) {
?>							
										<div class="col-sm-12">No Records Found</div>						
									<?php
}
?>
						</div>
					</div>
	    </div>
        	    </div>
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
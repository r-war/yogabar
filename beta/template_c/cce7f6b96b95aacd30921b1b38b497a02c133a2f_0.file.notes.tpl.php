<?php /* Smarty version 3.1.27, created on 2015-10-24 13:19:49
         compiled from "/home/yogabar/public_html/beta/templates/default/notes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:522001030562bcbc50d4c52_66159570%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cce7f6b96b95aacd30921b1b38b497a02c133a2f' => 
    array (
      0 => '/home/yogabar/public_html/beta/templates/default/notes.tpl',
      1 => 1445710679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '522001030562bcbc50d4c52_66159570',
  'variables' => 
  array (
    'events_rs' => 0,
    'events' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562bcbc525f6f3_84375869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562bcbc525f6f3_84375869')) {
function content_562bcbc525f6f3_84375869 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/yogabar/public_html/beta/includes/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/yogabar/public_html/beta/includes/smarty/libs/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '522001030562bcbc50d4c52_66159570';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div id="animation" class="white-bg">
	    	<h1>Events</h1>
	    	<br/>
	    	<div id="events">
	    	<?php
$_from = $_smarty_tpl->tpl_vars['events_rs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['events'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['events']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['events']->value) {
$_smarty_tpl->tpl_vars['events']->_loop = true;
$foreach_events_Sav = $_smarty_tpl->tpl_vars['events'];
?> 
					<a  href="#;" data-id="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
" class="showme" title="<?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
">
			      <?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
 at <?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
 
			    </a>
			    <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
			    <p>
			    	<?php ob_start();
echo $_smarty_tpl->tpl_vars['events']->value['description'];
$_tmp1=ob_get_clean();
echo smarty_modifier_truncate(smarty_modifier_replace($_tmp1,'../',''),600,"... <a href='#;' data-id='".((string)$_smarty_tpl->tpl_vars['events']->value['id'])."' class='showme'>read more</a>",true);?>

			    <p>
			    <?php }?>
			    <br/>
				<?php
$_smarty_tpl->tpl_vars['events'] = $foreach_events_Sav;
}
if (!$_smarty_tpl->tpl_vars['events']->_loop) {
?>
					No Events found.
				<?php
}
?>
				</div>				
	    </div>
	    <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">		    
		      <!-- Modal content-->
		      <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			   <h4 class="modal-title">Event</h4>
			</div>			<!-- /modal-header -->
			<div class="modal-body">
                   	  Content is loading...
	                </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
<!-- BS JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(function($){
         $('a.showme').click(function(ev){
             ev.preventDefault();
             var uid = $(this).attr('data-id');

             $.get('events.php?id=' + uid, function(html){
                 $('#myModal .modal-body').html(html);
                 $('#myModal').modal('show', {backdrop: 'static'});
             });
         });
    });

    $('.active').click(function(){
    	$(this).toggleClass( "open" );
    });
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
<?php /* Smarty version 3.1.27, created on 2018-03-01 05:13:28
         compiled from "/home/yogabar/public_html/dev/templates/default/notes_re.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:874742405a97e058e2c107_38479770%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ff107242d970a7fb2720f6dae656b34edc6739' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/notes_re.tpl',
      1 => 1519902778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '874742405a97e058e2c107_38479770',
  'variables' => 
  array (
    'events_rs' => 0,
    'events' => 0,
    'ChkLogin' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a97e058f2a346_37557784',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a97e058f2a346_37557784')) {
function content_5a97e058f2a346_37557784 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '874742405a97e058e2c107_38479770';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
<div class="even_tab col-md-8 col-md-offset-4" style="background:#fff;padding:10px;box-shadow:0 0 3px #aaa;float:left;">

	<form name='reg' method='post'  id='reg' action='events_tview.php' >
<input type='hidden' name='hidId' id='hidId' value='' >
	<div class="divider_row" style="border-bottom:1px solid #aaa; padding-bottom:20px;width:100%; float:left;">
  
            <div class="col-md-3 col-sm-4 col-xs-3">
                <h4 class="text-center">Date</h4>                      
            </div>
                     <div class="col-md-3 col-sm-4 col-xs-3">
                <h4 class="text-center">Event</h4>                      
            </div>

 <div class="col-md-3 col-sm-4 col-xs-3">
                <h4 class="text-center">Price</h4>                      
            </div>
                     <div class="col-md-3 col-sm-4 col-xs-3">
                <h4 class="text-center">Registration</h4>                      
            </div> 
	</div> 
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
		<div class="divider_row "  style="float:left; width:100%; padding:10px;">
  
            <div class="col-md-3 col-sm-4 col-xs-3 text-center">
                			      
<?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
                  
            </div>
                     <div class="col-md-3 col-sm-4 col-xs-3 text-left">
                            <!--<a  href="#;" data-id="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
" class="showme" title="<?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
"> -->
			      <?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
 on  
<?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
  
  


<!-- </a>    -->              
            </div>
 <div class="col-md-3 col-sm-4 col-xs-3 text-center">
 <?php if ($_smarty_tpl->tpl_vars['events']->value['price'] > 0) {?>
   $<?php echo $_smarty_tpl->tpl_vars['events']->value['price'];?>

  <?php } else { ?>
   Free
<?php }?> 


</div>

                     <div class="col-md-3 col-sm-4 col-xs-3 text-center">
                 <?php if ($_smarty_tpl->tpl_vars['events']->value['price'] > 0) {?>
                <button lang='<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
' class="btn btn-default btn-sm center-block regCls" style="margin:auto;">Register Now</button> 
                 <?php } else { ?>
                   <!--<a  href="#;" data-id="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
" class="showme" title="<?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
">--><button  lang='<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
' class="btn btn-default btn-sm center-block regCls" style="margin:auto;">View Details</button><!--</a> -->
                 <?php }?>                
            </div>
	</div>
		<?php
$_smarty_tpl->tpl_vars['events'] = $foreach_events_Sav;
}
?>	 
	
	</form>
	

</div>
	  <!-- Main component for a primary marketing message or call to action -->



	 <!-- <div class="col-md-5"></div>
	  <div class="col-md-7 ">
	    <div class="white-bg">
	    	<h1>Events</h1>
	    	<br/>
	    	<div id="events">

	    	   <ul class="list-group">
 <form action="events_checkout.php" id='evpackFrm' name="evpackFrm" method="post" >
 <input type='text' name="hidid" id="hidid" value=""  > 
<input type='text' name="cklog" id="cklog" value="<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
"  >  

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
				<li class="list-group-item">
                                          
                                       <a  href="#;" data-id="<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
" class="showme" title="<?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
">
			     <div class="col-sm-8"> <?php echo $_smarty_tpl->tpl_vars['events']->value['name'];?>
 on  </div>
<div class="col-sm-4"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['events']->value['event_date'];?>
  
  


</span> </a> <?php if ($_smarty_tpl->tpl_vars['events']->value['paylink'] == 1 && $_smarty_tpl->tpl_vars['events']->value['events_name'] != '') {?> 
   <button class='events' lang='<?php echo $_smarty_tpl->tpl_vars['events']->value['id'];?>
' type="button"  >Click to Pay $ <?php echo $_smarty_tpl->tpl_vars['events']->value['price'];?>
 </button>
  <?php }?>   </div></li>
			    
</form>
			    <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
			 
			    <?php }?>
</ul>
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
	    </div>-->
	    <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog modal_eve">		    
		       
		      <div class="modal-content" id='modalImg'>
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			   <h4 class="modal-title">Event</h4>
			</div>			 
			<div class="modal-body">
                   	  Content is loading...
	                </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		      
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
	</div>

<!-- <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
 
<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 type="text/javascript">
    jQuery(function($){

       
         $('.regCls').click(function(ev){ 
 ev.preventDefault();
 
var ids=$(this).attr('lang');
$('#hidId').val(ids);

document.getElementById("reg").submit();



        });

         $('a.showme').click(function(ev){
             ev.preventDefault();
             var uid = $(this).attr('data-id');

             $.get('events1.php?id=' + uid, function(html){
                 $('#myModal .modal-body').html(html);
                 $('#myModal').modal('show', {backdrop: 'static'});
             });
         });
    });


   $('.events').click(function(ev){
             ev.preventDefault();

      var notsids=$(this).attr('lang');
      var cklogin=$('#cklog').val();

        if(notsids>0 && cklogin==1)
        {
 $('#hidid').val(notsids);
document.getElementById("evpackFrm").submit();

        }
        else
         { 
           location.href='login.php';
         } 

    });


    $('.active').click(function(){
    	$(this).toggleClass( "open" );
    });
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
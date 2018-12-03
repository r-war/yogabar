<?php /* Smarty version 3.1.27, created on 2018-02-25 23:15:17
         compiled from "/home/yogabar/public_html/dev/templates/default/admin/pack_unsub.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:303627595a9397e5d359e5_80288203%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83129e4dc83edf12a5f80355e55fc24cf4101dab' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/admin/pack_unsub.tpl',
      1 => 1486682886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303627595a9397e5d359e5_80288203',
  'variables' => 
  array (
    'getAllSubunSubList' => 0,
    'Row' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9397e5ef1817_14821051',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9397e5ef1817_14821051')) {
function content_5a9397e5ef1817_14821051 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '303627595a9397e5d359e5_80288203';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  
	  <div class="col-md-12 ">  	
	    <div class="white-bg" style="width:100%">
	    	<h2>Package Subscription List</h2>
	    	 <span style="float:right;"><a href="report.php" id="Add">Back</a></span> 
	    	<br />
	    	<div class="table-responsive">
				  <table id="package_list" class="display table" cellspacing="0" width="100%">
			<thead>
			<tr>
				<th>No</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Pak. Name</th>
				<th>Price</th>
				<th>Pay Dt. </th>
				<th>Pay Status</th>
				<th>Subscrip. Status&nbsp;<span id='ldimg' style='display:none;'>
				<image src='../images/loadingImg.gif'></span></th>
				 
			</tr>
			</thead>  


			<tbody> <?php $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable(0, null, 0);?> 
                       <?php $_smarty_tpl->tpl_vars['UnChKRow'] = new Smarty_Variable(0, null, 0);?> 
                        <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['keys'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['keys']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>

                        <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Row']->value+1;?>
</td> 
                          <td><?php echo $_smarty_tpl->tpl_vars['package']->value['user_name'];?>
</td> 
                          <td><?php echo $_smarty_tpl->tpl_vars['package']->value['email'];?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['package']->value['created_at'];?>
</td> 
                         <td>
                           <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['Paysucc'];
$_tmp1=ob_get_clean();
if ($_tmp1 == 1) {?>
                                Success  <!--<?php echo $_smarty_tpl->tpl_vars['package']->value['res_subcri_id'];?>
 -->
                                <?php } else { ?>
                                Failure 
                               <?php }?> 
                         </td>
                       
                        <td>
                              
                              <?php if ($_smarty_tpl->tpl_vars['package']->value['pak_Intervel_id'] == 1) {?>  
                          
                              
                              <?php if ($_smarty_tpl->tpl_vars['package']->value['Paysucc'] == 1 && $_smarty_tpl->tpl_vars['package']->value['un_subscrib'] == 0 && $_smarty_tpl->tpl_vars['package']->value['subcriSucc'] == 1) {?>
                                  <span id="unsubmode_<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
"> <button type="button" class='btncls' lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
' id='sbtn_<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
'> UnSubscribe</button> </span>
                                 
                                <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['Paysucc'] == 1 && $_smarty_tpl->tpl_vars['package']->value['un_subscrib'] == 0 && $_smarty_tpl->tpl_vars['package']->value['subcriSucc'] == 0) {?>
                                  <span id="unsubmode_<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
"> <button  type="button" class='subbtncls' lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
' 
                        id='sbtn_<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
'> Subscribe</button> </span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['Paysucc'] == 1 && $_smarty_tpl->tpl_vars['package']->value['un_subscrib'] == 1 && $_smarty_tpl->tpl_vars['package']->value['subcriSucc'] == 1) {?>
                                   Unsubscribed 
                                <?php } else { ?>
                                   
                                 <?php }?>


                              
                              <?php } else { ?> 

                                single time 

                             
                              <?php }?> 
   
                             <!-- <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['subcriSucc'];
$_tmp2=ob_get_clean();
if ($_tmp2 == 1) {?>
                      
                                 <?php if ($_smarty_tpl->tpl_vars['package']->value['Paysucc'] == 1 && $_smarty_tpl->tpl_vars['package']->value['un_subscrib'] == 0) {?>
                                  <span id="unsubmode_<?php echo $_smarty_tpl->tpl_vars['package']->value['subcriSucc'];?>
"> <button type="button" class='btncls' lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
' id='sbtn_<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
'> UnSubscribe</button> </span>
                                 
                                <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['Paysucc'] == 0 && $_smarty_tpl->tpl_vars['package']->value['un_subscrib'] == 0) {?>
                                   Missing subscription
                                <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['Paysucc'] == 1 && $_smarty_tpl->tpl_vars['package']->value['un_subscrib'] == 1) {?>
                                   Unsubscribed 
                                 <?php }?>
                                                              
                            
                                
                                
                               <?php } else { ?>
                                 
                                single
                                 
                               <?php }?> -->
                            
                        </td> 

                      
                       
                        
                        </tr>
                     <?php $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable($_smarty_tpl->tpl_vars['Row']->value+1, null, 0);?> 
                         

                <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>

                 
				</div> 
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.dataTables.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
	    $('#package_list').DataTable();


$("#package_list").on("click", ".btncls",  function() { 


	
var Selval=$(this).attr('lang');
  

var r = confirm("Are you want to UnSubscribed this package? ");
		if (r == true) {


                if(Selval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_admin_ajax.php",
	data: $("#frmsub").serialize()+"&mode=delsub&ids="+Selval,
	dataType: 'HTML', 
	success:function(data){

//alert(data);
 $('#ldimg').hide();
         var Spldata=data.split('#$#');
 //alert(data)
             if(Spldata[0]==0)
             {
                alert("Session out");
                //location.href="logout.php";
             }
             else if(Spldata[0]==1)
             {
                alert(Spldata[1]); 
               //location.href="user_pack.php";

             }
             else if(Spldata[0]==2)
             {
                alert(Spldata[1]);
              $('#sbtn_'+Selval).attr('lang','');
$('#sbtn_'+Selval).html("");
            $('#sbtn_'+Selval).html("<font color='green'>UnSubscribred</font>") 

               // location.href="user_pack.php";

            }
	 
	}
	});
 
   }
   else
   {
 
   alert("Invalid details")
   }


		    
		}  
 





});


$("#package_list").on("click", ".subbtncls",  function() {



var UnSelval=$(this).attr('lang');
 
          if(UnSelval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_admin_ajax.php",
	data: $("#frmsub").serialize()+"&mode=misssub&ids="+UnSelval,
	dataType: 'HTML', 
	success:function(data){
 $('#ldimg').hide();
         var Spldata=data.split('#$#');
 //alert(data)
              if(Spldata[0]==0)
             {
                alert("Session out");
                location.href="logout.php";
             }
             else if(Spldata[0]==1)
             {
                alert(Spldata[1]); 
                location.href="report.php";

             }
             else if(Spldata[0]==2)
             {  
                  $( "#sbtn_"+UnSelval ).removeClass( "subbtncls" ).addClass( "btncls" );
                  $( "#sbtn_"+UnSelval ).html("UnSubscribe");
                 
                //alert(Spldata[1]); 
                //location.href="user_pack.php";

            }
	 
	}
	});
 
   }
   else
   {
 
   alert("Invalid details")
   }





 });


/* $( ".actdeact" ).on( "click", function() { 
     var ids=$(this).attr('lang') ;


$.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
	                data: $( "#myform" ).serialize()+"&id="+ids+"&mode=planActDeact",
	                success:function(data){
	                	
                             if(data)
                             {
                                alert("Changes made successfully");

                             }
                             else
                             {
                                alert("Try again");
                             }

                            location.href="package.php";
		             
	      		}
	        });


}); */


		});
	<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
<?php /* Smarty version 3.1.27, created on 2017-03-23 14:26:55
         compiled from "/home/yogabar/public_html/templates/default/user_pack.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64356122058d4217fd9f3b6_21119728%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3302804b3d0ecafacd7758c8b00cdf821881b7' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/user_pack.tpl',
      1 => 1490297023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64356122058d4217fd9f3b6_21119728',
  'variables' => 
  array (
    'getAllSubunSubList' => 0,
    'package' => 0,
    'UnChKRow' => 0,
    'Row' => 0,
    'packageUn' => 0,
    'UNRow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d4217fee5139_21008374',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d4217fee5139_21008374')) {
function content_58d4217fee5139_21008374 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64356122058d4217fd9f3b6_21119728';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <!--<div class="col-md-5"></div> -->
	  <div class="col-md-12 ">
	    <div  class="white-bg" style="width:100%">
	      <form method="post" target="_top" class="user_packs">
 
                                        					
        	<h3> User Package Subscriptions List:</h3>        
        	 
		<table id="package_list" class="display table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Sl.No</th>
                    <th>Package Name</th>
                    <th>Discount Applied</th>
					<th>Price</th>
              		<th>Payment Status</th>
                    <th>Subscription Status</th>
					<th>Mode&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span></th>
                 	<!--<th>Mode&nbsp;<span id='ldimg' style='display:none;'><image src='images/loadingImg.gif'></span></th>-->
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

                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['un_subscrib'];
$_tmp1=ob_get_clean();
if ($_tmp1 == 1) {?>
                            <?php $_smarty_tpl->tpl_vars['UnChKRow'] = new Smarty_Variable($_smarty_tpl->tpl_vars['UnChKRow']->value+1, null, 0);?> 
                        <?php }?>
                         
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['un_subscrib'];
$_tmp2=ob_get_clean();
if ($_tmp2 == 0) {?>
                        

                        <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Row']->value+1;?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</td> 
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['discount_applied'];
$_tmp3=ob_get_clean();
if ($_tmp3 == 1) {?>
                         Yes    
                        <?php } else { ?>
                         No
                        <?php }?></td>
                        <td>
                         <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['discount_applied'];
$_tmp4=ob_get_clean();
if ($_tmp4 == 1) {?>
                         $<?php echo $_smarty_tpl->tpl_vars['package']->value['disPrice'];?>
     
                        <?php } else { ?>
                        $<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>

                        <?php }?>
                        

                        </td> 
                        <td>   
                              
                               <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['Paysucc'];
$_tmp5=ob_get_clean();
if ($_tmp5 == 1) {?>
                                Success <!--<?php echo $_smarty_tpl->tpl_vars['package']->value['res_subcri_id'];?>
 -->
                                <?php } else { ?>
                                Failure 
                               <?php }?>
 
                               
                        </td> 

<td>   
                              
                               <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['subcriSucc'];
$_tmp6=ob_get_clean();
if ($_tmp6 == 1) {?>
                                Success 
                                <?php } else { ?>
                             <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['pak_Intervel_id'];
$_tmp7=ob_get_clean();
if ($_tmp7 == 1) {?>
			 <button type="button" class='subbtncls' lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
' 
                        id='sbtn_<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
'> Subscribe</button>
                                <?php }?>
                               <?php }?>
 
                               
                        </td> 
                        <td>
                            
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['subcriSucc'];
$_tmp8=ob_get_clean();
if ($_tmp8 == 1 && $_smarty_tpl->tpl_vars['package']->value['Paysucc'] == 1) {?>
                                <button type="button" class='btncls' lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
' 
                        id='sbtn_<?php echo $_smarty_tpl->tpl_vars['package']->value['pay_id'];?>
'> UnSubscribe</button>
                                <?php } else { ?>
                                 ------
                               <?php }?>
                        </td>
                        <!--<td align='center'>
                        <span id='btnspan_<?php echo $_smarty_tpl->tpl_vars['package']->value['subcr_id'];?>
'>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['deleted'];
$_tmp9=ob_get_clean();
if ($_tmp9 == 1) {?>
                        <button type="button" class='btncls' lang='<?php echo $_smarty_tpl->tpl_vars['package']->value['subcr_id'];?>
' 
                        id='sbtn_<?php echo $_smarty_tpl->tpl_vars['package']->value['subcr_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['package']->value['subunsub'];?>
</button>
                        <?php } else { ?>UnSubscribe<?php }?>
                        </span>
                        </td> -->
                        </tr>
                     <?php $_smarty_tpl->tpl_vars['Row'] = new Smarty_Variable($_smarty_tpl->tpl_vars['Row']->value+1, null, 0);?> 
                     <?php }?>    

                <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['Row']->value;
$_tmp10=ob_get_clean();
if ($_tmp10 == 0) {?>
                <tr>
                <td align='center' colspan="6"><a href='package.php'>No Records Found Click here to add subscribe Package </a> </td>
                </tr>
                <?php }?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['UnChKRow']->value;
$_tmp11=ob_get_clean();
if ($_tmp11 > 0) {?>
                    <br>
                    <th>Sl.No</th>
                    <th>Package Name</th>
                     <th>Discount Applied</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Subscription Status</th>
                    <th> </th> 
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['UNRow'] = new Smarty_Variable(0, null, 0);?> 
                    <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['packageUn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['packageUn']->_loop = false;
$_smarty_tpl->tpl_vars['keysUN'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['keysUN']->value => $_smarty_tpl->tpl_vars['packageUn']->value) {
$_smarty_tpl->tpl_vars['packageUn']->_loop = true;
$foreach_packageUn_Sav = $_smarty_tpl->tpl_vars['packageUn'];
?> 
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['packageUn']->value['un_subscrib'];
$_tmp12=ob_get_clean();
if ($_tmp12 == 1) {?>
                    <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['UNRow']->value+1;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['packageUn']->value['name'];?>
</td> 
                    <td>No </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['packageUn']->value['price'];?>
</td> 
                    <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['Paysucc'];
$_tmp13=ob_get_clean();
if ($_tmp13 == 1) {?>
                                Success
                                <?php } else { ?>
                                Failure 
                               <?php }?></td>
                     <td>UnSubscribeted</td>
<td> </td>  
                    </tr> 
                    <?php $_smarty_tpl->tpl_vars['UNRow'] = new Smarty_Variable($_smarty_tpl->tpl_vars['UNRow']->value+1, null, 0);?> 
                    <?php }?>    
                <?php
$_smarty_tpl->tpl_vars['packageUn'] = $foreach_packageUn_Sav;
}
?>

                          

			</tbody>
		</table>
        	 
 
	        
	        
	        
	        
	        
	        
	              	 	
        	
				</form>
	  	</div>
		  <div class=" col-md-5 col-md-offset-5 soical-media">
		    <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		  </div>
  	</div>
	</div>


<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

     

    $(document).ready(function() {
      
       
        
$(".btncls").click(function(){
	
var Selval=$(this).attr('lang');
 

var r = confirm("Are you want to UnSubscribed this package? ");
		if (r == true) {


                if(Selval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
	data: $("#frmsub").serialize()+"&mode=delsub&ids="+Selval,
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
               //location.href="user_pack.php";

             }
             else if(Spldata[0]==2)
             {
                alert(Spldata[1]); 
                location.href="user_pack.php";

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

$(".subbtncls").click(function(){
	
var UnSelval=$(this).attr('lang');

          if(UnSelval>0){  $('#ldimg').show();
        $.ajax({
	type: "POST",
	url: "subscrib_ajax.php",
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
                location.href="user_pack.php";

             }
             else if(Spldata[0]==2)
             {
                alert(Spldata[1]); 
                location.href="user_pack.php";

            }
	 
	}
	});
 
   }
   else
   {
 
   alert("Invalid details")
   }




}); 

          
        
    
        

    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>
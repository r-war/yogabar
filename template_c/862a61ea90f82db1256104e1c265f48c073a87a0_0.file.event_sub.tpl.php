<?php /* Smarty version 3.1.27, created on 2018-03-06 03:12:21
         compiled from "/home/yogabar/public_html/templates/default/admin/event_sub.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15300620075a9e5b753614d7_96162674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '862a61ea90f82db1256104e1c265f48c073a87a0' => 
    array (
      0 => '/home/yogabar/public_html/templates/default/admin/event_sub.tpl',
      1 => 1520327122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15300620075a9e5b753614d7_96162674',
  'variables' => 
  array (
    'catNameVal' => 0,
    'getAllSubunSubList' => 0,
    'Row' => 0,
    'package' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9e5b7544ce94_62163869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9e5b7544ce94_62163869')) {
function content_5a9e5b7544ce94_62163869 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15300620075a9e5b753614d7_96162674';
echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="innerbg">
	<?php echo $_smarty_tpl->getSubTemplate ("admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  
	  <div class="col-md-12 ">  	
	    <div class="white-bg" style="width:100%">
	    	<h2>Events Registration/Subscription List for <?php echo $_smarty_tpl->tpl_vars['catNameVal']->value;?>
</h2>
	    	 <span style="float:right;"><a href="report_events.php" id="Add">Back</a></span> 
	    	<br />
	    	<div class="table-responsive">
				  <table id="package_list" class="display table" cellspacing="0" width="100%">
			<thead>
			<tr>
				<th>No</th>
				<th>User Name</th>
         <th>Nationality</th>
          <th>Passport</th>
            <th>NIRC/FIN</th>
              <th>Date of expiry</th>
               <th>Email</th>
				<th>Events. Name</th>
			<!-- 	<th>Price</th> -->
				<th>Reg Dt. </th>
				 
				 
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
                           <td><?php echo $_smarty_tpl->tpl_vars['package']->value['nationality'];?>
</td> 
                           <td><?php echo $_smarty_tpl->tpl_vars['package']->value['passport_no'];?>
</td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['package']->value['nirc'];?>
</td> 
                             <td><?php echo $_smarty_tpl->tpl_vars['package']->value['date_of_expiry'];?>
</td> 
                          <td><?php echo $_smarty_tpl->tpl_vars['package']->value['email'];?>
</td> 
                        <td><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</td> 
                       <!-- <td>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['price'];
$_tmp1=ob_get_clean();
if ($_tmp1 == 0) {?>
                         Free
                         <?php } else { ?>
                         <?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>

                        <?php }?>
                        
                        </td>  -->
                        <td><?php echo $_smarty_tpl->tpl_vars['package']->value['created_at'];?>
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
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"><?php echo '</script'; ?>
> 


<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">

  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
> -->
  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"><?php echo '</script'; ?>
>


  

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
	    //$('#package_list').DataTable();



    $('#package_list').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'excel' 
        ]
    } );
 


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
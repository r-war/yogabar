<?php /* Smarty version 3.1.27, created on 2018-11-19 08:12:08
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\package.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:166145bf26248c8b5e1_98292667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6305684133ec3bf3316ac28cd94c9347ee4a2093' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\package.tpl',
      1 => 1542610530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166145bf26248c8b5e1_98292667',
  'variables' => 
  array (
    'getAllSubunSubList' => 0,
    'package' => 0,
    'ChkLogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bf26248deedb7_07388243',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bf26248deedb7_07388243')) {
function content_5bf26248deedb7_07388243 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '166145bf26248c8b5e1_98292667';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body class="innerbg">
  <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="col-md-5"></div>
    <div class="col-md-7 ">
      <div class="white-bg">
        <form action="package_checkout.php" id='packFrm' name="packFrm" method="post">

          <input type='hidden' name="hidid" id="hidid" value="">
          <h3> Enjoy our packages as below:</h3>
          <h4>Packages To Share</h4>

          <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['group_type_id'];
$_tmp1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp2=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp4=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp5=ob_get_clean();
if ($_tmp1 == 1 && ($_tmp2 != 70 && $_tmp3 != 82 && $_tmp4 != 81 && $_tmp5 != 85)) {?>

            <li>

              <input type="radio" <?php echo $_smarty_tpl->tpl_vars['package']->value['subcrib'];?>
 name="amount" id='opt_<?php echo $_smarty_tpl->tpl_vars['package']->value[' id'];?>
' data-toggle="modal"
                data-target="#myModalNorm" onclick="radioEvent('<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
', this.value,'<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
');"
                value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
">
              <span class="doller">$<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>



            </li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>

          </ul>

          <h4>Per Visit</h4>

          <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['group_type_id'];
$_tmp6=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp7=ob_get_clean();
if ($_tmp6 == 1 && ($_tmp7 == 70)) {?>

            <li>

              <input type="radio" <?php echo $_smarty_tpl->tpl_vars['package']->value['subcrib'];?>
 name="amount" id='opt_<?php echo $_smarty_tpl->tpl_vars['package']->value[' id'];?>
' data-toggle="modal"
                data-target="#myModalNorm" onclick="radioEvent('<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
', this.value,'<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
');"
                value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
">
              <span class="doller">$<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>



            </li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>

          </ul>

          <h4>Monthly Recurring</h4>

          <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['group_type_id'];
$_tmp8=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp9=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp10=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['id'];
$_tmp11=ob_get_clean();
if ($_tmp8 == 1 && ($_tmp9 == 82 || $_tmp10 == 81 || $_tmp11 == 85)) {?>

            <li>

              <input type="radio" <?php echo $_smarty_tpl->tpl_vars['package']->value['subcrib'];?>
 name="amount" id='opt_<?php echo $_smarty_tpl->tpl_vars['package']->value[' id'];?>
' data-toggle="modal"
                data-target="#myModalNorm" onclick="radioEvent('<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
', this.value,'<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
');"
                value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
">
              <span class="doller">$<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>



            </li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>

          </ul>







          <h4>Booking Studio</h4>
          <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['group_type_id'];
$_tmp12=ob_get_clean();
if ($_tmp12 == 3) {?>
            <li>

              <input type="radio" <?php echo $_smarty_tpl->tpl_vars['package']->value['subcrib'];?>
 name="amount" id='opt_<?php echo $_smarty_tpl->tpl_vars['package']->value[' id'];?>
' data-toggle="modal"
                data-target="#myModalNorm" onclick="radioEvent('<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
' , this.value,'<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
');"
                value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
">
              <span class="doller"> $<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>


              <?php }?>

            </li>

            <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>
          </ul>






          <h4>Promotion Package</h4>

          <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['getAllSubunSubList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['package'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['package']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->_loop = true;
$foreach_package_Sav = $_smarty_tpl->tpl_vars['package'];
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['package']->value['group_type_id'];
$_tmp13=ob_get_clean();
if ($_tmp13 == 4) {?>
            <li>

              <input type="radio" <?php echo $_smarty_tpl->tpl_vars['package']->value['subcrib'];?>
 name="amount" id='opt_<?php echo $_smarty_tpl->tpl_vars['package']->value[' id'];?>
' data-toggle="modal"
                data-target="#myModalNorm" onClick="radioEvent('<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
' , this.value,'<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['ChkLogin']->value;?>
');"
                value="<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
">
              <span class="doller"> $<?php echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>





            </li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['package'] = $foreach_package_Sav;
}
?>
          </ul>




          <ul>
            <li>
              * Private class valid for a month, with min of once a week class. Venue can be your home or any
              convenient place.
            </li>
            
          </ul>
          <h4>CORPORATE CLASS</h4>
          <ul>
            <li>
              * Inquiry for rent studio / corporate / private classes kindly send us email or call us.
            </li>
            <li>
              Kindly send us your inquiry to info@yogabar.sg
            </li>

          </ul>
        </form>
      </div>
      <div class="soical-media">
        <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      </div>
    </div>
  </div>

  <?php echo '<script'; ?>
 type="text/javascript">
    function radioEvent(package, value, ids, chkLogin) {

      $("#pvt2").val(value);
      $('#txtHint').val(value);
      $('#tblrow').val(ids);
      $('#cardDt').val(0);
      $("#sbtn").attr('lang', '0');
      if (chkLogin == 1) {
        $('#hidid').val(ids);
        document.getElementById("packFrm").submit();

        // $("#sel-package").html("Your package: "+package);

      }
      else {

        location.href = 'login.php?p=' + ids + "&ct=pk";
      }
    }
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">

    var code = $('#code').val();
    var pvt2 = $('#pvt2').val();
    var tblrow = $('#cardDt').val(0);

    $(document).ready(function () {

      /*$("input[name='chkPassPort']").click(function () {  
           if ($("#chkYes").is(":checked")) {             
               $("#dvPassport").show();
               $("#dvPassport1").hide();
           }             
           if ($("#chkNo").is(":checked")) {             
               $("#dvPassport1").show();
               $("#dvPassport").hide();
           }
          
       }); */

      $("#sbtn").click(function () {

        var Selval = $('#cardDt').val();

        if (Selval > 0) {

          $('#sbtn').attr('disabled', true);
          $('#ldimg').show();
          $.ajax({
            type: "POST",
            url: "subscrib_ajax.php",
            data: $("#frmsub").serialize() + "&mode=sub",
            dataType: 'HTML',
            success: function (data) {
              //alert(data)
              $('#ldimg').hide();
              var SplDta = data.split("#$#");
              $('#sbtn').attr('disabled', false);
              if (SplDta[0] == 0) {
                alert("Session out");
                location.href = "logout.php";
              }
              else if (SplDta[0] == 7) {
                alert("Invalid card Details");
                location.href = "package.php";

              }
              else if (SplDta[0] == 1) {

                alert(SplDta[1]);
                // $('#opt_'+SplDta[1]).attr('disabled', true);
                location.href = "package.php";


              }
              else if (SplDta[0] == 3) {

                alert(SplDta[1]);
                // $('#opt_'+SplDta[1]).attr('disabled', true);
                location.href = "package.php";



              }
              else if (SplDta[0] == 4) {
                alert(SplDta[1]);
                alert("First month payment success and Subscription has been faild");
                location.href = "package.php";
              }


            }
          });

        }
        else {

          alert("Plese select card detail");
        }

      });

      /*  $("input[type='image']").click(function () {   
        	 
        	if ($("#chkYes").is(":checked")) {     
	        	if ($('#code').val()=='') {        
	        		alert('Please Enter your Coupon');
	        		$('#code').focus();
	        		return false; 
	        	} else {
	        		
			        $.ajax({
			            	type: "POST",
			                url: "ajax.php",
			                data: { code: $("#code").val(), pvt2: $("#pvt2").val() },
			                success:function(data){
				           if(data=='invalidcoupon') {
				           alert('invalid coupon');
				           $("#txt").html('');
				           return false;
				           }
				           else {
				           $("#txtHint").val(data);
				           $("#txt").html('Your Amount : $'+data);
				            $("#redirect").show();
				           setTimeout(function(){
					      $('#paypal').submit();
					   },3000);
				           
			      		  }
			      		}
			        });
	        		
	        	}
	        	
	        	return false;
        	}

        });  */

      /*$("#verify_coupon").click(function (e) {

          e.preventDefault();
	
            $.ajax({
              type: "POST",
                url: "ajax.php",
                data: { code: $("#code").val(), pvt2: $("#pvt2").val() },
                success:function(data){
             if(data=='invalidcoupon') {
             alert('invalid coupon');
             $("#txt").html('');
             return false;
             }
             else {
             $("#txtHint").val(data);
             $("#txt").html('Your Amount : $'+data);
             return true;
            }
          }
        });
       
}); */


    });     
  <?php echo '</script'; ?>
>




  <?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
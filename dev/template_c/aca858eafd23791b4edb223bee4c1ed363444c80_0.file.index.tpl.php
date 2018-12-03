<?php /* Smarty version 3.1.27, created on 2017-03-20 01:48:57
         compiled from "/home/yogabar/public_html/dev/templates/default/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:199731520658cf7b5989ea55_53259375%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca858eafd23791b4edb223bee4c1ed363444c80' => 
    array (
      0 => '/home/yogabar/public_html/dev/templates/default/index.tpl',
      1 => 1489081678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199731520658cf7b5989ea55_53259375',
  'variables' => 
  array (
    'getFrontBann' => 0,
    'key' => 0,
    'getVal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58cf7b59b6b9c9_94851054',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58cf7b59b6b9c9_94851054')) {
function content_58cf7b59b6b9c9_94851054 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '199731520658cf7b5989ea55_53259375';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body class="indexbg">
    <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container">
        <!--popup-->

        <div class="col-md-12 col-sm-12 hidden-xs text-center">
            <img src="./images/img_logo.png"/>
        </div>
        <div id="boxes">
            <div id="dialog" class="window">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


              <?php
$_from = $_smarty_tpl->tpl_vars['getFrontBann']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['getVal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['getVal']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['getVal']->value) {
$_smarty_tpl->tpl_vars['getVal']->_loop = true;
$foreach_getVal_Sav = $_smarty_tpl->tpl_vars['getVal'];
?>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value;
$_tmp1=ob_get_clean();
if ($_tmp1 == 0) {?>
                 <ol class="carousel-indicators">   
                <li data-target="#carousel-example-generic" class="active" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></li> 
                <?php } else { ?>

                <li data-target="#carousel-example-generic" class="" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></li> 
                
                <?php }?>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value;
$_tmp2=ob_get_clean();
ob_start();
echo count($_smarty_tpl->tpl_vars['getFrontBann']->value);
$_tmp3=ob_get_clean();
if ($_tmp2 == $_tmp3-1) {?>
                    </ol>  
                <?php }?>

              <?php
$_smarty_tpl->tpl_vars['getVal'] = $foreach_getVal_Sav;
}
?> 



 
      <!-- Wrapper for slides -->
      <div class="carousel-inner">

 

        <?php
$_from = $_smarty_tpl->tpl_vars['getFrontBann']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['getVal'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['getVal']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['getVal']->value) {
$_smarty_tpl->tpl_vars['getVal']->_loop = true;
$foreach_getVal_Sav = $_smarty_tpl->tpl_vars['getVal'];
?>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value;
$_tmp4=ob_get_clean();
if ($_tmp4 == 0) {?>
                 
                 <div class="item active ">
          <h4 style="text-align: center; text-transform: capitalize;"><?php echo $_smarty_tpl->tpl_vars['getVal']->value['ban_title'];?>
</h4>
          <img src="gallery/<?php echo $_smarty_tpl->tpl_vars['getVal']->value['img_path'];?>
" class="pop" style="width: 530px;height: 300px;padding-left: 150px;">
         
             <p style="text-align: center;"> <?php echo $_smarty_tpl->tpl_vars['getVal']->value['bann_desc'];?>
</p>

             
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];
$_tmp5=ob_get_clean();
if ($_tmp5 != '') {?>     
             
                
             <div style="z-index:9999;position: relative;bottom: 5px;right: 0px;width:100%; text-align: right; float: left; " target="_blank" ><a href="<?php echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];?>
" target='_blank' class="btn  btn-sm" style="border-radius: 0px !important; box-shadow: 0 0 3px #aaa; background-color: #666; color: #fff;"> Click here</a>
             </div>
              <?php }?> 
               
       
        </div>  
                

                <?php } else { ?>

                <div class="item">
          <h4 style="padding-left: 200px;"><?php echo $_smarty_tpl->tpl_vars['getVal']->value['ban_title'];?>
</h4>
          <img src="gallery/<?php echo $_smarty_tpl->tpl_vars['getVal']->value['img_path'];?>
"  class="pop" style="width: 600px;height: 420px;padding-left: 100px;">
          <p> <?php echo $_smarty_tpl->tpl_vars['getVal']->value['bann_desc'];?>
</p>


          <?php ob_start();
echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];
$_tmp6=ob_get_clean();
if ($_tmp6 != '') {?>     
              
             <div style="z-index:9999;position: relative;bottom: 5px;right: 0px;width:100%; text-align: right; float: left; " target="_blank" ><a href="<?php echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];?>
" target='_blank' class="btn  btn-sm" style="border-radius: 0px !important; box-shadow: 0 0 3px #aaa; background-color: #666; color: #fff;"> Click here</a>
             </div>  
            <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];?>
" style="z-index:9999;position: absolute;bottom: -5px;right: 0px;width:80%; text-align: right;" target="_blank" >Click here</a> -->
              <?php }?> 

         </div>
                
                <?php }?>

                 

              <?php
$_smarty_tpl->tpl_vars['getVal'] = $foreach_getVal_Sav;
}
?>             
     



        

        
         
      </div>  <!-- -->
    
    </div>
     
     <a class="left carousel-control" style="outline:none !important;" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" style="color: black;"></span>
      </a>
      <a class="right carousel-control" style="outline:none !important;" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" style="color: black;"></span>
      </a>
       <div id="popupfoot" style="text-right; font-size:30px;
                     "> <a href="#" class="close agree" ><img src="images/cancel.svg" width="24px"/></a> 
                     </div>
            </div>
            <div id="mask"></div>
        </div>

        <div class="mobile_logo">
        </div>
        <!--popup-->
        <!-- Main component for a primary marketing message or call to action -->
         <section class="index-text">
            <h1>Yoga doesn't take time</h1>
            <h3>it gives time</h3>
            <div class="soical-media visible-sm visible-xs">
                <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div>
             
             <div class="web_soical-media">
                 <?php echo $_smarty_tpl->getSubTemplate ("social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

             </div>
        </section>
    </div>
  
<?php echo '<script'; ?>
 type="text/javascript">
 $(function () {
        $("#submit").bind("click", function () {
            var url = "package.php?click=yes";
            window.location.href = url;
        });
    });
<?php echo '</script'; ?>
>
  <?php echo $_smarty_tpl->getSubTemplate ("footer-no-bounce.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  
    <p style="font-size:12px;margin:10px 0px; width:100%; bottom:0; position:absolute; " align="center"><font color="black"> Design and Developed by <a href="http://systimanx.com">SystimaNX </a></font></p>
<?php }
}
?>
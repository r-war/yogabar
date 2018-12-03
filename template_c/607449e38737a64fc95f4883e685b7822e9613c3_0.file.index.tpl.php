<?php /* Smarty version 3.1.27, created on 2018-12-03 14:21:30
         compiled from "C:\xampp5\htdocs\yogabar\templates\default\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:308805c052dda8e3661_93537624%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607449e38737a64fc95f4883e685b7822e9613c3' => 
    array (
      0 => 'C:\\xampp5\\htdocs\\yogabar\\templates\\default\\index.tpl',
      1 => 1543843288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308805c052dda8e3661_93537624',
  'variables' => 
  array (
    'getFrontBann' => 0,
    'key' => 0,
    'getVal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c052dda968388_39937703',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c052dda968388_39937703')) {
function content_5c052dda968388_39937703 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '308805c052dda8e3661_93537624';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<body class="innerbg">
    <?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="container">
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


                            <div style="z-index:9999;position: relative;bottom: 5px;right: 0px;width:100%; text-align: right; float: left; "
                                target="_blank"><a href="<?php echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];?>
" target='_blank' class="btn  btn-sm"
                                    style="border-radius: 0px !important; box-shadow: 0 0 3px #aaa; background-color: #666; color: #fff;">
                                    Click here</a>
                            </div>
                            <?php }?>


                        </div>


                        <?php } else { ?>

                        <div class="item">
                            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['getVal']->value['ban_title'];?>
</h4>
                            <img src="gallery/<?php echo $_smarty_tpl->tpl_vars['getVal']->value['img_path'];?>
" class="pop" style="width: 600px;height: 420px;padding-left: 100px;">
                            <p> <?php echo $_smarty_tpl->tpl_vars['getVal']->value['bann_desc'];?>
</p>


                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];
$_tmp6=ob_get_clean();
if ($_tmp6 != '') {?>

                            <div style="z-index:9999;position: relative;bottom: 5px;right: 0px;width:100%; text-align: right; float: left; "
                                target="_blank"><a href="<?php echo $_smarty_tpl->tpl_vars['getVal']->value['btn_link'];?>
" target='_blank' class="btn  btn-sm"
                                    style="border-radius: 0px !important; box-shadow: 0 0 3px #aaa; background-color: #666; color: #fff;">
                                    Click here</a>
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

                    </div> <!-- -->

                </div>

                <a class="left carousel-control" style="outline:none !important;" href="#carousel-example-generic"
                    data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" style="color: black;"></span>
                </a>
                <a class="right carousel-control" style="outline:none !important;" href="#carousel-example-generic"
                    data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" style="color: black;"></span>
                </a>
                <div id="popupfoot" style="text-right; font-size:30px;
                     "> <a href="#" class="close agree"><img
                            src="images/cancel.svg" width="24px" /></a>
                </div>
            </div>
            <div id="mask" style="background: url(/web/images/bg_inner.png) left top no-repeat #fff; opacity: 0 !important"></div>
        </div>
      <div class="row">
        <div class="col-md-6">
          <img src="./images/home.jpg" width="550">
        </div>

        <div class="col-md-6 white-bg">
          <div class="text">
            <p>Yoga bar is a Boutique studio located in the heart of Singapore, on Orchard Road. 
The space was created by Dwi in 2014, our Director. Since then, our aim is to make Yoga accessible to all, encouraging our students to develop a regular & safe practice, bringing strength & flexibility to both and the mind. </p>
<p>
Long term practice means trust: 
As we have small groups of students per classes, we take the time to build & adapt our pace 
to the needs of all. The Teachers come to know our regular students, they are able to build 
with them, provide options & bring in challenges, this to develop a Long term practice. 
Yoga styles: 
<ol>
  <li>Dynamic meditation in movement sessions: Ashtanga, Hashta, Vinyasa classes, along with 
pranayama techniques. </li>
  <li>Balanced with restorative practices: Yin Yoga, Aromatherapy Yoga. </li>
  <li>Accessible with Hatha, Gentle Vinyasa, Chair Yoga, Wheel Yoga and Yoga therapy.</li>
</ol>
We able to customised personal sessions. 
  </p>
  <p>
You will always find a practice suitable for you, regardless of your current level, capacity or state of mind. Gradually grow your practice with us, or simply find a peaceful space to rest. 
We do offers classes in the studio in a group setting, private classes or corporate. 
We also believe that a retreat has numerous benefits. We create Nature & Yoga retreat, 
taking you to beautiful places, where you can experience a heathy lifestyle with daily yoga, 
nature & culture discoveries, away from usual daily distractions. 
We have a Team of regular Teachers, please discover more on our 
Teachers page
</p>
          </div>
        </div>
      </div>
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


    <p style="font-size:12px;margin:10px 0px; width:100%; bottom:0; position:absolute; " align="center">
        <font color="black"> Design and Developed by <a href="http://systimanx.com">SystimaNX </a></font>
    </p><?php }
}
?>
{include file="header.tpl"}
<body class="indexbg">
    {include file="nav.tpl" }
    <div class="container">
        <!--popup-->

        <div class="col-md-12 col-sm-12 hidden-xs text-center">
            <img src="./images/img_logo.png"/>
        </div>
        <div id="boxes">
            <div id="dialog" class="window">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


              {foreach $getFrontBann as $key => $getVal}

                {if {$key}==0}
                 <ol class="carousel-indicators">   
                <li data-target="#carousel-example-generic" class="active" data-slide-to="{$key}"></li> 
                {else}

                <li data-target="#carousel-example-generic" class="" data-slide-to="{$key}"></li> 
                
                {/if}

                {if {$key}=={count($getFrontBann)}-1}
                    </ol>  
                {/if}

              {/foreach} 



 
      <!-- Wrapper for slides -->
      <div class="carousel-inner">

 

        {foreach $getFrontBann as $key => $getVal}

                {if {$key}==0}
                 
                 <div class="item active ">
          <h4 style="text-align: center; text-transform: capitalize;">{$getVal['ban_title']}</h4>
          <img src="gallery/{$getVal['img_path']}" class="pop" style="width: 530px;height: 300px;padding-left: 150px;">
         
             <p style="text-align: center;"> {$getVal['bann_desc']}</p>

             
              {if {$getVal['btn_link']} !=""}     
             
                
             <div style="z-index:9999;position: relative;bottom: 5px;right: 0px;width:100%; text-align: right; float: left; " target="_blank" ><a href="{$getVal['btn_link']}" target='_blank' class="btn  btn-sm" style="border-radius: 0px !important; box-shadow: 0 0 3px #aaa; background-color: #666; color: #fff;"> Click here</a>
             </div>
              {/if} 
               
       
        </div>  
                

                {else}

                <div class="item">
          <h4 style="padding-left: 200px;">{$getVal['ban_title']}</h4>
          <img src="gallery/{$getVal['img_path']}"  class="pop" style="width: 600px;height: 420px;padding-left: 100px;">
          <p> {$getVal['bann_desc']}</p>


          {if {$getVal['btn_link']} !=""}     
              
             <div style="z-index:9999;position: relative;bottom: 5px;right: 0px;width:100%; text-align: right; float: left; " target="_blank" ><a href="{$getVal['btn_link']}" target='_blank' class="btn  btn-sm" style="border-radius: 0px !important; box-shadow: 0 0 3px #aaa; background-color: #666; color: #fff;"> Click here</a>
             </div>  
            <!-- <a href="{$getVal['btn_link']}" style="z-index:9999;position: absolute;bottom: -5px;right: 0px;width:80%; text-align: right;" target="_blank" >Click here</a> -->
              {/if} 

         </div>
                
                {/if}

                 

              {/foreach}             
     



        

        
         
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
                {include file="social.tpl"}
            </div>
             
             <div class="web_soical-media">
                 {include file="social.tpl"}
             </div>
        </section>
    </div>
  
<script type="text/javascript">
 $(function () {
        $("#submit").bind("click", function () {
            var url = "package.php?click=yes";
            window.location.href = url;
        });
    });
</script>
  {include file="footer-no-bounce.tpl"}
  
    <p style="font-size:12px;margin:10px 0px; width:100%; bottom:0; position:absolute; " align="center"><font color="black"> Design and Developed by <a href="http://systimanx.com">SystimaNX </a></font></p>

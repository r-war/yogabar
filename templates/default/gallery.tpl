{include file="header.tpl"}

<body class="innerbg">
    {include file="nav.tpl" }
    <div class="container">
        <div class="gallery">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="category">
                <ul class="portfolio-filter text-center">
                    <li class="active" data-filter="*">All</li>
                    {foreach $gallery_cat as $gallery}
                    <li data-filter=".{$gallery['name_cat']}">{$gallery['name_cat']}</li>
                    {/foreach} 
                </ul>
            </div>
            <div class="portfolio-items">
                <div class="row">
                    {foreach $gallery_rs as $gallery}
                    <div class="col-md-4 single-item {$gallery['name_cat']}">
                        <img src="/web/gallery/{$gallery['img_path']}">
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="soical-media visible-sm visible-xs">
            {include file="social.tpl"}
        </div>

        <div class="web_soical-media">
            {include file="social.tpl"}
        </div>
    </div>
    
    {include file="footer.tpl"}
    <script type="text/javascript">
        // Add isotope click function
        $( document ).ready(function() {
            $('.portfolio-filter li').on( 'click', function(){
                $(".portfolio-filter li").removeClass("active");
                $(this).addClass("active");
         
                var selector = $(this).attr('data-filter');
                $(".portfolio-items").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    },
                    
                });
                return false;
            });

            $(".portfolio-items").isotope({
                itemSelector: '.single-item',
                layoutMode: 'fitRows',
            });
        });
    </script>
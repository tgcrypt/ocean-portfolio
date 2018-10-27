 <?php
/**
 * PhotoSwipe template
 */
?>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="<?php esc_html_e( 'Close (Esc)', 'ocean-portfolio' ); ?>"></button>

                <button class="pswp__button pswp__button--share" title="<?php esc_html_e( 'Share', 'ocean-portfolio' ); ?>"></button>

                <button class="pswp__button pswp__button--fs" title="<?php esc_html_e( 'Toggle fullscreen', 'ocean-portfolio' ); ?>"></button>

                <button class="pswp__button pswp__button--zoom" title="<?php esc_html_e( 'Zoom in/out', 'ocean-portfolio' ); ?>"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="<?php esc_html_e( 'Previous (arrow left)', 'ocean-portfolio' ); ?>">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="<?php esc_html_e( 'Next (arrow right)', 'ocean-portfolio' ); ?>">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>
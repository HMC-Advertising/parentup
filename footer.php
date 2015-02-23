<div class="hidden-sm hidden-xs">
<?php get_template_part("assets/php/templates/footer", "nonmobile");?>
</div>

<div class="hidden-lg hidden-md sb-slide">
<?php get_template_part("assets/php/templates/footer", "mobile");?>
</div>

<script type="text/javascript">
    var $ = jQuery;
    var h = $("#content").height();
    $(".sidenav.nonmobile").height(h);

            (function($) {
                $(document).ready(function() {

                     $.slidebars({
                        siteClose: true, // true or false

                        scrollLock: false // true or false
                    });
                });
            }) (jQuery);

</script>

	<?php wp_footer(); ?>

    <script type="text/javascript">

    </script>


</body>
</html>
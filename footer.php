<div class="hidden-sm hidden-xs hidden-md "style="position: relative; z-index: 1000;">
<?php get_template_part("assets/php/templates/footer", "nonmobile");?>
</div>

<div class="hidden-lg  sb-slide">
<div class="clear"></div>
<?php get_template_part("assets/php/templates/footer", "mobile");?>
</div>

<script type="text/javascript">
    var $ = jQuery;
   // var h = $("#content").height();
    //$(".sidenav.nonmobile").height(h);

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
    <?php if(is_front_page()) : if(is_mobile() or is_tablet()) : ?>
    <script type="text/javascript">
         $("#swipe1").slick({
        arrows: false,
        slide: ".slide",
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        variableWidth: true

   });
  $("#swipe2").slick({
        arrows: false,
        slide: ".slide",
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        variableWidth: true
   });

   $("#swipe3").slick({
        arrows: false,
        slide: ".slide",
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        variableWidth: true
   });
   $("#swipe4").slick({
         arrows: false,
        slide: ".slide",
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        variableWidth: true
   });
    </script>
    <?php endif; endif; ?>

  <?php if(is_page_template("temp-actionplan.php")) : ?>

      <?php get_template_part("assets/php/templates/actionplan", "nonmobile"); ?>
      <?php //get_template_part("assets/php/templates/actionplan", "mobile") ?>
  <script type="text/javascript">
       $("#submit").click(function(e){
            e.preventDefault();
            //alert("click");
            //$("#info").addClass("on");
            $("#info .modal-body").html("<img src='<?php echo get_template_directory_uri(); ?>/assets/img/ajax-loader.gif' class='loader'>");

            $.post("<?php echo get_template_directory_uri(); ?>/assets/php/actionplan/page.php",
                $("form").serialize(),
                function(data){
                      $("#info .modal-body").html(data);

                })
            .error(function(){
                console.log("failed");
            })


        });

  </script>

<?php endif; ?>


</body>
</html>
<div class="hidden-sm hidden-xs hidden-md">
<?php get_template_part("assets/php/templates/footer", "nonmobile");?>
</div>

<div class="hidden-lg  sb-slide">
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

       <div id ="info" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


        <script type="text/javascript">
        var $ = jQuery;
        $("#submit").click(function(e){
            e.preventDefault();
            //alert("click");
            //$("#info").addClass("on");
            $("#info .modal-body").html("<img src='http://placehold.it/100x100'>");

            $.post("<?php echo get_template_directory_uri(); ?>/assets/php/actionplan/page.php",
                $("form").serialize(),
                function(data){
                      $("#info .modal-body").html(data);

                })
            .error(function(){
                console.log("failed");
            })


        });

        $(".print").click(function(e){
              e.preventDefault();
        });


        /*$(".more").click(function(e){
            e.preventDefault();
            if(!$(this).hasClass("on")){
                $(this).parent().children(".mcontent").slideDown();
                $(this).addClass("on");
            }
            else{
                 $(this).parent().siblings().slideUp();
                $(this).removeClass("on");
            }
        });*/



        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/checkboxes/svgcheckbx.js"></script>

<?php endif; ?>

</body>
</html>
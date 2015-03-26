


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



<?php if(is_page_template("temp-actionplan.php")) : ?>
  <?php if(is_mobile()): ?>
     <?php get_template_part("assets/php/templates/actionplan", "mobile"); ?>
  <?php else: ?>
      <?php get_template_part("assets/php/templates/actionplan", "nonmobile"); ?>
    <?php endif; ?>

     <?php //get_template_part("assets/php/templates/actionplan", "mobile"); ?>
  <script type="text/javascript">
  var $ = jQuery;


       $("#submit").click(function(e){
            e.preventDefault();
            $("#info .modal-body").html("<img src='<?php echo get_template_directory_uri(); ?>/assets/img/ajax-loader.gif' class='loader'>");

            $.post("<?php echo get_template_directory_uri(); ?>/assets/php/actionplan/page.php",
                $("form").serialize(),
                function(data){
                      $("#info .modal-body").html(data);

                })



        });

  </script>

<?php endif; ?>

</body>
</html>
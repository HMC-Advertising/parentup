 <div id ="info" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" id="topmodal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <button class="print"><i class="fa fa-print"></i></button>
        <nav>
        <ul>
          <li>
              <a href="#sup">Support</a>
          </li>
          <li>
             <a href="#emp">Empowerment</a>
          </li>
          <li>
              <a href="#bound">BOUNDARIES AND EXPECTATIONS</a>
          </li>
          <li>
             <a href="#con">CONSTRUCTIVE USE OF TIME</a>
          </li>
          <li>
             <a href="#com">COMMITMENT TO LEARNING</a>
          </li>
          <li>
             <a href="#val"> POSITIVE VALUES</a>
          </li>
          <li>
             <a href="#soc">SOCIAL COMPETENCIES</a>
          </li>
          <li>
              <a href="#pos">POSITIVE IDENTITY</a>
          </li>
         </ul>
         </nav>
      </div>
      <div class="only_print">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/desktoplogo.png"><br><br>
        This is the about section of what this is.
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
  <div id="to_top" style='background: #000; color:#fff; position:fixed; padding: 20px; bottom:0; right: 20px;'>
    <a href="#topmodal">TOP</a>
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




        </script>
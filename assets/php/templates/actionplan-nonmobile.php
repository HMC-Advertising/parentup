
<!-- Modal -->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">

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
        In addition, research by the Search Institute has identified 40 skills, experiences, relationships, and behaviors (called developmental assets) that help set the foundation for teens to grow into happy and healthy adults with much to contribute to the world. - See more at: http://parentupvt.org/how-can-i-help-prevent-it/set-the-foundation/
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>

    <a id="to_top" href="#topmodal"><i class="fa fa-chevron-up"></i></a>

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
              print();
        });




        </script>


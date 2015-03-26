
 <script type="text/javascript">
 //this is what I call  annoyed so I'll do it like this -.-
    var $ = jQuery;
<?php if(is_mobile()): ?>
        var IMG_WIDTH = 320;
        var currentImg = 0;
        var maxImages = 2;
        var speed = 500;
<?php else: ?>
    var IMG_WIDTH = 380;
        var currentImg = 0;
        var maxImages = 2;
        var speed = 500;

<?php endif; ?>

        var swipeOptions = {
            triggerOnTouchEnd: true,
            swipeStatus: swipeStatus,
            allowPageScroll: "vertical",
            threshold: 75
        };
          var swipeOptions2 = {
            triggerOnTouchEnd: true,
            swipeStatus: swipeStatus2,
            allowPageScroll: "vertical",
            threshold: 75
        };
          var swipeOptions3 = {
            triggerOnTouchEnd: true,
            swipeStatus: swipeStatus3,
            allowPageScroll: "vertical",
            threshold: 75
        };
          var swipeOptions4 = {
            triggerOnTouchEnd: true,
            swipeStatus: swipeStatus4,
            allowPageScroll: "vertical",
            threshold: 75
        };
        var img1, img2, img3, img4;

        $(function () {
            img1 = $("#swipe1");
            img2 = $("#swipe2");
            img3 = $("#swipe3");
            img4 = $("#swipe4");

            img1.swipe(swipeOptions);
            img2.swipe(swipeOptions2);
            img3.swipe(swipeOptions3);
            img4.swipe(swipeOptions4);
        });


        /**
         * Catch each phase of the swipe.
         * move : we drag the div
         * cancel : we animate back to where we were
         * end : we animate to the next image
         */
        function swipeStatus(event, phase, direction, distance) {
            //If we are moving before swipe, and we are going L or R in X mode, or U or D in Y mode then drag.
            if (phase == "move" && (direction == "left" || direction == "right")) {
                var duration = 0;

                if (direction == "left") {
                    scrollImages((IMG_WIDTH * currentImg) + distance, duration);
                } else if (direction == "right") {
                    scrollImages((IMG_WIDTH * currentImg) - distance, duration);
                }

            } else if (phase == "cancel") {
                scrollImages(IMG_WIDTH * currentImg, speed);
            } else if (phase == "end") {
                if (direction == "right") {
                    previousImage();
                } else if (direction == "left") {
                    nextImage();
                }
            }
        }

        function swipeStatus2(event, phase, direction, distance) {
            //If we are moving before swipe, and we are going L or R in X mode, or U or D in Y mode then drag.
            if (phase == "move" && (direction == "left" || direction == "right")) {
                var duration = 0;

                if (direction == "left") {
                    scrollImages2((IMG_WIDTH * currentImg) + distance, duration);
                } else if (direction == "right") {
                    scrollImages2((IMG_WIDTH * currentImg) - distance, duration);
                }

            } else if (phase == "cancel") {
                scrollImages2(IMG_WIDTH * currentImg, speed);
            } else if (phase == "end") {
                if (direction == "right") {
                    previousImage2();
                } else if (direction == "left") {
                    nextImage2();
                }
            }
        }
        function swipeStatus3(event, phase, direction, distance) {
            //If we are moving before swipe, and we are going L or R in X mode, or U or D in Y mode then drag.
            if (phase == "move" && (direction == "left" || direction == "right")) {
                var duration = 0;

                if (direction == "left") {
                    scrollImages3((IMG_WIDTH * currentImg) + distance, duration);
                } else if (direction == "right") {
                    scrollImages3((IMG_WIDTH * currentImg) - distance, duration);
                }

            } else if (phase == "cancel") {
                scrollImages3(IMG_WIDTH * currentImg, speed);
            } else if (phase == "end") {
                if (direction == "right") {
                    previousImage3();
                } else if (direction == "left") {
                    nextImage3();
                }
            }
        }
        function swipeStatus4(event, phase, direction, distance) {
            //If we are moving before swipe, and we are going L or R in X mode, or U or D in Y mode then drag.
            if (phase == "move" && (direction == "left" || direction == "right")) {
                var duration = 0;

                if (direction == "left") {
                    scrollImages4((IMG_WIDTH * currentImg) + distance, duration);
                } else if (direction == "right") {
                    scrollImages4((IMG_WIDTH * currentImg) - distance, duration);
                }

            } else if (phase == "cancel") {
                scrollImages4(IMG_WIDTH * currentImg, speed);
            } else if (phase == "end") {
                if (direction == "right") {
                    previousImage4();
                } else if (direction == "left") {
                    nextImage4();
                }
            }
        }


        function previousImage() {
            currentImg = Math.max(currentImg - 1, 0);
            scrollImages(IMG_WIDTH * currentImg, speed);

        }

        function nextImage() {
            currentImg = Math.min(currentImg + 1, maxImages - 1);
            scrollImages(IMG_WIDTH * currentImg, speed);

        }
        function previousImage2() {
            currentImg = Math.max(currentImg - 1, 0);

             scrollImages2(IMG_WIDTH * currentImg, speed);

        }

        function nextImage2() {
            currentImg = Math.min(currentImg + 1, maxImages - 1);

              scrollImages2(IMG_WIDTH * currentImg, speed);

        }
        function previousImage3() {
            currentImg = Math.max(currentImg - 1, 0);

                scrollImages3(IMG_WIDTH * currentImg, speed);

        }

        function nextImage3() {
            currentImg = Math.min(currentImg + 1, maxImages - 1);

                scrollImages3(IMG_WIDTH * currentImg, speed);

        }
        function previousImage4() {
            currentImg = Math.max(currentImg - 1, 0);

                  scrollImages4(IMG_WIDTH * currentImg, speed);
        }

        function nextImage4() {
            currentImg = Math.min(currentImg + 1, maxImages - 1);

                  scrollImages4(IMG_WIDTH * currentImg, speed);
        }

        /**
         * Manually update the position of the imgs on drag
         */
        function scrollImages(distance, duration) {
             var value = (distance < 0 ? "" : "-") + Math.abs(distance).toString();
           img1.css("transition-duration", (duration / 1000).toFixed(1) + "s");


            img1.css("transform", "translate(" + value + "px,0)");

        }

        function scrollImages2(distance, duration) {
             //inverse the number we set in the css
            var value = (distance < 0 ? "" : "-") + Math.abs(distance).toString();
            img2.css("transition-duration", (duration / 1000).toFixed(1) + "s");
            img2.css("transform", "translate(" + value + "px,0)");


         }

        function scrollImages3(distance, duration) {
             //inverse the number we set in the css
            var value = (distance < 0 ? "" : "-") + Math.abs(distance).toString();
            img3.css("transition-duration", (duration / 1000).toFixed(1) + "s");
            img3.css("transform", "translate(" + value + "px,0)");


        }

        function scrollImages4(distance, duration) {
             //inverse the number we set in the css
            var value = (distance < 0 ? "" : "-") + Math.abs(distance).toString();
            img4.css("transition-duration", (duration / 1000).toFixed(1) + "s");
            img4.css("transform", "translate(" + value + "px,0)");
        }
        </script>



<div class="arrow-mobile" style="z-index: 2; position: relative; margin-top:-20px">
     <i class="fa fa-caret-down"></i>
</div>
<section class="hovering mobile" style="z-index: 1; position: relative; margin-bottom: -20px;">
    <section  class="slider">
        <section id="swipe1" class="slide">
            <div style="padding-top:30px">

                    <div class="mi col-lg-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-1.png">
                    </div>

                    <div class="col-sm-9 col-xs-10">
                        <span class="q">“</span>My child is well grounded ambitious, and totally supported&mdash;Not the kind of kid who falls into trouble.<span class="q">”</span>
                    </div>
                    <div class="col-sm-3 col-xs-2">
                        <i class="fa fa-angle-right"></i>
                    </div>

            </div>

            <div>
                <div style="float:left" class="col-xs-2 col-sm-1">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="col-xs-10 col-sm-11">
                    <ul class="links">
                        <li>
                            <a href="http://parentupvt.org/whos-at-risk/is-my-child-at-risk/" class="twoline">Find out the truth about who’s at risk</a>
                        </li>
                        <li>
                            <a href="http://parentupvt.org/how-can-i-help-prevent-it/set-the-foundation/" class="threeline bottom1">See how you’re helping—and get ideas for what more you can do </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </section>








   <section  class="slider">
        <div id="swipe2" class="slide">
            <div style="padding-top:30px">

                    <div class="mi col-lg-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-2.png">
                    </div>

                    <div class="col-sm-9 col-xs-10">
                         <span class="q">“</span>I'm giving my teen independence so she knows she's trusted.<span class="q">”</span>

                    </div>
                    <div class="col-sm-3 col-xs-2">
                        <i class="fa fa-angle-right"></i>
                    </div>

            </div>
            <div>
               <div style="float:left" class="col-xs-2 col-sm-1">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="col-xs-10 col-sm-11">
                    <ul class="links">
                           <li>
                                <a href="http://parentupvt.org/how-can-i-help-prevent-it/monitor-your-teen/" class="fourline">Find out why monitoring your teen is critical—and use our checklist to get started </a>
                            </li>
                            <li>
                                <a href="http://parentupvt.org/how-can-i-help-prevent-it/know-the-warning-signs/" class="twoline bottom2">Learn what might be signs of a problem </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
     </section>





    <section  class="slider ">
        <div id="swipe3" class="slide">
            <div style="padding-top:30px">
                <div class="mi col-lg-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-3.png">
                    </div>

                    <div class="col-sm-9 col-xs-10">
                         <span class="q">“</span>Partying is part of being a teenager. As long as my kids are being safe, I'm not too worried.<span class="q">”</span>

                    </div>
                    <div class="col-sm-3 col-xs-2">
                        <i class="fa fa-angle-right"></i>
                    </div>
            </div>
            <div>
                <div style="float:left" class="col-xs-2 col-sm-1">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="col-xs-10 col-sm-11">
                    <ul class="links">
                           <li>
                                <a href="http://parentupvt.org/whats-at-stake/surprising-facts/" class="threeline">Find out the true consequences of underage drinking and drug use </a>
                            </li>
                            <li>
                                <a href="http://parentupvt.org/how-can-i-help-prevent-it/monitor-your-teen/" class="twoline bottom3">Get a checklist for helping your teens stay safe</a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section  class=" slider">
        <div id="swipe4" class="slide">
            <div style="padding-top:30px">
                <div class="mi col-lg-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-4.png">
                </div>

                <div class="col-sm-9 col-xs-10">
                          <span class="q">“</span>My kid know they won't get away with anything in this house<span class="q">”</span>
                </div>
                <div class="col-sm-3 col-xs-2">
                        <i class="fa fa-angle-right"></i>
                </div>
            </div>
            <div>
               <div style="float:left" class="col-xs-2 col-sm-1">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="col-xs-10 col-sm-11">
                    <ul class="links">
                           <li>
                                <a href="http://parentupvt.org/how-can-i-help-prevent-it/set-the-foundation/" class="threeline">Find out what you’re doing that’s helping—and ideas for other approaches  </a>
                            </li>
                            <li>
                                <a href="http://parentupvt.org/how-can-i-help-prevent-it/talk-about-it/" class="twoline bottom3">Get tips for effectively talking to your child </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
     </section>
</section>
<?php /*
template name: Testing */

?>
<?php get_header(); ?>
    <!-- content-->




    <section id="content" class="page">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <!-- non-mobile -->
                        <div class="hidden-sm hidden-xs" style="position:absolute; height:100%">
                        <?php get_template_part("assets/php/templates/sidenav", "nonmobile"); ?>
                        </div>
                        <!-- /none-mobile -->

                        <!-- content -->
                        <section class="col-lg-10 col-md-9" style="margin-left:200px">
                            <div class="breadcrumbs">
                                / <a href="">BC</a> / Bread crumbs /
                            </div>
                            <div class="page_content">
                                Testing for the accordian thing ....

                                <div class="ac">
                                    <div class="links" role="tabpanel" role="tablist">
                                        <ul class="nav nav-tabs">
                                            <li role="presentation" class="active">
                                                <a href="#one" aria-controls="one" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    one
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#two" aria-controls="two" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    two
                                                </a>
                                            </li>
                                           <li role="presentation">
                                                <a href="#three" aria-controls="three" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    three
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#four" aria-controls="four" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    four
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#five" aria-controls="five" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    five
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#six" aria-controls="six" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    six
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#seven" aria-controls="seven" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    seven
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#eight" aria-controls="eight" role="tab" data-toggle="tab">
                                                    <i class="fa fa-plus-circle"></i>
                                                    eight
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <article role="tabpanel" class="tab-pane active" id="one">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dapibus tellus eros, a auctor justo luctus quis. In hac habitasse platea dictumst. Praesent efficitur tortor mi, sit amet lacinia quam auctor convallis. Proin fringilla justo ac tempor gravida. Ut efficitur tortor id libero molestie cursus. Ut pellentesque dui a venenatis hendrerit. Aenean ut dapibus sapien. Pellentesque quis elementum lacus. Aliquam hendrerit, nulla in lacinia gravida, purus diam ultricies nunc, a accumsan nunc massa vitae tellus. Duis ac rhoncus enim, nec feugiat nisl.
                                        </article>
                                        <article role="tabpanel" class="tab-pane" id="two">
                                            Nunc dolor sem, lacinia at accumsan ac, varius sit amet dolor. Etiam eleifend ante ut lorem laoreet, ut sagittis metus maximus. Donec ac malesuada libero. Aenean quam quam, efficitur vitae egestas eu, imperdiet eu metus. Donec non erat luctus, dictum lacus lobortis, feugiat leo. Cras commodo est lacus, facilisis interdum enim egestas eu. Curabitur porta diam erat. Phasellus pulvinar aliquet massa, ac sagittis risus gravida eget.
                                        </article>
                                        <article role="tabpanel" class="tab-pane" id="three">
                                            Quisque et auctor augue, vitae convallis lacus. Nunc eleifend libero tortor. Fusce nec auctor dui, sed vulputate erat. Donec fermentum dapibus urna sit amet dignissim. Etiam at mattis ipsum. Vivamus in venenatis nibh. Vestibulum ornare eros enim, at consequat urna vehicula quis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet accumsan arcu. Praesent congue pretium odio, sit amet facilisis ligula ultrices eu. In aliquam ipsum diam, quis vestibulum augue maximus vel. Vivamus vestibulum tortor non rutrum pharetra. Quisque diam nisi, rutrum non felis at, fringilla malesuada ipsum. Donec ac malesuada turpis.
                                        </article>
                                        <article role="tabpanel" class="tab-pane" id="four">
                                            Mauris semper lectus tincidunt, sodales felis sit amet, ornare nibh. Donec sit amet lorem vel justo consectetur semper sit amet vitae risus. Donec auctor nibh et luctus ornare. Quisque dignissim orci et justo feugiat eleifend. Duis accumsan lorem quam, non sodales arcu euismod et. Phasellus laoreet, turpis at facilisis volutpat, dolor nunc fringilla dui, vitae mollis nulla lacus et elit. Mauris maximus elementum ante, ut rutrum lorem fringilla eget. Etiam scelerisque elit sit amet ligula consectetur sollicitudin. In consequat ipsum vel magna semper, eget ullamcorper sapien congue. Quisque ultricies, lectus in feugiat blandit, neque lacus consequat nibh, at ullamcorper diam nulla non tellus. Mauris congue erat leo, eget lobortis tellus rutrum eget. Suspendisse est tortor, mattis et facilisis vel, luctus ut erat. Nulla mattis dictum lectus in commodo. Proin volutpat enim eu nunc malesuada pretium. Pellentesque quis vehicula purus. Duis vel rhoncus nisi.
                                        </article>
                                        <article role="tabpanel" class="tab-pane" id="five">
                                            Duis euismod lectus nisi, sit amet rhoncus mauris imperdiet nec. Aliquam est lectus, egestas vel dui nec, lacinia semper nisi. Pellentesque vitae eros id velit consectetur luctus pulvinar a elit. Proin fermentum tortor non lorem convallis consectetur. Duis mollis maximus rutrum. Sed sed pharetra neque, sagittis ultrices libero. Integer finibus magna justo, vitae egestas erat efficitur volutpat. Nam vitae dapibus diam, a ornare massa. Aenean quis lectus ut urna interdum vehicula vitae non erat. Sed quam nulla, sodales nec dolor id, aliquam eleifend ex. Suspendisse condimentum tortor a nunc vestibulum semper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla in felis pulvinar, ullamcorper ante a, consectetur nibh. In condimentum, massa sit amet feugiat condimentum, tellus orci sagittis odio, quis iaculis dui tortor eu risus.
                                        </article>
                                        <article role="tabpanel" class="tab-pane" id="six">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas sagittis elit. Nullam laoreet erat velit, quis luctus ipsum interdum vitae. Morbi scelerisque mi nulla, vel sagittis velit egestas pretium. Donec ut nibh vel diam suscipit consequat laoreet ac tellus. Nunc neque orci, tincidunt eget luctus vel, ultrices a eros. Ut lobortis vel massa sed elementum. Donec sed interdum quam, sed scelerisque diam. Phasellus nec molestie nulla, id fermentum purus. Aenean quis velit fringilla, pulvinar elit vel, ornare massa. Nam maximus rhoncus nisi, at ornare massa maximus sollicitudin.


                                        </article>
                                        <article role="tabpanel" class="tab-pane" id="seven">
                                            Donec mauris libero, tincidunt a venenatis vel, gravida vel augue. Quisque non mollis dui. Mauris tempor ultrices turpis, sollicitudin euismod dui pretium et. Sed lacinia egestas elit, a consectetur libero vulputate eu. Nullam non purus vel ipsum mollis tincidunt. Vivamus molestie dolor eget posuere gravida. Integer ultrices nulla et mi fringilla, id congue arcu egestas. Sed dignissim eros vitae nunc egestas, et cursus neque aliquet. Etiam pulvinar turpis ac ex faucibus pharetra.


                                        </article>
                                        <article role="tabpanel" class="tab-pane" id="eight">
                                            Aliquam consequat varius justo, a rutrum elit mollis sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed et viverra risus, nec convallis felis. Maecenas vel diam dapibus, posuere justo sed, consectetur libero. Ut a massa sed magna pulvinar facilisis. Duis blandit vehicula purus, eget pulvinar erat lobortis vel. Nam varius tempor quam, sed finibus sapien lacinia quis.
                                        </article>

                                    </div>
                                </div>
                             </div>
                        </section>
                    </div>
                    <!-- /content -->
                </div>
            </div>
        </div>
    </section>
    <!-- /content-->


    <?php get_footer(); ?>
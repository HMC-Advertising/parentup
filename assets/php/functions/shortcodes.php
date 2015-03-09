<?php

    function profiles($atts, $content = null){
        extract(shortcode_atts(array(
            "cover" => "http://lorempixel.com/850/280/nightlife/5/",
            "name" =>  "Example",
            "profile" => "http://lorempixel.com/180/180/people/9/"
        ), $atts));
        $c = array( );
        $c = explode("[content]", $content);
        //print_r($c);

        $output = "";

        $output .='<div class="row facebooklike">
<div class="fb-profile ">
        <img align="left" class="fb-image-lg" src="'.$cover.'" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="'.$profile.'" alt="Profile '.$name.'"/>
        <div class="fb-profile-text">
            <h1>'.$name.'</h1>
            <div class="col-lg-6 about">
                ';

                $output .= $c[2];


            $output .='
            </div>
            <div class="col-lg-6 link">
                <a  data-toggle="collapse" href="#'.$name.'" aria-expanded="false" aria-controls="'.$name.'" class="profilea" ><i class="fa fa-plus"></i></a>
            </div>
            <div id="'.$name.'" class="col-lg-12 procontent collapse">
            ';

                    $output .= $c[1];

            $output .= '
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
';

return $output;
    }

    add_shortcode("profile", "profiles" );

    //tabs

    function acc($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                    "cover" => "http://lorempixel.com/850/280/nightlife/5/"
                ),
            $atts)
        );

        $output = "";
        $output .= '<div class="ac">
                                    <div class="links" role="tabpanel" role="tablist">
                                        ';
        $output .= do_shortcode($content);
        $output .='
                                </div>

                ';


        return $output;
    }

    add_shortcode("accordian", "acc");




    function tab_function($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                   "name" => '',
                ),
            $atts)
        );

        $output = "";
        $output .='<ul class="nav nav-tabs">';
        $output .= do_shortcode($content);
        $output .='
                                        </ul>
                                    </div>';


        return $output;
    }
    add_shortcode("tab_menu", "tab_function");

    function tab_c($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                   "name" => '',
                   'active' =>""
                ),
            $atts)
        );

        $output = "";
        $output .='<li role="presentation" class="'.$active.'">
                        <a href="#'.$name.'" aria-controls="'.$name.'" role="tab" data-toggle="tab">
                            <i class="fa fa-plus-circle"></i>
                            '.$name.'
                         </a>
                    </li>';
         return $output;

    }
    add_shortcode("tab_links", "tab_c");


    function content_tabs($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                   "name" => '',
                   'active' =>""
                ),
            $atts)
        );

        $output = "";
        $output .='  <div class="tab-content">';
        $output .= do_shortcode($content);
        $output .='</div>';
         return $output;

    }
    add_shortcode("tab_content", "content_tabs");

    function con_tabs($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                   "name" => '',
                   'active' =>""
                ),
            $atts)
        );

        $output = "";
        $output .='  <article role="tabpanel" class="tab-pane '.$active.'" id="'.$name.'">';
        $output .= $content;
        $output .=' </article>';
         return $output;

    }

    add_shortcode("tab_article", "con_tabs");




?>
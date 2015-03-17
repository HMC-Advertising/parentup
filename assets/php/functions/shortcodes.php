<?php

    add_filter('widget_text', 'do_shortcode');

    function profiles($atts, $content = null){
        extract(shortcode_atts(array(
            "cover" => "http://lorempixel.com/850/280/nightlife/5/",
            "name" =>  "Example",
            "profile" => "http://lorempixel.com/180/180/people/9/",
            "pronoun" => "they"
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
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 about">
                ';

                $output .= do_shortcode($c[2]);


            $output .='
            </div>
            <div class="clear"></div>
            <div class="col-lg-12 link">
                <div class="col-lg-8">
                    Does this look like your child? Make sure you also see '.$pronoun.' risk factor.
                    </div>
                    <div class="col-lg-4">
                <a  data-toggle="collapse" href="#'.$name.'" aria-expanded="false" aria-controls="'.$name.'" class="profilea" >See why '.$name.' may be at risk
                &nbsp;&nbsp;<i class="fa fa-plus-circle"></i></a>
                </div>
            </div>
            <div id="'.$name.'" class="col-lg-12 procontent collapse">
            ';

                    $output .= do_shortcode($c[1]);

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

    add_shortcode("tabs", "acc");




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
                   'active' =>"",
                   'title' => '',
                   'number' => '4',
                   'class' => ''
                ),
            $atts)
        );

        $output = "";
        $output .='<li role="presentation" class="'.$class.' '.$active.' col-lg-'.$number.' col-md-'.$number.' col-sm-'.$number.' col-xs-12">
                        <a href="#'.$name.'" aria-controls="'.$name.'" role="tab" data-toggle="tab" class="row">
                        ';
                        if(is_page("Talk About It")){

                       $output .= '
                           <div class="col-lg-12">
                            '.$title.'
                            </div>
                            <div class="col-lg-12">
                                 <i class="fa fa-plus-circle"></i>
                            </div>
                            ';
                        }
                        else{


                       $output .= '
                           <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                            '.$title.'
                            </div>
                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                 <i class="fa fa-plus-circle"></i>
                            </div>
                            ';
                        }
         $output .='
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
        $output .= do_shortcode($content);
        $output .=' </article>';
         return $output;

    }

    add_shortcode("tab_article", "con_tabs");

    //accordian short code

    function accordianfunction($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                    "link" => "This is the link text",
                    "id" => "example",
                    "btclass" => "btn btn-primary"
                ),
            $atts)
        );
        $output = "";

        $output .= '<div class="accshort"><a class="'.$btclass.'" data-toggle="collapse" href="#'.$id.'" aria-expanded="false" aria-controls="'.$id.'">';
        $output .= $link;
        $output .= '<br> <i class="fa fa-angle-down"></i>';
        $output .='</a><div class="collapse" id="'.$id.'"><div class="well">';
        $output .= do_shortcode($content);
        $output .='</div></div></div>';

        return $output;
    }

    add_shortcode("accordian","accordianfunction");

    //callouts

    function callfunction($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                    "link" => "This is the link text",
                    "url" => "#"
                ),
            $atts)
        );
        $output = "";
        $output .= "<a href='".$url."' class='callout'>";
        $output .='<h1>'.$link.'</h1>';
        $output .='<small>'.$content.'</small>';
        $output .='</a>';

        return $output;
    }
    add_shortcode("callout", "callfunction");

    function sourcef($atts, $content = null){
        extract(
            shortcode_atts(
                array(
                   "sinfo" => "This is the source"
                ),
            $atts)
        );

        $output = "";
        $output .= '<sup><a tabindex="0" class="source" role="button" data-toggle="popover" data-trigger="focus" title="Source" data-content="'.$sinfo.'">';

        $output .=$content;
        $output .='</a></sup>';

        return $output;

    }
      add_shortcode("source", "sourcef");


?>

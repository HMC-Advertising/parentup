<?php 
	function full_width($atts, $content = null){
	
		$a = shortcode_atts(array(
			"style" => "",
			"id" =>  "",
			"class" => ""

		), $atts);

		$output = '</div></section></div></div>
					<div id="'.$a["id"].'" style="'.$a["style"].'" class="full_width_div '.$a["class"].'"><div class="container">';

		$output .= $content;

		$output .='</div></div>
					<section id="mainCont" class="container"><div class="row"><section class="col-lg-12">';

		return $output;
	}
	
	add_shortcode("fw","full_width");

	function responsive_video($atts, $content = null){
		$a = shortcode_atts(array(
			"url" => ""
		), $atts);

		$output = '<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="'.$a["url"].'" frameborder="0" allowfullscree></iframe>
					</div>';

		return $output;
	}

	add_shortcode("rv", "responsive_video");

?>
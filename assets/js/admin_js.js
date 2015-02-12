function attachMediaUploader(key) {
		
		
		jQuery('#' + key + '_button').click(function() {
			text_element = jQuery('#' + key).attr('id');
			button_element = jQuery('#' + key + '_button').attr('name');
			tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
			console.log(key + " " + text_element + " " + button_element);
			return false;
		});
		window.send_to_editor = function(html) {
			//var self_element = text_element;
			imgurl = jQuery('img', html).attr('src');
			jQuery("#" + text_element).val(imgurl);
			tb_remove();
			console.log(key);
		};

		jQuery("#"+key+"_remove"  ).click(function(){
    		$("#"+key).val("");
    		$("#"+key+"_image").attr("src","");
      		console.log(key)
    		
  		});
	}

	
var $ = jQuery;

$(document).ready(function(){
	attachMediaUploader('logo');
	attachMediaUploader('favicon');
	attachMediaUploader('search');
	attachMediaUploader('blog');
	attachMediaUploader('archive');

})




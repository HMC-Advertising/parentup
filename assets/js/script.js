$ = jQuery;

$(function(){
   //creating the cookie ... yay
   var cl = $(".close");
   var a = $(".alert article");
   var f = $(".alert footer");

   cl.on("click", function(e){
        e.preventDefault();
        t = $(this);

        if(t.hasClass("on")){

            a.slideUp();
            $("footer.on").hide();
             $("footer.off").show();

        }
        else{

            a.slideDown();
             $("footer.off").hide();
             $("footer.on").show();
        }

   })





})

function bakeCookies(yum){

}

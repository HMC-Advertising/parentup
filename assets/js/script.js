$ = jQuery;

$(function(){
   //creating the cookie ... yay
   var cl = $(".close");
   var a = $(".alert article");
   var f = $(".alert footer");
   var nato = $(".top_drop");

   cl.on("click", function(e){
        e.preventDefault();
        t = $(this);

        if(t.hasClass("on")){

            a.slideUp();
            $("footer.on").hide();
             $("footer.off").show();
            bakeCookies("bake");
        }
        else{

            a.slideDown();
             $("footer.off").hide();
             $("footer.on").show();
             bakeCookies("eat");
        }

   })
   bakeCookies();
   //

   nato.on("click", function(e){
         e.preventDefault();
         t = $(this);
         nato.children("ul").slideUp();


         if(t.hasClass("on")){
            t.children("ul").slideUp();
            t.removeClass("on");
         }
         else{
             nato.removeClass("on");
             t.children("ul").slideDown();
            t.addClass("on");
         }
   })



})

function bakeCookies(yum){
    if(yum == "bake"){
        createCookie("yum", "on", 1);
    }
    else if(yum == "eat"){
        eraseCookie("yum");
    }
    else{
        var ck = readCookie("yum");
        if(ck){
            $(".alert article").hide();
            $("footer.on").hide();
            $("footer.off").show();
       }
    }
}

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}




$ = jQuery;

$(function(){
   //creating the cookie ... yay
   var cl = $(".close");
   var a = $(".alert article");
   var f = $(".alert footer");
   var nato = $(".top_drop");
   var hov = $(".slide");

   //window.mySwipe = new SwipeView(document.getElementById('swipe1'));


   //$('.single-item').slick();

    hov.hover(function(){
        $(this).addClass("on");
        $(this).find("img.one").hide();
        $(this).find("img.two").show();
    },
    function(){
        $(this).removeClass("on");
        $(this).find("img.two").hide();
        $(this).find("img.one").show();
    });

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
        t = $(this);
        nato.children("ul").slideUp();

        if(t.hasClass("on")){
             e.preventDefault();
            t.removeClass("on").children("ul").slideUp();
         }
         else{
            nato.removeClass("on");
            t.children("ul").slideDown().addClass("on");
        }
   });


        $(".arrow .fa").click(function(){
           if($(this).hasClass("fa-chevron-down")){
                $(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
           }
           else{
                $(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
           }
        });

        $(".profilea .fa").click(function(){
            console.log("click");
             if($(this).hasClass("fa-minus")){
                $(this).removeClass("fa-minus").addClass("fa-plus");
           }
           else{
                $(this).removeClass("fa-plus").addClass("fa-minus");
           }
        })



        $(".print").click(function(e){
              e.preventDefault();
              print();
        });

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




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

   });
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
           if($(this).hasClass("fa-plus-circle")){
                $(this).removeClass("fa-plus-circle").addClass("fa-minus-circle");
           }
           else{
                $(this).removeClass("fa-minus-circle").addClass("fa-plus-circle");
           }
        });

        $(".profilea").click(function(){
              if($(this).children().hasClass("fa-minus-circle")){
                $(this).children().removeClass("fa-minus-circle").addClass("fa-plus-circle");
              }
              else{
                $(this).children().removeClass("fa-plus-circle").addClass("fa-minus-circle");
              }
        });

        $(".print").click(function(e){
              e.preventDefault();
              print();
        });
        $(".source").popover();

        $(".nav-tabs li a").on("click", function(){
             $(".nav-tabs li a").removeClass("showme");
             $(".nav-tabs li a i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
             $(".tab-pane").removeClass("active");
            $(this).addClass("showme");
            $(this).find("i").removeClass("fa-plus-circle").addClass("fa-minus-circle");

        });

        $(".mobile_accordian a").on("click", function(){
            if($(this).find("i").hasClass("fa-plus-circle")){
              $(this).find("i").removeClass("fa-plus-circle").addClass("fa-minus-circle");
            }
            else{
              $(this).find("i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
            }

        });

      sidebarChange( $(document).height());
      $(window).on("resize", function(){
        sidebarChange( $(document).height());
      });



});






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
     var expires;
    if(days){
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires="+date.toGMTString();
    }
    else{
      expires = "";
    }
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

function sidebarChange(ch){
    var dc = parseInt(ch - 97);
    $(".sidenav.nonmobile.page").css("min-height", dc+"px");

}




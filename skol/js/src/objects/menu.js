Menu = {
    Effect: {
        config: {
            senseSpeed    : 5,
            previusScroll : 0
        },
        init: function(page){
            $(window).scroll(function(event){
                var scroller = $(this).scrollTop();
                if (scroller - Menu.Effect.config.senseSpeed >  Menu.Effect.config.previousScroll){
                       $("nav").filter(':not(:animated)').slideUp();
                }
                else if (scroller + Menu.Effect.config.senseSpeed < Menu.Effect.config.previousScroll){
                    $("nav").filter(':not(:animated)').slideDown();
                }
                Menu.Effect.config.previousScroll = scroller;
            });
        }
    },
    init: function(){
        Menu.setActions();
        Menu.Effect.init();
    },
    setActions: function(){
         $(".menu-item a").on('click', function(event){
            event.preventDefault();
            var el = $(this);
            PageScroll.scroll(el.attr('href'), 100);
            if(el.parent().hasClass('close-after-click'))
                Menu.closeMenu(event);
        });
    }
}

$(document).ready(function() {
    Menu.init();
});
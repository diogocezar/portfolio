Menu = {
    open: false,
    init: function(){
    	Menu.setButtons();
        Menu.setClickOut();
        if(Oracle.page == 'internal'){
            Menu.assignMenuInternal();
        }
    },
    setClickOut: function(){
        $(document).mouseup(function(e){
            var container = $(".lateral-menu");
            if (!container.is(e.target) && container.has(e.target).length === 0)
                if(Menu.open)
                    Menu.closeMenu(e);
        });
    },
    assignMenuInternal: function(){
        $(".menu-item a").on('click', function(event){
            event.preventDefault();
            var el = $(this);
            var top = 150;
            if($(window).width() <= 1024)
                top = 50
            PageScroll.scroll(el.attr('href'), top);
        });
        $("#menu_interna_mobile_select").on('change', function(){
            var el = $(this);
            var top = 150;
            if($(window).width() <= 1024)
                top = 110
            value = el.val();
            if(value != -1)
                PageScroll.scroll("#" + value, top);
        });
    },
    setButtons: function(){
        Shared.__set_button("btn-open-menu", function(event){Menu.openMenu(event)});
        Shared.__set_button("btn-close-menu", function(event){Menu.closeMenu(event)});
    },
    openMenu: function(event){
        Menu.open = true;
        event.preventDefault();
        if($(window).width() <= 1024){
            $('html, body').stop().animate({scrollTop: 0});
            $(".menu-mobile").css({"position": "relative"});
            $(".btn-close-menu").show();
            $(".btn-open-menu").hide();
        }
        $(".lateral-menu").show();
    },
    closeMenu: function(event){
        Menu.open = false;
        event.preventDefault();
        if($(window).width() <= 1024){
            $('html, body').stop().animate({scrollTop: 0});
            $(".menu-mobile").css({"position": "fixed"});
            $(".btn-close-menu").hide();
            $(".btn-open-menu").show();
        }
        $(".lateral-menu").hide();
    }
}

$(document).ready(function() {
    Menu.init();
});
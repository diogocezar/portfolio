Oracle = {
    isLanding: function(){
        return (window.location.pathname == "/brahma_valley/");
    },
    isPage: function(page){
        var url = window.location.pathname;
        return (url.indexOf(page) >= 0);
    },
    isMobile: function(){
        return ($(document).width() <= 600);
    },
    Ingressos: {
        init: function(){
            if(Oracle.isPage('ingressos')){
                var hash = window.location.hash;
                if(hash == "#conheca"){
                    $('html, body').stop().animate({ scrollTop: $('#conheca').offset().top-80}, 500, 'easeOutQuart');
                }
                $(".btn-ingressos-vantagens").on('click', function(){
                    $('html, body').stop().animate({ scrollTop: $('#conheca').offset().top-80}, 500, 'easeOutQuart');
                })
            }
        }
    },
    NiceScroll: {
        init: function(){
            $("html").niceScroll(
                {
                    cursorwidth: '8px',
                    zindex: 99999999,
                    scrollspeed: 90,
                    mousescrollstep: 60,
                    cursoropacitymax: 0.8,
                    cursorcolor: "#e43c25",
                    horizrailenabled:false,
                    cursorborder: "none",
                    cursorborderradius: "0px"
                }
            );
        }
    },
    OwlCarousel: {
        carousels : [],
        init: function(){
            if(jQuery().owlCarousel){
                /*
                if(Oracle.isMobile()){
                    if($("#carousel-mobile").length){
                        var owl = $("#carousel-mobile").owlCarousel({
                            navigation        : false,
                            autoPlay          : true,
                            pagination        : true,
                            slideSpeed        : 300,
                            singleItem        : true,
                            navigationText    : false,

                        });
                        Oracle.OwlCarousel.carousels.push(owl);
                        setTimeout(function(){
                            $(".owl-carousel-mobile").each(function(){
                                $(this).data('owlCarousel').updateVars();
                            });
                        }, 500);
                    }
                }
                else{
                    if($("#carousel").length){
                        var owl = $("#carousel").owlCarousel({
                            navigation        : false,
                            autoPlay          : true,
                            pagination        : true,
                            slideSpeed        : 300,
                            singleItem        : true,
                            navigationText    : false,

                        });
                        Oracle.OwlCarousel.carousels.push(owl);
                        setTimeout(function(){
                            $(".owl-carousel").each(function(){
                                $("#carousel").data('owlCarousel').updateVars();
                            });
                        }, 500);
                    }
                }
                */
                if($("#carousel-mobile").length){
                    var owl = $("#carousel-mobile").owlCarousel({
                        navigation        : false,
                        autoPlay          : true,
                        pagination        : true,
                        slideSpeed        : 300,
                        singleItem        : true,
                        navigationText    : false,

                    });
                    Oracle.OwlCarousel.carousels.push(owl);
                    setTimeout(function(){
                        $(".owl-carousel-mobile").each(function(){
                            $(this).data('owlCarousel').updateVars();
                        });
                    }, 500);
                }
                if($("#carousel").length){
                        var owl = $("#carousel").owlCarousel({
                            navigation        : false,
                            autoPlay          : true,
                            pagination        : true,
                            slideSpeed        : 300,
                            singleItem        : true,
                            navigationText    : false,

                        });
                        Oracle.OwlCarousel.carousels.push(owl);
                        setTimeout(function(){
                            $(".owl-carousel").each(function(){
                                $("#carousel").data('owlCarousel').updateVars();
                            });
                        }, 500);
                    }
            }
        }
    },
    Preloader: {
        init: function(){
            if(Oracle.isLanding()){
                Cookie.redirect();
            }
            $("#status").fadeOut();
            $("#preloader").delay(500).fadeOut("slow");
        },
        show: function(){
            $("#status").show();
            $("#preloader").show();
        },
        hide: function(){
            $("#status").fadeOut();
            $("#preloader").fadeOut("fast");
        }
    },
    ScrollReveal: {
        init: function(){
            var config = 
            {
                after          : '0s',
                enter          : 'top',
                move           : '15px',
                over           : '0.5s',
                easing         : 'hustle',
                viewportFactor : 0,
                reset          : true,
                init           : true
            };
            window.sr = new scrollReveal(config);
        }
    },
    init: function () {
        Oracle.ScrollReveal.init();
        Oracle.NiceScroll.init();
        Oracle.OwlCarousel.init();
        Oracle.Ingressos.init();
    }
}

$(document).ready(function() {
    Oracle.init();
});

$(window).load(function(){ 
    Oracle.Preloader.init();
})
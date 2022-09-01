Interna = {
    OwlCarousel:{
        config : {
            navigation  : false,
            pagination  : true,
            autoPlay    : true,
            slideSpeed  : 300,
            singleItem  : true
        },
        carousels : {
            assigned : [],
            customNavs : {
                1 : {
                    "next" : ".owl-carousel-custom-navigation .btn-next",
                    "prev" : ".owl-carousel-custom-navigation .btn-prev"
                }
            },
        },
        assignCustomNav: function(item, i){
            var next = Interna.OwlCarousel.carousels.customNavs[i]["next"];
            var prev = Interna.OwlCarousel.carousels.customNavs[i]["prev"];
            $(next).on('click', function(){
                item.trigger('owl.next');
            });
            $(prev).click(function(){
                item.trigger('owl.prev');
            })
        },
        init:function(){
            var i = 0;
            Interna.OwlCarousel.carousels.assigned[i] = $("#cars").owlCarousel({
                navigation  : false,
                pagination  : false,
                autoPlay    : false,
                slideSpeed  : 300,
                singleItem  : false,
                items       : 4
            });
            Interna.OwlCarousel.assignCustomNav(Interna.OwlCarousel.carousels.assigned[i], 1);
            setTimeout(function(){
                $(".owl-carousel").each(function(){
                    Interna.OwlCarousel.carousels.assigned[i].data('owlCarousel').updateVars();
                });
            }, 500);
        }
    },
    init: function(){
        Oracle.page = 'internal';
        Interna.OwlCarousel.init();
    },
}

$(document).ready(function() {
    Interna.init();
});
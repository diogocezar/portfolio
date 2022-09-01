CarroInterna = {
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
            var next = CarroInterna.OwlCarousel.carousels.customNavs[i]["next"];
            var prev = CarroInterna.OwlCarousel.carousels.customNavs[i]["prev"];
            $(next).on('click', function(){
                item.trigger('owl.next');
            });
            $(prev).click(function(){
                item.trigger('owl.prev');
            })
        },
        init:function(){
            var i = 0;
            CarroInterna.OwlCarousel.carousels.assigned[i] = $("#cars").owlCarousel({
                navigation  : false,
                pagination  : false,
                autoPlay    : true,
                slideSpeed  : 300,
                singleItem  : false,
                items       : 4
            });
            CarroInterna.OwlCarousel.assignCustomNav(CarroInterna.OwlCarousel.carousels.assigned[i], 1);
            setTimeout(function(){
                $(".owl-carousel").each(function(){
                    CarroInterna.OwlCarousel.carousels.assigned[i].data('owlCarousel').updateVars();
                });
            }, 500);
        }
    },
    init: function(){
        Oracle.page = 'internal';
        CarroInterna.OwlCarousel.init();
        $("#menu_interna_mobile_select").select2({minimumResultsForSearch: -1});
    }
}

$(document).ready(function() {
    CarroInterna.init();
});
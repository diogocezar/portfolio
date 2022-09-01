Index = {
    OwlCarousel:{
        config : {
            navigation  : false,
            pagination  : true,
            autoPlay    : true,
            slideSpeed  : 300,
            singleItem  : true
        },
        carousels : {
            ids : [
                $("#banners"),
                $("#collections"),
                $("#populares-mobile"),
            ],
            assigned : [],
            customNavs : {
                1 : {
                    "next" : ".owl-carousel-custom-navigation .btn-next",
                    "prev" : ".owl-carousel-custom-navigation .btn-prev"
                }
            },
        },
        assignCustomNav: function(item, i){
            var next = Index.OwlCarousel.carousels.customNavs[i]["next"];
            var prev = Index.OwlCarousel.carousels.customNavs[i]["prev"];
            $(next).on('click', function(){
                item.trigger('owl.next');
            });
            $(prev).click(function(){
                item.trigger('owl.prev');
            })
        },
        init:function(){
            var i;
            for(i=0; i<Index.OwlCarousel.carousels.ids.length; i++){
                var item = Index.OwlCarousel.carousels.ids[i];
                if(item.length){
                    Index.OwlCarousel.carousels.assigned[i] = item.owlCarousel(Index.OwlCarousel.config);
                }
            }
            Index.OwlCarousel.carousels.assigned[i] = $("#cars").owlCarousel({
                navigation  : false,
                pagination  : false,
                autoPlay    : false,
                slideSpeed  : 300,
                singleItem  : false,
                items       : 4
            });
            Index.OwlCarousel.assignCustomNav(Index.OwlCarousel.carousels.assigned[i], 1);
            setTimeout(function(){
                $(".owl-carousel").each(function(){
                    item.data('owlCarousel').updateVars();
                });
            }, 500);
        }
    },
    init: function(){
        Oracle.page = 'main';
        Index.OwlCarousel.init();
    },
}

$(document).ready(function() {
    Index.init();
});
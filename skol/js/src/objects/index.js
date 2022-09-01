Index = {
    OwlCarousel:{
        config : {
            navigation  : false,
            pagination  : false,
            autoPlay    : true,
            slideSpeed  : 300,
            singleItem  : true
        },
        carousels : {
            ids : [
                $("#carousel-depoimentos"),
                $(".fotos-local")
            ],
            assigned : []
        },
        init:function(){
            for(var i=0; i<Index.OwlCarousel.carousels.ids.length; i++){
                var item = Index.OwlCarousel.carousels.ids[i];
                var config = Index.OwlCarousel.config;
                if(item.hasClass('fotos-local')){
                    config =  {
                        navigation  : false,
                        pagination  : true,
                        autoPlay    : true,
                        slideSpeed  : 300,
                        singleItem  : true
                    };
                }
                if(item.length){
                    Index.OwlCarousel.carousels.assigned[i] = item.owlCarousel(config);
                }
                setTimeout(function(){
                    $(".owl-carousel").each(function(){
                        item.data('owlCarousel').updateVars();
                    });
                }, 500);
            }
        }
    },
    init: function(){
        Index.assignMobile();
        Index.assignPageScroll();
        Index.assignMap();
        Index.assignButtons();
        Index.OwlCarousel.init();
    },
    assignMobile: function(){
        Mobile.configure();
    },
    assignPageScroll: function(){
        SizeControl.configure(function(){
            Shared.Debug.log('Implements Resize Here');
        });
    },
    assignMap: function(){
        var map = {
                id    : 'map',
                lat   : -23.5422911,
                lng   : -46.6426224,
                title : 'Título 1'
        };
        Maps.configure(map);
    },
    assignButtons: function(){
        $(".btn-close").on('click', function(){
            Oracle.AditionalInfos.close();
        });
    }
}

$(document).ready(function() {
    Index.init();
});
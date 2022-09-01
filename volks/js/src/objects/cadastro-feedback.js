CadastroFeedback = {
    init: function(){
        Oracle.page = 'internal';
        CadastroFeedback.assignIcheck();
        CadastroFeedback.OwlCarousel.init();
        CadastroFeedback.assignSelect2();
    },
    assignSelect2: function(){
        $("#estado").select2({minimumResultsForSearch: -1});
        $("#cidade").select2({minimumResultsForSearch: -1});
    },
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
            var next = CadastroFeedback.OwlCarousel.carousels.customNavs[i]["next"];
            var prev = CadastroFeedback.OwlCarousel.carousels.customNavs[i]["prev"];
            $(next).on('click', function(){
                item.trigger('owl.next');
            });
            $(prev).click(function(){
                item.trigger('owl.prev');
            })
        },
        init:function(){
            var i = 0;
            CadastroFeedback.OwlCarousel.carousels.assigned[i] = $("#feedback").owlCarousel({
                navigation  : false,
                pagination  : false,
                autoPlay    : true,
                slideSpeed  : 300,
                singleItem  : false,
                items       : 4
            });
            CadastroFeedback.OwlCarousel.assignCustomNav(CadastroFeedback.OwlCarousel.carousels.assigned[i], 1);
            setTimeout(function(){
                $(".owl-carousel").each(function(){
                    CadastroFeedback.OwlCarousel.carousels.assigned[i].data('owlCarousel').updateVars();
                });
            }, 500);
        }
    },
    assignIcheck: function(){
        Shared.__set_icheck("icheck");
        $("#por_regiao").iCheck('check');
        $("#por_regiao").on('ifChecked', function(){
            $("#por_nome").iCheck('uncheck');
        });
        $("#por_nome").on('ifChecked', function(){
            $("#por_regiao").iCheck('uncheck');
        });
    }
}

$(document).ready(function() {
    CadastroFeedback.init();
});
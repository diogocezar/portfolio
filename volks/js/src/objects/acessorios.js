Acessorios = {
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
            var next = Acessorios.OwlCarousel.carousels.customNavs[i]["next"];
            var prev = Acessorios.OwlCarousel.carousels.customNavs[i]["prev"];
            $(next).on('click', function(){
                item.trigger('owl.next');
            });
            $(prev).click(function(){
                item.trigger('owl.prev');
            })
        },
        init:function(){
            var i = 0;
            Acessorios.OwlCarousel.carousels.assigned[i] = $("#cars").owlCarousel({
                navigation  : false,
                pagination  : false,
                autoPlay    : true,
                slideSpeed  : 300,
                singleItem  : false,
                items       : 4
            });
            Acessorios.OwlCarousel.assignCustomNav(Acessorios.OwlCarousel.carousels.assigned[i], 1);
            setTimeout(function(){
                $(".owl-carousel").each(function(){
                    Acessorios.OwlCarousel.carousels.assigned[i].data('owlCarousel').updateVars();
                });
            }, 500);
        }
    },
    init: function(){
        Oracle.page = 'internal';
        Acessorios.assignPopUps();
        Acessorios.assignLoadMore();
        Acessorios.OwlCarousel.init();
        $("#menu_interna_mobile_select").select2({minimumResultsForSearch: -1});
    },
    assignLoadMore: function(){
        $(".btn-carregar-mais").on('click', function(event){
            Acessorios.loadMore();
        });
    },
    assignPopUps: function(){
        $(".btn-open").on('click', function(event){
            var slug = $(this).data('slug');
            var data = Acessorios.getData(slug);
            Acessorios.show(slug, data);
        });
    },
    getData: function(slug){
        var obj = $("." + slug);
        return {
                'name'        : obj.data('name'),
                'code'        : obj.data('code'),
                'value'       : obj.data('value'),
                'link'        : obj.data('link'),
                'img'         : obj.data('img'),
                'compatible'  : obj.data('compatible'),
                'description' : obj.data('description'),
        };
    },
    show: function(slug, data){
        Acessorios.changeUrl(slug);
        var img        = [];
        var path       = "./";

        img.push('<img alt="');
        img.push(data['name']);
        img.push('" class="img-responsive " src="');
        img.push(path + data['img']);
        img.push('"/>');

        $(".fill-img").empty().html(img.join(''));
        $(".fill-name").empty().html(data['name']);
        $(".fill-code").empty().html(data['code']);
        $(".fill-description").empty().html(data['description']);
        $(".fill-value").empty().html(data['value']);
        $(".fill-compatible").empty().html(data['compatible']);

        PopUp.open("popup-detalhes", "btn-close-detalhes");
        $(".btn-close-detalhes").on('click', function(){ PopUp.close("popup-detalhes") });
    },
    changeUrl: function(content){
        var prefix = "./";
        var arrayPath = window.location.pathname.split('/');
        if(arrayPath[arrayPath.length-1] != content){
            if(arrayPath[arrayPath.length-1] == "acessorios.html"){
                prefix = "./";
            }
            else{
                prefix = "../";
            }
            window.history.pushState("", "", prefix + "acessorios.html#" + content);
        }
    },
    loadMore: function(){
        var qtd     = 4;
        var numRows = qtd/4;
        for(var i=0; i<numRows; i++){
            var clonedRow = $(".cloned-row").clone();
            clonedRow.find(".cloned-item").removeClass('cloned-item');
            clonedRow.find(".cloned-column").remove();
            for(var j=0; j<qtd; j++){
                var item = $(".cloned-item").clone();
                item.removeAttr('style');
                item.find(".cloned-column").removeClass('cloned-column');
                item.find('.cloned-link-img').attr('href', "link_" + j);
                item.find('.cloned-img').attr('src', "assets/images/index/sample-acessorio.jpg");
                item.find('.cloned-name').html("Nome do Acessório " + j);
                item.find('.cloned-price').html("R$ " + j*100 + ",00");
                clonedRow.find('.row').append(item.html());
            }
            $(".load-more").append(clonedRow.html());
        }
    }
}

$(document).ready(function() {
    Acessorios.init();
});
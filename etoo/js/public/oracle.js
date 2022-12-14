Oracle = {
    Preloader: {
        init: function(){
            //$("#status").fadeOut();
            //$("#preloader").delay(500).fadeOut("slow");
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
            if($(".box-scroll").length > 0){
                $(".box-scroll").niceScroll(
                    {
                        cursorwidth: '8px',
                        zindex: 99999999,
                        scrollspeed: 90,
                        mousescrollstep: 60,
                        cursoropacitymax: 0.8,
                        cursorcolor: "#e43c25",
                        horizrailenabled:true,
                        cursorborder: "none",
                        cursorborderradius: "0px"
                    }
                );
            }
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
    }
}

$(document).ready(function() {
    Oracle.init();
});
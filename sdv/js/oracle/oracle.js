Oracle = {
    NiceScroll: {
        init: function(){
            $("html").niceScroll(
                {
                    cursorwidth: '8px',
                    zindex: 99999999,
                    scrollspeed: 90,
                    mousescrollstep: 60,
                    cursoropacitymax: 0.8,
                    cursorcolor: "#ec008c",
                    horizrailenabled:false,
                    cursorborder: "none",
                    cursorborderradius: "0px"
                }
            );
        }
    },
    Preloader: {
        init: function(){
            $("#status").fadeOut();
            $("#preloader").delay(500).fadeOut("slow");
        }
    },
    ScrollReveal: {
        init: function(){
            var config =
            {
                after          : '0s',
                enter          : 'top',
                move           : '15px',
                over           : '0.8s',
                easing         : 'hustle',
                viewportFactor : 0,
                reset          : false,
                init           : false
            };
            window.sr = new scrollReveal(config);
        }
    },
    init: function () {
        Oracle.ScrollReveal.init();
        //Oracle.NiceScroll.init();
    }
}

$(document).ready(function() {
    Oracle.init();
});

$(window).load(function(){
    Oracle.Preloader.init();
})
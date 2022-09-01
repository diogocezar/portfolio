Oracle = {
    linkIOS     : 'http://www.itunes.com/',
    linkAndroid : 'http://www.google.com/',
    myOS        : null,
    myWidth     : null,
    getOs: function(){
        //return 'iOS';
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;
        if(userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /iPod/i ))
            return 'iOS';
        else if( userAgent.match(/Android/i ))
            return 'Android';
        else
            return 'unknown';
    },
    init: function () {

        Oracle.myWidth = $(document).width();
        Oracle.myOS    = Oracle.getOs();

        $(window).resize(function(){
            Oracle.myWidth = $(document).width();
            if(Oracle.myOS == 'iOS'){
                if(Oracle.myWidth <= 400)
                    $(".img-app").attr("src", "images/ios_sm.png");
                else
                    $(".img-app").attr("src", "images/ios.png");
            }
            else{
                if(Oracle.myWidth <= 400)
                    $(".img-app").attr("src", "images/android_sm.png");
                else
                    $(".img-app").attr("src", "images/android.png");
            }
        });

        $(".link").on('click', function(event){
            event.preventDefault();
            if($("#chk-termos").is(":checked")){
                if(Oracle.myOS == 'iOS')
                    window.location.href = Oracle.linkIOS;
                else
                    window.location.href = Oracle.linkAndroid;
            }
            else{
                alert("Você precisa aceitar os Termos e Condições de Uso.");
            }
        });
        if(Oracle.myOS == 'iOS'){
            if(Oracle.myWidth <= 400)
                $(".img-app").attr("src", "images/ios_sm.png");
            else
                $(".img-app").attr("src", "images/ios.png");
        }
        else{
            if(Oracle.myWidth <= 400)
                $(".img-app").attr("src", "images/android_sm.png");
            else
                $(".img-app").attr("src", "images/android.png");
        }
        $('.btn-termos').on('click', function(){Oracle.open()});
        $('.btn-back').on('click', function(){Oracle.close()});
    },
    open: function(id){
        $("#main").hide();
        $("#termos").fadeIn();
    },
    close: function(id){
        $("#termos").hide();
        $("#main").fadeIn();
    }
}
$(document).ready(function() {
    Oracle.init();
});
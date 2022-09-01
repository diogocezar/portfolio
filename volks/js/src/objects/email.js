Email = {
    init: function(){
        Oracle.page = 'internal';
        Email.assignPops();
        Email.assignButtons();
    },
    assignPops: function(){
        var pops = [
            {
                id    : 'popup-email',
                open  : 'btn-email',
                close : 'btn-close-email'
            }
        ];
        PopUp.configure(pops);
    },
    assignButtons: function(){
        Shared.__set_button("enviar", function(event){
            var email = $("#email").val();
            var error = false;
            var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
            if(!re.test(email) || Shared.__is_empty(email))
                error = true;
            if(error){
                $(".msg-error").show();
                $("#email").addClass('form-error');
            }
            else{
                $(".msg-error").hide();
                $("#email").removeClass('form-error');
                $(".box-email").hide();
                $(".box-ok").show();
            }
        });
    }
}

$(document).ready(function() {
    Email.init();
});
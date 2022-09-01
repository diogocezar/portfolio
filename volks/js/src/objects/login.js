Login = {
    init: function(){
        Oracle.page = 'internal';
        Login.assignButtons();
        Login.assignMasks();
    },
    assignMasks: function(){
        $("#cpf").mask("999.999.999-99");
    },
    validateCadastro: function(){
        var cpf    = $("#cpf").val();
        var passw  = $("#password-cadastro").val();
        var exists = true; // já existe no banco?
        var error  = !Shared.__is_empty(cpf) && !Shared.__is_empty(passw);
        if(!error && exists){
            $(".msg-error-cadastro").show();
            $("#cpf").addClass('form-error');
            $("#password-cadastro").addClass('form-error');
        }
        else{
            $(".msg-error-cadastro").hide();
            $("#cpf").removeClass('form-error');
            $("#password-cadastro").removeClass('form-error');
        }
    },
    validateLogin: function(){
        var email  = $("#email").val();
        var passw  = $("#password-login").val();
        var exists = true; // é um login no banco dedados?
        var error  = Login.validateEmail(email) && !Shared.__is_empty(passw);
        if(!error && exists){
            $(".msg-error-login").show();
            $("#email").addClass('form-error');
            $("#password-login").addClass('form-error');
        }
        else{
            $(".msg-error-login").hide();
            $("#email").removeClass('form-error');
            $("#password-login").removeClass('form-error');
        }
    },
    validateEsqueci: function(){
        var email  = $("#email").val();
        var exists = true; // é um email no banco dedados?
        var error  = Login.validateEmail(email);
        if(!error && exists){
            $(".msg-error-esqueci").show();
            $("#email").addClass('form-error');
        }
        else{
            $(".msg-error-esqueci").hide();
            $("#email").removeClass('form-error');
            setTimeout(function(){
                $("#email").hide();
                $(".btn-enviar-esqueci").hide();
                $(".label-email").hide();
                $(".msg-ok-esqueci").show();
            }, 2000);
        }
    },
    validateEmail: function(email){
        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
        if(!re.test(email) || Shared.__is_empty(email))
            return false
        return true;
    },
    assignButtons: function(){
        Shared.__set_button("btn-enviar-esqueci", function(event){
            Login.validateEsqueci();
        });
        Shared.__set_button("btn-enviar-login", function(event){
            Login.validateLogin();
        });
        Shared.__set_button("btn-enviar-cadastro", function(event){
            Login.validateCadastro();
        });
    }
}

$(document).ready(function() {
    Login.init();
});
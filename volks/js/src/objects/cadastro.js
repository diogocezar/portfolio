Cadastro = {
    init: function(){
        Oracle.page = 'internal';
        Cadastro.assignButtons();
        Cadastro.assignIcheck();
        Cadastro.assignMasks();
        Cadastro.assignSelect2();
    },
    assignSelect2: function(){
        $("#estado").select2({minimumResultsForSearch: -1});
        $("#cidade").select2({minimumResultsForSearch: -1});
    },
    assignMasks: function(){
        $("#cpf").mask("999.999.999-99");
        $("#numero").numeric();
        $("#telefone").inputmask('(99) 9999 9999[9]');
        $("#cep").mask("99999-999");
        $("#data_nascimento").mask("99/99/9999");
    },
    assignIcheck: function(){
        Shared.__set_icheck("icheck");
        $("#sexo_masculino").iCheck('check');
        $("#sexo_masculino").on('ifChecked', function(){
            $("#sexo_feminino").iCheck('uncheck');
        });
        $("#sexo_feminino").on('ifChecked', function(){
            $("#sexo_masculino").iCheck('uncheck');
        });
    },
    assignButtons: function(){
        Shared.__set_button("btn-enviar-cadastro", function(event){
            event.preventDefault();
            Validation.check(function(){
                if($("#password").val() != $("#conf_password").val()){
                    Validation.setError($("#password"), "Os campos de login e senha não conferem");
                }
                else{
                    Validation.reset($("#password"));
                }
                // Enviar dados
            });
        });
    }
}

$(document).ready(function() {
    Cadastro.init();
});
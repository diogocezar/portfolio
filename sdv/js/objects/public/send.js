Send = {
	terms:1,
	init: function(){
		$('.btn-action-send').on('click', function(){Send.send()});
		Send.setIcheck();
	},
	send: function(){
		if(Send.terms == 1){
			alert('Você precisa aceitar os termos de uso.')
		}
		else{
			alert('Formulário enviado com sucesso.');
		}
	},
	setIcheck:function(){
		if($('.icheck').length){
			$('.icheck').iCheck({
				checkboxClass : 'icheckbox_square-grey',
				radioClass    : 'iradio_square',
				increaseArea  : '20%'
	        });
		    if(Send.terms == 2){
		        $('#termos').iCheck('check');
		    }
		    $('#termos').on('ifChecked', function(){
		        Send.terms = 2;
		    });
		    $('#termos').on('ifUnchecked', function(){
		        Send.terms = 1;
		    });
		}
	}
}

$(document).ready(function() {
	Send.init();
});
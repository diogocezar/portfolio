Validation = {
	error   : null,
	focusEl : null,
	config  : {
		errorClass : "form-error"
	},
	check: function(callBack){
		Shared.Debug.log("Validation Checked");
		Validation.error = false;
		$(document).find("form").each(function(){
			var obj  = $(this);
			if(obj.data('validate') == true){
				Validation.focusEl = null;
				obj.find('input[type="text"], input[type="password"], textarea, select').each(function(){
					var el = $(this);
					Validation.reset(el);
					if(el.data('required') == true)
						Validation.validate('required', el);
					if(el.data('email') == true)
						Validation.validate('email', el);
					if(el.data('select') == true)
						Validation.validate('select', el);
				});
				if(Validation.error == false){
					if(!Shared.__is_empty(callBack)){
	    				callBack();
					}
				}
				else{
					Validation.focusEl.focus();
					PageScroll.scroll("#" + Validation.focusEl.attr('id'), 250);
				}
			}
		});
	},
	validate: function(type, field){
		switch(type){
			case "required" :
				if(Shared.__is_empty(field.val()))
					Validation.setError(field);
			break;
			case "email" :
				var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
				if(!re.test(field.val()) || Shared.__is_empty(field.val()))
					Validation.setError(field);
			break;
			case "select" :
				var name = field.attr("id");
				if($("#" + name + " option:selected").val() == "0")
					Validation.setError(field);
			break;
		}
	},
	reset: function(field){
		if(field.hasClass('select2-hidden-accessible')){
			$("[aria-labelledby='select2-"+ field.attr('id') +"-container']").removeClass(Validation.config.errorClass);
			$(".col-margin-top").css({'margin-top' : '0px'});
		}
		else{
			field.removeClass(Validation.config.errorClass);
		}
		var label    = $("label[for='"+field.attr('id')+"']");
		var original = label.data('original');
		label.empty().html(original);
	},
	setError: function(field, customMsg){
		if(Validation.focusEl == null) Validation.focusEl = field;
		var label = $("label[for='"+field.attr('id')+"']");
		var msg   = field.data('error-msg');
		var old   = label.html();
		Validation.error = true;
		if(!Shared.__is_empty(msg))
			label.empty().html(old + '<div class="help-block hide-info"><small>' + msg +'</small></div>');
		if(!Shared.__is_empty(customMsg))
			label.empty().html(old + '<div class="help-block hide-info"><small>' + customMsg +'</small></div>');
		if(field.hasClass('select2-hidden-accessible')){
			$("[aria-labelledby='select2-"+ field.attr('id') +"-container']").addClass(Validation.config.errorClass);
			$(".col-margin-top").css({'margin-top' : '15px'});
		}
		else{
			field.addClass(Validation.config.errorClass);
		}
		Shared.Debug.log('Form With Error : ' + field.attr("id"));
	}
}
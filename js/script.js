$(document).ready(function(){
	/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}


	function w3_open() {
	    document.getElementById("mySidebar").style.display = "block";
	}
	function w3_close() {
	    document.getElementById("mySidebar").style.display = "none";
	}

	function capitalize(str){
	    str = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
	        return letter.toUpperCase();
	    });
	    return str;
	}

	function _error(err){
        throw new Error(err);
    }

    function __(content){
        console.log(content);
    }

    function canFocus( $el ) {
        if ( $el.is( ":hidden" ) || $el.is( ":disabled" ) ) {
            return false;
        }

        var tabIndex = +$el.attr( "tabindex" );
        tabIndex = isNaN( tabIndex ) ? -1 : tabIndex;
        return $el.is( ":input, a[href], area[href], iframe" ) || tabIndex > -1;
    }

    function show_validation_msg($elm,msg){
        $([document.documentElement, document.body]).animate({
            scrollTop: $elm.offset().top-75
        }, 500);
        $elm.focus().tooltip({title:msg}).tooltip('show');
        _error('invalid form');
    }

	$('input.compose_username').change(function(){
        var firstname = $('[name="firstname"]').val().trim();
        var lastname = $('[name="lastname"]').val().trim();

        if (firstname != "" && lastname != "") {
        	$('[name="username"]').val(capitalize(firstname) + " " + capitalize(lastname));
        }

    });

    $('input[name="postal_code"]').change(function(){
    	var value = $(this).val().trim();
    	$(this).val(value.toUpperCase());
    });


    $('input[type="checkbox"][data-input_to_toggle]').click(function(){
    	if ($(this).is(':checked')) {
            var inputs_to_toggle = $(this).attr('data-input_to_toggle');
            var inputs_array = inputs_to_toggle.split(",");
            $(inputs_array).each(function(key,input){
                $(input).prop('disabled',false).prop('required',true);
                if (key == 0 && canFocus($(input))) {
                    $(input).focus();
                }
            });

            var checkboxs_to_revers = $(this).attr('data-checkbox_to_revers');
            if(typeof checkboxs_to_revers != 'undefined'){
                var checkboxs_array = checkboxs_to_revers.split(",");
                $(checkboxs_array).each(function(key,input){
                    $(input).prop('checked',false).change();
                });
            }
        }else{
            var checkbox_to_revers = $(this).attr('data-checkbox_to_revers');
            if(typeof checkbox_to_revers != 'undefined'){
            	$(this).prop('checked',true);
            }
        }
    });

    $('input[type="checkbox"][data-input_to_toggle]').change(function(){
    	if (!$(this).is(':checked')) {
            var inputs_to_toggle = $(this).attr('data-input_to_toggle');
            var inputs_array = inputs_to_toggle.split(",");
            $(inputs_array).each(function(key,input){
                $(input).prop('disabled',true).prop('required',false).val("");
            });

        }
    });

    $('form.manual_validation .submit').click(function(){
        var form = $(this).parents('form')[0];

        $(form).find('input').each(function(key,value){
            if(!$(form).find('input')[key].checkValidity()){
                var input = $(form).find('input')[key];
                if (canFocus($(input))) {
                    show_validation_msg($(input),input.validationMessage);
                }else{
                    show_validation_msg($(input).parent(),input.validationMessage);
                }
            }
        });
        $(form).find('textarea').each(function(key,value){
            if(!$(form).find('textarea')[key].checkValidity()){
                var input = $(form).find('input')[key];
                if (canFocus($(input))) {
                    show_validation_msg($(input),input.validationMessage);
                }else{
                    show_validation_msg($(input).parent(),input.validationMessage);
                }
            }
        });
        $(form).find('select').each(function(key,value){
            if(!$(form).find('select')[key].checkValidity()){
                var input = $(form).find('input')[key];
                if (canFocus($(input))) {
                    show_validation_msg($(input),input.validationMessage);
                }else{
                    show_validation_msg($(input).parent(),input.validationMessage);
                }
            }
        });

        $(form).find('input[type="checkbox"][data-checkbox_mandatory_group]').each(function(key,row){
            var checkbox_group = $(row).attr('data-checkbox_mandatory_group');
            var checkbox_group_selected_count = $('input[type="checkbox"][data-checkbox_mandatory_group="'+checkbox_group+'"]:checked').length;

            if (checkbox_group_selected_count == 0) {

                var section_header = $($(row).closest('.section_container').find('.section_header'));

                show_validation_msg(section_header,"Please check one option from this group to go.");
            }

        });
        
        $(form).submit();
    	
    });

});
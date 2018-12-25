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

});
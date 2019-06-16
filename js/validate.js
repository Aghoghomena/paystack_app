function validateForm(data){
     counterror = 0;
     error_message="";

    $.each(data, function( index, datum ) {
        var type = datum['type'];
        var value = datum['value'];
        var name = datum['name'];
        if (type === 'number'){
            if (value === '' || value === null) {
                counterror++;
                error_message += name + " Cannot be empty !! \n";

            } else {
                if (!$.isNumeric(value)) {
                    counterror ++;
                    error_message += name + " is not a number !! \n";
                }
            }
        }
        else if (type === 'email'){
            if (email === ''){
                counterror++;
                error_message += name + " Cannot be empty !! \n";
            }
            else{
                var result =isEmail(value);
                if(result === false){
                    counterror++;
                    error_message += name + " Must be an email !! \n";
                }
            }
        }
        else if (type === 'password'){
            if (value === ''){
                counterror++;
                error_message += name + " Cannot be empty !! \n";
            }
            else if (value.length < 6){
                counterror++;
                error_message += name + " Length must be at least 6 characters long !! \n";
            }
        }
        else {
            if (value ==='') {
                counterror++;
                error_message += name + " Cannot be empty !! \n";
            }
        }

    });

    return {'error':counterror,'message':error_message};

}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
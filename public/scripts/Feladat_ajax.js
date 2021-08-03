//----------------------------------------------------------------------------------------------------
/* Új adatok vagy a módosított adatok mentése AJAX-al */

var uj_szerkeszt;    //értéke lehet : "ujfelvitel" vagy "frissites"


function ujFelvitelJS() {
    //Mezők ellenörzése ha rendben akkor mehet a felvitel a db-be:
    uj_szerkeszt = 'ujfelvitel';

    $('#myform').validate(
        {
            //adott mezőkhöz itt is lehet szabályokat beállítani nem csak HTML-ben!
            //txaFeladatLeiras a HTML-ben van szabályozva!! (ujFeladat.tpl)
            rules: {
                txtFeladatCim : {
                    minlength: 5,
                    maxlength: 25,
                    required: true
                }
            },
            //mezőkhöz tartozó információk:
            messages: {
                txtFeladatCim: {
                    required: 'A feladat cím megadása kötelező!', 
                    minlength: 'Minimum 5 karaktert adjon meg!',
                    maxlength: 'Maximum 25 karaktert adhat meg!' },
                txaFeladatLeiras: {
                    required: 'A feladat leírás megadása kötelező!',
                    minlength: 'Minimum 2 karaktert adjon meg!' },
            },
            //beviteli hiba esetén itt lehet egyéni üzeneteket pl. div-ben vagy alert-ben megjeleníteni
            invalidHandler: function(event, validator) {
                // 'this' ebben az esetben a form-ra mutat!
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1
                        ? 'Van egy érvénytelen mező. Kiemeltük!'
                        : 'Érvénytelen mezők száma: ' + errors + '.';
                    alert(message);
                    //$("div.error span").html(message);
                    //$("div.error").show();
                }
            }, 
            submitHandler: function(form) {
                //adatok rendben, mehet a küldés-mentés:
                adatokMentese();
            }
        }
    );
    
}

function adatokMentese() {
    var url;

    if (uj_szerkeszt == 'ujfelvitel') {
        //új feladatot kell felvenni:
        url = 'TodoAppController/ujFelvitel/ujfeladat';                
    }

    // feladat hozzáadása AJAX-al:
    $('#btnUjFelvitel').html('Küldés...');
    $.ajax({
        url : url,
        type: "POST",
        data: $('#myform').serialize(),
        dataType: "json",
        success: function( response )
        {
            if (response.server_error) {
                //beviteli hiba van a szerveren:
                $('#btnUjFelvitel').html('Új feladat rögzítése');
                $('#btnUjFelvitel').prop('disabled', false);
                $('#res_message').html(response.msg);
                $('#res_message').show();
                $('#res_message').removeClass('d-none');
                $('#res_message').removeClass('alert-success');
                $('#res_message').addClass('alert-warning');
            }
            else {
                $('#btnUjFelvitel').html('Új feladat rögzítése');
                $('#btnUjFelvitel').prop('disabled', true);
                $('#res_message').html(response.msg);
                $('#res_message').show();
                $('#res_message').removeClass('d-none');
                //ha esetleg még ki lenne rakva a hiba akkor azt törölni kell és
                //jelezni a sikeres felvitelt:
                if ( $('#res_message').hasClass("alert-warning") ) {
                    $('#res_message').removeClass('alert-warning');
                    $('#res_message').addClass('alert-success');       
                }

                $("#myform").trigger("reset"); 
                
                setTimeout(function(){
                    $('#res_message').hide();
                    $('#res_message').html('');
                    $('#btnUjFelvitel').prop('disabled', false);
                    location.replace("Todo-FeladatLista");
                },5000);
            }   
            
        }
    });
}

//----------------------------------------------------------------------------------------------------

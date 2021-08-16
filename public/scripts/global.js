/**
    * Minden oldalon betöltődő "globális" scriptek helye
*/


//aktív link (menüelem) beállítása:
$(function() {
    $('.navbar-nav .nav-link').click(function(){
        $('.navbar-nav .nav-link').removeClass('active');   //active class törlése minden menüelemből
        $(this).addClass('active'); //és hozzáadása az éppen kiválasztotthoz
    })
})


/**
 * A feladatlostában kiválasztott feladat részleteit kell lekérni
 * AJAX-on keresztül és megjeleníteni a "kivalasztott_feladat" paragrafusban!
 * 
 * @param   id      int     feladat azonosító (fid)
 * @return void;
 */
function feladatLista(fid) {
        $.ajax({
            url: 'TodoAppController/kivalasztottFeladat/' + fid,
            type: 'POST',
            //data: {fid: 'fid'}, -NOK!!!
            success: function( response )
                {
                    $(".kivalasztott_feladat").text(response);
                    //console.log("response: " + );
            }
        })
        .fail(function() {
            console.log("error");
        });
        
    }
//})


//----------------------------------------------------------------------------------------------------


//Mégsem gombra kattintott a user:
//részletek: https://craftpip.github.io/jquery-confirm/#getting-started
$(function() {
    $('#ujFeladatMegsem').click(function(){
        $.confirm({ title: 'Felvitel megszakítása...',
                    content: 'Biztos hogy megszakítja a felvitelt?',
                    type: 'red',
                    icon: 'fa fa-exclamation-circle',
                    animation: 'bottom',
                    closeAnimation: 'left',
                    animationSpeed: 600,
                    autoClose: 'megsem|5000',
                    buttons: {
                        igen: {
                            text: 'IGEN',
                            btnClass: 'btn-red',
                            action: function () {
                                //form adatok törlése, gomb letiltás, ha volt üzenet akkor elrejtés
                                //aztán irány vissza a főoldalra:
                                $("#myform").trigger("reset"); 
                                $('#res_message').hide();
                                $('#res_message').html('');
                                $('#btnUjFelvitel').prop('disabled', false);
                                location.replace("Todo-FeladatLista");
                            }
                        },
                        megsem: {
                            text: 'NEM',
                            btnClass: 'btn-success',
                            action: function () {
                            }
                        }
                    }
                });
    })
})
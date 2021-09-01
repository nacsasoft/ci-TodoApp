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
 * A feladatlistában kiválasztott feladat részleteit kell lekérni
 * AJAX-on keresztül és megjeleníteni a "kivalasztott_feladat" textarea-ban!
 * 
 * @param   fid      int     feladat azonosító (fid)
 * @return void;
 */
function feladatLista(fid) {
        //feladat azonosító eltárolása egy rejtett inputba:
        $("#feladat_id").val(fid);
        //részletek lekérése a szerverről és megjelenítés:
        $.ajax({
            url: 'TodoAppController/kivalasztottFeladat/' + fid,
            type: 'POST',
            //data: {fid: 'fid'}, -NOK!!!
            success: function( response )
                {
                    //listázott feladatcímek hátterének "törlése":
                    $("a[id^='feladatID']").attr("style", "background-color: rgba(0,0,0,0)");
                    //kiválasztott feladatcím kiemelése:
                    $("#feladatID" + fid).attr("style", "background-color: yellow");
                    //kiválasztott feladat részleteinek kiírása:
                    $(".kivalasztott_feladat").text(response);
            }
        })
        .fail(function() {
            console.log("error");
        });
        
    }

//----------------------------------------------------------------------------------------------------


/**
 * A feladatlistában kiválasztott feladat id-ját át kell adni a php-nak majd
 * a CI Smarty-n kersztül megjeleníti a feladatszerkesztés oldalt.
 * 
 * @param
 * @return void;
 */
 function feladatSzerkesztesAJAX() {
    //feladat azonosító beolvasása a rejtett inputból:
    fid = $("#feladat_id").val();
    //var url = "Todo-Szerkesztes/" + fid;
    //$(location).attr("href", url);
    
    //id elküldése a szervernek és a szerkesztés oldal megjelenítése:
    $.ajax({
        url: 'TodoAppController/Szerkesztes/' + fid,
        type: 'POST',
        //data: {fid: 'fid'}, -NOK!!!
        success: function( response ) {
            var url = "Todo-Szerkesztes/" + fid;
            //$(location).attr("href", url);
            return true;
        }
    })
    .fail(function() {
        console.log("error");
    });
    
    
}

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
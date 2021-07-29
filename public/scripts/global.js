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

$(function() {
    $('.feladatlista').click(function(){
        alert($(this).attr('id'));
    })
})

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
                                location.replace("index.php");
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
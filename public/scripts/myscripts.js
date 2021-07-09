
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
/* Új adatok vagy a módosított adatok mentése AJAX-al */


var uj_szerkeszt;    //értéke lehet : "ujfelvitel" vagy "frissites"


function ujFelvitelJS() {
    uj_szerkeszt = 'ujfelvitel';
    adatokMentese();
    //$('#form')[0].reset();  //form adatok törlése  -ezt majd a sikeres művelet végén!!

}

function adatokMentese() {
    var url;

    if (uj_szerkeszt == 'ujfelvitel') {
        //új feladatot kell felvenni:
        url = 'TodoAppController/ujFelvitel';
    }

    // feladat hozzáadása AJAX-al:
    $('#btnUjFelvitel').html('Küldés...');
    $.ajax({
        url : url,
        type: "post",
        data: $('#myform').serialize(),
        dataType: "json",
        success: function( response )
        {
            $('#btnUjFelvitel').html('Új feladat rögzítése');
            $('#res_message').html(response.msg);
            $('#res_message').show();
            $('#res_message').removeClass('d-none');
 
            $("#myform").trigger("reset"); 
            
            setTimeout(function(){
                $('#res_message').hide();
                $('#res_message').html('');
                location.replace("index.php");
            },5000);
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('AJAX hiba!!');
        }
    });
}
//----------------------------------------------------------------------------------------------------



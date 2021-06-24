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

/* Új adatok vagy a módosított adatok mentése AJX-al */
var uj_szerkeszt;    //értéke lehet : "ujfelvitel" vagy "frissites"

function ujFelvitel() {
    uj_szerkeszt = 'ujfelvitel';
    adatokMentese();
    //$('#form')[0].reset();  //form adatok törlése  -ezt majd a sikeres művelet végén!!

}

function adatokMentese() {
    var url;

    if (uj_szerkeszt == 'ujfelvitel') {
        //új feladatot kell felvenni:
        url = "<?php echo site_url('public/index.php/ujFelvitel')?>";
    }

    // feladat hozzáadása AJAX-al:
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
           //if success close modal and reload ajax table
           //$('#modal_form').modal('hide');
          location.replace("index.php");
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
}


//----------------------------------------------------------------------------------------------------



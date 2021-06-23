//aktív link (menüelem) beállítása:
$(function() {
    $('.navbar-nav .nav-link').click(function(){
        $('.navbar-nav .nav-link').removeClass('active');   //active class törlése minden menüelemből
        $(this).addClass('active'); //és hozzáadása az éppen kiválasztotthoz
    })
})

$(function() {
    $('p').click(function(){
        alert($(this).attr('id'));
    })
})

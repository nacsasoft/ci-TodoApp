//aktív link (menüelem) beállítása:
$('.navbar-nav .nav-link').click(function(){
    $('.navbar-nav .nav-link').removeClass('active');   //active class törlése minden menüelemből
    $(this).addClass('active'); //és hozzáadása az éppen kiválasztotthoz
})

let hiddenMenu = false;

$('.lateral-menu').hide();


$('.menu-mobile').on('click', function(){
    hiddenMenu = !hiddenMenu;

    if(hiddenMenu)
    {
        $('.lateral-menu').show();
    }else
    {
        $('.lateral-menu').hide();
    }
})


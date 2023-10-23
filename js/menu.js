var w = window.innerWidth;
if (w < 768) {

    window.sessionStorage.setItem('menu', 0);
    var menu = window.sessionStorage.getItem('menu');
    jQuery(".menu-topo-container").hide();

    jQuery('#menuIcon').click(function () {
        console.log("menu " + menu);
        if (menu == '0') {
            jQuery(".menu-topo-container").show(1300);
            window.sessionStorage.setItem('menu', 1);
            menu = 1;
        }
        else {
            jQuery(".menu-topo-container").hide(100);
            window.sessionStorage.setItem('menu', 0);
            menu = 0;
        }

    })
}
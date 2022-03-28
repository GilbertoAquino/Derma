/*!
* Start Bootstrap - Agency v7.0.10 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
//
/*window.addEventListener("resize", event => {
    var navbarsize = function() {
        if (window.scrollY === 0){
            if ($(window).width() < 980){
                console.log("holamundo");
            }
        }
    }
});*/
window.addEventListener("resize",function(event){
    const navbarCollapsible = document.body.querySelector('#mainNav');
    //const imglogo = document.body.querySelector('#imglogo');
    const carrousel_img = document.body.querySelector("#crs_img");
    if ($(window).width() < 980){
        navbarCollapsible.classList.remove('navbar-ga-expand');
        //carrousel_img.classList.remove('w-100');
    }
    else{
        navbarCollapsible.classList.add('navbar-ga-expand');
        carrousel_img.classList.add('w-100');
    }
},true);

function changecolor(){
    var nvi = document.getElementsByClassName("nav-item");
    if (nvi[0].childNodes[0].classList.contains("block")){
        return;
    };
    for (i=0;i<nvi.length;i++){
        nvi[i].childNodes[0].classList.remove("nav-ga-link-white");
        nvi[i].childNodes[0].classList.add("nav-ga-link-black");
    }
};
function returncolor(){
    var nvi = document.getElementsByClassName("nav-item");
    if (nvi[0].childNodes[0].classList.contains("block")){
        return;
    };
    for (i=0;i<nvi.length;i++){
        nvi[i].childNodes[0].classList.remove("nav-ga-link-black");
        nvi[i].childNodes[0].classList.add("nav-ga-link-white");
    }
};
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        //const imglogo = document.body.querySelector('#imglogo');
        const carrousel_img = document.body.querySelector("#crs_img")
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink');
            navbarCollapsible.classList.add('navbar-ga-expand');
            //imglogo.classList.add("w-50");
            returncolor();
            if ($(window).width() < 980){
                navbarCollapsible.classList.remove('navbar-ga-expand');
            }

        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            navbarCollapsible.classList.remove('navbar-ga-expand');
            //imglogo.classList.remove("w-50");
            changecolor();
            if ($(window).width() < 980){

            }
        }
        if ($(window).width() < 980){
            //carrousel_img.classList.remove('w-100');
            navbarCollapsible.classList.remove('navbar-ga-expand');
            //imglogo.classList.add('w-50');
            //navbarCollapsible.classList.remove('navbar-shrink');
            navbarCollapsible.classList.remove('navbar-ga-expand');
        }
    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
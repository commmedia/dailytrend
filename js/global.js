function myFunction() {
    var element = document.getElementById("menu-trigger");
    element.classList.toggle("open");
}

//Share
function fbshareCurrentPage() {
    window.open("https://www.facebook.com/sharer/sharer.php?u=" + escape(window.location.href) + "&t=" + document.title, '',
        'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false;
}
function appfbshareCurrentPage() {
    window.location.href = "fb://www.facebook.com/sharer/sharer.php?u=" + escape(window.location.href) + "&t=" + document.title, '';
    return false;
}
function twshareCurrentPage() {
    window.open("https://twitter.com/intent/tweet?text=" + document.title + "&url=" + escape(window.location.href), '',
        'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false;
}
function wpshareCurrentPage() {
    window.location.href = "whatsapp://send?text=" + escape(window.location.href) + "&t=" + document.title;
    return false;
}
//<![CDATA[
function getlink() {
    var aux = document.createElement("input");
    aux.setAttribute("value", window.location.href);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
}
//]]>

jQuery(document).ready(function () {

    jQuery('.responsive').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

});


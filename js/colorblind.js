function change_colorblind() {
    change_body();
    change_header();
    change_footer();
    change_image();
}

function change_body (){
    var body = document.getElementsByTagName("body");
    for (let i = 0; i < body.length; i++) {
        body[i].classList.add("body-blindcolor");
    }
}

function change_header (){
    var header = document.getElementsByTagName("header");
    for (let i = 0; i < header.length; i++) {
        header[i].classList.add("header-blindcolor");
    }
}

function change_footer (){
    var footer = document.getElementsByTagName("footer");
    for (let i = 0; i < footer.length; i++) {
        footer[i].classList.add("footer-blindcolor");
    }
}

function change_image() {
    var image = document.getElementById("img_home_div").style.display;
    if (image = "inline") {
        document.getElementById("img_home_div").style.display = "none";
        document.getElementById("img_home_blindcolor_div").style.display = "inline";
    } else {
        document.getElementById("img_home_div").style.display = "inline";
        document.getElementById("img_home_blindcolor_div").style.display = "none";
    }
}
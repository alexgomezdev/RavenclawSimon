var daltonico = 0;


function click_colorblind() {
    if (daltonico == 0) {
        daltonico = 1;
        document.getElementById("colorblind_data").value = "True";
        change_colorblind(daltonico);
    } else {
        daltonico = 0;
        document.getElementById("colorblind_data").value = "False";
        change_colorblind(daltonico);
    }
}

function change_colorblind(id) {
    change_body(id);
    change_header(id);
    change_footer(id);
}

function change_body (id){
    if (id == 1) {
        document.getElementById("body").removeAttribute("class");
        document.getElementById("body").setAttribute("class", "body-blindcolor");
    } else {
        document.getElementById("body").removeAttribute("class", "body-blindcolor");
        document.getElementById("body").setAttribute("class", "body");
    }
}

function change_header (id){
    if (id == 1) {
        document.getElementById("header").removeAttribute("class");
        document.getElementById("header").setAttribute("class", "header-blindcolor");
    } else {
        document.getElementById("header").removeAttribute("class", "header-blindcolor");
        document.getElementById("header").setAttribute("class", "header");
    }
}

function change_footer (id){
    if (id == 1) {
        document.getElementById("footer").removeAttribute("class");
        document.getElementById("footer").setAttribute("class", "footer-blindcolor");
    } else {
        document.getElementById("footer").removeAttribute("class", "footer-blindcolor");
        document.getElementById("footer").setAttribute("class", "footer");
    }
}
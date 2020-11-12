function survival_mode(){
    var checkbox = document.getElementById('survive');
    console.log(checkbox.checked);
    if (checkbox.checked == true) {
        document.getElementById("form_index").removeAttribute("action");
        document.getElementById('form_index').setAttribute('action', 'survival.php');
    } else {
        document.getElementById("form_index").removeAttribute("action");
        document.getElementById('form_index').setAttribute('action', 'start.php');
    }
}

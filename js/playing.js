var tdscorrects = document.getElementsByClassName('plus');
function hideNices (){
    for (const key of tdscorrects) {
        key.classList.remove('nice'); 
    }
    document.getElementById("solve_button").removeAttribute('disabled');
    var clickable = document.getElementsByClassName('tg');
    var clickable = document.getElementsByClassName('tg');
    for (const x of clickable) {
        x.setAttribute('onclick', 'choose(this.id)');
    }
}
function showNices(){
    for (const x of tdscorrects) {
            x.classList.add('nice'); 
        }
    setTimeout(hideNices,4000)
    };
    
function choose(id) {
    var elem = document.getElementById(id)
    if (elem.classList.contains('nice')){
        elem.classList.remove('nice');
    }else{
        elem.classList.add('nice');
    }
};

function winorlose() {
    var playResut = document.getElementsByClassName('plus nice');
    var contNice = document.getElementsByClassName('nice')
    if ((contNice.length == tdscorrects.length) && ((playResut.length == tdscorrects.length)) ){
        window.open("success.php", "_self");
    }else{
        window.open("gameOver.php" , "_self");
    }
    // alert(playResut.length);
}
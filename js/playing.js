var tdstimeut = document.getElementsByClassName('plus');
function hideNices (){
    
    var tdstimeut = document.getElementsByClassName('plus');
        for (const key of tdstimeut) {
        key.classList.remove('nice'); 
    }
}
function showNices(){
        var tdstimeut = document.getElementsByClassName('plus');
        for (const x of tdstimeut) {
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
    if ((contNice.length == tdstimeut.length) && ((playResut.length == tdstimeut.length)) ){
        alert("Has ganaao pisha")
    }else{
        alert("has perdido noob")
    }
    // alert(playResut.length);
}
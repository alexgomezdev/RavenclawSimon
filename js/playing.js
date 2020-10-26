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
    if (elem.classList.contains('choosed')){
        elem.classList.remove('choosed');
    }else{
        elem.classList.add('choosed')
    }
}

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
    startTime =new Date();
};
function showNices(){
    for (const x of tdscorrects) {
            x.classList.add('nice'); 
        }
    setTimeout(hideNices,4000)

    };
    
function choose(id) {
    var elem = document.getElementById(id);
    if (elem.classList.contains('nice')){
        elem.classList.remove('nice');
    }else{
        elem.classList.add('nice');
    }
    document.getElementById('select').play();
};

function winorlose() {
    endTime = new Date();
    var intervalTime = endTime - startTime ;
    intervalTime = intervalTime/100;
    timeToReturn = Math.round(intervalTime);
    var playResut = document.getElementsByClassName('plus nice');
    var contNice = document.getElementsByClassName('nice')
    if ((contNice.length == tdscorrects.length) && ((playResut.length == tdscorrects.length)) ){
        window.open("success.php?tiempo="+timeToReturn, "_self");
    }else{
        window.open("gameOver.php", "_self");
    }
    // alert(playResut.length);
};

function start() {
    document.getElementById('start').play();
};

function solve() {
    document.getElementById('solve').play();
};

function updateClock() {
    var totalTime = segons / 1000;
    document.getElementById('countdown').innerHTML = totalTime;
    if(totalTime==0){
    }else{
        totalTime-=1;
        setTimeout("updateClock()",1000);
    }
}

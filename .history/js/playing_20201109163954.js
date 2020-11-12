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
    document.getElementById("start_game_button").setAttribute('disabled', false);
};
function showNices(){
    for (const x of tdscorrects) {
            x.classList.add('nice'); 
        }
    setTimeout(hideNices,segons)
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
};

function start() {
    document.getElementById('start').play();
};

function solve() {
    document.getElementById('solve').play();
};

var totalTime = segons / 1000;

function move() {
    var elem = document.getElementById("bar");   
    var width = segons;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
      } else {
        width++; 
        elem.style.width = width + '%'; 
        document.getElementById("label").innerHTML = width * 1  + '%';
      }
    }
  }
  
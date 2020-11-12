var tdscorrects = document.getElementsByClassName('plus');
function hideNices (){
    for (const key of tdscorrects) {
        key.classList.remove('nice'); 
    }
    document.getElementById("solve_button").removeAttribute('disabled');
    var clickable = document.getElementsByClassName('tg');
    for (const x of clickable) {
        x.setAttribute('onclick', 'choose(this.id)');
    }
    startTime =new Date();
    document.getElementById("start_game_button").setAttribute('disabled', false);
};
function hideLiers (){
    for (const hidelierkey of tdscorrects) {
        hidelierkey.classList.remove('lier'); 
    }
    document.getElementById("solve_button").removeAttribute('disabled');
    var clickable = document.getElementsByClassName('tg');
    for (const x of clickable) {
        x.setAttribute('onclick', 'choose(this.id)');
    }
    startTime =new Date();
    document.getElementById("start_game_button").setAttribute('disabled', false);
};
// Retorna un entero aleatorio entre min (incluido) y max (excluido)
// ¡Usando Math.round() te dará una distribución no-uniforme!
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
  }
function showNices(){
    if (lier == 1 ){
        contLiers = 1
        randArrayLier = [];
        for (var i = 0 ; i < Math.round(tdscorrects.length/2)-1 ; i++){
            randNum = getRandomInt(1, tdscorrects.length +1)
            if (randArrayLier.includes(randNum)){
                i = i - 1;
            }else {
                randArrayLier.push(randNum);
            }
            console.log(randArrayLier)
        }
        for (const xlier of tdscorrects) {
            console.log(contLiers)
            if (randArrayLier.includes(contLiers)){
                xlier.classList.add('lier');
                xlier.classList.add('noplus');
            }else{
                xlier.classList.add('nice');
              
            }
            contLiers = contLiers + 1;
        }
        setTimeout(hideLiers,segons)
    }else {
        for (const xnormal of tdscorrects) {
            xnormal.classList.add('nice'); 
        }
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
    var contLierAndNice= document.getElementsByClassName('nice plus noplus')
    if (lier == 1){
        if ((contNice.length == Math.round(tdscorrects.length/2)) && (playResut.length == Math.round(tdscorrects.length/2)) && (contLierAndNice.length < 1) ){
            window.open("success.php?tiempo="+timeToReturn, "_self");
    }else {
        window.open("gameOver.php", "_self");
    }
    }else{
        if ((contNice.length == tdscorrects.length) && (playResut.length == tdscorrects.length) ){
            window.open("success.php?tiempo="+timeToReturn, "_self");
        }else{
            window.open("gameOver.php", "_self");
        }
    };
}
function start() {
    document.getElementById('start').play();
};

function solve() {
    document.getElementById('solve').play();
};

var totalTime = segons /1000;

function move() {
    var elem = document.getElementById("bar");   
    var width = 0;
    var id = setInterval(frame, segons/100);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
      } else {
        width++; 
        elem.style.width = width + '%'; 
      }// 
    }
}

function updateClock() {
    document.getElementById('label').innerHTML = totalTime;
    if(totalTime==0){
        
    }else{
        totalTime-=1;
        setTimeout("updateClock(totalTime)",1000);
    }
}
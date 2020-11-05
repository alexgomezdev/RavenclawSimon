function player() {
    document.getElementById('audio').play();
    document.getElementById('audio').pause();
    document.getElementById('audio').volume+=0.1;
    document.getElementById('audio').volume-=0.1;
}


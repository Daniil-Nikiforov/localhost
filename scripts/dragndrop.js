let Pitanie = document.getElementById('ePitanie');
var Icontent = document.getElementsByClassName('inner-content');

//let copyPitanie = document.createElement(Pitanie);
Pitanie.onmousedown=function(event){
    let PitanieCopy = document.createElement('img');
    let shiftX = event.clientX - Pitanie.getBoundingClientRect().left;
    let shiftY = event.clientY - Pitanie.getBoundingClientRect().top;
    PitanieCopy.style.position='absolute';
    PitanieCopy.style.zIndex = 1000;
    PitanieCopy.style.width = 100 + 'px';
    PitanieCopy.style.border = 0;
    PitanieCopy.setAttribute('class','element');
    PitanieCopy.src = 'uploads/Block.png';
    document.body.append(PitanieCopy);
    
    moveAt(event.pageX,event.pageY);

    function moveAt(pageX,pageY){
        PitanieCopy.style.left = pageX-shiftX+'px';
        PitanieCopy.style.top = pageY-shiftY+'px';
    }
    function onMouseMove(event){
        moveAt(event.pageX,event.pageY);
    }
    PitanieCopy.addEventListener('mousemove',onMouseMove);

    PitanieCopy.onmouseup=function(){
        PitanieCopy.removeEventListener('mousemove',onMouseMove);
        PitanieCopy.onmouseup=null;
    };
};
PitanieCopy.ondragstart=function(){
    return false;
};
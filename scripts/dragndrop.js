let Pitanie = document.getElementById('ePitanie');
var Icontent = document.getElementById('ic');
let PitanieCopy = null;

function createCopy(){
    PitanieCopy = document.createElement('img');
    PitanieCopy.style.position='absolute';
    PitanieCopy.style.zIndex = 1000;
    PitanieCopy.style.width = 100 + 'px';
    PitanieCopy.style.border = 0;
    PitanieCopy.setAttribute('class','element');
    PitanieCopy.setAttribute('draggable','true');
    PitanieCopy.src = 'uploads/Block.png';
    Icontent.append(PitanieCopy);

    PitanieCopy.onmousedown = function(event){
        let shiftX = event.clientX - PitanieCopy.getBoundingClientRect().left;
        let shiftY = event.clientY - PitanieCopy.getBoundingClientRect().top;
        
        moveAt(event.pageX,event.pageY);
    
        function moveAt(pageX,pageY){
            PitanieCopy.style.left = pageX - shiftX + 'px';
            PitanieCopy.style.top = pageY - shiftY + 'px';
        }
        function onMouseMove(event){
            moveAt(event.pageX,event.pageY);
        }
        document.addEventListener('mousemove',onMouseMove);
    
        PitanieCopy.onmouseup=function(){
            document.removeEventListener('mousemove',onMouseMove);
            PitanieCopy.onmouseup = null;
        };
    };
    PitanieCopy.ondragstart = function(){
        return false;
    };
}
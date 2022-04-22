//Поиск элементов
let elementPitanie = document.getElementById('ePitanie');
let elementResistor = document.getElementById('eResistor');
let elementButton = document.getElementById('eButton');
let elementCondensator = document.getElementById('eCondensator');
let elementSvetDiod = document.getElementById('eSvetDiod');
let elementTransistor1 = document.getElementById('eTransistor1');
let elementTransistor2 = document.getElementById('eTransistor2');
let icontent = document.getElementById('inner-content');
let elementCopy = null;
let elementIndex = 0;
let elementId = 0;
let arrOfElements = [];

class Element{
    constructor(options){
        this.id = options.id
        this.name = options.name
        this.gradusVrash = options.gradusVrash
    }
}
class Pitanie extends Element{
    constructor(options){
        super(options)
        this.voltage = options.voltage
    }
}
class Resistor extends Element{
    constructor(options){
        super(options)
        this.resistance = options.resistance
    }
}
class SvetDiod extends Element{
    constructor(options){
        super(options)
        this.color = options.color
        this.amper = options.amper
        //Добавить switch of color to voltage
    }
}
//Изменить
function styleOfCopy(){
    elementCopy.style.position = 'absolute';
    elementCopy.style.width = '100px';
    elementCopy.style.height = '50px';
    elementCopy.style.border = 0;
    elementCopy.removeAttribute('onClick');
    elementCopy.setAttribute('id',elementId);
    elementCopy.setAttribute('onClick','getId()');

}
function dragNdrop(){ //Изменить
        elementCopy.onmousedown = function(event){
        let shiftX = event.clientX - elementCopy.getBoundingClientRect().left;
        let shiftY = event.clientY - elementCopy.getBoundingClientRect().top;
        
        moveAt(event.pageX,event.pageY);
    
        function moveAt(pageX,pageY){
            elementCopy.style.left = pageX - shiftX + 'px';
            elementCopy.style.top = pageY - shiftY + 'px';
        }
        function onMouseMove(event){
            moveAt(event.pageX,event.pageY);
        }
        document.addEventListener('mousemove',onMouseMove);
    
        elementCopy.onmouseup = function(){
            document.removeEventListener('mousemove',onMouseMove);
            elementCopy.onmouseup = null;
        };
    };
    elementCopy.ondragstart = function(){
        return false;
    };
}
function createCopy(elementIndex){
    elementId++;
    switch(elementIndex){
        case 1:
            elementCopy = elementPitanie.cloneNode(true);
            elementCopy.style.backgroundImage="url(uploads/Block.png)";
            let pitanie = new Pitanie({
                id: elementId,
                name:'Питание',
                gradusVrash: 0,
                voltage: 12
            })
            arrOfElements.push(pitanie);
            break;
        case 2:
            elementCopy = elementResistor.cloneNode(true);
            break;
        case 3:
            elementCopy = elementButton.cloneNode(true);
            break;
        case 4:
            elementCopy = elementCondensator.cloneNode(true);
            break;
        case 5:
            elementCopy = elementSvetDiod.cloneNode(true);
            break;
        case 6:
            elementCopy = elementTransistor1.cloneNode(true);
            break;
        case 7:
            elementCopy = elementTransistor2.cloneNode(true);
            break;
    }
    styleOfCopy();
    icontent.append(elementCopy);
    dragNdrop();
}
function getId(){
    console.log(event.target.id);
}
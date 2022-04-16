var l = document.getElementById('inner-buttons');
bar = [];
var dro;
var dropZones = document.getElementsByClassName('inner-content');

console.log(dropZones.length);
for (let i = 0; i < 8; i++) {
    let b = bar[i];
    b = document.createElement('div');
    b.setAttribute('class','box');
    b.setAttribute('draggable','true');
    b.textContent = (i+1).toString();
    b.addEventListener('dragstart',function(){dro=event.target; console.log(dro);});
    l.append(b);
}
for (let i = 0; i < dropZones.length; i++) {
    dropZones[i].addEventListener('dragover',function(ev){ev.preventDefault();}) 
    dropZones[i].addEventListener('drop',function(ev){ev.target.append(dro);}) 
    
}
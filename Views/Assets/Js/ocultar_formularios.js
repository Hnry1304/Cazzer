/*
    Valores de los inputs, Playeras,Sudaderas,Gorras y Tazas
    oculran los divs de los formularios
*/
let Playera = document.getElementById('Playera');
let Sudadera = document.getElementById('Sudadera');
let Gorra = document.getElementById('Gorra');
let Taza = document.getElementById('Taza');


/* Agregamos valores a los div, cada div contiene 
un formulario para el producto */

let playera_formulario = document.getElementById('playera_formulario');
let sudadera_formulario = document.getElementById('sudadera_formulario');
let gorra_formulario = document.getElementById('gorra_formulario');
let taza_formulario = document.getElementById('taza_formulario');

/* Activamos el formulario playeras por defecto..*/
playera_formulario.style.display = "block";
sudadera_formulario.style.display = "none";
gorra_formulario.style.display = "none";
taza_formulario.style.display = "none";


//Activamos formulario Playeras
Playera.onclick = activarPlayera;
function activarPlayera(evento){
    gorra_formulario.style.display = "none";
    taza_formulario.style.display = "none";
    sudadera_formulario.style.display = "none";    
    playera_formulario.style.display = "block";
}


// Activamos formulario sudadera
Sudadera.onclick = activarSudadera;
function activarSudadera(evento){
    playera_formulario.style.display = "none";
    gorra_formulario.style.display = "none";
    taza_formulario.style.display = "none";
    sudadera_formulario.style.display = "block";
}


//Activamos formulario Tazas
Taza.onclick = activarTazas;
function activarTazas(evento){
    playera_formulario.style.display = "none";
    gorra_formulario.style.display = "none";
    sudadera_formulario.style.display = "none";
    taza_formulario.style.display = "block";
}

//Activamos formulario gorras
Gorra.onclick = activarGorras;
function activarGorras(evento){
    playera_formulario.style.display = "none";
    taza_formulario.style.display = "none";
    sudadera_formulario.style.display = "none";
    gorra_formulario.style.display = "block";
}
/*
    Valores de los inputs, Playeras,Sudaderas,Gorras y Tazas
    oculran los divs de los formularios
*/
let Playera = document.getElementById('Playera');
let Sudadera = document.getElementById('Sudadera');
let Gorra = document.getElementById('Gorra');
let Taza = document.getElementById('Taza');

//Valor 
let valor = 'Caballero';


/* Agregamos valores a los div, cada div contiene 
un formulario para el producto */

let playera_formulario = document.getElementById('playera_formulario');
let sudadera_formulario = document.getElementById('sudadera_formulario');
let gorra_formulario = document.getElementById('gorra_formulario');
let taza_formulario = document.getElementById('taza_formulario');

// Variables para Playeras para caballero, Dama y ninos
let optionsPlayeraCaballero = document.getElementById('OptionsplayeraCaballero');
let optionsPlayeraDama = document.getElementById('OptionsplayeraDama');
let optionsPlayeraNino = document.getElementById('OptionsplayeraNino');

//Variable para color de playeras Dama,Caballero y ninos
let playera_negro_caballero = document.getElementById('playera_negra_caballero');
let playera_blanca_caballero = document.getElementById('playera_blanca_caballero');
let playera_gris_caballero = document.getElementById('playera_gris_caballero');

let playera_negro_dama = document.getElementById('playera_negra_dama');
let playera_blanca_dama = document.getElementById('playera_blanca_dama');
let playera_gris_dama = document.getElementById('playera_gris_dama');

let playera_negro_kids = document.getElementById('playera_negra_kids');
let playera_blanca_kids = document.getElementById('playera_blanca_kids');
let playera_gris_kids = document.getElementById('playera_gris_kids');

//Variable para cambiear color Sudaderas...
let color_sudadera_negro = document.getElementById('sudaderaNegro');
let color_sudadera_blanco = document.getElementById('sudaderaBlanco');
let color_sudadera_gris = document.getElementById('sudaderaGris');

//Variable par cambiar color Gorras
let color_gorra_negro = document.getElementById('gorraNegro');
let color_gorra_blanco = document.getElementById('gorraBlanco');
let color_gorra_azul = document.getElementById('gorraAzul');
let color_gorra_naranja = document.getElementById('gorraNaranja');
let color_gorra_roja = document.getElementById('gorraRojo');
let color_gorra_rosa = document.getElementById('gorraRosa');


//Variable para imagenes de sudaderas,gorras y tazas
let sudadera_negra = document.getElementById('sudadera_negra');
let sudadera_blanca = document.getElementById('sudadera_blanca');
let sudadera_gris = document.getElementById('sudadera_gris');

let taza = document.getElementById('taza');

let gorra_negra  = document.getElementById('gorra_negra');
let gorra_blanca  = document.getElementById('gorra_blanca');
let gorra_azul  = document.getElementById('gorra_azul');
let gorra_roja  = document.getElementById('gorra_roja');
let gorra_rosa  = document.getElementById('gorra_rosa');
let gorra_naranja = document.getElementById('gorra_naranja');



//Opcion color playera
let playeraNegra = document.getElementById('playeraNegra');
let playeraBlanca = document.getElementById('playeraBlanca');
let playeraGris = document.getElementById('playeraGris');








let comprar = document.getElementById('Comprar');

/*  
    Desactivamos  las imagenes de sudaderas, gorras y tazas, dejamos a las playeras de caballero
    De manera predeterminado, solo dejamos playera negra caballero
*/

playera_negro_caballero.style.display = "block";
playera_blanca_caballero.style.display = "none";
playera_gris_caballero.style.display = "none";

playera_negro_dama.style.display = "none";
playera_blanca_dama.style.display = "none";
playera_gris_dama.style.display = "none";

playera_negro_kids.style.display = "none";
playera_blanca_kids.style.display = "none";
playera_gris_kids.style.display = "none";

sudadera_negra.style.display = "none";
sudadera_blanca.style.display = "none";
sudadera_gris.style.display = "none";

taza.style.display = "none";

gorra_negra.style.display = "none";
gorra_blanca.style.display = "none";
gorra_azul.style.display = "none";
gorra_roja.style.display = "none";
gorra_rosa.style.display = "none";
gorra_naranja.style.display = "none";



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

    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "block";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";

}

// Activamos formulario sudadera
Sudadera.onclick = activarSudadera;
function activarSudadera(evento){
    playera_formulario.style.display = "none";
    gorra_formulario.style.display = "none";
    taza_formulario.style.display = "none";
    sudadera_formulario.style.display = "block";

    // Activamos imagenes sudadera
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "block";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}

//Activamos formulario Tazas
Taza.onclick = activarTazas;
function activarTazas(evento){
    playera_formulario.style.display = "none";
    gorra_formulario.style.display = "none";
    sudadera_formulario.style.display = "none";
    taza_formulario.style.display = "block";

    //Activamos imagenes Tazas
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "block";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";

}

//Activamos formulario gorras
Gorra.onclick = activarGorras;
function activarGorras(evento){
    playera_formulario.style.display = "none";
    taza_formulario.style.display = "none";
    sudadera_formulario.style.display = "none";
    gorra_formulario.style.display = "block";

    //Activamos imagenes gorras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "block";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";

}


//activar playeras hombre
optionsPlayeraCaballero.onclick = activarPlayeraHombre;
function activarPlayeraHombre(evento){
    valor = 'Caballero';
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "block";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}

//activar playeras damas
optionsPlayeraDama.onclick = activarPlayeraDama;
function activarPlayeraDama(evento){

    valor = 'Dama';
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "block";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}
//activar playeras kids
optionsPlayeraNino.onclick = activarPlayeraNino;
function activarPlayeraNino(evento){
    valor = 'Kids';

    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "block";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}


//Activamos color de playeras...
playeraNegra.onclick = activarPlayeraNegra;
function activarPlayeraNegra(evento){
    if(valor === 'Caballero'){
        playera_negro_caballero.style.display = "block";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }else if(valor == 'Dama'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "block";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }else if(valor === 'Kids'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "block";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }
}

playeraBlanca.onclick = activarPlayeraBlanca;
function activarPlayeraBlanca(evento){
    if(valor === 'Caballero'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "block";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }else if(valor == 'Dama'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "block";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }else if(valor === 'Kids'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "block";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }
}


playeraGris.onclick = activarPlayeraGris;
function activarPlayeraGris(evento){
    if(valor === 'Caballero'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "block";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }else if(valor == 'Dama'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "block";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "none";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }else if(valor === 'Kids'){
        playera_negro_caballero.style.display = "none";
        playera_blanca_caballero.style.display = "none";
        playera_gris_caballero.style.display = "none";
    
        playera_negro_dama.style.display = "none";
        playera_blanca_dama.style.display = "none";
        playera_gris_dama.style.display = "none";
    
        playera_negro_kids.style.display = "none";
        playera_blanca_kids.style.display = "none";
        playera_gris_kids.style.display = "block";
    
        sudadera_negra.style.display = "none";
        sudadera_blanca.style.display = "none";
        sudadera_gris.style.display = "none";
    
        taza.style.display = "none";
    
        gorra_negra.style.display = "none";
        gorra_blanca.style.display = "none";
        gorra_azul.style.display = "none";
        gorra_roja.style.display = "none";
        gorra_rosa.style.display = "none";
        gorra_naranja.style.display = "none";
    }
}


//Activamos color de sudaderas..
color_sudadera_negro.onclick = activarSudaderaNegro;
function activarSudaderaNegro(evento){
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "block";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}

color_sudadera_blanco.onclick = activarSudaderaBlanca;
function activarSudaderaBlanca(evento){
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "block";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}


color_sudadera_gris.onclick = activarSudaderaGris;
function activarSudaderaGris(evento){

    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "block";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}


//Cambiar color de las Gorras
color_gorra_negro.onclick = activarGorraNegro;
function  activarGorraNegro(evento){
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "block";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}

color_gorra_blanco.onclick = activarGorraBlanca;
function  activarGorraBlanca(evento){
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "block";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}

color_gorra_azul.onclick = activarGorraAzul;
function  activarGorraAzul(evento){
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "block";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}


color_gorra_roja.onclick = activarGorraRoja;
function  activarGorraRoja(evento){
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "block";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "none";
}

color_gorra_rosa.onclick = activarGorraRosa;
function  activarGorraRosa(evento){
    //Activamos imagenes Playeras
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "block";
    gorra_naranja.style.display = "none";
}


color_gorra_naranja.onclick = activarGorraNaranja;
function  activarGorraNaranja(evento){
    playera_negro_caballero.style.display = "none";
    playera_blanca_caballero.style.display = "none";
    playera_gris_caballero.style.display = "none";

    playera_negro_dama.style.display = "none";
    playera_blanca_dama.style.display = "none";
    playera_gris_dama.style.display = "none";

    playera_negro_kids.style.display = "none";
    playera_blanca_kids.style.display = "none";
    playera_gris_kids.style.display = "none";

    sudadera_negra.style.display = "none";
    sudadera_blanca.style.display = "none";
    sudadera_gris.style.display = "none";

    taza.style.display = "none";

    gorra_negra.style.display = "none";
    gorra_blanca.style.display = "none";
    gorra_azul.style.display = "none";
    gorra_roja.style.display = "none";
    gorra_rosa.style.display = "none";
    gorra_naranja.style.display = "block";
}
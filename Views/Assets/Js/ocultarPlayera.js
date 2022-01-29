var black_shirt_man = document.getElementById('black_shirt_man');
var white_shirt_man = document.getElementById('white_shirt_man');
var gray_shirt_man = document.getElementById('gray_shirt_man');

var black_shirt_woman = document.getElementById('black_shirt_woman');
var white_shirt_woman = document.getElementById('white_shirt_woman');
var gray_shirt_woman = document.getElementById('gray_shirt_woman');

var black_shirt_kids = document.getElementById('black_shirt_kids');
var white_shirt_kids = document.getElementById('white_shirt_kids');
var gray_shirt_kids = document.getElementById('gray_shirt_kids');

var producto = 'man';

black_shirt_man.style.display = 'block';
white_shirt_man.style.display = 'none';
gray_shirt_man.style.display = 'none';

black_shirt_woman.style.display = 'none';
white_shirt_woman.style.display = 'none';
gray_shirt_woman.style.display = 'none';

black_shirt_kids.style.display = 'none';
white_shirt_kids.style.display = 'none';
gray_shirt_kids.style.display = 'none';




function shirt_man(){
    black_shirt_man.style.display = 'block';
    white_shirt_man.style.display = 'none';
    gray_shirt_man.style.display = 'none';

    black_shirt_woman.style.display = 'none';
    white_shirt_woman.style.display = 'none';
    gray_shirt_woman.style.display = 'none';

    black_shirt_kids.style.display = 'none';
    white_shirt_kids.style.display = 'none';
    gray_shirt_kids.style.display = 'none';

    producto = 'man';
}

function shirt_woman(){
    black_shirt_man.style.display = 'none';
    white_shirt_man.style.display = 'none';
    gray_shirt_man.style.display = 'none';

    black_shirt_woman.style.display = 'block';
    white_shirt_woman.style.display = 'none';
    gray_shirt_woman.style.display = 'none';

    black_shirt_kids.style.display = 'none';
    white_shirt_kids.style.display = 'none';
    gray_shirt_kids.style.display = 'none';

    producto = 'woman';
}

function shirt_kids(){
    black_shirt_man.style.display = 'none';
    white_shirt_man.style.display = 'none';
    gray_shirt_man.style.display = 'none';

    black_shirt_woman.style.display = 'none';
    white_shirt_woman.style.display = 'none';
    gray_shirt_woman.style.display = 'none';

    black_shirt_kids.style.display = 'block';
    white_shirt_kids.style.display = 'none';
    gray_shirt_kids.style.display = 'none';

    producto = 'kids';
}


function black_shirt(){

    if(producto == 'man'){
        black_shirt_man.style.display = 'block';
        white_shirt_man.style.display = 'none';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'none';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';

    }else if(producto == 'woman'){
        black_shirt_man.style.display = 'none';
        white_shirt_man.style.display = 'none';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'block';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'none';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';

    }else if(producto == 'kids'){
        black_shirt_man.style.display = 'block';
        white_shirt_man.style.display = 'none';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'block';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';
    }
}

function white_shirt(){

    if(producto == 'man'){
        black_shirt_man.style.display = 'none';
        white_shirt_man.style.display = 'block';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'none';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';

    }else if(producto == 'woman'){
        black_shirt_man.style.display = 'none';
        white_shirt_man.style.display = 'none';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'block';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'none';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';

    }else if(producto == 'kids'){
        black_shirt_man.style.display = 'none';
        white_shirt_man.style.display = 'block';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'block';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';
    }
}

function gray_shirt(){

    if(producto == 'man'){
        black_shirt_man.style.display = 'none';
        white_shirt_man.style.display = 'none';
        gray_shirt_man.style.display = 'block';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'none';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';

    }else if(producto == 'woman'){
        black_shirt_man.style.display = 'none';
        white_shirt_man.style.display = 'none';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'block';
    
        black_shirt_kids.style.display = 'none';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'none';

    }else if(producto == 'kids'){
        black_shirt_man.style.display = 'none';
        white_shirt_man.style.display = 'none';
        gray_shirt_man.style.display = 'none';
    
        black_shirt_woman.style.display = 'none';
        white_shirt_woman.style.display = 'none';
        gray_shirt_woman.style.display = 'none';
    
        black_shirt_kids.style.display = 'none';
        white_shirt_kids.style.display = 'none';
        gray_shirt_kids.style.display = 'block';
    }
}
var black_sweater = document.getElementById('black_sweater');
var white_sweater = document.getElementById('white_sweater');
var gray_sweater = document.getElementById('gray_sweater');

black_sweater.style.display = 'block';
white_sweater.style.display = 'none';
gray_sweater.style.display = 'none';


function black_shirt(){
    black_sweater.style.display = 'block';
    white_sweater.style.display = 'none';
    gray_sweater.style.display = 'none';
}

function white_shirt(){
    black_sweater.style.display = 'none';
    white_sweater.style.display = 'block';
    gray_sweater.style.display = 'none';
}

function gray_shirt(){
    black_sweater.style.display = 'none';
    white_sweater.style.display = 'none';
    gray_sweater.style.display = 'block';
}
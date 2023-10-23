let a = document.getElementById("um");
let b = document.getElementById("dois");
let c = document.getElementById("tres");
let d = document.getElementById("quatro");
let e = document.getElementById("cinco");
let bot = document.getElementById("sol");

function color() {
    a.style.backgroundColor = randonColor();
    b.style.backgroundColor = randonColor();
    c.style.backgroundColor = randonColor();
    d.style.backgroundColor = randonColor();
    e.style.backgroundColor = randonColor();
}

function randonColor() {
    return '#' + Math.floor(Math.random() * 16777215).toString(16);
}

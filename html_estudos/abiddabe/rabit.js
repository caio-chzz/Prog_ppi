let enois = document.getElementById("sol");
let a = document.getElementById("vara");
let b = document.getElementById("mito");

function parens() {

    let inicial = parseInt(a.value);
    let i = inicial;
    let final = parseInt(b.value);
    while (i < final) {
        if (i % 2 == 0) {
            console.log(i);
        }
        i++;

    }
}
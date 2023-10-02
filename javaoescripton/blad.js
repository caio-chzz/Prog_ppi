//console.log(window.location);
//window.alert("pitonblad, suka in de meno")
//window.document

let p= document.getElementById("panto");
let l= document.getElementById("maisuka");

function f1(){
    
    p.innerHTML="pitonblad, suka in de meno";
}

function f2(){
    
    l.innerHTML="pitonblad, suka in de meno";
}

function nome(){
   let nn = prompt
    ("What is your name?");

    console.log(nn);
    p.innerHTML=nn;
}

nome();
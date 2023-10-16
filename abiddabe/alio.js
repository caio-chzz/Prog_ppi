var listaParagrafos = [];
let camp = document.getElementById("bah");
let boten = document.getElementById("lua");
let lista = document.getElementById("listap");

function adiciona() {
    listaParagrafos.push(camp.value);
    let paragrafo = document.createElement("p");
    paragrafo.innerHTML = camp.value;
    lista.appendChild(paragrafo);
    

   }

   function exclui(){
   

   }
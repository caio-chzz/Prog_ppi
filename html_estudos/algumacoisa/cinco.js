let enois = document.getElementById("sol");
let a = document.getElementById("aa");
let b = document.getElementById("bb");
let botom = document.getElementById("res");
function sigma(){
  
    let result = parseFloat(a.value) + parseFloat(b.value);

    botom.innerHTML = result;
    
}   
let x = document.getElementById("aa");
let botom = document.getElementById("sol");
let buton = document.getElementById("lua");
function fatorial(){
    let n = parseInt(x.value);
    let cnt = 1;
    for(let i = 1; i <= n; i++){
        cnt = cnt * i;
    }
    alert(cnt);
}
function fibonacci(){
    let n = parseInt(x.value);
    let a = 0;
    let b = 1;
    let c = 1;
    for(let i = 1; i <= n; i++){
        c = a + b;
        a = b;
        b = c;
    }
    alert(c);

}
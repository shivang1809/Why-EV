let counts=setInterval(updated);
let upto=0;
function updated(){
    var count= document.getElementById("noEv");
    count.innerHTML=upto++;
    if(upto===6750000)
    {
        clearInterval(counts);
    }
}
function stopCount(){
    document.getElementById("noEv").style.display = "none";
    document.getElementById("EvNo").style.display = "block";
}
function calculate(){
    var km = document.getElementById('km').value;
    var carbon = km * 150.4;
    document.getElementById("daily").innerHTML = carbon / 1000;
    document.getElementById("monthly").innerHTML = carbon * 30 / 1000;
    document.getElementById("yearly").innerHTML = carbon * 365 / 1000;
}
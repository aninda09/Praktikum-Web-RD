function series(){
    let pilihseries = document.getElementById("pilihseries");    
    let val = pilihseries.options[pilihseries.selectedIndex].value;
    let desc = document.getElementById("desc");

    if (val == "EIP"){
        desc.innerText =  "mercyy!!";}
    else if (val == "FTB"){
        desc.innerText =  "u are so lucky!";}
    else{
        desc.innerText =  "be happy!";
    }
};

function theme(){
    let pilihtema = document.getElementById('pilihtema');
    let val = pilihtema.options[pilihtema.selectedIndex].value;
    let element = document.body;

    if(val == 'light'){
        element.classList.remove("dark");}
    else{
        element.classList.toggle("dark");       
    }
};

function count(){
    let num = document.getElementById('numbers').value;    
    let hasilfaktor = document.getElementById('hasil');    
    let jml = num;
    for(i=jml-1;i>1;i--){
       jml*=i;
    };
    
    hasil.innerText = "The result of the factorial calculation " + num + " is " + jml;
};
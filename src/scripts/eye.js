
var state = false;

function toggle(){
    if(state){
        document.getElementById("senha").setAttribute("type", "password"); 
        document.getElementById("eye").style.color = ' #2a2299bb';
        state = false;
    }
    else{
        document.getElementById("senha").setAttribute("type", "text"); 
        document.getElementById("eye").style.color = ' #031f74e9';
        state = true;
        }    
}


function toggle2(){
    if(state){
        document.getElementById("Csenha").setAttribute("type", "password"); 
        document.getElementById("eye2").style.color = ' #2a2299bb';
        state = false;
    }
    else{
        document.getElementById("Csenha").setAttribute("type", "text");
        document.getElementById("eye2").style.color = ' #031f74e9'; 
        state = true;
        }    
}
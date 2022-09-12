document.addEventListener("DOMContentLoaded",function(){
    document.getElementById("register").addEventListener('submit', registerValidation);
});

function registerValidation(intento_registro){

    intento_registro.preventDefault();

    var name = document.getElementById('name').value;
    if(name.length == 0){
        alert('Por favor, Introduce un nombre.');
        return;
    }
    var address = document.getElementById('address').value;
    if(address == 0){
        alert('Por favor, Introduce una dirección.');
        return;
    }
    var description = document.getElementById('description').value;
    if(description.length == 0){
        alert('Por favor, Introduce una descricción.');
        return;
    }
    var telf = document.getElementById('telf').value;
    if(telf.length == 0){
        alert('Por favor, Introduce un número de teléfono.');
        return;
    }
    if(isNaN(telf)){
        alert('Por favor, introduce valor numérico como número de teléfono. (Sin espacios)');
    }
    var type = document.getElementById('type').value;
    if(type != "P" && type != "N"){
        alert('El tipo de usuario es un valor no Admitido (Solo N o P).');
    }
}



function registerValidation(){

    var name = document.getElementById('name').value;
    if(name.length == 0){
        alert('Por favor, Introduce un nombre.');
        return false;
    }
    var address = document.getElementById('address').value;
    if(address == 0){
        alert('Por favor, Introduce una dirección.');
        return false;
    }
    var description = document.getElementById('description').value;
    if(description.length == 0){
        alert('Por favor, Introduce una descricción.');
        return false;
    }
    var telf = document.getElementById('telf').value;
    if(telf.length == 0){
        alert('Por favor, Introduce un número de teléfono.');
        return false;
    }
    
    if(isNaN(telf)){
        alert('Por favor, introduce valor numérico como número de teléfono. (Sin espacios)');
        return false;
    }
    var type = document.getElementById('type').value;
    if(type != "P" && type != "N"){
        alert('El tipo de usuario es un valor no Admitido (Solo N o P).');
        return false;
    }
    return true;
}



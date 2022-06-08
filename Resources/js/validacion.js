function confirmacion(e){
if(confirm("Esta seguro de elliminar el registro")){
    return true;
}else{
    e.preventDefault();
}

}


let linkdelete = document.querySelectorAll("#eliminar");

for(var i = 0; 1< linkdelete.length; i++){
    linkdelete[i].addEventListener('click',confirmacion);
}
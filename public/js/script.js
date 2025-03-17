// obtener los elementos
// const = declaracion de una constante
// btnOpenModal elemento proviene de html
// getElementById es un elemento que se asocia con DOM valor que se retorna
//btnOpenModal opcion ya sea de guardar o buscar interactuar con el boton
const btnOpenModal = document.getElementById('btnOpenModal');
const btnCloseModal = document.getElementById('btnCloseModal');
const Modal = document.getElementById('termsModal');
const btnAcceptModal = document.getElementById('btnAcceptModal');


// abrir el modal cuando el usuario haga clic
btnOpenModal.onclick= function(){
    Modal.classList.add('show');
}

// cerrar el modal cuando el usuario haga clic
btnCloseModal.onclick= function(){
    Modal.classList.remove('show');
}
// aceptar el modal cuando el usuario haga clic
btnAcceptModal.onclick= function(){
    Modal.classList.remove('show');
}

// cerrar ventana
window.onclick= function(event){
    if (event.target === modal){
        modal.classList.remove('show')
    }
}
const formularios_ajax= document.querySelectorAll(".FormularioAjax");
function enviar_formulario_Ajax(e){
    e.preventDefault();

    let enviar=confirm("Quieres enviar el formulario");

    if(enviar ==true){

        let data = new FormData(this);
        let method=this.getAttribute("method");
        let action=this.getAttribute("action");

        let encabezados= new Headers();

        //array que trae las configuracion de el envio de datos con la api fecha de JS
        let config= {
            method: method,
            headers: encabezados,
            mode: 'cors',
            cahe: 'no-cache',
            body: data
        };

        // API FETCH
        fetch(action,config)
            .then (respuesta => respuesta.tex() )
            .then(respuesta =>{
                let contenedor = document.querySelector(".form-rest");
                contenedor.innerHTML = respuesta;
            });
    }
}

formularios_ajax.forEach(formularios =>{
    formularios.addEventListener("submit",enviar_formulario_Ajax);
});
// https://www.youtube.com/watch?v=AOUtpOXicak
// 🐬 CURSO de PHP y MySQL desde CERO - 16 Creando VISTAS del MODULO de USUARIOS 
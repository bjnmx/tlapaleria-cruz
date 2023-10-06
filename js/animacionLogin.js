// cambiar color azul txt inpu
function changeTextColor(type) {
    const input = document.getElementById(type);
    if (input.value !== '') {
        input.setAttribute('data-typed', 'yes');
    } else {
        input.setAttribute('data-typed', 'no');
    }
}
// cargando en btn de enviar
function showLoading() {
    document.querySelector('.custom-btn').innerHTML = 'Cargando...';
    setTimeout(function() {
        document.querySelector('.custom-btn').innerHTML = 'Login';
    }, 150);
}

// console.log("La función showLoading() ha sido llamada.");
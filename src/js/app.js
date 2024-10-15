document.addEventListener('click', function() {
    var audio = document.getElementById("audio");
    audio.play().catch(function(error) {
        console.log("Error al reproducir el audio:", error);
    });
});

const formulario = document.getElementById('formulario');
formulario.addEventListener('submit',function(e){
    e.preventDefault();
    registrarAsistente();
})

async function registrarAsistente() {
    const url = '/api/registrar';
    const nombre_invitado = document.getElementById('invitado').value;
    const departe_de = document.getElementById('departe_de').value;
    const felicitacion = document.getElementById('felicitacion').value;
    const numero_invitados = document.getElementById('numero_invitados').value;

    // Instanciar correctamente el FormData
    const data = new FormData();

    data.append('nombre_invitado', nombre_invitado);
    data.append('departe_de', departe_de);
    data.append('felicitacion', felicitacion);
    data.append('numero_invitados', numero_invitados);

    fetch(url, {
        method: 'POST',
        body: data // Enviar el FormData directamente
    })
    .then(response => {
        if (response.ok) { // Verificar si la respuesta fue exitosa
            return response.json(); // Convertir la respuesta a JSON
        }
        throw new Error('Error en la respuesta del servidor');
    })
    .then(data => {
        if (data.success == 200) {
            Swal.fire({
                title: "¡Listo!",
                text: data.message,
                icon: "success"
              }).then(()=>{
                window.location.reload();
              });
        }
    })
    .catch(error => {
        console.error('Existe un error:', error);
    });
}

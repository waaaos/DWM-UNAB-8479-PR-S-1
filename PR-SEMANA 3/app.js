document.addEventListener('DOMContentLoaded', () => {
    const btnEnviar = document.getElementById('btnEnviar');
    //bloquear continuacion si no se han rellenado los campos al enviar mensaje
    if (btnEnviar) {
        btnEnviar.addEventListener('click', () => {
            const email = document.getElementById('email').value;
            const comentario = document.getElementById('comment').value;

            if (email.trim() === '' || comentario.trim() === '') {
                alert('Por favor, rellena todos los campos para continuar.');
            } else {
                alert('Mensaje enviado!');
            }
        });
    }
    //captura informacion de logeo en la consola (solo email)
    const loginForm = document.querySelector('#myModal form');
    if (loginForm) {
        loginForm.addEventListener('submit', (evento) => {
            evento.preventDefault();
            
            const email = document.getElementById('email').value;
            console.log(`Intento de inicio de sesion por: ${email}`);
        });
    }
    //resalta la pag q selecciono
    const enlaces = document.querySelectorAll('.nav-link');
    const urlActual = window.location.pathname.split('/').pop() || 'index.php';

    enlaces.forEach(enlace => {
        if (enlace.getAttribute('href') === urlActual) {
            enlace.classList.add('text-info');
            enlace.style.fontWeight = 'bold';
        }
    });
    //saludo dependiendo de la hr
    const contenedores = document.querySelectorAll('.bg-secondary');
    contenedores.forEach(contenedor => {
        if (contenedor.textContent.includes('Hola!')) {
            const hora = new Date().getHours();
            let saludo = 'Buenas noches!';
            
            if (hora >= 6 && hora < 12) saludo = 'Buenos días!';
            else if (hora >= 12 && hora < 20) saludo = 'Buenas tardes!';

            contenedor.innerHTML = contenedor.innerHTML.replace('Hola!', saludo);
        }
    });
});


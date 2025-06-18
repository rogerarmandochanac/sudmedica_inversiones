document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.card__button');//Seleccionamos los botones
    const popup = document.getElementById('popup');
    const closePopup = document.querySelector('.popup__close');

    // Elementos dinámicos del popup
    const popupImg = document.getElementById('popup-img');
    const popupName = document.getElementById('popup-name');
    const popupOcupation = document.getElementById('popup-ocupation');
    const popupDescription = document.getElementById('popup-description');

    // Abrir el popup al hacer clic en cualquier botón
    buttons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault(); // Evita el comportamiento predeterminado del enlace

            // Obtener los datos del botón clicado
            const imgSrc = button.closest('.card').querySelector('.card__img').getAttribute('src');
            const name = button.getAttribute('data-name');
            const ocupation = button.getAttribute('data-ocupation');
            const description = button.getAttribute('data-description');

            // Actualizar el contenido del popup
            popupImg.setAttribute('src', imgSrc);
            popupName.textContent = name;
            popupOcupation.textContent = ocupation;
            popupDescription.innerHTML = description; // Usa innerHTML para procesar etiquetas HTML como <br>

            // Mostrar el popup
            popup.style.display = 'flex';
        });
    });

    // Cerrar el popup al hacer clic en el botón de cierre
    closePopup.addEventListener('click', function () {
        popup.style.display = 'none'; // Oculta el popup
    });

    // Cerrar el popup al hacer clic fuera del contenido
    popup.addEventListener('click', function (e) {
        if (e.target === popup) {
            popup.style.display = 'none'; // Oculta el popup
        }
    });
});
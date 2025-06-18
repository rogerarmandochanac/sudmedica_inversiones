 document.addEventListener("DOMContentLoaded", (event) => {
    const form = document.getElementById("contact-form");
    const loadingPopup = document.getElementById("loading-popup");

    if (form) {
        form.addEventListener("submit", (event) => {
            // Muestra el popup de carga
            loadingPopup.classList.add("show");
        });
    }

    const popup = document.getElementById("custom-popup");
    const closeButton = document.getElementById("popup-close");

    if (popup) {
        // Mostrar el popup automáticamente si existe
        popup.classList.add("show");

        // Cerrar el popup al hacer clic en el botón
        closeButton.addEventListener("click", () => {
            popup.classList.remove("show");
        });
    }
});
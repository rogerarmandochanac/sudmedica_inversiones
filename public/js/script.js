document.addEventListener('DOMContentLoaded', () => {
    
    const languageLabel = document.getElementById('language-label');

    languageLabel.addEventListener('click', () => {
        const lang = languageLabel.textContent;
        if (lang=="Español") {
            languageLabel.textContent = "English"
        }
        else{
            languageLabel.textContent = "Español"
        }
    });
    
    var val = document.querySelector("#country");
    val.addEventListener("change", ()=>{
        var input_telefono = document.querySelector("#phone");
        input_telefono.value = val.value + " " 
        input_telefono.focus();
    })
});
document.addEventListener("DOMContentLoaded", () => {
  const button = document.getElementById("submit-btn");
  const waitImg = document.getElementById("wait-img"); 

  if (button) {
      button.addEventListener("click", () => {
          // Disabilita il bottone
          button.disabled = true;
          button.style.display = "none";  

          // Mostra accanto l'immagine wait.png
          waitImg.style.display = "inline-block";  

          // Submetti il form manualmente se il bottone è stato disabilitato
          const form = button.closest('form'); // Trova il form contenente il bottone
          if (form) {
              form.submit(); // Invia il form
          }
      });
  }
});

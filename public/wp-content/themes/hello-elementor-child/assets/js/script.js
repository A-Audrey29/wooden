// ajustement de l'ancrage sur la page d'accueil

jQuery(document).ready(function($) {
    // Lorsque le document est prêt
    if (window.location.hash) {
        // Si l'URL contient un ancrage
        var hash = window.location.hash;
        if ($(hash).length) {
            // Si l'élément avec cet ID existe
            $('html, body').animate({
                // Faites défiler jusqu'à l'élément, ajustez le défilement si nécessaire
                scrollTop: $(hash).offset().top - 100 // Ajustez le "-100" en fonction de votre en-tête
            }, 800, function() {
                // Ajustez l'URL après le défilement
                window.location.hash = hash;
            });
        }
    }
});

// console.log('hello');


// ouverture de la popup contact au bouton CTA

// $(document).ready(function() {
//     $('.elementor-button').on('click', function(event) {
//         event.preventDefault();
//         $('.wpr-template-popup').show();
//     });
// });


     // FORMULAIRE DE CONTACT


     let modal = document.getElementById('myPopup')

     if (modal) {
       let btn = document.querySelectorAll('.popup-js')
     
       btn.forEach(function(item) {
         item.addEventListener('click', () => {
           modal.style.display = 'block'
           let input = document.querySelector('#wpforms id="894"')
           let referenceText = document.querySelector('#reference').textContent
           input.value = referenceText
         })
       })
     }
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
   if (event.target == modal) {
       modal.style.display = 'none'
   }
}




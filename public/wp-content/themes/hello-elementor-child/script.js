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

console.log('hello');


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


// lightbox de la galerie 

document.addEventListener('DOMContentLoaded', function() {
  // Sélectionnez toutes les images que vous voulez déclencher la lightbox
  const images = document.querySelectorAll('.lightbox-trigger');
  
  // Sélectionnez les éléments de la lightbox
  const lightbox = document.querySelector('.lightbox');
  const lightboxImage = document.querySelector('.lightbox img');
  const closeButton = document.querySelector('.lightbox-close');
  const nextButton = document.querySelector('.lightbox-next');
  const prevButton = document.querySelector('.lightbox-prev');
  
  let currentImageIndex = 0;

  // Ajoutez un écouteur d'événements à chaque image
  images.forEach((image, index) => {
      image.addEventListener('click', () => {
          // Affichez la lightbox lorsque l'image est cliquée
          lightbox.classList.add('active');
          
          // Changez l'image de la lightbox pour correspondre à l'image cliquée
          lightboxImage.src = image.src;
          
          // Enregistrez l'index de l'image cliquée
          currentImageIndex = index;
      });
  });

  // Ajoutez des écouteurs d'événements aux boutons de la lightbox
  if (closeButton) {
    closeButton.addEventListener('click', () => {
        // Fermez la lightbox lorsque le bouton de fermeture est cliqué
        lightbox.classList.remove('active');
    });
  }

  if (nextButton) {
    nextButton.addEventListener('click', () => {
        // Changez l'image de la lightbox pour l'image suivante lorsque le bouton suivant est cliqué
        currentImageIndex = (currentImageIndex + 1) % images.length;
        lightboxImage.src = images[currentImageIndex].src;
    });
  }

  if (prevButton) {
    prevButton.addEventListener('click', () => {
        // Changez l'image de la lightbox pour l'image précédente lorsque le bouton précédent est cliqué
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        lightboxImage.src = images[currentImageIndex].src;
    });
  }
});



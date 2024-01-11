document.addEventListener('DOMContentLoaded', function () {
    // Créer l'élément lightbox
    var lightbox = document.createElement('div');
    lightbox.id = 'lightbox';
    lightbox.className = 'lightbox';
    document.body.appendChild(lightbox);

    // Ajouter une image à la lightbox
    var lightboxImage = document.createElement('img');
    lightbox.appendChild(lightboxImage);

    // Afficher la lightbox avec l'image cliquée
    document.querySelectorAll('.lightbox-trigger').forEach(function (image) {
        image.addEventListener('click', function () {
            lightboxImage.src = this.src;
            lightbox.style.display = 'flex';
        });
    });

    // Cacher la lightbox au clic
    lightbox.addEventListener('click', function () {
        this.style.display = 'none';
    });
});
/*
function cambiarImagen(src) {
    var imagenGrande = document.getElementById('imagenGrandeContenido');
    var imagenGrandeContainer = document.getElementById('imagenGrande');
    var imagenPequena = document.getElementById('imagenPequena');
    
    imagenGrande.src = src;
    imagenGrandeContainer.style.display = 'block';
    imagenPequena.style.display = 'none';
  }
  
  function restaurarImagen() {
    var imagenGrandeContainer = document.getElementById('imagenGrande');
    var imagenPequena = document.getElementById('imagenPequena');
    
    imagenGrandeContainer.style.display = 'none';
    imagenPequena.style.display = 'block';
  }
  */

  function showImage(image){
    const enLargedImage = document.getElementById("enLarged-image");
    enLargedImage.src = image.src;

    const enLargedContainer = document.getElementById("enLarged-container");
    enLargedContainer.style.display = "block";
  }

  document.addEventListener("DOMContentLoaded", function (){
    const enLargedContainer = document.getElementById("enLarged-container");
  });


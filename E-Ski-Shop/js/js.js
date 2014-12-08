var form = document.getElementById('formID'); // form has to have ID: <form id="formID">
form.noValidate = true;
form.addEventListener('submit', function(event) { // listen for form submitting
        if (!event.target.checkValidity()) {
            event.preventDefault(); // dismiss the default functionality
            document.getElementById('errorMessage').style.display = 'block';
        }
    }, false);

function adpaterALaTailleDeLaFenetre(){
  				var largeur = document.documentElement.clientWidth,
  				hauteur = document.documentElement.clientHeight;
   
  				var source = document.getElementById('map'); // récupère l'id source
  				source.style.height = hauteur+'px'; // applique la hauteur de la page
  				source.style.width = largeur+'px'; // la largeur
			}
 
			// Une fonction de compatibilité pour gérer les évènements
			function addEvent(element, type, listener){
  				if(element.addEventListener){
  			  		element.addEventListener(type, listener, false);
  				}else if(element.attachEvent){
    				element.attachEvent("on"+type, listener);
  				}	
			}
 
			// On exécute la fonction une première fois au chargement de la page
			addEvent(window, "load", adpaterALaTailleDeLaFenetre);
			// Puis à chaque fois que la fenêtre est redimensionnée
			addEvent(window, "resize", adpaterALaTailleDeLaFenetre);
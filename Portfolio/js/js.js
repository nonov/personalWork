(function($){
   	
	$(document).ready(function() {
		$("#enterBtn").click(function(event){
        	event.preventDefault();
        	linkLocation = this.href;
       		$("body").fadeOut(1000, redirectPage);     
    	});
    	
    $(document).ready(function() {
		$("h3").click(function(){
        	$("aside").css("visibility","visible", function() {
        		('aside').fadeIn(1000);
        	});     
    	});
    });
    	       
    function redirectPage() {
        window.location = linkLocation;
    }
		// Initialise le site par rapport au navigateur  
		$(function() {
			adjustSize();
		});
			
		// Fonction appelé lorsque le navigateur change de résolution
		$(window).smartresize(function(){
		adjustSize();
		});
			
		/* FONCTION QUI AJUSTE LE SITE AU NAVIGATEUR */
		function adjustSize() {
			// Initialisation des variables pour la taille de la fenêtre
			var divWidth, divHeight;
			if (self.innerWidth != undefined) {
				divWidth = self.innerWidth;
				divHeight = self.innerHeight;		
			} 
			else {
				divWidth = document.documentElement.clientWidth;
				divHeight = document.documentElement.clientHeight;
			}
			
			// Mise-à-jour des divs principaux (avec la bonne taille tailles)	
			$("#center").css({
				"width": divWidth,
				"height": divHeight - 120 +'px'
			});	
			
			$("#slideshows").css({
				"height": divHeight - 120 + 'px'
			});
			
			$("#slideshows div").css({
				"width": divWidth / 3 - 50 + 'px',
				"height": divHeight / 2
			});
			
			$("#slideshow1").css({
				"width": divWidth,
				"height": divHeight / 1.5
			});
			
			$("#slideshow2").css({
				"width": divWidth,
				"height": divHeight / 1.5
			});
			
			$("#slideshow3").css({
				"width": divWidth,
				"height": divHeight / 1.5
			});
					
			$("#milieu img").css({
				"width": divWidth / 10,
				"height": divHeight /6
			});	
			
			$("#gauche img").css({
				"width": divWidth / 30,
				"height": divHeight /15
			});	
			
			$("#gauche").css({
				"width": divWidth / 3.1,
				"height": divHeight /2
			});	
			
			$("#droite").css({
				"width": divWidth / 3.1,
				"height": divHeight /2
			});
			
			$("#milieu").css({
				"width": divWidth / 3.1,
				"height": divHeight /2
			});
			
			$("nav li").css({
				"width": divWidth /10
			});		
		}
	});
})(jQuery);

(function($,sr){
  var debounce = function (func, threshold, execAsap) {
      var timeout;
 
      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null; 
          };
 
          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);
 
          timeout = setTimeout(delayed, threshold || 100); 
      };
  }
	// smartresize 
	jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
 
})(jQuery,'smartresize');
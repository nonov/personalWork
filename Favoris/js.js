(function($){

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
		$("aside img").css({
			"width": divWidth*0.1,
			"height": divHeight*0.2
		});	
		
		$("div").css({
			"width": divWidth*0.1,
			"height": divHeight*0.2
		});		
					
	}
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
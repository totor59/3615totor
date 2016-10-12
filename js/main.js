// Dots Loader ......

var div = window.document.getElementById('ID');
var maxDots = 100;
var dots = 0;

var dotLoader = function() {
	// Teste le nombre de pts, si supérieur ou égale à $maxDots, arrête la fonction
	if (dots >= maxDots) {
		return;
	}
	// function recursive qui ajoute les dots un par un
	function addDot() {
		div.innerHTML = div.innerHTML + '. ';
		//on incrémente dots
		dots++;
		//la fonction s'appelle elle même
		dotLoader();
	}
	// on definit le delay, dotLoader() va s'executer, pré-charger addDot() et l'éxecuter 1.5 sec après
	timer = setTimeout(addDot, 100);

};

dotLoader();

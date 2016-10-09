// Dots Loader ...............

var myVar;
var div = document.getElementById('ID');
function myFunction() {
	    myVar = setInterval(alertFunc, 1500);
	      function alertFunc() {
		             div.innerHTML = div.innerHTML + '. ';
	      }
}
myFunction()

var myText = document.getElementById("slideTexto");

var textArray = ["Black friday - 50% de descuento","Ofertas en zapatillas Nike","Con el codigo CST1234 obten un 10% de descuento"];
var textIndex = 0;

function changeImage() {
	
	myText.innerHTML=textArray[textIndex];
	textIndex++;
	if (textIndex >= textArray.length) {
		textIndex = 0;
	}
}

// setInterval is also in milliseconds
var intervalHandle = setInterval(changeImage,3000);

myText.onclick =  function() {
	clearInterval(intervalHandle);

};
// Fuente: https://es.wikipedia.org/wiki/Cifrado_C%C3%A9sar

SubAlgoritmo Cesar(letra)
	Segun (letra) Hacer
		"a": Escribir Sin Saltar "d";
		"b": Escribir Sin Saltar "e";
		"c": Escribir Sin Saltar "f";
		"d": Escribir Sin Saltar "g";
		"e": Escribir Sin Saltar "h";
		"f": Escribir Sin Saltar "i";
		"g": Escribir Sin Saltar "j";
		"h": Escribir Sin Saltar "k";
		"i": Escribir Sin Saltar "l";
		"j": Escribir Sin Saltar "m";
		"k": Escribir Sin Saltar "n";
		"l": Escribir Sin Saltar "ñ";
		"m": Escribir Sin Saltar "o";
		"n": Escribir Sin Saltar "p";
		"ñ": Escribir Sin Saltar "q";
		"o": Escribir Sin Saltar "r";
		"p": Escribir Sin Saltar "s";
		"q": Escribir Sin Saltar "t";
		"r": Escribir Sin Saltar "u";
		"s": Escribir Sin Saltar "v";
		"t": Escribir Sin Saltar "w";
		"u": Escribir Sin Saltar "x";
		"v": Escribir Sin Saltar "y";
		"w": Escribir Sin Saltar "z";
		"x": Escribir Sin Saltar "a";
		"y": Escribir Sin Saltar "b";
		"z": Escribir Sin Saltar "c";
		" ": Escribir Sin Saltar " "; // el espacio no cambia es fijo
		De Otro Modo:
			Escribir "Letra no reconocida";
	FinSegun
FinSubAlgoritmo


Algoritmo cifrado_cesar
	Escribir "Escribe un texto";
	Leer text;
	text = Minusculas(text);
	
	Escribir "== Texto Cifrado ";
	Para i<-1 hasta Longitud(text) con paso 1 Hacer
		letra = Subcadena(text,i,i)
		Cesar(letra)
	FinPara
	Escribir ""; // salto de linea
FinAlgoritmo

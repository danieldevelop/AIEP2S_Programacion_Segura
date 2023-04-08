<?php
// Por que tipo de metodo se esta enviando la información
$method = $_SERVER['REQUEST_METHOD'];

// Solo si se manda via post
if ($method == 'POST') {
    // Jalamos todo el contenido
    $contenido = file_get_contents('php://input');
    // Decodificamos via json
    $json = json_decode($contenido);
    // Guardamos el resultado en la variable text
    $text = $json->queryResult->parameters->echoText;
    // Por cada entrada diferente contestamos una cosa diferente
    switch ($text) {
        case 'hola':
            $speech = "Hola, gracias por estar aquí";
            break;

        case 'adios':
            $speech = "Te vas tan pronto!! a penas nos empezabamos a conocer";
            break;

        case 'interesante esto de los webservices':
            $speech = "Si es genial para comunicarnos entre sistemas";
            break;

        default:
            $speech = "Ese silencio incomodo, di algo no muerdo (muy fuerte).";
            break;
    }

    $response = new \stdClass();
    $response->speech = $speech;
    $response->displayText = $speech;
    $response->source = "webhook";
    echo json_encode($response);
} else {
    echo "No, no, no el metodo $method no es permitido (por ahi no)";
}
?>
<?php

//Ejecutar el servidor con el siguiente comando (Ubicarse en la ruta del archivo) >php -S localhost:8000 <nombre del archivo>

//CREACION DE UN ARREGLO DE TIPOS DE RECURSOS
$allowedResourceTypes = [
    'books',
    'authors',
    'genres',
];

//Validamos que el recurso este disponible
$resourceType = $_GET['resource_type'];
//IN_ARRAY VERIFICAR QUE ESTE EN UN ARREGLO
if(!in_array($resourceType,$allowedResourceTypes)){
    die;
}

//Defini los resusos
$books = [
    1 => [
        'titulo' => 'Lo que el viento se llevo',
        'id_autor' => 1,
        'id_genero' => 1,
    ],

    2 => [
        'titulo' => 'La Iliada',
        'id_autor' => 2,
        'id_genero' => 2,
    ],

    3 => [
        'titulo' => 'La Odisea',
        'id_autor' => 3,
        'id_genero' => 3,
    ],

];

header('Content-Type: application/json');

//Levantamos el id del recurso buscado
$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';

//Generamos la respuesta asumiendo que el pedido es correcto
switch(strtoupper($_SERVER['REQUEST_METHOD'])){
    case 'GET':
        if( empty($resourceId)){
            echo json_encode($books);
        }else{
            if(array_key_exists($resourceId, $books)){
                echo json_encode($books[$resourceId]);
            }
        }
        break;
    case 'POST':
        # code...
        break;
    case 'PUT':
        # code...
        break;
    case 'DELETE':
        # code...
        break;
}


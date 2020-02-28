<?php

//CREACION DE UN ARREGLO DE TIPOS DE RECURSOS
$allowedResourceTypes = [
    'books',
    'authors',
    'genres',
];

//CREACION DE UNA VARIABLE PARA CONSULTAR DESDE LA URL
$resourceType = $_GET['resource_type'];
//IN_ARRAY VERIFICAR QUE ESTE EN UN ARREGLO
if(!in_array($resourceType,$allowedResourceTypes)){
    die;
}

switch(strtoupper($_SERVER['REQUEST_METHOD'])){
    case 'GET':
        # code...
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
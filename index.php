<?php
// Incluir el archivo que contiene la clase Router
require_once 'router/Router.class.php';
// Crear una instancia del Router
$carpetaPrincipal = "/paginaSims";
$url = $_SERVER['REQUEST_URI'];
$urlPartes = explode($carpetaPrincipal.'/',$url);
array_shift($urlPartes);

$cuerpo = new Router("views/index.html",[
    //array asociados de datos
]);

$view = new Router("views/app.html",[
    "titulo" => "hola perdo",
    "child" => $cuerpo
]);
echo $view;

// $router = new Router();
// $carpetaPrincipal = "/paginaSims";
// // Agregar rutas y controladores
// $router->agregaRuta($carpetaPrincipal.'/', function () {
//     //header('Location: views/index.html');
//     //exit(); // Asegúrate de salir después de la redirección para evitar ejecución adicional del código
//     echo "Página inicio";
//     echo '<a href="/contacto">ir a contacto</a>';
// });
// $router->agregaRuta($carpetaPrincipal.'/contacto', function () {
//     echo "Página de contacto";
// });
// // // Obtener la ruta actual (por ejemplo, a través de $_SERVER['REQUEST_URI'])
// $URL = $_SERVER['REQUEST_URI'];
// // // Manejar la solicitud
// $router->manejoRuta($URL);
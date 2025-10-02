<?php

use app\controllers\HomeController;
use lib\Route;

Route::get("/", function(){
    return "RUTA RAIZ";
});

Route::get("/Home", [HomeController::class, "index"]);

Route::dispatch();

?>
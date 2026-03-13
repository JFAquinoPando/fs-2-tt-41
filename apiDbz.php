<?php

    header("content-type: application/json");
    
    const ARCHIVO_JSON = "api_dragonball.json";
    
    if (file_exists(ARCHIVO_JSON)) {
       echo file_get_contents(ARCHIVO_JSON);
       die();
    }

    $datosTexto = 
        file_get_contents("https://dragonball-api.com/api/characters");
    //echo $datosTexto;

    $objeto = json_decode($datosTexto, true);
    //var_dump($objeto);

    $personajes = [];
    // en la clave "items" me da como valor un listado
    foreach ($objeto["items"] as $clave => $personaje) {
        $personajes[] = [
            "nombre"    => $personaje["name"],
            "raza"      => $personaje["race"],
            "sexo"      => $personaje["gender"] == "Male" ? "Hombre" : "Mujer",
            "imagen"    => $personaje["image"] 
        ];
    }

    $datos =  json_encode($personajes);

    $archivo = fopen("api_dragonball.json", "w");
    fwrite($archivo, $datos);
    fclose($archivo);

    echo $datos;

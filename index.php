<?php session_start(); ?>
<?php

// Session globalus kintamasis
//laikina atminties vieta serveryje, kurioje kaip ir cookie. galime pasideti informacija iki
//serveryje nustatyto laiko
//kol sesija sunaikinama - DAZNIAUSIAI
//*iki narsykles isjungimo (nes yra automatinis sesijos atkurimas)
//Duomenys yra serveryje. Duomenu nepamatysime. Galima laikyti konfidencialius duomenis: vartotojo vardas, teises.
//Sesijos pradzia - sesijos cookio sukurimas. session_start()

//sesija AUTOMATISKAI startuoja priskyrinejant kintamaji.
$_SESSION["vardas"] = "Destytojas";

echo $_SESSION["vardas"];
// session_destroy(); - sunaikina sesija
?>
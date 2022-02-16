<?php

    //viene linkata e resa utilizzabile all'interno dell'index.php la classe Item
    require_once __DIR__ . '/classes/item.php';


    //Crea un nuovo oggetto in qui vengono passati i 3 parametri richiesti dal constructor di Item.php
    $dish = new Item('dish', 'glass', 1000);

    // prova di stampa del nuovo oggetto creato in cui viene richiamato nome, tipo e prezzo
    echo $dish->getName();
    echo $dish->getPrice();


?>
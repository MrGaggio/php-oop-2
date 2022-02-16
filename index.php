<?php

    //viene linkata e resa utilizzabile all'interno dell'index.php la classe ShopOnline
    require_once __DIR__ . '/classes/item.php';


    //Crea un nuovo oggetto in qui vengono passati i 3 parametri richiesti dal constructor di Item.php
    $newItem = new Item('dish', 'glass', '0.99');

?>
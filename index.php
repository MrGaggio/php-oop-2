<?php

    //viene linkata e resa utilizzabile all'interno dell'index.php la classe Item
    require_once __DIR__ . '/classes/item.php';


    
        //dentro al try ci si mette la classe con il link dell'eccezione nel catch e in questo modo stampa l'errore con echo
    try {
        //Crea un nuovo oggetto in qui vengono passati i 3 parametri richiesti dal constructor di Item.php    
        $dish = new Item('dish', 'glass', 200);

        } catch (\Exception $error) {
            echo $error->getMessage();
        }
?>
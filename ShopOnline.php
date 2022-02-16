<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); -->



<?php 

    //nuova classse, gli elementi sono protetti quuindi vanno richiamati con i get e set
    class Shop
    {   
        protected $name;
        protected $items;
        protected $users;
        protected $prices;


        //costruttore con 3 elementi passati
        public function __construct($name, $items, $prices) {
            $this->name = $name;
            $this->itemes = $items;
            $this->prices = $prices;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of items
         */ 
        public function getItems()
        {
                return $this->items;
        }

        /**
         * Set the value of items
         *
         * @return  self
         */ 
        public function setItems($items)
        {
                $this->items = $items;

                return $this;
        }

        /**
         * Get the value of users
         */ 
        public function getUsers()
        {
                return $this->users;
        }

        /**
         * Set the value of users
         *
         * @return  self
         */ 
        public function setUsers($users)
        {
                $this->users = $users;

                return $this;
        }

        /**
         * Get the value of prices
         */ 
        public function getPrices()
        {
                return $this->prices;
        }

        /**
         * Set the value of prices
         *
         * @return  self
         */ 
        public function setPrices($prices)
        {
                $this->prices = $prices;

                return $this;
        }
    }



?>
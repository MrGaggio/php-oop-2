<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); -->



<?php 

    //nuova classse, gli elementi sono protetti quuindi vanno richiamati con i get e set
    class Item
    {   
        protected $name;
        protected $user;
        protected $price;


        //costruttore con 3 elementi passati
        public function __construct($name, $kind, $price) {
            $this->name = $name;
            $this->kind = $kind;
            $this->price = $price;
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
         * Get the value of kind
         */ 
        public function getKind()
        {
                return $this->kind;
        }

        /**
         * Set the value of kind
         *
         * @return  self
         */ 
        public function setKind($kind)
        {
                $this->kind = $kind;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of prices
         *
         * @return  self
         */ 
        //il prezzo deve essere compreso tra £ 0,99 e £ 99,99
        public function setPrice($price)
        {
            if($price < 0.99 ){
                throw new Exception('il prezzo deve essere compreso tra £ 0,99 e £ 99,99');    
            }
            $this->prices = $price;
            return $this;        
        }
    }



?>
<?php 

    //nuova classse, gli elementi sono protetti quuindi vanno richiamati con i get e set
    class Item
    {   
        protected $name;
        protected $kind;
        protected $price;
        protected $user;


        //costruttore con 3 elementi passati
        public function __construct($name, $kind, $price) {
            $this->name = $name;
            $this->kind = $kind;
            //gli passiamo direttamente il valore della funzione che è stata modificata con un intervallo di prezzo che va da 1 a 99
            $this->setPrice($price);
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
        //il prezzo deve essere compreso tra £ 1 e £ 99
        public function setPrice($price)
        {
            if($price < 1 && $price > 99){
                throw new Exception('il prezzo deve essere compreso tra £ 1 e £ 99');   
            }
            $this->price = $price;
            return $this;        
        }
    }



?>
<?php

require_once __DIR__ . '/Shop.php';

//nuova classse, gli elementi sono protetti quuindi vanno richiamati con i get e set
class Item
{
        protected $name;
        protected $kind;
        protected $price;
        protected $user;
        protected $shop;


        //costruttore con 3 elementi passati
        public function __construct($name, $price, $shop)
        {

                try {
                        $this->name = $name;
                        //gli passiamo direttamente il valore della funzione che è stata modificata con un intervallo di prezzo che va da 1 a 99
                        $this->setPrice($price);
                        $this->setShop($shop);
                } catch (\TypeError $error
                ) {
                        throw new Exception($error->getMessage());
                }
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
                if ($price > 99 || $price < 1) {
                        throw new Exception('il prezzo deve essere compreso tra £ 1 e £ 99');
                }
                $this->price = $price;
                return $this;
        }

        /**
         * Get the value of shop
         */
        public function getShop()
        {
                return $this->shop;
        }

        /**
         * Set the value of shop
         *
         * @return  self
         */
        public function setShop(Shop $shop)
        {
                $this->shop = $shop;

                return $this;
        }
}

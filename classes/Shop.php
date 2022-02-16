<?php

    class Shop
    {
        protected $name;
        protected $website;
        protected $email;

        public function __construct($name, $website, $email){
            $this->name = $name;
            $this->website = $website;
            $this->email = $email;
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
         * Get the value of website
         */ 
        public function getWebsite()
        {
                return $this->website;
        }

        /**
         * Set the value of website
         *
         * @return  self
         */ 
        public function setWebsite($website)
        {
                $this->website = $website;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
    }
?>
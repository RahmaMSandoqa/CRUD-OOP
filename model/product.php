<?php

    class Products{
        private $con;
        private $table_name = "products";


        // object properties

        public $id;
        public $name;
        public $price;
        public $description;
        public $category_id;
        public $timestamp;

        public function __construct($connection)
        {
            $this->con = $connection;
        }



    }



?>
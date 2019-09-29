<?php
  class Categories
  {
      private $connection;
      private $table_name = "categories";
      public $id;
      public $name;

      /**
       * constructor to connect with databases
       */
      public function __construct($con)
      {
          $this->connection = $con;
      }

      /**
       *function to get categories from databases
       */
      public function get_categories()
      {
          $query = "SELECT id,name FROM $this->table_name ";
          $statement = $this->connection->prepare($query);
          $statement->execute();
          $categories = $statement->fetchall(PDO::FETCH_ASSOC);
          return $categories;
      }
  }
?>
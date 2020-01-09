<?php
class Database {

    //host server.
   private $host = "sye698.poseidon.salford.ac.uk";
    //username for db.
   private $username = "sye698";
   //database name.
   private $database = "sye698_thinklabusers";
   //pass for database.
   private $password = "Onebomb1";
   //protected variable.
   protected $db;

   public function __construct(){
     //try catch to catch any connection error.
    try {

        /*
            * Create database connection
        */

        $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);

    } catch(PDOException $e){
        echo "Connection Problem: ". $e->getMessage();

    }

   }

}


 ?>

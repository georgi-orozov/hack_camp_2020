<?php
require_once ('Database.php');
require_once ('buildings.php');
require_once ('demographics.php');
require_once ('utilities.php');
require_once ('infrastructure.php');

class dataSet
{
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function search($search_for, $search_in){
        if ($search_in==1 ) {
            $sqlQuery = "SELECT * FROM buildings WHERE b_name LIKE '%$search_for%' OR b_type LIKE '%$search_for%' OR b_value LIKE '%$search_for%' OR max_occupants LIKE '%$search_for%' OR size LIKE '%$search_for%' OR postcode LIKE '%$search_for%' OR city LIKE '%$search_for% '";
            $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
            $statement->execute();

            $searchSet = [];

            while ($row = $statement->fetch()) {
                $searchSet[] = new buildings($row);
            }
            $this->_dbHandle = null; //close the DB connection

            return $searchSet;
        }
        if ($search_in==2 ) {
            $sqlQuery = "SELECT * FROM demographics  WHERE id LIKE '%$search_for%' OR postcode LIKE '%$search_for%' OR totalHealthNeeds LIKE '%$search_for%' OR totalMobilityNeeds LIKE '%$search_for%' OR totalHealthNeeds LIKE '%$search_for%' OR totalElderly LIKE '%$search_for%' OR totalPopulation LIKE '%$search_for%'";
            $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
            $statement->execute();

            $searchSet = [];

            while ($row = $statement->fetch()) {
                $searchSet[] = new demographics($row);
            }
            $this->_dbHandle = null; //close the DB connection

            return $searchSet;
        }
        if ($search_in==3 ) {
            $sqlQuery = "SELECT * FROM utilities  WHERE id LIKE '%$search_for%' OR postcode LIKE '%$search_for%' OR u_name LIKE '%$search_for%' OR u_type LIKE '%$search_for%' OR classification LIKE '%$search_for%' OR dependencies LIKE '%$search_for%'";
            $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
            $statement->execute();

            $searchSet = [];

            while ($row = $statement->fetch()) {
                $searchSet[] = new utilities($row);
            }
            $this->_dbHandle = null; //close the DB connection

            return $searchSet;
        }
        if ($search_in==4 ) {
            $sqlQuery = "SELECT * FROM infrastructures  WHERE id LIKE '%$search_for%' OR i_name LIKE '%$search_for%' OR i_type LIKE '%$search_for%' OR classification LIKE '%$search_for%' OR areacodes LIKE '%$search_for%'";
            $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
            $statement->execute();

            $searchSet = [];

            while ($row = $statement->fetch()) {
                $searchSet[] = new infrastructure($row);
            }
            $this->_dbHandle = null; //close the DB connection
            return $searchSet;
        }
//        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
//
////       $statement->bindParam(':search_for', $search_for);
//
//        $statement->execute();
//
//        $searchSet = [];
//
//        while ($row = $statement->fetch()) {
//            $searchSet[] = new data($row);
//        }
//        $this->_dbHandle = null; //close the DB connection
//
//        return $searchSet;




    }
}
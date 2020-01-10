<?php
require_once ('Database.php');
require_once ('User.php');

class UserFunctions {
    protected $_dbHandle, $_dbInstance;

    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function register($userDetails) {
        $sqlQuery = "INSERT INTO members (fullName, email, password) 
                     VALUES (:fullName, :email, :password)";

        $statement = $this->_dbHandle->prepare($sqlQuery); // prepare a PDO statement
        $statement->bindParam(':email', $userDetails['email']);
        $statement->bindParam(':fullName', $userDetails['fullName']);
        $statement->bindParam(':password', $userDetails['password']);
        $result = $statement->execute(); // execute the PDO statement
        $this->_dbHandle = null; //close DB connection
        return $result;
    }

    public function login($email, $password)
    {
        $sqlQuery = 'SELECT password FROM members WHERE email=:email';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindParam(':email', $email);
        $statement->execute();
        $row = $statement->fetch();
        $hashed = $row['password'];
        $this->_dbHandle = null; //close DB connection
        if (password_verify($password, $hashed)) {
            return true;
        }
        else {
            return false;
        }
    }
}
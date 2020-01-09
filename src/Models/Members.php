<?php


require_once ('Database.php');


class Members
{
    protected $_dbHandle, $_dbInstance;

    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    public function userLogin($username, $password)
    {
        $query = "SELECT username, user_pass FROM users WHERE username='$username' AND user_pass='$password'";
        $statement = $this->_dbHandle->prepare($query);
        $statement->execute();
        $row = $statement->fetch();
        if ($row) {
            $_SESSION['login'] = $row[0];
            echo "You are logged in";
        } else {
            echo "login failed";
        }
    }

}
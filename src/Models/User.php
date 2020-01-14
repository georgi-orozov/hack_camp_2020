<?php


class User {
    private $_fullName, $_email, $_password, $_loggedIn;

    public function __construct()
    {
        session_start();
        if (isset($_SESSION['email'])) {
            $this->_email = $_SESSION['email'];
            $this->_loggedIn = true;

        } else {
            $this->_loggedIn = false;
        }
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->_fullName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @return mixed
     */
    public function isLoggedIn()
    {
        return $this->_loggedIn;
    }

}
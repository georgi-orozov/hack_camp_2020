<?php

class Users {

    protected $user_ID, $user_Name, $user_Pass, $user_Email, $user_Date, $user_Level;

    public function __construct($dbRow) {
        $this->user_ID = $dbRow['user_id'];
        $this->user_Name = $dbRow['user_name'];
        $this->user_Pass = $dbRow['user_pass'];
        $this->user_Email = $dbRow['user_email'];
        $this->user_Date = $dbRow['user_date'];
        $this->user_Level = $dbRow['user_level'];

    }

    public function getUserID() {
        return $this->user_ID;
    }

    public function getUserName() {
        return $this->user_Name;
    }

    public function getUserPass() {
        return $this->user_Pass;
    }

    public function getUserEmail() {
        return $this->user_Email;
    }

    public function getDateJoined() {
        return $this->user_Date;
    }
    public function getUserLevel() {
        return $this->user_Level;
    }

}
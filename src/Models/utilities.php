<?php


class utilities
{
    private $id, $postcode, $classification, $u_name, $u_type, $dependencies;

    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->postcode = $row['postcode'];
        $this->classification = $row['classification'];
        $this->u_name = $row['u_name'];
        $this->u_type = $row['u_type'];
        $this->dependencies = $row['dependencies'];

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @return mixed
     */
    public function getUName()
    {
        return $this->u_name;
    }

    /**
     * @return mixed
     */
    public function getUType()
    {
        return $this->u_type;
    }

    /**
     * @return mixed
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }
}
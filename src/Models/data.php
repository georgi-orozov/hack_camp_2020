<?php


class data
{
    private $id, $i_name, $i_type,$classification,$areacodes;
    private $u_name, $u_type, $dependencies;

    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->b_name = $row['b_name'];
        $this->b_type = $row['b_type'];
        $this->postcode = $row['postcode'];
        $this->city = $row['city'];
        $this->size = $row['size'];
        $this->max_occupants = $row['max_occupants'];
        $this->b_value = $row['b_value'];
        $this->i_name = $row['i_name'];
        $this->i_type = $row['i_type'];
        $this->classification = $row['classification'];
        $this->totalHealthNeeds = $row['totalHealthNeeds'];
        $this->totalMobilityNeeds = $row['totalMobilityNeeds'];
        $this->totalElderly = $row['totalElderly'];
        $this->totalPopulation = $row['totalPopulation'];
        $this->u_name = $row['u_name'];
        $this->u_type = $row['u_type'];
        $this->dependencies = $row['dependencies'];

    }

    /**
     * @return mixed
     */
    public function getBName()
    {
        return $this->b_name;
    }

    /**
     * @return mixed
     */
    public function getBType()
    {
        return $this->b_type;
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getMaxOccupants()
    {
        return $this->max_occupants;
    }

    /**
     * @return mixed
     */
    public function getBValue()
    {
        return $this->b_value;
    }

    /**
     * @return mixed
     */
    public function getIName()
    {
        return $this->i_name;
    }

    /**
     * @return mixed
     */
    public function getIType()
    {
        return $this->i_type;
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
    public function getTotalHealthNeeds()
    {
        return $this->totalHealthNeeds;
    }

    /**
     * @return mixed
     */
    public function getTotalMobilityNeeds()
    {
        return $this->totalMobilityNeeds;
    }

    /**
     * @return mixed
     */
    public function getTotalElderly()
    {
        return $this->totalElderly;
    }

    /**
     * @return mixed
     */
    public function getTotalPopulation()
    {
        return $this->totalPopulation;
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}
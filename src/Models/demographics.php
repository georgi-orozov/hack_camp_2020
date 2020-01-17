<?php


class demographics
{
    private $id, $postcode, $totalHealthNeeds, $totalMobilityNeeds, $totalElderly, $totalPopulation;

    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->postcode = $row['postcode'];
        $this->totalHealthNeeds = $row['totalHealthNeeds'];
        $this->totalMobilityNeeds = $row['totalMobilityNeeds'];
        $this->totalElderly = $row['totalElderly'];
        $this->totalPopulation = $row['totalPopulation'];

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
}
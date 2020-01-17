<?php


class buildings
{
    private $id, $b_name, $b_type, $postcode, $city, $size, $max_occupants, $b_value;


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
}
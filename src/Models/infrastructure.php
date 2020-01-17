<?php


class infrastructure
{
    private $id, $i_name, $i_type,$classification, $areacodes;

    public function __construct($row)
    {
        $this->id = $row['id'];
        $this->i_name = $row['i_name'];
        $this->i_type = $row['i_type'];
        $this->classification = $row['classification'];
        $this->areacodes = $row['areacodes'];

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
    public function getAreacodes()
    {
        return $this->areacodes;
    }
}
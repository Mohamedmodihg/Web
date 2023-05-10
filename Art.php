<?php
class  Art {
    private $name ;
    private $artist;
    private $createdYear;
    public function __construct ($name,$artist,$createdYear)
    {
        $this->name = $name;
        $this->artist = $artist;
        $this->createdYear = $createdYear;
    }
    public function getName()
    {
       return $this->name;
    }
    public function setName($value)
    {
       $this->$value;
    }
    public function getArtist()
    {
        return $this->artist;
    }
}
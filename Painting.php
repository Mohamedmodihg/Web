<?php
include 'Art.php';
class painting extends Art  {
    private $medium;
    public function __construct($name,$artist,$createdYear,$medium)
    {
      $this->medium = $medium;
      parent::__construct($name,$artist,$createdYear);
    }
    public function getMedium()
    {
    return $this->medium;
    }
    public function setMedium($value)
    {
     $this->medium = $value;
    }
}
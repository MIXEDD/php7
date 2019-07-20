<?php
namespace App\Format;

// abstract classes can't be instantiated
// used only for extending
// abstract methods can't have body and can be declared within a abstract class only

abstract class BaseFormat {
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public abstract function convert();
    public function __toString()
    {
        return $this->convert();
    }
}
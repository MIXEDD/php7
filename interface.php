<?php
namespace App\Format;
// interface
// interface has no body in it's methods
// more than one interface can be implemented in a class
// used for specific classes implemenation where it is only needed (prevents you from adding it to the base class and having it everywhere)
interface FromStringInterface {
    public function convertFromString($string);
}

// class
class JSON extends BaseFormat 
        implements FromStringInterface,
        NamedFormatInterface {
    public function convert()
    {
        return json_encode($this->data);
    }
    public function convertFromString($string)
    {
        return json_decode($string, true);
    }
    public function getName() 
    {
        return 'JSON';
    }
}
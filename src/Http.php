<?php
namespace sf;

class Http
{
    public $className;

    public function __construct()
    {
        $this->className = __CLASS__;
    }

    public function htest(){
    	echo "htest";
    }
}
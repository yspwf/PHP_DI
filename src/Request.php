<?php 
namespace sf;

class Request
{
    public $className;

    public function __construct(Http $http)
    {
        $this->className = __CLASS__;

        $this->className = $this->className . '  ->  ' . $http->className;
    }

    public function retest($b){
    	echo "retest";
    	echo 'params:' . $b;
    }
}


?>
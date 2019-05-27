<?php 
namespace sf\Controller;
use sf\Request;

class IndexController
{

    /**
     * 注入一个 Request 类
     * IndexController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        echo 'i am is  ' . __CLASS__ . '   i require' . $request->className.PHP_EOL;


        //$request->retest();
    }


    public function demo($b){
    	echo $b;
    	echo "deo";
    }	
}


?>
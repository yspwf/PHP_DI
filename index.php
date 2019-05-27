<?php 



 require'vendor/autoload.php';
 
 // $test = new sf\App();
 // $test->test();

  use sf\App;
header("Content-type: text/html; charset=utf-8");
  // new 一个 ReflectionClass 类， 放入需要实例的类名
  $ctl = App::make(\sf\Controller\IndexController::class);
  //var_dump($ctl);
  $ctl->demo('00000000000');
  
  //$ctl = App::make(\sf\Request::class);
  //$ctl->retest('888888');
?>
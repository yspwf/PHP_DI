# PHP_DI
通过PHP反射实现一个容器，了解原理


composer dump-auotload  执行自动加载

  ```
 //example
 //实列化类
  $ctl = App::make(\sf\Controller\IndexController::class);
  //执行方法
  $ctl->demo('00000000000');
  
  
  $ctl = App::make(\sf\Request::class);
  $ctl->retest('888888');
  ```

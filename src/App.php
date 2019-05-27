<?php 
namespace sf;
use ReflectionClass;
class App{


    //主要函数实现
static function make($class){
      $reflect  = new ReflectionClass($class);
      
      //判断能否实列化
      if(!$reflect->isInstantiable()){
              throw new Exception('不能实列化！');
      }
      //判断有没有__constructor魔法函数
      $constructor = $reflect->getConstructor();
      if(is_null($constructor)){
            return new $class();
      }  
       
    //获取参数
    $params = $constructor->getParameters();
    //处理依赖关系
    $dependentis = [];
    foreach($params as $key => $param){
            //获取类
           $className = $param->getClass();
           //获取参数
           $paramName = $param->getName();
           //var_dump($paramName);
          if(is_null($className)){
                // if($className->isDefaultValueAvailable()){
                //         $dependentis[] = $$className->getDefaultValue();
                // }else{
                //         throw new Exception($paramName . ' 参数没有默认值');
                //   }
                 if (!$param->isDefaultValueAvailable())
                    {
                        throw new \Exception($paramName . ' 参数没有默认值');
                    }

                    $dependentis[] = $param->getDefaultValue();
          }else{
                  $dependentis[] = self::make($className->getName());
            }
      }
      // 获得构造函数的数组之后就可以实例化了
      return $reflect->newInstanceArgs($dependentis);
} 
    

   

}





?>

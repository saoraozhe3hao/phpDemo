<?php
   //禁止显示PHP警告提示
   error_reporting(0);
   //内置函数，定义常量
   define("PI", 3.14);
   $world = null;
   $world = "hello,world";
   //字符串连接
   echo $world.PI;   
   //输出数据类型和值
   var_dump($world);
   //内存占用
   echo memory_get_usage();
   //几个系统常量,当前文件名和行数
   echo __FILE__.__LINE__;
   //根据输入的标识符返回自定义常量的值
   echo constant("PI");
   //根据输入的标识符返回是否存在该自定义常量
   var_dump(defined("PI"));
   //获取引用
   $other = &$world;
   //@ 规避错误信息
   @var_dump($other);
   //置成null
   unset($world); 
   
   
   
   //数组，可以指定键值
   $a = array(1,2=>2,'k'=>3);
   //判断变量是否存在
   if(isset($a)){
      //打印数组
      print_r($a);       
   }
   //foreach循环，for循环也可以
   foreach($a as $k=>$v){
       echo '<br>第'.$k.'值是：'.$v;
   }
   
   
   //自定义函数，内置函数有数学、时间、数组、字符串等操作
   function sum($a, $b) {
       echo $a;
       return $a + $b;
   }
   $functionName = "sum";
   //通过变量值来调用函数，当然也可以sum(1,2)
   $functionName(1,2);
   
   
   //定义一个类
   class Car {
       //如果是private或protected，则不被访问得到
       public  $name = '汽车';
       private static $color = "red";
       //默认为public
       function getName() {
           return $this->name;
       }
       //静态方法可直接通过类名来调用
       static function echoColor(){
           //静态方法只能访问到静态属性
           echo self::$color;
       }
       //构造函数
       function __construct() {
           print "构造函数被调用 \n";
       }
       //析构函数
       function __destruct() {
           print "析构函数被调用 \n";
       }
   }
   $className = "Car";   
   //通过变量值来获取类，当然也可以 new Car()
   $car = new $className();
   //访问对象成员
   $car->name = '奥迪A6'; 
   echo $car->getName();  
   Car::echoColor();
   var_dump($car);
   unset($car);
   
   //继承
   class Truck extends Car {
       public function rename(){
           //调用父类成员
           $this->name=parent::getName().'2';
       }
   }
   $truck = new Truck();
   $truck->rename();
   echo $truck->getName();
   //对象的成员可以动态添加，修改，删除
   $truck->long = 3;
   echo $truck->long;
   
   
   //读取cookie
   var_dump($_COOKIE['TestCookie']);
   //设置cookie，指定字段名，值，有效期，有效路径，域
   setcookie("TestCookie", 1, time()+3600, "/");
   //删除cookie
   setcookie('test', '', time()-1);
   
   
   //开启session
   session_start();
   //设置session字段
   $_SESSION["time"] = time();
   //删除session字段
   unset($_SESSION['test']);
   //清除session_id以外的字段
   //session_destroy();
   var_dump($_SESSION);
   
   
   
   //连接mysql数据库
   $link = mysql_connect('localhost', 'root', '') or die('数据库连接失败');
   //选择数据库实例
   mysql_select_db('test');
   //设置编码
   mysql_query("set names 'utf8'");
   //查询
   $result = mysql_query('select * from user limit 1',$link);
   //插入
   //mysql_query("insert into user(name) values('hong')",$link);
   //转为数组
   $row = mysql_fetch_array($result);
   print_r($row);
   //关闭连接
   mysql_close($link);
?>
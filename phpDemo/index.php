<?php
   //��ֹ��ʾPHP������ʾ
   error_reporting(0);
   //���ú��������峣��
   define("PI", 3.14);
   $world = null;
   $world = "hello,world";
   //�ַ�������
   echo $world.PI;   
   //����������ͺ�ֵ
   var_dump($world);
   //�ڴ�ռ��
   echo memory_get_usage();
   //����ϵͳ����,��ǰ�ļ���������
   echo __FILE__.__LINE__;
   //��������ı�ʶ�������Զ��峣����ֵ
   echo constant("PI");
   //��������ı�ʶ�������Ƿ���ڸ��Զ��峣��
   var_dump(defined("PI"));
   //��ȡ����
   $other = &$world;
   //@ ��ܴ�����Ϣ
   @var_dump($other);
   //�ó�null
   unset($world); 
   
   
   
   //���飬����ָ����ֵ
   $a = array(1,2=>2,'k'=>3);
   //�жϱ����Ƿ����
   if(isset($a)){
      //��ӡ����
      print_r($a);       
   }
   //foreachѭ����forѭ��Ҳ����
   foreach($a as $k=>$v){
       echo '<br>��'.$k.'ֵ�ǣ�'.$v;
   }
   
   
   //�Զ��庯�������ú�������ѧ��ʱ�䡢���顢�ַ����Ȳ���
   function sum($a, $b) {
       echo $a;
       return $a + $b;
   }
   $functionName = "sum";
   //ͨ������ֵ�����ú�������ȻҲ����sum(1,2)
   $functionName(1,2);
   
   
   //����һ����
   class Car {
       //�����private��protected���򲻱����ʵõ�
       public  $name = '����';
       private static $color = "red";
       //Ĭ��Ϊpublic
       function getName() {
           return $this->name;
       }
       //��̬������ֱ��ͨ������������
       static function echoColor(){
           //��̬����ֻ�ܷ��ʵ���̬����
           echo self::$color;
       }
       //���캯��
       function __construct() {
           print "���캯�������� \n";
       }
       //��������
       function __destruct() {
           print "�������������� \n";
       }
   }
   $className = "Car";   
   //ͨ������ֵ����ȡ�࣬��ȻҲ���� new Car()
   $car = new $className();
   //���ʶ����Ա
   $car->name = '�µ�A6'; 
   echo $car->getName();  
   Car::echoColor();
   var_dump($car);
   unset($car);
   
   //�̳�
   class Truck extends Car {
       public function rename(){
           //���ø����Ա
           $this->name=parent::getName().'2';
       }
   }
   $truck = new Truck();
   $truck->rename();
   echo $truck->getName();
   //����ĳ�Ա���Զ�̬��ӣ��޸ģ�ɾ��
   $truck->long = 3;
   echo $truck->long;
   
   
   //��ȡcookie
   var_dump($_COOKIE['TestCookie']);
   //����cookie��ָ���ֶ�����ֵ����Ч�ڣ���Ч·������
   setcookie("TestCookie", 1, time()+3600, "/");
   //ɾ��cookie
   setcookie('test', '', time()-1);
   
   
   //����session
   session_start();
   //����session�ֶ�
   $_SESSION["time"] = time();
   //ɾ��session�ֶ�
   unset($_SESSION['test']);
   //���session_id������ֶ�
   //session_destroy();
   var_dump($_SESSION);
   
   
   
   //����mysql���ݿ�
   $link = mysql_connect('localhost', 'root', '') or die('���ݿ�����ʧ��');
   //ѡ�����ݿ�ʵ��
   mysql_select_db('test');
   //���ñ���
   mysql_query("set names 'utf8'");
   //��ѯ
   $result = mysql_query('select * from user limit 1',$link);
   //����
   //mysql_query("insert into user(name) values('hong')",$link);
   //תΪ����
   $row = mysql_fetch_array($result);
   print_r($row);
   //�ر�����
   mysql_close($link);
?>
<?php
   //引入其他文件，只是引入，没有其他行为
   //与require的区别是，如果已被引入过，则不再引入
   require_once 'MyCtrl.class.php';
   require_once 'MyModel.class.php';
   require_once 'MyView.class.php';
   //require与include的区别，当要加载的文件不存在时候, include会给一个warning警告, 然后继续运行
   //而require则会给一个fatal error, 直接结束脚本
   
   
   
   //当前文件是MVC模式的入口文件，引入控制器、模型、视图
   //引入的所有类相当于在这个文件里定义的，因此类之间可以互相调用
   $myCtrl = new MyCtrl();
   $myCtrl->show();
?>
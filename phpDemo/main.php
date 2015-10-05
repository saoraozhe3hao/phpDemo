<?php
   //引入其他文件，只是引入，没有其他行为
   //与require的区别是，如果已被引入过，则不再引入
   require_once 'MyCtrl.class.php';
   require_once 'MyModel.class.php';
   require_once 'MyView.class.php';
   
   //当前文件是MVC模式的入口文件，引入控制器、模型、视图
   //引入的所有类相当于在这个文件里定义的，因此类之间可以互相调用
   $myCtrl = new MyCtrl();
   $myCtrl->show();
?>
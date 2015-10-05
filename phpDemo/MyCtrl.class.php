<?php
   //控制器复制调用模型 和 选择视图，并把数据传给视图
   class MyCtrl{
       function show(){
           $myModel = new MyModel();
           $data = $myModel->get();
           $myView = new MyView();
           $myView->display($data);
       }
   }
?>
<?php
   //���������Ƶ���ģ�� �� ѡ����ͼ���������ݴ�����ͼ
   class MyCtrl{
       function show(){
           $myModel = new MyModel();
           $data = $myModel->get();
           $myView = new MyView();
           $myView->display($data);
       }
   }
?>
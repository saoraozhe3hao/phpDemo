<?php
   //���������ļ���ֻ�����룬û��������Ϊ
   //��require�������ǣ�����ѱ����������������
   require_once 'MyCtrl.class.php';
   require_once 'MyModel.class.php';
   require_once 'MyView.class.php';
   //require��include�����𣬵�Ҫ���ص��ļ�������ʱ��, include���һ��warning����, Ȼ���������
   //��require����һ��fatal error, ֱ�ӽ����ű�
   
   
   
   //��ǰ�ļ���MVCģʽ������ļ��������������ģ�͡���ͼ
   //������������൱��������ļ��ﶨ��ģ������֮����Ի������
   $myCtrl = new MyCtrl();
   $myCtrl->show();
?>
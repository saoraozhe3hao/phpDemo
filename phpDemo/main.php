<?php
   //���������ļ���ֻ�����룬û��������Ϊ
   //��require�������ǣ�����ѱ����������������
   require_once 'MyCtrl.class.php';
   require_once 'MyModel.class.php';
   require_once 'MyView.class.php';
   
   //��ǰ�ļ���MVCģʽ������ļ��������������ģ�͡���ͼ
   //������������൱��������ļ��ﶨ��ģ������֮����Ի������
   $myCtrl = new MyCtrl();
   $myCtrl->show();
?>
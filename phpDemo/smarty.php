<?php
   //һ��ģ������
   require 'smarty/Smarty.class.php';   
   $smarty = new Smarty();
   
   //smarty ���ã������
   $smarty->left_delimiter = "{";
   $smarty->right_delimiter = "}";
   //ģ��·��
   $smarty->template_dir = "template";
   //�����ļ�·��
   $smarty->compile_dir = "compile";
   
   //�������ֵ
   $smarty->assign("title","title");
   $smarty->assign("arr",array(1,2));
   $smarty->display("myTemplate.tpl");
?>
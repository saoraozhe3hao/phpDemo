<?php
   //一个模板引擎
   require 'smarty/Smarty.class.php';   
   $smarty = new Smarty();
   
   //smarty 配置，定界符
   $smarty->left_delimiter = "{";
   $smarty->right_delimiter = "}";
   //模板路径
   $smarty->template_dir = "template";
   //编译文件路径
   $smarty->compile_dir = "compile";
   
   //传入变量值
   $smarty->assign("title","title");
   $smarty->assign("arr",array(1,2));
   $smarty->display("myTemplate.tpl");
?>
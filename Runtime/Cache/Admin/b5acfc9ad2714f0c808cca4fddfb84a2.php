<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>无标题文档</title>
  <frameset rows="80,*" cols="*" frameborder="no" border="0" framespacing="0">
    <frame src="__APP__/Admin/index/top" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame"/>
    <frameset rows="*" cols="165,*" framespacing="0" frameborder="no" border="0">
      <frame src="__APP__/Admin/index/left" name="leftmenu" id="mainFrame" title="mainFrame"/>
      <frameset rows="50,*" cols="*" framespacing="0" frameborder="no" border="0">
        <frame src="__APP__/Admin/index/menu" name="topmenu" id="mainFrame" title="mainFrame"/>
        <frame src="__APP__/Admin/JiajiaoInfo/admin_order" name="main" scrolling="yes" noresize="noresize" id="rightFrame" title="rightFrame"/>
      </frameset>
    </frameset>
  </frameset>
  <noframes></noframes>
  <noframes>
    </head>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title><?php echo ($set_web_info["ttedu_titlename"]); ?> | <?php echo ($web_title); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="<?php echo ($set_web_info["ttedu_keyword"]); ?> | <?php echo ($web_title); ?>" />
  <meta name="description" content="<?php echo ($set_web_info["ttedu_description"]); ?> | <?php echo ($web_title); ?>" />
  <meta name="author" content="家教在线" />
  <meta name="copyright" content="家教在线" />
  <style type="text/css">
    .dis {
      DISPLAY: block
    }
    .undis {
      DISPLAY: none
    }
  </style>
  <link rel="stylesheet" type="text/css" href="Public/css/EDUee.css" />
  <link rel="stylesheet" type="text/css" href="Public/css/ForcePic.css" />
  <link rel="stylesheet" href="Public/css/font-awesome.min.css" />
  <script language="javascript" src="Public/js/forcelog.js"></script>
  <script language="javascript" src="Public/js/move_float.js"></script>
  <meta name="GENERATOR" content="MSHTML 8.00.6001.19088" />
</head>
<body>
<!--[if !IE]>顶部开始<![endif]-->
<div class="topT">
  <div class="topTl">
    <a href="__APP__/index/index"><img src="Public/images/logobj.gif" /></a>
  </div>
  <div class="topTr">
    <?php if(($_SESSION['username'])  ==  ""): ?><a href="__APP__/index/index">登录</a> |
      <?php else: ?>
      <div>
        <span style="color:#0000ff"><?php echo ($_SESSION['username']); ?></span>&nbsp;您好！欢迎你回来！&nbsp;
        <a href="__APP__/member/index" style="color:#00ff00">个人中心</a>&nbsp;
        <a href="__APP__/Login/logout" style="color:#FF0000">退出登录</a>&nbsp;
      </div><?php endif; ?>
    <a style="margin-left: 12px;" href="__APP__/TeachInfo/zhuce_teh">教员注册</a> &nbsp; |
    <a style="margin-left: 10px;" href="__APP__/HuiyuanInfo/xuesheng_zhuce">学生注册</a>&nbsp;
    <br />
  </div>
</div>
<!--顶部结束，导航开始-->
<div class="daobg01">
  <div id="t_3_3_1">
    &nbsp;
  </div>
  <div id="t_3_3_2" class="t">
    <ul>
      <li> <a href="__APP__/index/index">首页</a></li>
    </ul>
  </div>
  <div id="t_3_3_3">
    &nbsp;
  </div>
  <div id="t_3_3_4" class="t" style=" width:786px;">
    <ul>
      <li><a href="__APP__/JiajiaoInfo/qing_edu">请家教</a></li>
      <li><a href="__APP__/JiajiaoInfo/edu_info">家教信息</a></li>
      <li><a href="__APP__/TeachInfo/tehlist">老师库</a></li>
      <li><a href="__APP__/TeachInfo/zuo_edu">做家教</a></li>
      <li><a href="__APP__/InfoDetail/edu_news">家教咨询</a></li>
      <li><a href="__APP__/InfoDown/downloadlist">资料下载</a></li>
      <li><a href="__APP__/SpinfoDetail/videolist">教学视频</a></li>
    </ul>
  </div>
  <div id="t_3_3_5"></div>
</div>
<div class="daobg02">
  <div>
    <em>网站公告</em>
    <p style="margin-right:5px;">
      <marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" scrollamount="3" align="left">
        欢迎光临家教在线网站，打造上海地区最优秀的家教平台
      </marquee></p>
  </div>
</div>
<!--[if !IE]>导航结束，主区开始<![endif]-->
<div style="width:950px;">
  <div>
    <script type="text/javascript">
        <!--
        var focus_width=950//图片宽
        var focus_height=300//图片高
        var text_height=0//设置显示文字标题高度,最佳为20（如果不显示标题值设为0即可）
        var swf_height = focus_height+text_height

        var pics="<?php echo ($pics); ?>";
        var links="<?php echo ($links); ?>";
        var texts="<?php echo ($texts); ?>";
        pics=pics.substr(0,pics.length-1);
        links=links.substr(0,links.length-1);
        texts=texts.substr(0,texts.length-1);
        //var pics='Public/ad/1.jpg|Public/ad/2.jpg|Public/ad/3.jpg'
        //var links='#|#|#'
        //var texts='广告二|广告一|广告三'

        document.write('<object ID="focus_flash" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
        document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="Public/flash/adplay.swf"><param name="quality" value="high"><param name="bgcolor" value="#FFFFFF">');
        document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
        document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
        document.write('<embed ID="focus_flash" src="Public/flash/adplay.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#C5C5C5" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');document.write('</object>');
        //-->
    </script>
  </div>
</div>
<!--[if !IE]>焦点图片切换开始<![endif]-->
</body>
</html>
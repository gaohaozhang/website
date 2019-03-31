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
<div class="main mainbg clearfix">
  <div class=LrightM>
    <div class=dqwz>
      <img src="Public/images/d05.gif" width=10 height=11> 当前位置：<a href="__APP__/index/index">首页</a>&gt;<strong>请家教信息</strong>
    </div>
    <div class="flbor seacbg1">
      <form method=post action="__APP__/index/mfsearch">
        <input type="hidden" name="types" value="6"/>
        <input class=seainput onclick="this.value=''" value="信息编号" size=10 type=text name="id">
        <input class=qiujiao onclick="this.value=''" value="请输入求教学科" size=15 type=text name="teach_subject">
        <select style="WIDTH: 80px" id=teach_place class=input_text name="teach_place">
          <option selected value="">区域</option>
          <option value="">无要求</option>
          <option value=黄浦区>黄浦区</option>
          <option value=徐汇区>徐汇区</option>
          <option value=长宁区>长宁区</option>
          <option value=静安区>静安区</option>
          <option value=普陀区>普陀区</option>
          <option value=虹口区>虹口区</option>
          <option value=杨浦区>杨浦区</option>
          <option value=闵行区>闵行区</option>
          <option value=宝山区>宝山区</option>
          <option value=嘉定区>嘉定区</option>
          <option value=浦东新区>浦东新区</option>
          <option value=金山区>金山区</option>
          <option value=松江区>松江区</option>
          <option value=青浦区>青浦区</option>
          <option value=奉贤区>奉贤区</option>
        </select>
        <select style="WIDTH: 120px" id=select3 class=input_text name="gender">
          <option selected value="">请选择学员性别</option>
          <option value="">不限</option>
          <option value=男>男</option>
          <option value=女>女</option>
        </select>
        <select style="WIDTH: 100px" id=select3 class=input_text name="gender2">
          <option selected value="">教员性别要求</option>
          <option value="">不限</option>
          <option value=男>男</option>
          <option value=女>女</option>
        </select>
        <span class=seacbg1><input id=imageField3 src="Public/images/but.gif" type=image name=imageField3>
				</span>
      </form>
    </div>
    <div class=tit01>
      <div class=Ptit01T1>
        <img src="Public/images/d10.gif">
        <h2>学员信息库 <span style="COLOR: red; FONT-SIZE: 12px; FONT-WEIGHT: lighter">（"√"为已经预约教员，但仍然可以网上预约。）</span></h2>
      </div>
      <div class=num>
        <?php echo ($page); ?>
      </div>
      <ol class=line03>
        <li class=lin02bg><u>订单号</u><em>学员性别</em><i>求教科目 </i><b>学员要求</b><em style="WIDTH: 18%">授课区域</em><i>发布时间</i><em>查看详情</em></li>
        <?php if(is_array($jiajiao_info)): $i = 0; $__LIST__ = $jiajiao_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><u><span style="COLOR: red; FONT-WEIGHT: lighter"><?php if(($vo["ttedu_shifouyuyue"])  ==  "1"): ?>√<?php endif; ?></span><?php echo ($vo["ttedu_id"]); ?></u>
            <em>&nbsp;<?php echo ($vo["ttedu_sex"]); ?></em>
            <i>&nbsp;<?php echo ($vo["ttedu_nianjikemu"]); ?></i>
            <b>&nbsp;<?php echo ($vo["ttedu_laoshiyaoqiu"]); ?></b>
            <em style="WIDTH: 18%">&nbsp;<?php echo ($vo["ttedu_shoukediqu"]); ?></em>
            <i>&nbsp;<?php echo (date('Y-m-d H:i:s',$vo["ttedu_addtime"])); ?> </i>
            <em>&nbsp;<a title="<?php echo ($vo["ttedu_nianjikemu"]); ?>" href="__APP__/JiajiaoInfo/edu_infodetail/id/<?php echo ($vo["ttedu_id"]); ?>">查看详情</a></em></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
      <div class=num>
        <?php echo ($page); ?>
      </div>
    </div>
  </div>
  <!--中部左区结束，右区开始-->
  <div class=LleftM>

    <div class=tit01>
  <div class=tit01T2>
    <a href="__APP__/InfoDetail/infolist/ttedu_id/17">-更多-</a>
    <h2><i class="fa fa-volume-up"></i> 助教公告</h2>
  </div>
  <ol class=line01>
    <?php if(is_array($r_zhujiaogonggao)): $i = 0; $__LIST__ = $r_zhujiaogonggao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ol>
</div>
<div class=tit01>
  <div class=tit01T2>
    <a href="__APP__/InfoDetail/infolist/ttedu_id/23">-更多-</a>
    <h2><i class="fa fa-superscript"></i> 常见问题</h2>
  </div>
  <ol class=line01>
    <?php if(is_array($r_changjianwenti)): $i = 0; $__LIST__ = $r_changjianwenti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ol>
</div>
<div class=tit01>
  <div class=tit01T2>
    <a href="__APP__/InfoDetail/infolist/ttedu_id/25">-更多-</a>
    <h2><i class="fa fa-book"></i> 好书推荐</h2>
  </div>
  <ol class=line01>
    <?php if(is_array($r_haoshutuijian)): $i = 0; $__LIST__ = $r_haoshutuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ol>
</div>
</div>
  </div>
  <!--主区结束，底区开始-->
  <!--友情链接-->
  <div class=ljmain>
    <div class=ljnr>
    </div>
    <div class=ljnr1>
    </div>
    <div class=ljnr>
        <span class=red>[友情链接]：</span>
        <?php if(is_array($set_youqing)): $i = 0; $__LIST__ = $set_youqing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($vo["ttedu_website"]); ?>" title="<?php echo ($vo["ttedu_webname"]); ?>" target="_blank"><?php echo ($vo["ttedu_webname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<!--主区结束，底区开始-->
<div class=hackbox>
</div>
<div class=footer>
    <p>
        Copyright © 2017 Tencent. All Rights Reserved.
    </p>
    <p>
        上海市某某某某有限公司 版权所有
    </p>
</div>
<script type=text/javascript>
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type=text/javascript>
    try {
        var pageTracker = _gat._getTracker("UA-770217-10");
        pageTracker._trackPageview();
    } catch(err) {}</script>
</body>
</html>
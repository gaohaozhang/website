<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo ($set_web_info["ttedu_titlename"]); ?> | <?php echo ($web_title); ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="<?php echo ($set_web_info["ttedu_keyword"]); ?> | <?php echo ($web_title); ?>">
    <meta name="description" content="<?php echo ($set_web_info["ttedu_description"]); ?> | <?php echo ($web_title); ?>">
    <meta name="author" content="家教在线">
    <meta name="copyright" content="家教在线">
    <style type="text/css">
        .dis {
            display: block
        }
        .undis {
            display: none
        }
    </style>
    <link rel="stylesheet" type="text/css" href="Public/css/EDUee2.css">
    <link rel="stylesheet" type="text/css" href="Public/css/float.css">
    <link rel="stylesheet" type="text/css" href="Public/css/ForcePic.css">
    <link rel="stylesheet" href="Public/css/font-awesome.min.css" type="text/css">
    <script language="javascript" src="Public/js/forcelog.js" type="text/javascript">
    </script>
    <script language="javascript" src="Public/js/move_float.js" type="text/javascript">
    </script>
    <meta name="GENERATOR" content="MSHTML 8.00.6001.19088">
</head>
<body>
<!--[if !IE]>顶部开始<![endif]-->
<div class="topT">
    <div class="topTl">
        <a href="__APP__/index/index"><img src="Public/images/logobj.gif"></a>
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
        <br>
    </div>
</div>
<div class="hackbox"></div>
<div class="daobg01">
    <div id="t_3_3_1">
        &nbsp;
    </div>
    <div id="t_3_3_2" class="t">
        <ul>
            <li>
                <a href="__APP__/index/index">首页</a>
            </li>
        </ul>
    </div>
    <div id="t_3_3_3">
        &nbsp;
    </div>
    <div id="t_3_3_4" class="t" style=" width:786px;">
        <ul>
            <li>
                <a href="__APP__/JiajiaoInfo/qing_edu">请家教</a>
            </li>
            <li>
                <a href="__APP__/JiajiaoInfo/edu_info">家教信息</a>
            </li>
            <li>
                <a href="__APP__/TeachInfo/tehlist">老师库</a>
            </li>
            <li>
                <a href="__APP__/TeachInfo/zuo_edu">做家教</a>
            </li>
            <li>
                <a href="__APP__/InfoDetail/edu_news">家教咨询</a>
            </li>
            <li>
                <a href="__APP__/InfoDown/downloadlist">资料下载</a>
            </li>
            <li>
                <a href="__APP__/SpinfoDetail/videolist">教学视频</a>
            </li>
        </ul>
    </div>
    <div id="t_3_3_5"></div>
</div>
<div class="daobg02">
    <div>
        <em>网站公告</em>
        <p style="margin-right:5px;">
            <span id="demo"></span> <marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" scrollamount="3" align="left">欢迎光临家教在线网站，打造上海地区最优秀的家教平台</marquee>
        </p>
    </div>
</div><!--[if !IE]>导航结束，主区开始<![endif]-->
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
            document.write('<embed ID="focus_flash" src="Public/flash/adplay.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#C5C5C5" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');document.write('<\/object>');
            //-->
        </script>
    </div>
</div><!--[if !IE]>焦点图片切换开始<![endif]-->
</body>
</html>
<link rel=stylesheet type=text/css href="Public/css/neweduee.css">
<script language=javascript>
    //all by www.qpsh.com
    var currslid = 0;
    var slidint;
    function setfoc(id){
        document.getElementById("focpic").src = picarry[id];
        document.getElementById("foclnk").href = lnkarry[id];
        document.getElementById("fttltxt").innerHTML = '<a href="'+lnkarry[id]+'" target="_blank">'+ttlarry[id]+'</a>';
        currslid = id;
        for(i=0;i<4;i++){
            document.getElementById("tmb"+i).className = "thubpic";
        };
        document.getElementById("tmb"+id).className ="thubpiccur";
        focpic.style.visibility = "hidden";
        focpic.filters[0].Apply();
        if (focpic.style.visibility == "visible") {
            focpic.style.visibility = "hidden";
            focpic.filters.revealTrans.transition=23;
        }
        else {
            focpic.style.visibility = "visible";
            focpic.filters[0].transition=23;
        }
        focpic.filters[0].Play();
        stopit();
    }
    function playnext(){
        if(currslid==3){
            currslid = 0;
        }
        else{
            currslid++;
        };
        setfoc(currslid);
        playit();
    }
    function playit(){
        slidint = setTimeout(playnext,4500);
    }
    function stopit(){
        clearTimeout(slidint);
    }
    window.onload = function(){
        playit();
    }
    function g(o){return document.getElementById(o);}
    function Hover(n){
//如果有N个标签,就将i<=N;
        for(var i=1;i<=3;i++)
        {
            g('t_'+i).className='zxbg1';
            g('tbc'+i).style.display='none';
        }
        g('tbc'+n).style.display='block';
        g('t_'+n).className='zxbg2';
    }
</script>
<div class=zxtop>
  <div class=zxleft>
    <div class=zxt02>
      <h2><a href="__APP__/InfoDetail/infolist/ttedu_id/26">家<br>
        <br>
        <br>
        教<br>
        <br>
        <br>
        之<br>
        <br>
        <br>
        路</a></h2>
    </div>
    <ul class=zxline01>
      <?php if(is_array($jiajiaozhilu)): $i = 0; $__LIST__ = $jiajiaozhilu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div>
  <div class=zxbr style="float:left; height:368px">
    <img src="Public/images/4.jpg" width="210" height="118">
    <div style="height:20px">
    </div>
    <div class=zxt06x>
      <a href="__APP__/InfoDetail/infolist/ttedu_id/15">-更多-</a>
      <h2>教育新闻动态</h2>
    </div>
    <ol class=line01>
      <?php if(is_array($xinwendongtai)): $i = 0; $__LIST__ = $xinwendongtai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
  </div>
  <div class=zxmid style="height:180px;">
    <div class=zxt01>
      <a href="__APP__/InfoDetail/infolist/ttedu_id/17">-更多-</a>
      <h2 class=white>助教公告</h2>
    </div>
    <ul class=zxline>
      <?php if(is_array($zhujiaogonggao)): $i = 0; $__LIST__ = $zhujiaogonggao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?><?php echo substr('123456789',0,4); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div>
  <div>
    <ul class=zxt03>
      <li id=t_1 class=zxbg2 onmouseover=x:Hover(1);>
        <h2><a href="__APP__/InfoDetail/infolist/ttedu_id/18">小学教育</a></h2>
      </li>
      <li id=t_2 class=zxbg1 onmouseover=i:Hover(2);>
        <h2><a href="__APP__/InfoDetail/infolist/ttedu_id/19">初中教育</a></h2>
      </li>
      <li id=t_3 class=zxbg1 onmouseover=i:Hover(3);>
        <h2><a href="__APP__/InfoDetail/infolist/ttedu_id/20">高中教育</a></h2>
      </li>
    </ul>
    <ol style="DISPLAY: block" id=tbc1 class="zxl fl">
      <?php if(is_array($xiaoxuejiaoyu)): $i = 0; $__LIST__ = $xiaoxuejiaoyu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
    <ol style="DISPLAY: none" id=tbc2 class="zxl fl">
      <?php if(is_array($chuzhongjiaoyu)): $i = 0; $__LIST__ = $chuzhongjiaoyu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
    <ol style="DISPLAY: none" id=tbc3 class="zxl fl">
      <?php if(is_array($gaozhongjiaoyu)): $i = 0; $__LIST__ = $gaozhongjiaoyu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
  </div>
</div>
</div>
<div class=main>
  <img src="Public/images/banner.jpg" width=949 height=80>
</div>
<div class=main>
  <div class=zxbl>
    <div class=zxblt>
      <div class=zxt04>
        <a href="__APP__/InfoDetail/infolist/ttedu_id/21">-更多-</a>
        <h2>中考资讯</h2>
      </div>
      <ol class=line01>
        <?php if(is_array($zhongkaozixun)): $i = 0; $__LIST__ = $zhongkaozixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
      <div class=Rtu>
        <img src="Public/images/new_3.gif">
      </div>
    </div>
    <div class=zxt05>
      <a href="__APP__/InfoDetail/infolist/ttedu_id/22">-更多-</a>
      <h2>高考资讯</h2>
    </div>
    <ol class=line01>
      <?php if(is_array($gaokaozixun)): $i = 0; $__LIST__ = $gaokaozixun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
    <div class=Rtu>
      <img src="Public/images/new_4.gif">
    </div>
    <div class=zxblt>
      <div class=zxt04>
        <a href="__APP__/InfoDetail/infolist/ttedu_id/23">-更多-</a>
        <h2>常见问题</h2>
      </div>
      <ol class=line01>
        <?php if(is_array($changjianwenti)): $i = 0; $__LIST__ = $changjianwenti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
      <div class=Rtu>
        <img src="Public/images/new_1.gif">
      </div>
    </div>
    <div class=zxt05>
      <a href="__APP__/InfoDetail/infolist/ttedu_id/24">-更多-</a>
      <h2>心灵沟通</h2>
    </div>
    <ol class=line01>
      <?php if(is_array($xinlingoutong)): $i = 0; $__LIST__ = $xinlingoutong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
    <div class=Rtu>
      <img src="Public/images/new_2.gif">
    </div>
  </div>
  <div class=zxbr>
    <div class=zxt06>
      <a href="__APP__/InfoDetail/infolist/ttedu_id/25">-更多-</a>
      <h2>好书推荐</h2>
    </div>
    <ol class=line01>
      <?php if(is_array($haoshutuijian)): $i = 0; $__LIST__ = $haoshutuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/InfoDetail/infodetail/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo ($vo["ttedu_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
  </div>
</div>
<!--友情链接-->
<!--友情链接-->
<div class=ljmain>
  <div class=ljnr>
  </div>
  <div class=ljnr>
  </div>
</div>
<!--主区结束，底区开始-->
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
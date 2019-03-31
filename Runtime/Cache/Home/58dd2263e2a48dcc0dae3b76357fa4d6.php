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
<div class=zxtop>
  <div class=PleftM>
    <div class=rcur>
      <p>
        <strong>当前位置：</strong><a href="http://www.eduease.com/">首页</a> &gt; 查看 <?php echo ($teach_info["ttedu_id"]); ?> 号教员信息
      </p>
    </div>
    <table class=mberTab cellspacing=1 cellpadding=1>
      <tbody>
      <tr>
        <th colspan=4>
          <?php echo ($teach_info["ttedu_id"]); ?> 号教员基本信息
        </th>
      </tr>
      <tr>
        <td width="119" align=right>
          <strong>教员编号：</strong>
        </td>
        <td width="331" class=green>
          <?php echo ($teach_info["ttedu_id"]); ?>
        </td>
        <td width="117" align=right>
          <strong>姓名：</strong>
        </td>
        <td width="255" class=blue>
          <?php echo (msubstr($teach_info["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>性别：</strong>
        </td>
        <td>
          <?php echo ($teach_info["ttedu_sex"]); ?>
        </td>
        <td align=right>
          <strong>籍贯：</strong>
        </td>
        <td>
          <?php echo ($teach_info["ttedu_jiguan"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>出生年月：</strong>
        </td>
        <td class=yel>
          <?php echo ($teach_info["ttedu_birth"]); ?>
        </td>
        <td align=right>
          <strong>高校：</strong>
        </td>
        <td>
          <strong>清华大学</strong>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>学历：</strong>
        </td>
        <td>
          <?php echo ($teach_info["ttedu_mqxueli"]); ?>
        </td>
        <td align=right>
          <strong>目前身份：</strong>
        </td>
        <td>
          <?php echo ($teach_info["ttedu_mqshengfei"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>专业：</strong>
        </td>
        <td>
          <?php echo ($teach_info["ttedu_zhuanye"]); ?>
        </td>
        <td align=right>
          <strong>住址：</strong>
        </td>
        <td>
          <?php echo ($teach_info["ttedu_address"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>注册时间：</strong>
        </td>
        <td class=yel>
          <?php echo (date('Y-m-d H:i:s',$teach_info["ttedu_zhucedate"])); ?>
        </td>
        <td align=right>
          <strong>认证情况：</strong>
        </td>
        <td>
          <?php if(($$teach_info["ttedu_shengheishifoutongguo"])  ==  "1"): ?>已通过审，<?php endif; ?>
          <?php if(($$teach_info["ttedu_shengheishifoutongguo"])  !=  "1"): ?>未通过审核<?php endif; ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>最近登陆时间：</strong>
        </td>
        <td>
          <?php echo (date('Y-m-d H:i:s',$teach_info["ttedu_logindate"])); ?>
        </td>
        <td align=right>
          <strong>教员星级：</strong>
        </td>
        <td>
          <?php if(($teach_info["ttedu_shifoushengji"])  ==  "0"): ?>普通会员<?php endif; ?>
          <?php if(($teach_info["ttedu_shifoushengji"])  >  "0"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
          <?php if(($teach_info["ttedu_shifoushengji"])  >  "1"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
          <?php if(($teach_info["ttedu_shifoushengji"])  >  "2"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
          <?php if(($teach_info["ttedu_shifoushengji"])  >  "3"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
          <?php if(($teach_info["ttedu_shifoushengji"])  >  "4"): ?><img src="Public/member/images/d15.gif"><?php endif; ?>
        </td>
      </tr>
      </tbody>
    </table>
    <div class=mberlx>
      <a class=yyjy href="__APP__/YuyueTeachInfo/yuyue_teach_info/teachid/<?php echo ($teach_info["ttedu_id"]); ?>">在线预约该教员</a>
      (为保护教员隐私，具体面谈时会向您提供全名及各种证件）<br>
      预约中心电话：<strong><?php echo ($web_info["ttedu_tel"]); ?> </strong>（工作时间：<span class=blue>9:00－20:00</span>）（预约时，请提供此教员的编号：<strong class=red><?php echo ($teach_info["ttedu_id"]); ?></strong> ）
    </div>
    <table class=mberTab cellspacing=1 cellpadding=1>
      <tbody>
      <tr>
        <th colspan=4>
          家教信息
        </th>
      </tr>
      <tr>
        <td width="17%" align=right>
          <strong>可教授科目：</strong>
        </td>
        <td class=nonutd colspan=3>
          <?php echo ($teach_info["ttedu_renjiaoxueke"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>自我描述：</strong>
        </td>
        <td colspan=3>
          <?php echo ($teach_info["ttedu_xiangxijieshao"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>所获证书：</strong>
        </td>
        <td colspan=3>
          <?php echo ($teach_info["ttedu_suohuozhengshu"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>可授课区域：</strong>
        </td>
        <td class=yel width="40%">
          <?php echo ($teach_info["ttedu_jiajiaodiqu"]); ?>
        </td>
        <td width="14%" align=right>
          <strong>可辅导方式：</strong>
        </td>
        <td class=blue width="29%">
          <?php echo ($teach_info["ttedu_fudaofangshi"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>薪水要求：</strong>
        </td>
        <td colspan=1>
          <span class=red><?php echo ($teach_info["ttedu_xingshuiyaoqiu"]); ?></span>
        </td>
        <td width="14%" align=right>
          <strong>授课对象：</strong>
        </td>
        <td class=blue width="29%">
          <?php echo ($teach_info["ttedu_renjiaoduixiang"]); ?>
        </td>
      </tr>
      </tr>
      </tbody>
    </table>
    <div class=mberlx>
      <a class=yyjy href="__APP__/YuyueTeachInfo/yuyue_teach_info/teachid/<?php echo ($teach_info["ttedu_id"]); ?>">在线预约该教员</a>
    </div>
    </table>
    <div class=tit01>
      <div class=tit01TB1>
        <h2>同类教员信息</h2>
        <img src="Public/images/d10.gif">
      </div>
      <ol class=line02>
        <li class=lin02bg><em>姓名</em><u>高校</u><u>专业</u><em>学历</em><em>时间</em></li>
        <?php if(is_array($teach_more)): $i = 0; $__LIST__ = $teach_more;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><em><a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>"><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师</a></em><u> <?php echo ($vo["ttedu_biyexuexiao"]); ?> </u><u><?php echo ($vo["ttedu_zhuanye"]); ?></u><em><?php echo ($vo["ttedu_mqxueli"]); ?></em><em><?php echo (date('Y-m-d H:i:s',$vo["ttedu_zhucedate"])); ?></em></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
    </div>
  </div>
  <div class=tright>
    <div class=tit01>
      <div class=zxtit01T2>
        <h2><img src="Public/images/d03.gif">本站搜索</h2>
      </div>
      <div>
        <div class=s01>
          <form method=post action="__APP__/index/mfsearch">
            <input type="hidden" name="types" value="5"/>
            <input class=seainpu onclick="this.value=''" value="信息标题" size=10 type=text name="titles">
            <select style="WIDTH: 95px" id=select3 class=input_text name="subject">
              <option selected value="">所有文章</option>
              <option value=15>新闻动态</option>
              <option value=17>助教公告</option>
              <option value=18>小学教育</option>
              <option value=19>初中教育</option>
              <option value=20>高中教育</option>
              <option value=21>中考咨询</option>
              <option value=22>高考咨询</option>
              <option value=23>常见问题</option>
              <option value=24>心灵沟通</option>
              <option value=25>好书推荐</option>
              <option value=26>家教之路</option>
              <option value=27>其他咨询</option>
            </select>
            <span class=seacbg1><input id=imageField src="Public/images/but.gif" type=image name=imageField></span>
          </form>
        </div>
      </div>
    </div>
    <div class=rightM1>
      <div class=tit01T2>
        <a href="__APP__/index/searchteach">-更多-</a><img src="Public/images/d17.gif">
        <h2>星级教员 </h2>
      </div>
      <ul class=tit01T2B>
        <li><a id=t_1 class=tit01T2Bc onmouseover=x:Hover(1); href="__APP__/index/searchteach/ttedu_renjiaoxueke/语文">语文家教</a></li>
        <li><a id=t_2 onmouseover=i:Hover(2); href="__APP__/index/searchteach/ttedu_renjiaoxueke/数学">数学家教</a></li>
        <li><a id=t_3 onmouseover=i:Hover(3); href="__APP__/index/searchteach/ttedu_renjiaoxueke/英语">英语家教</a></li>
      </ul>
      <ol style="DISPLAY: block" id=tbc1 class="line0r2 cle">
        <?php if(is_array($yuwenjiaoshi)): $i = 0; $__LIST__ = $yuwenjiaoshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li class=line0r2bg><a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师 <span class=green>详细介绍</span>
            <?php if(($vo["ttedu_shifoushengji"])  >  "0"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "1"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "2"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "3"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "4"): ?><img src="Public/images/d18.gif"><?php endif; ?>
          </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
      <ol style="DISPLAY: none" id=tbc2 class="line0r2 cle">
        <?php if(is_array($shuxuejiaoshi)): $i = 0; $__LIST__ = $shuxuejiaoshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li class=line0r2bg><a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师 <span class=green>详细介绍</span>
            <?php if(($vo["ttedu_shifoushengji"])  >  "0"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "1"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "2"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "3"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "4"): ?><img src="Public/images/d18.gif"><?php endif; ?>
          </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
      <ol style="DISPLAY: none" id=tbc3 class="line0r2 cle">
        <?php if(is_array($yingyujiaoshi)): $i = 0; $__LIST__ = $yingyujiaoshi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/TeachInfo/tehdetail/id/<?php echo ($vo["ttedu_id"]); ?>" target=_blank><?php echo (msubstr($vo["ttedu_chenfu"],0,1,'utf-8',false)); ?>老师 <span class=green>详细介绍</span>
            <?php if(($vo["ttedu_shifoushengji"])  >  "0"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "1"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "2"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "3"): ?><img src="Public/images/d18.gif"><?php endif; ?>
            <?php if(($vo["ttedu_shifoushengji"])  >  "4"): ?><img src="Public/images/d18.gif"><?php endif; ?>
          </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
    </div>
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
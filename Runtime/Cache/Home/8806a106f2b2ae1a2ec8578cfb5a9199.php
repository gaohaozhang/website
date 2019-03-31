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
<div class="main mainbg clearfix">
  <div class=PleftM>
    <div class=rcur>
      <p>
        <strong>当前位置：</strong><a href="http://www.eduease.com/">首页</a> &gt; <?php echo ($jiajiao_info["ttedu_id"]); ?> 号学员信息
      </p>
    </div>
    <table class=mberTab cellspacing=1 cellpadding=1>
      <tbody>
      <tr>
        <th colspan=4>
          <?php echo ($jiajiao_info["ttedu_id"]); ?> 号学员基本信息
        </th>
      </tr>
      <tr>
        <td width="18%" align=right>
          <strong>订单号：</strong>
        </td>
        <td class=green width="26%">
          <?php echo ($jiajiao_info["ttedu_id"]); ?>
        </td>
        <td width="18%" align=right>
          <strong>联系人：</strong>
        </td>
        <td class=blue width="35%">
          <?php echo ($jiajiao_info["ttedu_chengfu"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>学员性别：</strong>
        </td>
        <td>
          <span class=blue><?php echo ($jiajiao_info["ttedu_sex"]); ?> </span>
        </td>
        <td width="18%" align=right>
          <strong>学员年龄：</strong>
        </td>
        <td>
          <?php echo ($jiajiao_info["ttedu_old"]); ?>&nbsp;岁
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>学员人数：</strong>
        </td>
        <td>
          <span class=blue><?php echo ($jiajiao_info["ttedu_xueshengrenshu"]); ?> </span>&nbsp;人
        </td>
        <td width="18%" align=right>
          <strong>求教科目：</strong>
        </td>
        <td>
          <span class=yel><?php echo ($jiajiao_info["ttedu_nianjikemu"]); ?></span>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>授课区域：</strong>
        </td>
        <td class=yel>
          <?php echo ($jiajiao_info["ttedu_shoukediqu"]); ?>
        </td>
        <td width="18%" align=right>
          <strong>详细住址：</strong>
        </td>
        <td>
          <?php echo ($jiajiao_info["ttedu_address"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>乘车说明：</strong>
        </td>
        <td class=yel colspan="3">
          <?php echo ($jiajiao_info["ttedu_nalugongjiao"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>学员要求：</strong>
        </td>
        <td colspan="3">
          <?php echo ($jiajiao_info["ttedu_laoshiyaoqiu"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>其他要求：</strong>
        </td>
        <td colspan="3">
          <?php echo ($jiajiao_info["ttedu_qitayaoqiu"]); ?>
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>每周次数：</strong>
        </td>
        <td>
          <?php echo ($jiajiao_info["ttedu_meizhoucishu"]); ?>&nbsp;次
        </td>
        <td align=right>
          <strong>每次时间：</strong>
        </td>
        <td>
          <?php echo ($jiajiao_info["ttedu_meicishijian"]); ?>&nbsp;小时
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>每小时报酬：</strong>
        </td>
        <td>
          <?php echo ($jiajiao_info["ttedu_meixiaoshibaochou"]); ?>&nbsp;元
        </td>
      </tr>
      <tr>
        <td align=right>
          <strong>可授课时间：</strong>
        </td>
        <td>
          <?php echo ($jiajiao_info["ttedu_jutishijian"]); ?>
        </td>
        <td width="18%" align=right>
          <strong>发布时间：</strong>
        </td>
        <td>
          <span class=yel><?php echo (date('Y-m-d H:i:s',$jiajiao_info["ttedu_addtime"])); ?></span>
        </td>
      </tr>
      </tbody>
    </table>
    <div class=mberlx>
      请注意，若你对此订单感兴趣，请立即申请！ <a class=yyjy href="#" onclick="document.getElementById('tijiao').style.display='block';">立即申请</a>
      <div style="margin-top:8px; display:none;" id="tijiao">
        <form action="__APP__/TeachToStu/teach_to_stu" method="post">
          <input type="hidden" name="ttedu_jiajiaoid" value="<?php echo ($jiajiao_info["ttedu_id"]); ?>"/>
          留言备注：<br/>
          <textarea name="ttedu_beizhu" rows="4" cols="50"></textarea><br/>
          <input type="submit" value="确认提交"/>
        </form>
      </div>
    </div>
    <div style="MARGIN: 6px 0px 6px 4px">
      <a href="http://www.eduease.com/jingpai/jpjj_ys.php"><img src="Public/images/jp_banner1.jpg"></a>
    </div>
    <div class=tit01>
      <div class=tit01TB1>
        <h2>同类学员信息</h2>
        <img src="Public/images/d10.gif">
      </div>
      <ol class=line02>
        <li class=lin02bg><em>姓名</em><u>授课区域</u><u>求教科目</u><b>要求</b><em>时间</em></li>
        <?php if(is_array($jiajiao_more)): $i = 0; $__LIST__ = $jiajiao_more;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><li><em><a href="__APP__/JiajiaoInfo/edu_infodetail/id/<?php echo ($vo["ttedu_id"]); ?>"><?php echo ($vo["ttedu_chengfu"]); ?></a></em><u> <?php echo ($vo["ttedu_shoukediqu"]); ?> </u><u><?php echo ($vo["ttedu_nianjikemu"]); ?></u><b><?php echo ($vo["ttedu_laoshiyaoqiu"]); ?></b><em><?php echo (date('Y-m-d H:i:s',$vo["ttedu_addtime"])); ?></em></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ol>
    </div>
  </div>
  <!--中部左区结束，右区开始-->
  <div class=PrightM>
    <div style="MARGIN: 6px 0px 6px 2px">
      <a href="#"><img src="Public/images/jp_banner2.jpg"></a>
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
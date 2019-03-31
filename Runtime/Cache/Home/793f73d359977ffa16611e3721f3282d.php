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
                <strong>当前位置：</strong><a href="http://www.intoot.com">首页</a>&gt; <strong class=red>上海地区做家教</strong>&gt; 新教员必读
            </p>
        </div>
        <div class=tit01>
            <div class=Ptit01T1>
                <img src="Public/images/d10.gif">
                <h2>新教员必读</h2>
            </div>
            <div id=cont1>
                <div class=qlclj>
                    <a href="__URL__/zhuce_teh"><strong>现在就免费注册&gt;&gt;&gt;</strong></a>
                </div>
                <div class=qlcwenzi>
                    <span class=qlcbt1><strong>一、优势</strong></span><br>
                    1、家教在线所属的公司是经工商局批准并登记注册的正规合法机构。<br>
                    2、拥有一个功能强大的信息处理网站平台，是一家完全实现家教电子商务管理的网站。<br>
                    3、具有完善健全的服务体系和严格的认证体系，所有教员必须通过认证，所有学员必须通过严格核实。<br>
                    4、助教网拥有来自重庆大学、西南师范大学、西南政法大学、重庆师范大学、重庆邮电大学、重庆工商大学、重庆理工大学、重庆医科大学、第三军医大学等全国重点大学，有着丰富家教经验的在校大学生、研究生和专业教师，还有社会上拥有资深家教经验和高素质高学历的在校教师或其它人员，是值得信赖的家教专业服务机构。<br>
                    <span class=qlcbt1><strong>二、特色</strong></span><br>
                    1、透明度：教员可以在网上看到完整的家教信息（学员情况、上课地点、上课时间、对教员要求等）。<br>
                    2、及时性：即使教员上次的家教不成功也可以在七日内很快找到新的信息。<br>
                    3、服务诚信：教员可以在确定拿到家教信息后才交费，不会要求教员必需先交钱等待通知。<br>
                    4、信息可靠：助教网有专门的工作人员对每一条学员信息进行核实，确保信息真实有效。<br>
                    5、教员等级制度:对家长反馈好的，有经验成功率高的教员，助教网将优先给予推荐。<br>
                    <span class=qlcbt1><strong>三、<em>做家教</em>流程</strong></span><br>
                </div>
                <p align=center>
                    <img alt=做家教 src="Public/images/jylc.jpg">
                </p>
                <div class=qlcwenzi>
                    <span class=qlcbt1><strong>四、 <em>做家教</em>注意事项</strong></span><br>
                    1、教员注册：免费注册，须填写详细的个人资料。经过确认后，您的信息才会在网站上显示。<br>
                    2、教员认证：须带1寸相片两张、学生证、身份证。认证后发给教员易教家教认证卡。<br>
                    3、推荐学员：安排学员、签订协议、介绍信、收费与开收据为一步完成。<br>
                    4、教员权利：如教员没有与学员达成家教协议，我们将在一个月内为教员找到其它合适学员，如一个月内仍未找到合适信息，我公司将予以退费。<br>
                    5、教员义务：如连续多次因本人原因被家长投诉与拒绝接受家教服务，我公司将取消其会员资格且不承担任何责任并不予以退费。<br>
                    6、上门家教：教员前往学员处试讲时，应携带学生证、身份证、教员认证卡、介绍信及收据，并主动向学员出示。无论其成功与否，都要与家长或学员签订协议及收取费用。<br>
                    7、银行缴费：认证教员可通过网络银行直接汇款到指定账户，由助教网查收后提供学员信息，学员的会员服务指南由助教网统一邮寄。 <br>
                </div>
                <div class=qlcwenzi>
                    <div class=qlclj>
                        <a href="__URL__/zhuce_teh"><strong>现在就免费成为教员&gt;&gt;&gt;</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--中部左区结束，右区开始-->
    <div class=PrightM>
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
    try {
        var pageTracker = _gat._getTracker("UA-770217-10");
        pageTracker._trackPageview();
    } catch(err) {}</script>
</body>
</html>
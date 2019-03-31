<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo ($set_web_info["ttedu_titlename"]); ?> | <?php echo ($web_title); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name=keywords content="<?php echo ($set_web_info["ttedu_keyword"]); ?> | <?php echo ($web_title); ?>">
    <meta name=description content="<?php echo ($set_web_info["ttedu_description"]); ?> | <?php echo ($web_title); ?>">
    <meta name=author content=家教在线>
    <meta name=copyright content=家教在线>
    <style type=text/css>
        .dis {
            DISPLAY: block
        }
        .undis {
            DISPLAY: none
        }
    </style>
    <link rel=stylesheet type=text/css href="Public/member/css/EDUee.css">
    <link rel=stylesheet type=text/css href="Public/member/css/float.css">
    <link rel=stylesheet type=text/css href="Public/member/css/News.css">
    <link rel=stylesheet type=text/css href="Public/member/css/ForcePic.css">
    <script language=javascript src="Public/member/js/ForcePic.js"></script>
    <script language=javascript src="Public/member/js/forcelog.js"></script>
    <script language=javascript src="Public/member/js/move_float.js"></script>
    <meta name=GENERATOR content="MSHTML 8.00.6001.19088">
</head>
<body>
<!--[if !IE]>顶部开始<![endif]-->
<div class=topT>
    <div class=topTl>
        <a href="__APP__/index/index"><img src="Public/images/logobj.gif"></a>
    </div>
    <div class=topTc>
        <div class=topTcT>
            <div class=topTcT_left>
                <div id=bg>
                </div>
                <div class=hidden id=selectItem>
                    <div class="tit1 bgc_ccc move" onmousedown=drag(event,this)>
                        <h2 style="margin-right:270px; padding-left:8px;height:29px; line-height:29px; vertical-align:middle;color:#fff;" class=left>请选择城市</h2>
                        <span class="pointer" style="height:29px; color:#fff;line-height:29px; vertical-align:middle;" onclick=openBg(0);openSelect(0);>[关闭]</span>
                    </div>
                    <div class="cont">
                        <div style="margin-left:10px;">
                            <?php if(is_array($SOWI)): $i = 0; $__LIST__ = $SOWI;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$SOWI): ++$i;$mod = ($i % 2 )?><p style="float:left; margin-left:8px; margin-top:5px;">
                                    <a href="<?php echo ($SOWI["ttedu_website"]); ?>" target="_blank"><?php echo ($SOWI["ttedu_webname"]); ?></a>
                                </p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class=cont>
                        <div id=selectSub>
                        </div>
                    </div>
                </div>
                当前城市：<strong style="COLOR: #000; FONT-SIZE: 14px; FONT-WEIGHT: bold">北京</strong> [<a class="bton pointer" onclick=openBg(1);openSelect(1);>切换其它城市</a>] <strong class=red>家教在线-上海</strong>
                【<a class=green href="__APP__/BBS/index" target=_blank>助教社区</a>】
            </div>
            <div class=topTcT_right>
            </div>
        </div>
        <div class=topTcB>
            <em>www.<i></i>intoot<i>.com</i></em><img src="Public/member/images/d14.gif">请家教热线：15086860120
        </div>
    </div>
    <div class=topTr>
        <?php if(($_SESSION['username'])  ==  ""): ?><a href="__APP__/index/index">登录</a> | <?php else: ?>
            <div>
                <span style="color:#0000ff"><?php echo ($_SESSION['username']); ?></span>&nbsp;您好！欢迎你回来！&nbsp; <a href="__APP__/member/index" style="color:#00ff00">个人中心</a>&nbsp; <a href="__APP__/Login/logout" style="color:#FF0000">退出登录</a>&nbsp;
            </div><?php endif; ?>
        <a class=red href="__APP__/TeachInfo/zuo_edu">教员注册</a> &nbsp; | <a class=red href="__APP__/HuiyuanInfo/xuesheng_zhuce">学生注册</a>&nbsp; <br>
        <a onclick="varstrHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.baidu.com');">
            <img src="Public/member/images/d13.gif">设为首页</a>
        <a href="javascript:window.external.AddFavorite('http://');">
            <img src="Public/member/images/d15.gif">收藏本站</a>
    </div>
</div>
<div class=hackbox>
</div>
<!--顶部结束，导航开始-->
<div class=daobg01>
    <div id=t_3_3_1>
        &nbsp;
    </div>
    <div id=t_3_3_2 class=t>
        <ul>
            <li>
                <a href="__APP__/index/index">首页</a></li>
        </ul>
    </div>
    <div id=t_3_3_3>
        &nbsp;
    </div>
    <div id=t_3_3_4 class=t style=" width:786px;">
        <ul>
            <li><a href="__APP__/JiajiaoInfo/qing_edu">请家教</a></li>
            <li><a href="__APP__/JiajiaoInfo/edu_info">家教信息</a></li>
            <li><a href="__APP__/TeachInfo/tehlist">老师库</a></li>
            <li><a href="__APP__/TeachInfo/zuo_edu">做家教</a></li>
            <li><a href="__APP__/InfoDetail/edu_news">助教咨询</a></li>
            <li><a href="__APP__/InfoDown/downloadlist">资料下载</a></li>
            <li><a href="__APP__/SpinfoDetail/videolist">教学视频</a></li>
        </ul>
    </div>
    <div id=t_3_3_5>
    </div>
</div>
<div class=daobg02>
    <div>
        <em>助教播报</em>
        <p style="margin-right:5px;">
            <span id=demo></span>
            <marquee onmouseover=this.stop() onmouseout=this.start() behavior=alternate scrollamount=3 align="left">欢迎光临家教在线网站，打造上海地区最优秀的家教平台</marquee>
        </p>
    </div>
</div>
<!--[if !IE]>导航结束，主区开始<![endif]-->
<script language=javascript>
    function daohang(d){
        for(i=1;i<=3;i++){
            var zdhx=document.getElementById("zdh"+i);
            if(i==d){
                zdhx.style.display="block";
            }else{
                zdhx.style.display="none";
            }
        }
    }
</script>
<?php if(($_SESSION['mid'])  ==  "1"): ?><div class="main ZXmainbg clearfix">
        <div class=jyleft>
            <div class=dh1 onclick="daohang(1);">
                <a>助教导航</a>
            </div>
            <div id="zdh1" style="display:block">
                <a class=daolist href="__APP__/JiajiaoInfo/edu_info" target=_blank>最新学员需求</a>
                <a class=daolistc href="__URL__/xjjyjs" target="mainFrame">星级教员介绍</a>
                <!--<A class=daolist href="__URL__/sqjpjj" target="mainFrame">申请金牌家教</A>-->
                <a class=daolistc href="__URL__/tsjy" target="mainFrame">投诉建议</a>
                <a class=daolist href="__URL__/znxx" target="mainFrame">站内消息</a>
            </div>
            <div class=dh2 onclick="daohang(2);">
                <a>我的助教</a>
            </div>
            <div id="zdh2" style="display:none">
                <a class=daolist href="__URL__/ddjl" target="mainFrame">订单记录</a>
                <a class=daolistc href="__URL__/sfsh" target="mainFrame">身份审核</a>
                <a class=daolist href="__URL__/gjhy" target="mainFrame">星级会员</a>
                <a class=daolistc href="__URL__/lxjl" target="mainFrame">联系记录</a>
                <a class=daolist href="__URL__/jecz" target="mainFrame">金额充值</a>
                <!--<A class=daolistc href="__URL__/jetx" target="mainFrame">金额提现</A>-->
            </div>
            <div class=dh3 onclick="daohang(3);">
                <a>个人操作</a>
            </div>
            <div id="zdh3" style="display:none">
                <a class=daolist href="__URL__/xgmm" target="mainFrame">密码修改</a>
                <a class=daolistc href="__URL__/jlxg" target="mainFrame">简历修改</a>
                <!--<A class=daolist href="__URL__/ztxg" target="mainFrame">状态修改</A>-->
                <a class=daolistc href="__URL__/grzp" target="mainFrame">个人照片</a>
                <a class=daolist href="__URL__/zjzp" target="mainFrame">证件照片</a>
                <a class=daolistc href="__APP__/TeachInfo/tehdetail/id/<?php echo ($_SESSION['userid']); ?>" target=_blank>预览简历</a>
            </div>
            <div class=dh1>
                <div class=tl1>
                    <a href="__APP__/Login/logout">退出系统</a>
                </div>
            </div>
        </div>
        <div class=jyright>
            <div class=jyt1>
                <a href="__URL__/welcome" target="mainFrame"><img src="Public/member/images/d05.gif" width=10 height=11> 教员管理系统</a>
            </div>
            <div class=nr>
                欢迎您<span class=jyred> <?php echo ($member["ttedu_chenfu"]); ?> </span>，您的教员编号是<span class=jyred> <?php echo ($member["ttedu_id"]); ?> </span>。<br>
                为了保证您的个人资料不被窃取或修改，请务必在离开时退出并关闭浏览器窗口！
            </div>
        </div>
        <div class=jyxx>
            <iframe src="__URL__/welcome" width="100%" height="350" frameborder="0" name="mainFrame" onload="this.height=mainFrame.document.body.scrollHeight<350 ? 350: mainFrame.document.body.scrollHeight;">
            </iframe>
        </div>
    </div>
    <?php else: ?>
    <div class="main ZXmainbg clearfix">
        <div class=jyleft>
            <div class=dh1 onclick="daohang(1);">
                <a>助教导航</a>
            </div>
            <div id="zdh1" style="display:block">
                <a class=daolist href="__APP__/TeachInfo/tehlist" target=_blank>专业教师库</a>
                <a class=daolistc href="__URL__/huiyuan_jjxx" target="mainFrame">我的家教信息</a>
                <a class=daolistc href="__URL__/huiyuan_wdyy" target="mainFrame">我的预约</a>
                <a class=daolist href="__URL__/huiyuan_znxx" target="mainFrame">联系记录</a>
            </div>
            <div class=dh1>
                <div class=tl1>
                    <a href="__APP__/Login/logout">退出系统</a>
                </div>
            </div>
        </div>
        <div class=jyright>
            <div class=jyt1>
                <a href="__URL__/welcome" target="mainFrame"><img src="Public/member/images/d05.gif" width=10 height=11> 学生会员中心</a>
            </div>
            <div class=nr>
                欢迎您<span class=jyred> <?php echo ($member["ttedu_username"]); ?> </span>，您的会员编号是<span class=jyred> <?php echo ($member["ttedu_id"]); ?> </span>。<br>
                为了保证您的个人资料不被窃取或修改，请务必在离开时退出并关闭浏览器窗口！
            </div>
        </div>
        <div class=jyxx>
            <iframe src="__URL__/huiyuan_jjxx" width="100%" height="350" frameborder="0" name="mainFrame" onload="this.height=mainFrame.document.body.scrollHeight<350 ? 350: mainFrame.document.body.scrollHeight;">
            </iframe>
        </div>
    </div><?php endif; ?>
<div>
</div>
<div>
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
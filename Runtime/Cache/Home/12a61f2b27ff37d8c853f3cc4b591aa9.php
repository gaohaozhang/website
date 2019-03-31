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
				<strong>当前位置：</strong><a href="__APP__/index/index">首页</a>&gt; <strong >上海地区请家教</strong>
			</p>
		</div>
		<div class="tit01 clearfix">
			<div class=Ptit01T1>
				<i class="fa fa-fax"></i> <span class=tttext>发布家教信息</span>
			</div>
			<div style="margin-left:531px;">
				带<strong class=red>*</strong>的为必填信息
			</div>
			<div class=loginb5>
				<fieldset>
					<form id=qingjiajiao onsubmit="return CheckValue(this)" name=qingjiajiao method=post action="__URL__/insert">
						<div class=btbg2>
							<img src="Public/images/d19.gif"><strong>请填写您的联系方式 </strong>
						</div>
						<div>
							<label for=confirm_password><strong class=red>*</strong>发布人称呼</label><input id=contact_name class=zcinput maxlength=15 size=30 type=text name=ttedu_chengfu><span class=zsbg>例如:王女士</span>
						</div>
						<div>
							<label for=checkbox>固定电话</label><input id=contact_telephone class=zcinput maxlength=50 size=30 type=text name=ttedu_zuoji value="<?php echo ($member["ttedu_zuoji"]); ?>"><span class=zsbg>可填多个，请注明(宅、办)</span>
						</div>
						<div>
							<label for=checkbox><strong class=red>*</strong>移动电话</label><input id=contact_mobile class=zcinput maxlength=50 size=30 type=text name=ttedu_shouji value="<?php echo ($member["ttedu_shouji"]); ?>"><span class=zsbg>便于短信通知。该信息不会在网上公布</span>
						</div>
						<div>
							<label for=checkbox>QQ号码</label><input class=zcinput maxlength=50 size=30 type=text name=ttedu_qq value="<?php echo ($member["ttedu_qq"]); ?>">
						</div>
						<div>
							<label for=checkbox>email号码</label><input class=zcinput maxlength=50 size=30 type=text name=ttedu_email value="<?php echo ($member["ttedu_email"]); ?>">
						</div>
						<div>
							<label for=confirm_password>您所在的位置地区</label>
							<select name="ttedu_shoukediqu" id="teach_place">
								<option selected="selected" value="">请选择</option>
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
						</div>
						<div>
							<label for=label>家庭住址</label><input id=way1 class=zcinput size=35 name=ttedu_address></span><span class=zsbg>填写您家庭的消息地址</span>
						</div>
						<div>
							<label for=label>公交线路说明</label><input class=zcinput size=35 name=ttedu_nalugongjiao></span><span class=zsbg>填写您家庭乘车路线</span>
						</div>
						<div class=btbg2>
							<img src="Public/images/d19.gif"><strong>请填写学员的基本信息</strong>
						</div>
						<div>
							<label for=label>学生性别</label>
							<input value="男" type="radio" name="ttedu_sex" <?php if(($member["ttedu_sex"])  ==  "男"): ?>checked<?php endif; ?> > 男 <input value="女" type="radio" name="ttedu_sex" <?php if(($member["ttedu_sex"])  !=  "男"): ?>checked<?php endif; ?> > 女
						</div>
						<div>
							<label for=label><strong class=red>*</strong>学生年龄</label><input type="text" name="ttedu_old" class="zcinput" size="5" value="<?php echo ($member["ttedu_old"]); ?>"/>&nbsp;岁
						</div>
						<div>
							<label for=label>学生人数</label><input type="text" name="ttedu_xueshengrenshu" class="zcinput" value="1" size="5"/>&nbsp;人
						</div>
						<div>
							<label for=label><strong class=red>*</strong>求教学科</label><input id=teach_subject class=zcinput size=20 type=text name=ttedu_nianjikemu><span class=zsbg>例如:高三语文</span>
						</div>
						<div>
							<label for=label>可上课时间</label><input id=teach_time class=zcinput size=20 type=text name=ttedu_jutishijian><span class=zsbg>例如:每周六下午2点到4点</span>
						</div>
						<div align=center>
							<label for=label>每周上课次数：</label>
							<input class=zcinput value="" type=text name="ttedu_meizhoucishu" size="5"> &nbsp;次
						</div>
						<div align=center>
							<label for=label>每次上课时间：</label>
							<input class=zcinput value="" type=text name="ttedu_meicishijian" size="5">&nbsp;小时
						</div>
						<div align=center>
							<label for=label>每小时报酬：</label>
							<input class=zcinput value="" type=text name="ttedu_meixiaoshibaochou" size="5"> &nbsp;元
						</div>
						<div class=btbg2>
							<img src="Public/images/d19.gif"><strong>请填写您对教员的要求</strong>
						</div>
						<div>
							<label for=label>教员性别</label><input value=男 type=radio name=ttedu_techersex> 男 <input value=女 type=radio name=ttedu_techersex> 女 <input value="不限" checked type=radio name=ttedu_techersex> 不限
						</div>
						<div>
							<label for=label>对老师的要求</label><textarea id=teacher_request class=zcinput rows=5 cols=24 name=ttedu_laoshiyaoqiu></textarea>
							<span class=zsbg>如对教员的学历，教学经验，性格等要求</span>
						</div>
						<div>
							<label for=label>其他要求</label><textarea class=zcinput rows=5 cols=24 name=ttedu_qitayaoqiu></textarea>
						</div>
						<div class=ac>
							<input style="CURSOR: pointer" class=butblue value="确 定" type=submit name=submit1>
							<input style="CURSOR: pointer" class=butblue value=重　置 type=reset name=reset1>
						</div>
					</form>
				</fieldset>
			</div>
		</div>
	</div>
	<!--右区结束，左区开始-->
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
<?php if (!defined('THINK_PATH')) exit();?><!--头部部分-->
<!DOCTYPE html>
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
<script type="text/javascript" src="__PUBLIC__/Js/Jquery/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Jquery/jquery.form.js"></script>
<script language="JavaScript">
    <!--
    $(function(){
        $('#form1').ajaxForm({
            beforeSubmit:  checkForm,  // pre-submit callback
            success:       complete,  // post-submit callback
            dataType: 'json'
        });
        function checkForm(){
            if( '' == $.trim($('#newusername').val())){
                $('#result').html('用户名不能为空').show();
                return false;
            }
            //可以在此添加其它判断
        }
        function complete(data){
            if (data.status==1)
            {
                $('#result').html(data.info).show();
                // 更新列表
                data = data.data;
                var html =  '<div class="result" style=\'font-weight:normal;background:#A6FF4D\'><div style="border-bottom:1px dotted silver">'+data.title+'  ['+data.email+data.create_time+']</div><div class="content">'+data.content+'</div></div>';
                $('#list').prepend(html);
            }else{
                $('#result').html(data.info).show();
            }
        }
    });
    function checkTitle(){
        $.post('__URL__/checkuser',{'ttedu_username':$('#newusername').val()},function(data){
            $('#result').html(data.info).show();
        },'json');
    }
    //-->
    function checkpass()
    {
        var psslen=document.getElementById('newuserpassword').value.length;
        if(psslen<6)
        {
            //alert(document.getElementById('jieguo1').html);
            // document.getElementById('jieguo1').innerText="密码长度小于了六位!";
            $('#jieguo1').html('密码长度小于了六位!').show();
        }
        else if(psslen>10)
        {
            $('#jieguo1').html('密码长度大于于了十位!').show();
        }
        else
        {
            $('#jieguo1').html('密码长度适合!').show();
        }
    }
</script>
<div class="main mainbg clearfix">
    <div class=PleftM>
        <div class=rcur>
            <p>
                <strong>当前位置：</strong><a href="__APP__/index/index">首页</a>&gt; <strong class=red>会员注册</strong>
            </p>
        </div>
        <div class="tit01 clearfix">
            <div class=Ptit01T1>
                <img src="Public/images/d10.gif"><span class=tttext>会员注册</span>
            </div>
            <div class=loginb5>
                <fieldset>
                    <form id=qingjiajiao onsubmit="return CheckValue(this)" name=qingjiajiao method=post action="__URL__/insert">
                        <div class=btbg2>
                            <img src="Public/images/d19.gif"><strong>请填写您的登录信息 </strong>
                        </div>
                        <div>
                            <label for=confirm_password><strong class=red>*</strong>请输入新用户名</label>
                            <input onblur="checkTitle()" id=newusername class=zcinput onchange="checkTitle()" onkeyup="value=value.replace(/[\W]/g, '')" maxlength=15 size=18 type=text name="ttedu_username">
                            <span id=result class=zsbg>必须由英文字母或字母、数字组合组成</span>
                        </div>
                        <div>
                            <label for=checkbox><strong class=red>*</strong>请输入您的密码</label><input id=newuserpassword class=zcinput maxlength=15 size=18 type=password name="ttedu_password" onblur="checkpass()" onchange="checkpass()"><span class=zsbg id="jieguo1">请不少于六位、不超过十位</span>
                        </div>
                        <div>
                            <label for=confirm_password><strong class=red>*</strong>请重复输入密码</label>
                            <input id=re_newuserpassword class=zcinput maxlength=15 size=18 type=password name="ttedu_password2">
                        </div>
                        <div class=btbg2>
                            <img src="Public/images/d19.gif"><strong>请填写您的基本信息</strong>
                        </div>
                        <div>
                            <label for=label>学生性别</label>
                            <input value="男" type="radio" name="ttedu_sex"> 男 <input value="女" type="radio" name="ttedu_sex"> 女
                        </div>
                        <div>
                            <label for=label>年龄</label><input type="text" name="ttedu_old" class="zcinput" size="5" value=""/>&nbsp;岁
                        </div>
                        <div>
                            <label for=label>出生年月</label><input id=way1 class=zcinput size=30 name="ttedu_birth"></span>
                        </div>
                        <div>
                            <label for=checkbox>固定电话</label><input id=contact_telephone class=zcinput maxlength=50 size=30 type=text name="ttedu_zuoji" value="">
                        </div>
                        <div>
                            <label for=checkbox>移动电话</label><input id=contact_mobile class=zcinput maxlength=50 size=30 type=text name="ttedu_shouji" value="">
                        </div>
                        <div>
                            <label for=checkbox>QQ号码</label><input id=contact_telephone class=zcinput maxlength=50 size=30 type=text name="ttedu_qq" value="">
                        </div>
                        <div>
                            <label for=checkbox>email号码</label><input id=contact_telephone class=zcinput maxlength=50 size=30 type=text name="ttedu_email" value="">
                        </div>
                        <div class=ac>
                            <input style="CURSOR: pointer" class=butblue value="　确 定　" type=submit name=submit1>
                            <input style="CURSOR: pointer" class=butblue value=重　置 type=reset name=reset1>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    <!--右区结束，左区开始-->
    <div class=PrightM>
        <div class=qqqjj>
            <h3>1027405904</h3>
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
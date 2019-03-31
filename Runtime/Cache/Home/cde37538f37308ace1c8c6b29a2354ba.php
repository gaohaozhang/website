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
<script type=text/javascript src="Public/js/moveloc.js"></script>
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
<script language=javascript>
    function showhidden(obj)
    {
        //进行radio的检查
        var a = obj.value;
        var in1 = document.getElementById('inden1');
        var in2 = document.getElementById('inden2');
        var in3 = document.getElementById('inden3');
        var na1 = document.getElementById('native1');
        var na2 = document.getElementById('native2');
        var te1 = document.getElementById('teacher1');
        var st1 = document.getElementById('student1');
        var sc1 = document.getElementById('school1');
        if(a == "a")
        {
            in1.style.display="block";
            in2.style.display="none";
            in3.style.display="none";
            na1.style.display="block";
            sc1.style.display="none";
            na2.style.display="none";
            te1.style.display="none";
            st1.style.display="block";
        }
        else if(a == "b"){
            in2.style.display="block";
            in1.style.display="none";
            in3.style.display="none";
            na1.style.display="block";
            sc1.style.display="none";
            na2.style.display="none";
            te1.style.display="block";
            st1.style.display="none";
        }
        else if(a == "c"){
            in3.style.display="block";
            in1.style.display="none";
            in2.style.display="none";
            na1.style.display="none";
            sc1.style.display="block";
            na2.style.display="block";
            te1.style.display="none";
            st1.style.display="none";
        }
        else if(a == "d"){
            in3.style.display="none";
            in1.style.display="none";
            in2.style.display="none";
            na1.style.display="block";
            sc1.style.display="block";
            na2.style.display="none";
            te1.style.display="none";
            st1.style.display="none";
        }else{
            alert("身份类型!!");
            return;
        }
    }
    function CheckValue(adForm)
    {
        if(!document.register.acceptxieyi.checked)
        {
            alert("请仔细阅读注册条款，并接受该条款以继续");
            document.register.acceptxieyi.focus();
            return (false);
        }
        var values="";
        var locs = document.register.SecondTeachPlace;
        for(var x=0;x<locs.length;x++){
            values=values+locs.options[x].value+",";
        }
        document.register.ttedu_jiajiaodiqu.value=values;
        var values="";
        var locs = document.register.MyFirstJob;
        for(var x=0;x<locs.length;x++){
            values=values+locs.options[x].value+",";
        }
        document.register.ttedu_renjiaoxueke.value=values;
        //alert(document.register.ttedu_renjiaoxueke.value);
        return true;
    }
</script>
<div class=zucebg style="margin-left:auto; margin-right:auto; width:805px; ">
  <div class=content>
    <div class=loginb3>
      <div class="xg p14">
        <strong class=red><img hspace=2 src="Public/images/d04.gif"> 注册步骤：</strong><span class=green><strong>1.填写信息</strong></span> &gt; 2.填写家教相关信息 &gt; 3.注册成功
      </div>
      <fieldset>
        <form id='register' onsubmit="return CheckValue(this)" method=post name=adForm action="__URL__/insert">
          <div class=btbg1>
            <img src="Public/images/zcimg1.gif">请选择密码用户名、身份
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>请输入新用户名</label>
            <input onblur="checkTitle()" onkeyup="value=value.replace(/[\W]/g, '')" id=newusername class=zcinput onchange="checkTitle()" maxlength=15 size=18 type=text name="ttedu_username">
            <span id=result class=zsbg>必须由英文字母或字母、数字组合组成</span>
          </div>
          <div>
            <label for=checkbox><strong class=red>*</strong>请输入您的密码</label><input onblur="checkpass()" onchange="checkpass()" id=newuserpassword class=zcinput maxlength=15 size=18 type=password name="ttedu_password"><span class=zsbg id="jieguo1">请不少于六位、不超过十位</span>
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>请重复输入密码</label>
            <input id=re_newuserpassword class=zcinput maxlength=15 size=18 type=password name="ttedu_password2">
          </div>
          <div>
            <label for=confirm_password><img src="Public/images/zcimg4.gif" width=18 height=15>选择身份</label><input id=indentity_flag onclick="return showhidden(this)" value="a" type=radio name="ttedu_mqshengfei"> 在校大学生(研究生) ,不含留学生
          </div>
          <div>
            <label for=confirm_password></label><input id=indentity_flag onclick="return showhidden(this)" value="b" type=radio name="ttedu_mqshengfei"> 教师(在职/进修/离职/退休)
          </div>
          <div>
            <label for=confirm_password></label><input id=indentity_flag onclick="return showhidden(this)" value="c" type=radio name="ttedu_mqshengfei"> 外籍人士(含留学生、外教，海归人员)
          </div>
          <div>
            <label for=confirm_password></label><input id=indentity_flag onclick="return showhidden(this)" value="d" type=radio name="ttedu_mqshengfei"> 其他(已经毕业离校的人员)
          </div>
          <div class=zctk>
            是否同意注册条款 <input id=acceptxieyi value=checkbox checked type=checkbox name=acceptxieyi><strong class=red>是</strong>
          </div>
          <div class=btbg2>
            <img src="Public/images/zcimg2.gif">请填写基本信息
          </div>
          <div class=zsbg>
            注意：(1)一经填写不得修改，与证件不符将不能通过认证(除外籍人士外禁止英文或拼音)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2)出于隐私考虑，本网将只显示您的姓，如“王明”只显示为“王教员”。
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>真实姓名</label><input id=real_name class=zcinput maxlength=15 size=10 type=text name="ttedu_chenfu"><span class=zsbg>此项将严格保密，请写真实姓名</span>
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>性 别</label><input id=sex value=男 checked type=radio name="ttedu_sex">男 <input id=sex value=女 type=radio name="ttedu_sex">女
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>出生日期</label><input id=born class=zcinput maxlength=20 size=20 type=text name="ttedu_birth"><span class=zsbg>例如：1960-07-15</span>
          </div>
          <div>
            <div class=div7 for="confirm_password">
              <strong class=red>*</strong>出生地
            </div>
            <!-- 地区隐藏开始 -->
            <div class=div6>
              <div style="DISPLAY: none" id=native2 class=zc1div1>
                <select id=native_place size=1 name="ttedu_jiguan">
                  <option selected value="">请选择国家</option>
                  <option value=----亚洲-------->----亚洲--------</option>
                  <option value=中国>中国</option>
                  <option value=香港>香港</option>
                  <option value=台湾>台湾</option>
                  <option value=澳门>澳门</option>
                  <option value=日本>日本</option>
                  <option value=韩国>韩国</option>
                  <option value=印度>印度</option>
                  <option value=泰国>泰国</option>
                  <option value=伊朗>伊朗</option>
                  <option value=以色列>以色列</option>
                  <option value=土耳其>土耳其</option>
                  <option value=新加坡>新加坡</option>
                  <option value=菲律宾>菲律宾</option>
                  <option value=马来西亚>马来西亚</option>
                  <option value=格鲁吉亚>格鲁吉亚</option>
                  <option value=印度尼西亚>印度尼西亚</option>
                  <option value=沙特阿拉伯>沙特阿拉伯</option>
                  <option value=哈萨克斯坦>哈萨克斯坦</option>
                  <option value=塔吉克斯坦>塔吉克斯坦</option>
                  <option value=土库曼斯坦>土库曼斯坦</option>
                  <option value=乌兹别克斯坦>乌兹别克斯坦</option>
                  <option value=吉尔吉斯斯坦>吉尔吉斯斯坦</option>
                  <option value=（其他亚洲国家）>（其他亚洲国家）</option>
                  <option value=""></option>
                  <option value=----欧洲-------->----欧洲--------</option>
                  <option value=英国>英国</option>
                  <option value=法国>法国</option>
                  <option value=德国>德国</option>
                  <option value=爱尔兰>爱尔兰</option>
                  <option value=俄罗斯>俄罗斯</option>
                  <option value=乌克兰>乌克兰</option>
                  <option value=立陶宛>立陶宛</option>
                  <option value=白俄罗斯>白俄罗斯</option>
                  <option value=摩尔多瓦>摩尔多瓦</option>
                  <option value=爱沙尼亚>爱沙尼亚</option>
                  <option value=拉脱维亚>拉脱维亚</option>
                  <option value=瑞士>瑞士</option>
                  <option value=丹麦>丹麦</option>
                  <option value=挪威>挪威</option>
                  <option value=瑞典>瑞典</option>
                  <option value=荷兰>荷兰</option>
                  <option value=芬兰>芬兰</option>
                  <option value=冰岛>冰岛</option>
                  <option value=波兰>波兰</option>
                  <option value=捷克>捷克</option>
                  <option value=希腊>希腊</option>
                  <option value=西班牙>西班牙</option>
                  <option value=葡萄牙>葡萄牙</option>
                  <option value=意大利>意大利</option>
                  <option value=匈牙利>匈牙利</option>
                  <option value=奥地利>奥地利</option>
                  <option value=比利时>比利时</option>
                  <option value=卢森堡>卢森堡</option>
                  <option value=马其顿>马其顿</option>
                  <option value=克罗地亚>克罗地亚</option>
                  <option value=斯洛伐克>斯洛伐克</option>
                  <option value=南斯拉夫>南斯拉夫</option>
                  <option value=罗马尼亚>罗马尼亚</option>
                  <option value=保加利亚>保加利亚</option>
                  <option value=阿尔巴尼亚>阿尔巴尼亚</option>
                  <option value=（其他欧洲国家）>（其他欧洲国家）</option>
                  <option value=""></option>
                  <option value=----美州-------->----美州--------</option>
                  <option value=美国>美国</option>
                  <option value=加拿大>加拿大</option>
                  <option value=格陵兰>格陵兰</option>
                  <option value=墨西哥>墨西哥</option>
                  <option value=巴拿马>巴拿马</option>
                  <option value=危地马拉>危地马拉</option>
                  <option value=洪都拉斯>洪都拉斯</option>
                  <option value=尼加拉瓜>尼加拉瓜</option>
                  <option value=古巴>古巴</option>
                  <option value=海地>海地</option>
                  <option value=牙买加>牙买加</option>
                  <option value=多米尼加>多米尼加</option>
                  <option value=巴西>巴西</option>
                  <option value=秘鲁>秘鲁</option>
                  <option value=智利>智利</option>
                  <option value=巴拉圭>巴拉圭</option>
                  <option value=圭亚那>圭亚那</option>
                  <option value=阿根廷>阿根廷</option>
                  <option value=乌拉圭>乌拉圭</option>
                  <option value=委内瑞拉>委内瑞拉</option>
                  <option value=哥伦比亚>哥伦比亚</option>
                  <option value=厄瓜多尔>厄瓜多尔</option>
                  <option value=玻利维亚>玻利维亚</option>
                  <option value=（其他美洲国家）>（其他美洲国家）</option>
                  <option value=""></option>
                  <option value=----大洋州------>----大洋州------</option>
                  <option value=新西兰>新西兰</option>
                  <option value=澳大利亚>澳大利亚</option>
                  <option value=巴步亚新几内亚>巴步亚新几内亚</option>
                  <option value=（其他大洋州国家）>（其他大洋州国家）</option>
                  <option value=""></option>
                  <option value=----非州-------->----非州--------</option>
                  <option value=南非>南非</option>
                  <option value=埃及>埃及</option>
                  <option value=马里>马里</option>
                  <option value=利比亚>利比亚</option>
                  <option value=尼日尔>尼日尔</option>
                  <option value=摩洛哥>摩洛哥</option>
                  <option value=纳米比亚>纳米比亚</option>
                  <option value=尼日利亚>尼日利亚</option>
                  <option value=阿尔及利亚>阿尔及利亚</option>
                  <option value=毛里塔尼亚>毛里塔尼亚</option>
                  <option value=（其他非洲国家）>（其他非洲国家）</option>
                </select>
              </div>
              <div style="DISPLAY: block" id=native1>
                <select id=born_place name="ttedu_jiguan">
                  <option selected value="">请选择</option>
                  <option value=北京>北京</option>
                  <option value=天津>天津</option>
                  <option value=重庆>重庆</option>
                  <option value=上海>上海</option>
                  <option value=安徽>安徽</option>
                  <option value=江苏>江苏</option>
                  <option value=浙江>浙江</option>
                  <option value=福建>福建</option>
                  <option value=甘肃>甘肃</option>
                  <option value=广东>广东</option>
                  <option value=广西>广西</option>
                  <option value=贵州>贵州</option>
                  <option value=海南>海南</option>
                  <option value=河北>河北</option>
                  <option value=河南>河南</option>
                  <option value=黑龙江>黑龙江</option>
                  <option value=湖北>湖北</option>
                  <option value=湖南>湖南</option>
                  <option value=吉林>吉林</option>
                  <option value=江西>江西</option>
                  <option value=辽宁>辽宁</option>
                  <option value=内蒙>内蒙</option>
                  <option value=宁厦>宁厦</option>
                  <option value=青海>青海</option>
                  <option value=山东>山东</option>
                  <option value=山西>山西</option>
                  <option value=陕西>陕西</option>
                  <option value=四川>四川</option>
                  <option value=西藏>西藏</option>
                  <option value=香港>香港</option>
                  <option value=台湾>台湾</option>
                  <option value=新疆>新疆</option>
                  <option value=云南>云南</option>
                </select>
                省
              </div>
            </div>
            <!-- 地区隐藏结束 -->
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>目前学历</label>
            <select id=educational_level name="ttedu_mqxueli">
              <option selected value="">请选择学历</option>
              <option value=大专以下>大专以下</option>
              <option value=大专在读>大专在读</option>
              <option value=大专毕业>大专毕业</option>
              <option value=本科在读>本科在读</option>
              <option value=本科毕业>本科毕业</option>
              <option value=研究生在读>研究生在读</option>
              <option value=硕士在读>硕士在读</option>
              <option value=硕士毕业>硕士毕业</option>
              <option value=博士在读>博士在读</option>
              <option value=博士毕业>博士毕业</option>
            </select>
          </div>
          <!--
<DIV><LABEL for=confirm_password><STRONG class=red>*</STRONG>身份证/护照</LABEL>
<INPUT id=id_card class=zcinput maxLength=50 size=35 type=text name="ttedu_shenfenzheng">
<SPAN class=zsbg>此项将严格保密，不对外公开</SPAN> </DIV>
-->
          <div>
            <label for=confirm_password><strong class=red>*</strong>专 业</label>
            <input id=major class=zcinput maxlength=20 size=35 type=text name="ttedu_zhuanye"><span class=zsbg>请中文相关专业统一填写"中文"</span>
          </div>
          <!-- 身份隐藏区域开始 -->
          <div style="DISPLAY: none" id=inden1>
            <label for=confirm_password><strong class=red>*</strong>目前身份</label>
            <select id=indentity_stu size=1 name="ttedu_mqshengfei1">
              <option selected value="">请选择身份</option>
              <option value=自学考试学生>自学考试生</option>
              <option value=函授（网络）学生>函授（网络）学生</option>
              <option value=成教学生>成教学生</option>
              <option value=在校大一学生>在校大一学生</option>
              <option value=在校大二学生>在校大二学生</option>
              <option value=在校大三学生>在校大三学生</option>
              <option value=在校大四学生>在校大四学生</option>
              <option value=在校大五学生>在校大五学生</option>
              <option value=在读硕士学生>在读硕士生</option>
              <option value=硕士进修老师>硕士进修老师</option>
              <option value=在读博士学生>在读博士生</option>
              <option value=其他学生>其他学生</option>
            </select>
          </div>
          <div style="DISPLAY: none" id=inden2>
            <label for=confirm_password><strong class=red>*</strong>目前身份</label>
            <select id=indentity_tea name="ttedu_mqshengfei2">
              <option selected value="">请选择身份</option>
              <option value=离职幼儿教师>离职幼儿教师</option>
              <option value=退休幼儿教师>退休幼儿教师</option>
              <option value=进修幼儿教师>进修幼儿教师</option>
              <option value=在职幼儿教师>在职幼儿教师</option>
              <option value=""></option>
              <option value=离职小学教师>离职小学教师</option>
              <option value=退休小学教师>退休小学教师</option>
              <option value=进修小学教师>进修小学教师</option>
              <option value=在职小学教师>在职小学教师</option>
              <option value=""></option>
              <option value=离职初中教师>离职初中教师</option>
              <option value=退休初中教师>退休初中教师</option>
              <option value=进修初中教师>进修初中教师</option>
              <option value=在职初中教师>在职初中教师</option>
              <option value=""></option>
              <option value=离职高中教师>离职高中教师</option>
              <option value=退休高中教师>退休高中教师</option>
              <option value=进修高中教师>进修高中教师</option>
              <option value=在职高中教师>在职高中教师</option>
              <option value=""></option>
              <option value=硕士进修老师>硕士进修老师</option>
              <option value=离职大学教师>离职大学教师</option>
              <option value=退休大学教师>退休大学教师</option>
              <option value=在职大学教师>在职大学教师</option>
              <option value=""></option>
              <option value=离职专业培训机构教师>离职专业培训机构教师</option>
              <option value=退休专业培训机构教师>退休专业培训机构教师</option>
              <option value=进修专业培训机构教师>进修专业培训机构教师</option>
              <option value=在职专业培训机构教师>在职专业培训机构教师</option>
              <option value=""></option>
              <option value=其他教师>其他教师</option>
            </select>
          </div>
          <div style="DISPLAY: none" id=inden3>
            <label for=confirm_password><strong class=red>*</strong>目前身份</label>
            <select id=indentity_out name="ttedu_mqshengfei3">
              <option selected value="">请选择身份</option>
              <option value=海外工作归国人员>海外工作归国人员</option>
              <option value=海外留学归国人员>海外留学归国人员</option>
              <option value=海外华侨>海外华侨</option>
              <option value=外籍华人>外籍华人</option>
              <option value=外籍教师>外籍教师</option>
              <option value=外籍留学生>外籍留学生</option>
              <option value=普通外籍人士>普通外籍人士</option>
            </select>
          </div>
          <!-- 身份隐藏区域结束  -->
          <!-- 学生隐藏区域开始 -->
          <div style="DISPLAY: none" id=student1>
            <div>
              <label for=confirm_password><strong class=red>*</strong>就读高校</label>
              <select id=study_school name="ttedu_biyexuexiao1">
                <option selected value="">请选择高校</option>
                <option value=北京大学>北京大学</option>
                <option value=清华大学>清华大学</option>
                <option value=中国人民大学>中国人民大学</option>
                <option value=北京师范大学>北京师范大学</option>
                <option value=北京交通大学>北京交通大学</option>
                <option value=首都师范大学>首都师范大学</option>
                <option value=北京第二外国语学院>北京第二外国语学院</option>
                <option value=北京邮电大学>北京邮电大学</option>
                <option value=北京理工大学>北京理工大学</option>
                <option value=北京外国语大学>北京外国语大学</option>
                <option value=北京科技大学>北京科技大学</option>
                <option value=中央音乐学院>中央音乐学院</option>
                <option value=中央美术学院>中央美术学院</option>
                <option value=中国政法大学>中国政法大学</option>
                <option value=北京语言大学>北京语言大学</option>
                <option value=中央财经大学>中央财经大学</option>
                <option value=中国音乐学院>中国音乐学院</option>
                <option value=北京化工大学>北京化工大学</option>
                <option value=外交学院>外交学院</option>
                <option value=中央戏剧学院>中央戏剧学院</option>
                <option value=中国戏曲学院>中国戏曲学院</option>
                <option value=北京舞蹈学院>北京舞蹈学院</option>
                <option value=北京电影学院>北京电影学院</option>
                <option value=首都体育学院>首都体育学院</option>
                <option value=北京体育大学>北京体育大学</option>
                <option value=中国科学院研究生院>中国科学院研究生院</option>
                <option value=北京航空航天大学>北京航空航天大学</option>
                <option value=对外经济贸易大学>对外经济贸易大学</option>
                <option value=北京工业大学>北京工业大学</option>
                <option value=中国矿业大学(北京)>中国矿业大学(北京)</option>
                <option value=中国农业大学>中国农业大学</option>
                <option value=北京林业大学>北京林业大学</option>
                <option value=中央民族大学>中央民族大学</option>
                <option value=中国地质大学(北京)>中国地质大学(北京)</option>
                <option value=北方工业大学>北方工业大学</option>
                <option value=北京工商大学>北京工商大学</option>
                <option value=北京中医药大学>北京中医药大学</option>
                <option value=北京服装学院>北京服装学院</option>
                <option value=中国传媒大学>中国传媒大学</option>
                <option value=华北电力大学(北京)>华北电力大学(北京)</option>
                <option value=中国石油大学(北京)>中国石油大学(北京)</option>
                <option value=首都医科大学>首都医科大学</option>
                <option value=中国协和医科大学>中国协和医科大学</option>
                <option value=中国青年政治学院>中国青年政治学院</option>
                <option value=首都经济贸易大学>首都经济贸易大学</option>
                <option value=北京教育学院>北京教育学院</option>
                <option value=国际关系学院>国际关系学院</option>
                <option value=中华女子学院>中华女子学院</option>
                <option value=北京石油化工学院>北京石油化工学院</option>
                <option value=北京建筑工程学院>北京建筑工程学院</option>
                <option value=北京电子科技学院>北京电子科技学院</option>
                <option value=中国人民公安大学>中国人民公安大学</option>
                <option value=北京物资学院>北京物资学院</option>
                <option value=北京印刷学院>北京印刷学院</option>
              </select>
            </div>
            <!--
<DIV><LABEL for=confirm_password>高中母校</LABEL> <INPUT id=high_school
class=zcinput maxLength=50 size=35 type=text name=high_school> <SPAN
class=zsbg>请填全称！</SPAN> </DIV>
-->
          </div>
          <!-- 学生隐藏区域结束 -->
          <div style="DISPLAY: none" id=school1>
            <div>
              <label for=confirm_password><strong class=red>*</strong>毕业高校</label>
              <select id=tea_school2 name="ttedu_biyexuexiao3">
                <option selected value="">请选择高校</option>
                <option value=北京大学>北京大学</option>
                <option value=清华大学>清华大学</option>
                <option value=中国人民大学>中国人民大学</option>
                <option value=北京师范大学>北京师范大学</option>
                <option value=北京交通大学>北京交通大学</option>
                <option value=首都师范大学>首都师范大学</option>
                <option value=北京第二外国语学院>北京第二外国语学院</option>
                <option value=北京邮电大学>北京邮电大学</option>
                <option value=北京理工大学>北京理工大学</option>
                <option value=北京外国语大学>北京外国语大学</option>
                <option value=北京科技大学>北京科技大学</option>
                <option value=中央音乐学院>中央音乐学院</option>
                <option value=中央美术学院>中央美术学院</option>
                <option value=中国政法大学>中国政法大学</option>
                <option value=北京语言大学>北京语言大学</option>
                <option value=中央财经大学>中央财经大学</option>
                <option value=中国音乐学院>中国音乐学院</option>
                <option value=北京化工大学>北京化工大学</option>
                <option value=外交学院>外交学院</option>
                <option value=中央戏剧学院>中央戏剧学院</option>
                <option value=中国戏曲学院>中国戏曲学院</option>
                <option value=北京舞蹈学院>北京舞蹈学院</option>
                <option value=北京电影学院>北京电影学院</option>
                <option value=首都体育学院>首都体育学院</option>
                <option value=北京体育大学>北京体育大学</option>
                <option value=中国科学院研究生院>中国科学院研究生院</option>
                <option value=北京航空航天大学>北京航空航天大学</option>
                <option value=对外经济贸易大学>对外经济贸易大学</option>
                <option value=北京工业大学>北京工业大学</option>
                <option value=中国矿业大学(北京)>中国矿业大学(北京)</option>
                <option value=中国农业大学>中国农业大学</option>
                <option value=北京林业大学>北京林业大学</option>
                <option value=中央民族大学>中央民族大学</option>
                <option value=中国地质大学(北京)>中国地质大学(北京)</option>
                <option value=北方工业大学>北方工业大学</option>
                <option value=北京工商大学>北京工商大学</option>
                <option value=北京中医药大学>北京中医药大学</option>
                <option value=北京服装学院>北京服装学院</option>
                <option value=中国传媒大学>中国传媒大学</option>
                <option value=华北电力大学(北京)>华北电力大学(北京)</option>
                <option value=中国石油大学(北京)>中国石油大学(北京)</option>
                <option value=首都医科大学>首都医科大学</option>
                <option value=中国协和医科大学>中国协和医科大学</option>
                <option value=中国青年政治学院>中国青年政治学院</option>
                <option value=首都经济贸易大学>首都经济贸易大学</option>
                <option value=北京教育学院>北京教育学院</option>
                <option value=国际关系学院>国际关系学院</option>
                <option value=中华女子学院>中华女子学院</option>
                <option value=北京石油化工学院>北京石油化工学院</option>
                <option value=北京建筑工程学院>北京建筑工程学院</option>
                <option value=北京电子科技学院>北京电子科技学院</option>
                <option value=中国人民公安大学>中国人民公安大学</option>
                <option value=北京物资学院>北京物资学院</option>
                <option value=北京印刷学院>北京印刷学院</option>
              </select>
            </div>
          </div>
          <!-- 教师隐藏区域开始 -->
          <div style="DISPLAY: none" id=teacher1>
            <div>
              <label for=confirm_password><strong class=red>*</strong>毕业高校</label>
              <select id=tea_school name="ttedu_biyexuexiao2">
                <option selected value="">请选择高校</option>
                <option value=北京大学>北京大学</option>
                <option value=清华大学>清华大学</option>
                <option value=中国人民大学>中国人民大学</option>
                <option value=北京师范大学>北京师范大学</option>
                <option value=北京交通大学>北京交通大学</option>
                <option value=首都师范大学>首都师范大学</option>
                <option value=北京第二外国语学院>北京第二外国语学院</option>
                <option value=北京邮电大学>北京邮电大学</option>
                <option value=北京理工大学>北京理工大学</option>
                <option value=北京外国语大学>北京外国语大学</option>
                <option value=北京科技大学>北京科技大学</option>
                <option value=中央音乐学院>中央音乐学院</option>
                <option value=中央美术学院>中央美术学院</option>
                <option value=中国政法大学>中国政法大学</option>
                <option value=北京语言大学>北京语言大学</option>
                <option value=中央财经大学>中央财经大学</option>
                <option value=中国音乐学院>中国音乐学院</option>
                <option value=北京化工大学>北京化工大学</option>
                <option value=外交学院>外交学院</option>
                <option value=中央戏剧学院>中央戏剧学院</option>
                <option value=中国戏曲学院>中国戏曲学院</option>
                <option value=北京舞蹈学院>北京舞蹈学院</option>
                <option value=北京电影学院>北京电影学院</option>
                <option value=首都体育学院>首都体育学院</option>
                <option value=北京体育大学>北京体育大学</option>
                <option value=中国科学院研究生院>中国科学院研究生院</option>
                <option value=北京航空航天大学>北京航空航天大学</option>
                <option value=对外经济贸易大学>对外经济贸易大学</option>
                <option value=北京工业大学>北京工业大学</option>
                <option value=中国矿业大学(北京)>中国矿业大学(北京)</option>
                <option value=中国农业大学>中国农业大学</option>
                <option value=北京林业大学>北京林业大学</option>
                <option value=中央民族大学>中央民族大学</option>
                <option value=中国地质大学(北京)>中国地质大学(北京)</option>
                <option value=北方工业大学>北方工业大学</option>
                <option value=北京工商大学>北京工商大学</option>
                <option value=北京中医药大学>北京中医药大学</option>
                <option value=北京服装学院>北京服装学院</option>
                <option value=中国传媒大学>中国传媒大学</option>
                <option value=华北电力大学(北京)>华北电力大学(北京)</option>
                <option value=中国石油大学(北京)>中国石油大学(北京)</option>
                <option value=首都医科大学>首都医科大学</option>
                <option value=中国协和医科大学>中国协和医科大学</option>
                <option value=中国青年政治学院>中国青年政治学院</option>
                <option value=首都经济贸易大学>首都经济贸易大学</option>
                <option value=北京教育学院>北京教育学院</option>
                <option value=国际关系学院>国际关系学院</option>
                <option value=中华女子学院>中华女子学院</option>
                <option value=北京石油化工学院>北京石油化工学院</option>
                <option value=北京建筑工程学院>北京建筑工程学院</option>
                <option value=北京电子科技学院>北京电子科技学院</option>
                <option value=中国人民公安大学>中国人民公安大学</option>
                <option value=北京物资学院>北京物资学院</option>
                <option value=北京印刷学院>北京印刷学院</option>
              </select>
            </div>
            <div>
              <label for=confirm_password>(最近)任职学校</label>
              <input id=teach_school class=zcinput maxlength=50 size=35 type=text name="ttedu_renjiaoxuexiao">
            </div>
            <div>
              <label for=confirm_password>任教学科</label>
              <select id=teach_subject class=zcinput name="ttedu_zuinanshoukemu">
                <option selected value="">请选择任教学科</option>
                <option value=学前教育>学前教育</option>
                <option value=英语>英语</option>
                <option value=语文>语文</option>
                <option value=数学>数学</option>
                <option value=物理>物理</option>
                <option value=化学>化学</option>
                <option value=奥数>奥数</option>
                <option value=生物>生物</option>
                <option value=地理>地理</option>
                <option value=历史>历史</option>
                <option value=政治>政治</option>
                <option value=体育>体育</option>
                <option value=音乐>音乐</option>
                <option value=美术>美术</option>
                <option value=高等数学>高等数学</option>
                <option value=""></option>
                <option value=普通话>普通话</option>
                <option value=""></option>
                <option value=日语>日语</option>
                <option value=法语>法语</option>
                <option value=德语>德语</option>
                <option value=韩语>韩语</option>
                <option value=俄语>俄语</option>
                <option value=希腊语>希腊语</option>
                <option value=瑞典语>瑞典语</option>
                <option value=荷兰语>荷兰语</option>
                <option value=意大利语>意大利语</option>
                <option value=西班牙语>西班牙语</option>
                <option value=葡萄牙语>葡萄牙语</option>
                <option value=阿拉伯语>阿拉伯语</option>
                <option value=乌克兰语>乌克兰语</option>
                <option value=""></option>
                <option value=摄影>摄影</option>
                <option value=书法>书法</option>
                <option value=舞蹈>舞蹈</option>
                <option value=声乐>声乐</option>
                <option value=钢琴>钢琴</option>
                <option value=电子琴>电子琴</option>
                <option value=小提琴>小提琴</option>
                <option value=大提琴>大提琴</option>
                <option value=长笛>长笛</option>
                <option value=吉它>吉它</option>
                <option value=手风琴>手风琴</option>
                <option value=萨克斯>萨克斯</option>
                <option value=单簧管>单簧管</option>
                <option value=双簧管>双簧管</option>
                <option value=打击乐>打击乐</option>
                <option value=小号>小号</option>
                <option value=大号>大号</option>
                <option value=圆号>圆号</option>
                <option value=打击乐>打击乐</option>
                <option value=二胡>二胡</option>
                <option value=笛子>笛子</option>
                <option value=琵琶>琵琶</option>
                <option value=古筝>古筝</option>
                <option value=唢呐>唢呐</option>
                <option value=扬琴>扬琴</option>
                <option value=柳琴>柳琴</option>
                <option value=中阮>中阮</option>
                <option value=古琴>古琴</option>
                <option value=三弦>三弦</option>
                <option value=板胡>板胡</option>
                <option value=""></option>
                <option value=计算机>计算机</option>
                <option value=数据库>数据库</option>
                <option value=网页设计与制作>网页设计与制作</option>
                <option value=Linux或Unix>Linux或Unix</option>
                <option value=图像处理软件>图像处理软件</option>
                <option value=动画制作>动画制作</option>
                <option value=程序设计>程序设计</option>
                <option value=""></option>
                <option value=围棋>围棋</option>
                <option value=中国象棋>中国象棋</option>
                <option value=国际象棋>国际象棋</option>
                <option value=""></option>
                <option value=中国武术>中国武术</option>
                <option value=气功>气功</option>
                <option value=拳击柔道跆拳道>拳击柔道跆拳道</option>
                <option value=交谊舞>交谊舞</option>
                <option value=跆拳道>跆拳道</option>
                <option value=空手道>空手道</option>
                <option value=瑜珈>瑜珈</option>
                <option value=体操>体操</option>
                <option value=健身减肥养身>健身减肥养身</option>
                <option value=滑雪滑冰旱冰>滑雪滑冰旱冰</option>
                <option value=游泳潜水跳水>游泳潜水跳水</option>
                <option value=高尔夫>高尔夫</option>
                <option value=保龄球>保龄球</option>
                <option value=乒乓球>乒乓球</option>
                <option value=羽毛球>羽毛球</option>
                <option value=网球>网球</option>
                <option value=足球>足球</option>
                <option value=篮球>篮球</option>
                <option value=排球>排球</option>
                <option value=体育健身类其他>体育健身类其他</option>
                <option value=""></option>
                <option value=其他学科>其他学科</option>
              </select>
            </div>
            <div>
              <label for=confirm_password>任职学校类别</label>
              <select id=important_level name="ttedu_xuexiaoleibie">
                <option selected value="">请选择类别</option>
                <option value=非北京地区幼儿园>非北京地区幼儿园</option>
                <option value=非北京地区小学>非北京地区小学</option>
                <option value=非北京地区普通初中>非北京地区普通初中</option>
                <option value=非北京地区重点初中>非北京地区重点初中</option>
                <option value=非北京地区普通高中>非北京地区普通高中</option>
                <option value=非北京地区重点高中>非北京地区重点高中</option>
                <option value=非北京地区大学>非北京地区大学</option>
                <option value=非北京地区专业培训机构>非北京地区专业培训机构</option>
                <option value=非北京地区其他学校>非北京地区其他学校</option>
                <option value=北京，幼儿园>北京，幼儿园</option>
                <option value=北京，小学>北京，小学</option>
                <option value=北京，普通初中>北京，普通初中</option>
                <option value=北京，重点初中>北京，重点初中</option>
                <option value=北京，私立初中>北京，私立初中</option>
                <option value=北京，普通高中>北京，普通高中</option>
                <option value=北京，区重点高中>北京，区重点高中</option>
                <option value=北京，市重点高中>北京，市重点高中</option>
                <option value=北京，私立高中>北京，私立高中</option>
                <option value=北京，大学>北京，大学</option>
                <option value=北京，专业培训机构>北京，专业培训机构</option>
                <option value=北京，其他学校>北京，其他学校</option>
              </select>
            </div>
            <div>
              <label for=confirm_password>教 龄</label><input id=teach_age class=zcinput maxlength=15 size=35 type=text name="ttedu_old">
            </div>
            <!--
<DIV><LABEL for=confirm_password><STRONG class=red>*</STRONG>职称等级</LABEL>
<SELECT id=technical_level name=technical_level> <OPTION selected
value="">请选择职称等级</OPTION> <OPTION value=尚无职称等级>尚无职称等级</OPTION> <OPTION
value=幼儿教师>幼儿教师</OPTION> <OPTION value=小学二级教师>小学二级教师</OPTION> <OPTION
value=小学一级教师>小学一级教师</OPTION> <OPTION value=小学高级教师>小学高级教师</OPTION> <OPTION
value=小学特级教师>小学特级教师</OPTION> <OPTION value=中学二级教师>中学二级教师</OPTION> <OPTION
value=中学一级教师>中学一级教师</OPTION> <OPTION value=中学高级教师>中学高级教师</OPTION> <OPTION
value=中学特级教师>中学特级教师</OPTION> <OPTION value=大学助教>大学助教</OPTION> <OPTION
value=大学讲师>大学讲师</OPTION> <OPTION value=副教授>副教授</OPTION> <OPTION
value=正教授>正教授</OPTION></SELECT> </DIV>
-->
          </div>
          <!-- 教师隐藏区域结束 -->
          <div class=btbg2>
            <img src="Public/images/zcimg2.gif">请填写联系方式
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>生活住所</label>
            <select id=address1 name="ttedu_address">
              <option selected value="">请选择生活住所</option>
              <option value=黄浦>黄浦</option>
              <option value=徐汇>徐汇</option>
              <option value=长宁>长宁</option>
              <option value=静安>静安</option>
              <option value=普陀>普陀</option>
              <option value=虹口>虹口</option>
              <option value=杨浦>杨浦</option>
              <option value=闵行>闵行</option>
              <option value=宝山>宝山</option>
              <option value=嘉定>嘉定</option>
              <option value=浦东新>浦东新</option>
              <option value=金山>金山</option>
              <option value=松江>松江</option>
              <option value=青浦>青浦</option>
              <option value=奉贤>奉贤</option>
            </select>
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>工作住所</label>
            <select id=address2 name="ttedu_gongzuozhusuo">
              <option selected value="">请选择工作住所</option>
              <option value=黄浦>黄浦</option>
              <option value=徐汇>徐汇</option>
              <option value=长宁>长宁</option>
              <option value=静安>静安</option>
              <option value=普陀>普陀</option>
              <option value=虹口>虹口</option>
              <option value=杨浦>杨浦</option>
              <option value=闵行>闵行</option>
              <option value=宝山>宝山</option>
              <option value=嘉定>嘉定</option>
              <option value=浦东新>浦东新</option>
              <option value=金山>金山</option>
              <option value=松江>松江</option>
              <option value=青浦>青浦</option>
              <option value=奉贤>奉贤</option>
            </select>
          </div>
          <div>
            <label for=confirm_password>电 话</label><input id=telephone class=zcinput maxlength=15 size=35 type=text name="ttedu_beiyongdianhua">
          </div>
          <div>
            <label for=confirm_password>MSN</label><input id=msn class=zcinput maxlength=20 size=35 type=text name="ttedu_msn">
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>手 机</label><input id=confirm_password4 class=zcinput maxlength=20 size=35 type=text name="ttedu_shouxuandianhua">
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>E_mail</label>
            <input id=email class=zcinput maxlength=50 size=35 type=text name="ttedu_email">
          </div>
          <div>
            <label for=confirm_password><strong class=red>*</strong>通信地址</label><input id=address3 class=zcinput maxlength=15 size=35 type=text name="ttedu_tongxundizhi">
          </div>
          <div>
            <label for=confirm_password>邮编</label><input id=post_code class=zcinput maxlength=15 size=35 type=text name="ttedu_youbian">
          </div>
          <div class=btbg2>
            <img src="Public/images/zcimg2.gif">家教相关信息
          </div>
          <div>
            <label for=confirm_password>辅导对象</label>
            <input id=sex value=男 type=radio name="ttedu_renjiaoduixiang">男 <input id=sex value=女 type=radio name="ttedu_renjiaoduixiang">女 <input id=sex value=不限 type=radio name="ttedu_renjiaoduixiang" checked>不限
          </div>
          <div>
            <label for=confirm_password>辅导方式</label>
            <input id=sex value=本人上门 type=radio name="ttedu_fudaofangshi">本人上门 <input id=sex value=学生上门 type=radio name="ttedu_fudaofangshi">学生上门 <input id=sex value=网上辅导 type=radio name="ttedu_fudaofangshi">网上辅导 <input id=sex value=不限 type=radio name="ttedu_fudaofangshi" checked>不限
          </div>
          <div>
            <div>
              <label for=confirm_password>薪水要求</label><input id=post_code class=zcinput maxlength=15 size=15 type=text name="ttedu_xingshuiyaoqiu" value="面议"> &nbsp;例如：50元/小时
            </div>
            <div>
              <div class=div1>
                <label for=confirm_password style="width:80px"><strong class=red>*</strong>可教授科目<br>
                  (最多选15项，多余部分将被系统自动丢弃！)</label>
                <select style="WIDTH: 170px" id="FirstJob" class="zcinput" size=10 name="FirstJob">
                  <option value=------------------>------------------</option>
                  <option value=学龄前课程>学龄前课程</option>
                  <option value=""></option>
                  <option value=小学全科>小学全科</option>
                  <option value=小学语文>小学语文</option>
                  <option value=小学数学>小学数学</option>
                  <option value=小学英语>小学英语</option>
                  <option value=小学奥数>小学奥数</option>
                  <option value=------------------>------------------</option>
                  <option value=初中全科>初中全科</option>
                  <option value=初中数理化>初中数理化</option>
                  <option value=初中历史>初中历史</option>
                  <option value=初中地理>初中地理</option>
                  <option value=初中生物>初中生物</option>
                  <option value=初中政治>初中政治</option>
                  <option value=初一初二语文>初一初二语文</option>
                  <option value=初一初二英语>初一初二英语</option>
                  <option value=初一初二数学>初一初二数学</option>
                  <option value=初一初二物理>初一初二物理</option>
                  <option value=初一初二化学>初一初二化学</option>
                  <option value=""></option>
                  <option value=初三语文>初三语文</option>
                  <option value=初三英语>初三英语</option>
                  <option value=初三数学>初三数学</option>
                  <option value=初三物理>初三物理</option>
                  <option value=初三化学>初三化学</option>
                  <option value=初中奥数>初中奥数</option>
                  <option value=中考心理辅导>中考心理辅导</option>
                  <option value=------------------>------------------</option>
                  <option value=高中全科>高中全科</option>
                  <option value=高中文综>高中文综</option>
                  <option value=高中数理化>高中数理化</option>
                  <option value=高中历史>高中历史</option>
                  <option value=高中地理>高中地理</option>
                  <option value=高中政治>高中政治</option>
                  <option value=高中生物>高中生物</option>
                  <option value=高一高二语文>高一高二语文</option>
                  <option value=高一高二英语>高一高二英语</option>
                  <option value=高一高二数学>高一高二数学</option>
                  <option value=高一高二物理>高一高二物理</option>
                  <option value=高一高二化学>高一高二化学</option>
                  <option value=""></option>
                  <option value=高三语文>高三语文</option>
                  <option value=高三英语>高三英语</option>
                  <option value=高三数学>高三数学</option>
                  <option value=高三物理>高三物理</option>
                  <option value=高三化学>高三化学</option>
                  <option value=高中奥数>高中奥数</option>
                  <option value=高考心理辅导>高考心理辅导</option>
                  <option value=------------------>------------------</option>
                  <option value=大学高等数学>大学高等数学</option>
                  <option value=精准普通话>精准普通话</option>
                  <option value=""></option>
                  <option value=----英语---------->----英语----------</option>
                  <option value=初级英语口语>初级英语口语</option>
                  <option value=初级新概念英语>初级新概念英语</option>
                  <option value=初级牛津英语>初级牛津英语</option>
                  <option value=初级剑桥英语>初级剑桥英语</option>
                  <option value=英语四级>英语四级</option>
                  <option value=英语六级>英语六级</option>
                  <option value=3E英语>3E英语</option>
                  <option value=GRE>GRE</option>
                  <option value=托福>托福</option>
                  <option value=雅思>雅思</option>
                  <option value=商务英语>商务英语</option>
                  <option value=精准英语语音>精准英语语音</option>
                  <option value=高级新概念英语>高级新概念英语</option>
                  <option value=高级牛津英语>高级牛津英语</option>
                  <option value=高级剑桥英语>高级剑桥英语</option>
                  <option value=高级英语口语>高级英语口语</option>
                  <option value=""></option>
                  <option value=----小语种-------->----小语种--------</option>
                  <option value=初级日语>初级日语</option>
                  <option value=初级法语>初级法语</option>
                  <option value=初级德语>初级德语</option>
                  <option value=初级韩语>初级韩语</option>
                  <option value=初级俄语>初级俄语</option>
                  <option value=初级希腊语>初级希腊语</option>
                  <option value=初级瑞典语>初级瑞典语</option>
                  <option value=初级荷兰语>初级荷兰语</option>
                  <option value=初级意大利语>初级意大利语</option>
                  <option value=初级西班牙语>初级西班牙语</option>
                  <option value=初级葡萄牙语>初级葡萄牙语</option>
                  <option value=初级阿拉伯语>初级阿拉伯语</option>
                  <option value=初级乌克兰语>初级乌克兰语</option>
                  <option value=高级日语>高级日语</option>
                  <option value=高级法语>高级法语</option>
                  <option value=高级德语>高级德语</option>
                  <option value=高级韩语>高级韩语</option>
                  <option value=高级俄语>高级俄语</option>
                  <option value=高级希腊语>高级希腊语</option>
                  <option value=高级瑞典语>高级瑞典语</option>
                  <option value=高级荷兰语>高级荷兰语</option>
                  <option value=高级意大利语>高级意大利语</option>
                  <option value=高级西班牙语>高级西班牙语</option>
                  <option value=高级葡萄牙语>高级葡萄牙语</option>
                  <option value=高级阿拉伯语>高级阿拉伯语</option>
                  <option value=高级乌克兰语>高级乌克兰语</option>
                  <option value=""></option>
                  <option value=----艺术---------->----艺术----------</option>
                  <option value=摄影>摄影</option>
                  <option value=书法>书法</option>
                  <option value=美术>美术</option>
                  <option value=雕塑>雕塑</option>
                  <option value=卡通画>卡通画</option>
                  <option value=中国画>中国画</option>
                  <option value=西洋画>西洋画</option>
                  <option value=交谊舞>交谊舞</option>
                  <option value=民族舞>民族舞</option>
                  <option value=芭蕾舞>芭蕾舞</option>
                  <option value=卡拉OK歌咏>卡拉OK歌咏</option>
                  <option value=声乐（美声）>声乐（美声）</option>
                  <option value=声乐（民族）>声乐（民族）</option>
                  <option value=作曲与音乐理论>作曲与音乐理论</option>
                  <option value=""></option>
                  <option value=----乐器---------->----乐器----------</option>
                  <option value=钢琴>钢琴</option>
                  <option value=电子琴>电子琴</option>
                  <option value=小提琴>小提琴</option>
                  <option value=大提琴>大提琴</option>
                  <option value=长笛>长笛</option>
                  <option value=吉它>吉它</option>
                  <option value=手风琴>手风琴</option>
                  <option value=萨克斯>萨克斯</option>
                  <option value=单簧管>单簧管</option>
                  <option value=双簧管>双簧管</option>
                  <option value=小号>小号</option>
                  <option value=大号>大号</option>
                  <option value=圆号>圆号</option>
                  <option value=打击乐>打击乐</option>
                  <option value=二胡>二胡</option>
                  <option value=笛子>笛子</option>
                  <option value=琵琶>琵琶</option>
                  <option value=古筝>古筝</option>
                  <option value=唢呐>唢呐</option>
                  <option value=扬琴>扬琴</option>
                  <option value=柳琴>柳琴</option>
                  <option value=中阮>中阮</option>
                  <option value=古琴>古琴</option>
                  <option value=三弦>三弦</option>
                  <option value=板胡>板胡</option>
                  <option value=地方与民族乐器>地方与民族乐器</option>
                  <option value=其他西洋乐器>其他西洋乐器</option>
                  <option value=""></option>
                  <option value=----计算机-------->----计算机--------</option>
                  <option value=计算机基本操作>计算机基本操作</option>
                  <option value=初级数据库>初级数据库</option>
                  <option value=高级数据库>高级数据库</option>
                  <option value=网页设计与制作>网页设计与制作</option>
                  <option value=计算机应用能力初级>计算机应用能力初级</option>
                  <option value=计算机应用能力中级>计算机应用能力中级</option>
                  <option value=Linux或Unix>Linux或Unix</option>
                  <option value=初级网站开发>初级网站开发</option>
                  <option value=高级网站开发>高级网站开发</option>
                  <option value=图像处理软件>图像处理软件</option>
                  <option value=动画制作>动画制作</option>
                  <option value=计算机绘图>计算机绘图</option>
                  <option value=桌面出版技术>桌面出版技术</option>
                  <option value=程序设计初级>程序设计初级</option>
                  <option value=程序设计高级>程序设计高级</option>
                  <option value=初级微软证书>初级微软证书</option>
                  <option value=""></option>
                  <option value=----棋类/体育----->----棋类/体育-----</option>
                  <option value=围棋>围棋</option>
                  <option value=中国象棋>中国象棋</option>
                  <option value=国际象棋>国际象棋</option>
                  <option value=中国武术>中国武术</option>
                  <option value=气功>气功</option>
                  <option value=拳击柔道跆拳道>拳击柔道跆拳道</option>
                  <option value=跆拳道>跆拳道</option>
                  <option value=空手道>空手道</option>
                  <option value=瑜珈>瑜珈</option>
                  <option value=体操>体操</option>
                  <option value=健身减肥养身>健身减肥养身</option>
                  <option value=滑雪滑冰旱冰>滑雪滑冰旱冰</option>
                  <option value=游泳潜水跳水>游泳潜水跳水</option>
                  <option value=高尔夫>高尔夫</option>
                  <option value=保龄球>保龄球</option>
                  <option value=乒乓球>乒乓球</option>
                  <option value=羽毛球>羽毛球</option>
                  <option value=网球>网球</option>
                  <option value=足球>足球</option>
                  <option value=篮球>篮球</option>
                  <option value=排球>排球</option>
                  <option value=体育健身类其他>体育健身类其他</option>
                </select>
              </div>
              <div class=div2>
								<span class=span1><input class=butblue onclick='javascript:addloc(document.getElementById("FirstJob"),document.getElementById("MyFirstJob"))' value="选 取>>>" type=button name=FTianJia><br>
								选中左侧项目点“选取”即可添加；选中右侧项目点“删除”即可删除<br>
								<input class=butblue onclick='JavaScript:delloc(document.getElementById("FirstJob"),document.getElementById("MyFirstJob"))' value="<<<删 除" type=button name=FShanChu></span>
                <select style="WIDTH: 170px" id="MyFirstJob" class=zcinput multiple size=10 name=MyFirstJob>
                </select>
                <input type=hidden id="ttedu_renjiaoxueke" name="ttedu_renjiaoxueke">
              </div>
            </div>
            <!-- 可教授科目结束 -->
            <div>
              <label for=confirm_password>所获证书</label>
              <textarea name="ttedu_zhengshu" cols="23" rows="3" class="zcinput"></textarea>&nbsp;例如：英语四级，六级
            </div>
            <div>
              <label for=confirm_password>适合家教时间</label>
              <textarea name="ttedu_keyijiajiaoshijian" cols="23" rows="3" class="zcinput"></textarea>
            </div>
            <div>
              <div class=div1>
                <label for=confirm_password style="width:80px"><strong class=red>*</strong>可教授区域<br>
                  (最多选15项，多余部分将被系统自动丢弃！)</label>
                <select style="WIDTH: 170px" id=FirstTeachPlace class=zcinput size=8 name="FirstTeachPlace">
                  <option value=无要求>无要求</option>
                  <option value=黄浦>黄浦</option>
                  <option value=徐汇>徐汇</option>
                  <option value=长宁>长宁</option>
                  <option value=静安>静安</option>
                  <option value=普陀>普陀</option>
                  <option value=虹口>虹口</option>
                  <option value=杨浦>杨浦</option>
                  <option value=闵行>闵行</option>
                  <option value=宝山>宝山</option>
                  <option value=嘉定>嘉定</option>
                  <option value=浦东新>浦东新</option>
                  <option value=金山>金山</option>
                  <option value=松江>松江</option>
                  <option value=青浦>青浦</option>
                  <option value=奉贤>奉贤</option>
                </select>
              </div>
              <div class=div2>
								<span class=span1><input class=butblue onclick='JavaScript:addloc(document.getElementById("FirstTeachPlace"),document.getElementById("SecondTeachPlace"))' value="选 取>>>" type=button name=FTianJia2> <br>
								选中左侧项目点“选取”即可添加；选中右侧项目点“删除”即可删除<br>
								<input class=butblue onclick='JavaScript:delloc(document.getElementById("FirstTeachPlace"),document.getElementById("SecondTeachPlace"))' value="<<<删 除" type=button name=FShanChu2>
								</span><input type=hidden name="ttedu_jiajiaodiqu" id="ttedu_jiajiaodiqu">
                <select style="WIDTH: 170px" id=SecondTeachPlace class=zcinput multiple size=8 name=SecondTeachPlace>
                </select>
              </div>
            </div>
            <div>
              <label for=confirm_password>自我详细介绍</label>
              <textarea name="ttedu_xiangxijieshao" cols="50" rows="7" class="zcinput"></textarea>
            </div>
            <div class=ac>
              <input id=submit1 class=butblue value="　提 交　" type=submit name=submit1>
              <input class=butblue value=重　置 type=reset name=reset1>
            </div>
        </form>
        <div class=btbg1>
          <img src="Public/images/jz.gif">注 册 条 款<a id=zc name=zc></a>
        </div>
        <div class=ac>
          <textarea rows=11 cols=90 name=textarea> 家教在线是立足于互联网络，面向广大家教教员及学员提供家教服务的专业公司。目前我们面向广大上海市民服务，乐意为您提供优质的家教信息服务，如有疑问请电话咨询我们。 1、本站只接收各类教师、 正规大学大专以上大学生、研究生和有专业特长的工作者。 【注】对于在校大学生，本站只接受国家承认学历的正规大学生、研究生注册 2、注册和发布简历不收费，但每接一份家教应立即交纳家教信息费，并预先垫付学员的家教信息费。（第一次与学员见面即可收回，皆以收据为凭） 3、保证所填信息真实有效，如因信息不实而引起的各种不良事宜，一律自行承担全部责任。 4、如果有学员家长觉得你的条件与他的要求相符，会在线预约您；在核实了家长的情况后，我们会通知您。 5、如果是女教员，从个人的安全角度出发，在初次上门试讲时，最好带上一名男性同伴，以免发生意外。 6、家教在线仅负责提供家教信息，不承担家教信息以外的其它责任。 7、请分步骤一次性填写好自己的全部资料，否则家教在线工作人员将删除信息不全的注册用户！ 一旦成为我们的会员保证不填写隐瞒信息，如有不实，责任完全由会员自行承担责任。 </textarea>
        </div>
      </fieldset>
    </div>
  </div>
</div>
<!-- 第一步结束 第二步开始-->
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

</script>
<script type=text/javascript>
    try {
        var pageTracker = _gat._getTracker("UA-770217-10");
        pageTracker._trackPageview();
    } catch(err) {}</script>
</body>
</html>
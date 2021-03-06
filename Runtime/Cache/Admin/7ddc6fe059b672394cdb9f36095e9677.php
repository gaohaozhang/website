<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" id="css" href="images/style.css">
    <title>修改课程</title>
    <script type="text/javascript" charset="utf-8" src="Public/admin/edit/kindeditor-min.js"></script>
    <script type="text/javascript">
        KE.show({
            id : 'content1',
            cssPath : './../index.css'
        });
    </script>
    <style type="text/css">
        body,table{
            font-size:12px;
        }
        form,input{
            font-size:12px;
        }
    </style>
</head>
<body>
<form name="add" method="post" action="__URL__/update">
    <input type="hidden" name="ttedu_id" value="<?php echo ($teach_info["ttedu_id"]); ?>"/>
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
        <tr>
            <td height="30" background="Public/admin/images/bg_list.gif">
                <div style="padding-left:10px; font-weight:bold; color:#FFFFFF">
                    修改教师信息
                </div>
            </td>
        </tr>
        <tr>
            <td bgcolor="#FFFFFF">
                <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="center" colspan="4" style="border-bottom:1px solid #666666;">
                            <span style="font-size:14px"><strong>系统设置</strong></span>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" width="15%" class="td" align="right">
                            允许上传照片数量：
                        </td>
                        <td width="30%" class="td">
                            <input name="ttedu_yxzhaopiancounts" type="text" value="<?php echo ($teach_info["ttedu_yxzhaopiancounts"]); ?>" size="5"/>
                        </td>
                        <td height="28" width="15%" class="td" align="right">
                            允许上传证件照片数量:
                        </td>
                        <td width="40%" class="td">
                            <input name="ttedu_yxzhengjiancounts" type="text" value="<?php echo ($teach_info["ttedu_yxzhengjiancounts"]); ?>" size="5"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="center" colspan="4" style="border-bottom:1px solid #666666;">
                            <span style="font-size:14px"><strong>基本信息</strong></span>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" width="15%" class="td" align="right">
                            用户名：
                        </td>
                        <td width="30%" class="td">
                            <?php echo ($teach_info["ttedu_username"]); ?>（<?php echo ($teach_info["ttedu_id"]); ?>）
                        </td>
                        <td height="28" width="15%" class="td" align="right">
                            真实姓名:
                        </td>
                        <td width="40%" class="td">
                            <?php echo ($teach_info["ttedu_chenfu"]); ?>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            密码：
                        </td>
                        <td class="td">
                            <input name="ttedu_password" type="text" value="<?php echo ($teach_info["ttedu_password"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            性别：
                        </td>
                        <td class="td">
                            <input name="ttedu_sex" value="男" type="radio" <?php if(($teach_info["ttedu_sex"])  ==  "男"): ?>checked<?php endif; ?>/>&nbsp;男 <input name="ttedu_sex" value="女" type="radio" <?php if(($teach_info["ttedu_sex"])  ==  "女"): ?>checked<?php endif; ?>/>&nbsp;女
                        </td>
                        <td class="td" align="right">
                            年龄:
                        </td>
                        <td class="td">
                            <input name="ttedu_old" type="text" value="<?php echo ($teach_info["ttedu_old"]); ?>" size="5"/>&nbsp;岁
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            出生年月:
                        </td>
                        <td class="td">
                            <input name="ttedu_birth" type="text" value="<?php echo ($teach_info["ttedu_birth"]); ?>" size="40"/>
                        </td>
                        <td height="28" class="td" align="right">
                            籍贯:
                        </td>
                        <td class="td">
                            <input name="ttedu_jiguan" type="text" value="<?php echo ($teach_info["ttedu_jiguan"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            身份证/护照:
                        </td>
                        <td class="td">
                            <input name="ttedu_shenfenzheng" type="text" value="<?php echo ($teach_info["ttedu_shenfenzheng"]); ?>" size="40"/>
                        </td>
                        <td class="td" align="right">
                            邮箱号码:
                        </td>
                        <td class="td">
                            <input name="ttedu_email" type="text" value="<?php echo ($teach_info["ttedu_email"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            首选电话：
                        </td>
                        <td class="td">
                            <input name="ttedu_shouxuandianhua" type="text" value="<?php echo ($teach_info["ttedu_shouxuandianhua"]); ?>" size="40"/>
                        </td>
                        <td class="td" align="right">
                            备用电话:
                        </td>
                        <td class="td">
                            <input name="ttedu_beiyongdianhua" type="text" value="<?php echo ($teach_info["ttedu_beiyongdianhua"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            家庭住址：
                        </td>
                        <td class="td">
                            <input name="ttedu_address" type="text" value="<?php echo ($teach_info["ttedu_address"]); ?>" size="40"/>
                        </td>
                        <td class="td" align="right">
                            通信地址:
                        </td>
                        <td class="td">
                            <input name="ttedu_tongxundizhi" type="text" value="<?php echo ($teach_info["ttedu_tongxundizhi"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            毕业/就读高校：
                        </td>
                        <td class="td">
                            <input name="ttedu_biyexuexiao" type="text" value="<?php echo ($teach_info["ttedu_biyexuexiao"]); ?>" size="40"/>
                        </td>
                        <td class="td" align="right">
                            专业:
                        </td>
                        <td class="td">
                            <input name="ttedu_zhuanye" type="text" value="<?php echo ($teach_info["ttedu_zhuanye"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            目前学历：
                        </td>
                        <td class="td">
                            <input name="ttedu_mqxueli" type="text" value="<?php echo ($teach_info["ttedu_mqxueli"]); ?>" size="40"/>
                        </td>
                        <td class="td" align="right">
                            目前身份:
                        </td>
                        <td class="td">
                            <input name="ttedu_mqshengfei" type="text" value="<?php echo ($teach_info["ttedu_mqshengfei"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            注册时间：
                        </td>
                        <td class="td">
                            <?php echo (date('Y-m-d H:i:s',$teach_info["ttedu_adddate"])); ?>
                        </td>
                        <td class="td" align="right">
                            最后登录时间:
                        </td>
                        <td class="td">
                            <?php echo (date('Y-m-d H:i:s',$teach_info["ttedu_logindate"])); ?>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            会员级别：
                        </td>
                        <td class="td">
                            <input name="ttedu_shifoushengji" value="0" type="radio" <?php if(($teach_info["ttedu_shifoushengji"])  ==  "0"): ?>checked<?php endif; ?>/>&nbsp;普通会员&nbsp; <input name="ttedu_shifoushengji" value="1" type="radio" <?php if(($teach_info["ttedu_shifoushengji"])  ==  "1"): ?>checked<?php endif; ?>/>&nbsp;一星&nbsp; <input name="ttedu_shifoushengji" value="2" type="radio" <?php if(($teach_info["ttedu_shifoushengji"])  ==  "2"): ?>checked<?php endif; ?>/>&nbsp;二星&nbsp;<br/>
                            <input name="ttedu_shifoushengji" value="3" type="radio" <?php if(($teach_info["ttedu_shifoushengji"])  ==  "3"): ?>checked<?php endif; ?>/>&nbsp;三星&nbsp; <input name="ttedu_shifoushengji" value="4" type="radio" <?php if(($teach_info["ttedu_shifoushengji"])  ==  "4"): ?>checked<?php endif; ?>/>&nbsp;四星&nbsp; <input name="ttedu_shifoushengji" value="5" type="radio" <?php if(($teach_info["ttedu_shifoushengji"])  ==  "5"): ?>checked<?php endif; ?>/>&nbsp;五星
                        </td>
                        <td height="28" class="td" align="right">
                            是否通过审核：
                        </td>
                        <td class="td">
                            <input name="ttedu_shengheishifoutongguo" value="1" type="radio" <?php if(($teach_info["ttedu_shengheishifoutongguo"])  ==  "1"): ?>checked<?php endif; ?>/>&nbsp;通过&nbsp; <input name="ttedu_shengheishifoutongguo" value="0" type="radio" <?php if(($teach_info["ttedu_shengheishifoutongguo"])  ==  "0"): ?>checked<?php endif; ?> />&nbsp;不通过
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="center" colspan="4" style="border-bottom:1px solid #666666;">
                            <span style="font-size:14px"><strong>专业教师信息</strong></span>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            （最近）任职学校：
                        </td>
                        <td class="td">
                            <input name="ttedu_renjiaoxuexiao" type="text" value="<?php echo ($teach_info["ttedu_renjiaoxuexiao"]); ?>" size="40"/>
                        </td>
                        <td class="td" align="right">
                            任职学校类型:
                        </td>
                        <td class="td">
                            <input name="ttedu_xuexiaoleibie" type="text" value="<?php echo ($teach_info["ttedu_xuexiaoleibie"]); ?>" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            任教学科：
                        </td>
                        <td class="td">
                            <input name="ttedu_zuinanshoukemu" type="text" value="<?php echo ($teach_info["ttedu_zuinanshoukemu"]); ?>" size="40"/>
                        </td>
                        <td class="td" align="right">
                            教龄:
                        </td>
                        <td class="td">
                            <input name="" type="text" value="" size="40"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="center" colspan="4" style="border-bottom:1px solid #666666;">
                            <span style="font-size:14px"><strong>家教信息</strong></span>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            辅导对象：
                        </td>
                        <td class="td">
                            <input name="ttedu_renjiaoduixiang" value="男" type="radio" <?php if(($teach_info["ttedu_renjiaoduixiang"])  ==  "男"): ?>checked<?php endif; ?>/>&nbsp;男&nbsp; <input name="ttedu_renjiaoduixiang" value="女" type="radio" <?php if(($teach_info["ttedu_renjiaoduixiang"])  ==  "女"): ?>checked<?php endif; ?>/>&nbsp;女&nbsp; <input name="ttedu_renjiaoduixiang" value="不限" type="radio" <?php if(($teach_info["ttedu_renjiaoduixiang"])  ==  "不限"): ?>checked<?php endif; ?> />&nbsp;不限
                        </td>
                        <td class="td" align="right">
                            辅导方式:
                        </td>
                        <td class="td">
                            <input name="ttedu_fudaofangshi" value="本人上门" type="radio" <?php if(($teach_info["ttedu_fudaofangshi"])  ==  "本人上门"): ?>checked<?php endif; ?>/>&nbsp;本人上门&nbsp; <input name="ttedu_fudaofangshi" value="学生上门" type="radio" <?php if(($teach_info["ttedu_fudaofangshi"])  ==  "学生上门"): ?>checked<?php endif; ?>/>&nbsp;学生上门&nbsp; <input name="ttedu_fudaofangshi" value="网上辅导" type="radio" <?php if(($teach_info["ttedu_fudaofangshi"])  ==  "网上辅导"): ?>checked<?php endif; ?>/>&nbsp;网上辅导&nbsp; <input name="ttedu_fudaofangshi" value="不限" type="radio" <?php if(($teach_info["ttedu_fudaofangshi"])  ==  "不限"): ?>checked<?php endif; ?> />&nbsp;不限
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            薪水要求：
                        </td>
                        <td class="td">
                            <input name="ttedu_xingshuiyaoqiu" type="text" value="<?php echo ($teach_info["ttedu_xingshuiyaoqiu"]); ?>" size="20"/>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            可辅导科目：
                        </td>
                        <td class="td">
                            <textarea name="ttedu_renjiaoxueke" cols="23" rows="3"><?php echo ($teach_info["ttedu_renjiaoxueke"]); ?></textarea>
                        </td>
                        <td class="td" align="right">
                            所获证书:
                        </td>
                        <td class="td">
                            <textarea name="ttedu_suohuozhengshu" cols="23" rows="3"><?php echo ($teach_info["ttedu_suohuozhengshu"]); ?></textarea>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            可辅导地区：
                        </td>
                        <td class="td">
                            <textarea name="ttedu_jiajiaodiqu" cols="23" rows="3"><?php echo ($teach_info["ttedu_jiajiaodiqu"]); ?></textarea>
                        </td>
                        <td class="td" align="right">
                            可辅导时间:
                        </td>
                        <td class="td">
                            <textarea name="ttedu_keyijiajiaoshijian" cols="23" rows="3"><?php echo ($teach_info["ttedu_keyijiajiaoshijian"]); ?></textarea>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
                        <td height="28" class="td" align="right">
                            自我详细介绍：
                        </td>
                        <td class="td" colspan="3">
                            <textarea name="ttedu_xiangxijieshao" cols="70" rows="6"><?php echo ($teach_info["ttedu_xiangxijieshao"]); ?></textarea>
                        </td>
                    </tr>
                    <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'" bgcolor="#FFFFFF">
                        <td height="25" class="td">
                            &nbsp;
                        </td>
                        <td class="td">
                            <input type="submit" name="button" id="button" value="确认提交" class="btn"/>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
    <title>学生会员管理</title>
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
<form action="__APP__/Admin/index/update_ad" method="post" enctype="multipart/form-data">
    <input type="hidden" name="ttedu_id" value="<?php echo ($ad["ttedu_id"]); ?>"/>
    <table width="100%" border="0" cellspacing="5" cellpadding="0">
        <tr>
            <td height="40" align="center" style="font-size:14px; border-bottom:1px solid #66CC99" colspan="2">
                广告详情
            </td>
        </tr>
        <tr>
            <td height="40" align="center" style="font-size:14px; border-bottom:1px solid #66CC99" colspan="2">
                <img src="Public/Uploads/<?php echo ($ad["ttedu_adpic"]); ?>" width="800" height="200"/>
            </td>
        </tr>
        <tr>
            <td width="27%" height="30" align="right">
                广告名称：
            </td>
            <td width="73%">
                <input type="text" name="ttedu_adtitle" size="20" value="<?php echo ($ad["ttedu_adtitle"]); ?>"/>
            </td>
        </tr>
        <tr>
            <td height="30" align="right">
                链接地址：
            </td>
            <td>
                <input type="text" name="ttedu_adaddress" size="20" value="<?php echo ($ad["ttedu_adaddress"]); ?>"/>
            </td>
        </tr>
        <tr>
            <td height="30" align="right">
                上传图片：
            </td>
            <td>
                <input name="image" id="image" type="file" class="file huge"/>&nbsp;上传允许文件类型：gif png jpg 图像文件
            </td>
        </tr>
        <tr>
            <td height="30" align="right">
                广告位置：
            </td>
            <td>
                <input type="text" name="ttedu_weizhi" size="20" value="<?php echo ($ad["ttedu_weizhi"]); ?>"/>
            </td>
        </tr>
        <tr>
            <td height="30" align="right">
                图片宽度：
            </td>
            <td>
                <input type="text" name="ttedu_adheight" size="5" value="<?php echo ($ad["ttedu_adheight"]); ?>"/>
            </td>
        </tr>
        <tr>
            <td height="30" align="right">
                图片高度：
            </td>
            <td>
                <input type="text" name="ttedu_adwidth" size="5" value="<?php echo ($ad["ttedu_adwidth"]); ?>"/>
            </td>
        </tr>
        <tr>
            <td height="30" align="right">
                是否显示：
            </td>
            <td>
                <input type="radio" name="ttedu_shifouxianshi" value="1" <?php if(($ad["ttedu_shifouxianshi"])  ==  "1"): ?>checked<?php endif; ?>/>不显示&nbsp;&nbsp; <input type="radio" name="ttedu_shifouxianshi" value="0" <?php if(($ad["ttedu_shifouxianshi"])  ==  "0"): ?>checked<?php endif; ?>/>显示
            </td>
        </tr>
        <tr>
            <td height="30" align="right">
            </td>
            <td>
                <input type="submit" value="提交"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
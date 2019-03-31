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
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
    <tr>
        <td height="30" background="Public/admin/images/bg_list.gif">
            <div style="padding-left:10px; font-weight:bold; color:#FFFFFF">
                广告管理
            </div>
        </td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
                    <td align="center" height="30" colspan="3">
                        <input type="button" name="Submit3" value="添加广告" class="btn" onclick="window.location.href='__APP__/Admin/index/add_ad'"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tr bgcolor="#e7f3e7">
                                <td width="9%" height="25" class="td">
                                    ID
                                </td>
                                <td width="18%" class="td">
                                    广告名称
                                </td>
                                <td width="20%" class="td">
                                    链接地址
                                </td>
                                <td width="25%" class="td">
                                    添加时间
                                </td>
                                <td width="15%" class="td">
                                    显示状态
                                </td>
                                <td width="13%" class="td">
                                    操作
                                </td>
                            </tr>
                            <?php if(is_array($ad)): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_id"]); ?>
                                    </td>
                                    <td height="25" class="td">
                                        <?php echo ($vo["ttedu_adtitle"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_adaddress"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?>
                                    </td>
                                    <td class="td">
                                        <?php if(($vo["ttedu_shifouxianshi"])  ==  "0"): ?>显示<?php endif; ?><?php if(($vo["ttedu_shifouxianshi"])  ==  "1"): ?>不显示<?php endif; ?>
                                    </td>
                                    <td class="td">
                                        <input type="button" name="Submit3" value="查看" class="btn" onclick="window.location.href='__APP__/Admin/index/detail_ad/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>"/>
                                        <input type="button" name="Submit" value="删除" class="btn" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){ window.location.href='__APP__/Admin/index/delete_ad/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> ;}else{history.go(0);}"/>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
                    <td width="199" height="30">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
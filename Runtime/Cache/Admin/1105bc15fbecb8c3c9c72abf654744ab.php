<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
    <title>家教信息管理</title>
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
                家教信息管理
            </div>
        </td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                    <td align="center">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tr bgcolor="#e7f3e7">
                                <td width="3%" class="td">
                                    &nbsp;
                                </td>
                                <td width="4%" class="td">
                                    编号
                                </td>
                                <td width="5%" height="25" class="td">
                                    会员
                                </td>
                                <td width="22%" height="25" class="td">
                                    求教学科
                                </td>
                                <td width="7%" class="td">
                                    称呼
                                </td>
                                <td width="14%" class="td">
                                    发布时间
                                </td>
                                <td width="13%" class="td">
                                    信息状态
                                </td>
                                <td width="5%" class="td">
                                    人数
                                </td>
                                <td width="11%" class="td">
                                    家长电话
                                </td>
                                <td width="10%" class="td">
                                    操作
                                </td>
                            </tr>
                            <?php if(is_array($jiajiao_info)): $i = 0; $__LIST__ = $jiajiao_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
                                    <td class="td">
                                        <input name="ID" type="checkbox" id="ID" value=""/>
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_id"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php if(($vo["ttedu_huiyuan_id"])  ==  ""): ?>匿名<?php else: ?><a href="#"><?php echo ($vo["ttedu_huiyuan_id"]); ?></a><?php endif; ?>
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_nianjikemu"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_chengfu"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php echo (date('Y-m-d H:i:s',$vo["ttedu_addtime"])); ?>
                                    </td>
                                    <td class="td">
                                        <?php if(($vo["ttedu_shifouyuyue"])  ==  "1"): ?>已经预约 <?php else: ?>未预约<a href="__APP__/Admin/JiajiaoInfo/update_info_edu/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>" style="color:#0000ff">[设定价格]</a><?php endif; ?>
                                    </td>
                                    <td class="td">
                                        <span style="color:#ff0000"><?php echo ($vo["ttedu_xueshengrenshu"]); ?></span>人
                                    </td>
                                    <td class="td">
                                        手机：<?php echo ($vo["ttedu_shouji"]); ?><br/>座机：<?php echo ($vo["ttedu_zuoji"]); ?>
                                    </td>
                                    <td class="td">
                                        <input type="button" name="Submit3" value="查看" class="btn" onclick="window.location.href='__APP__/Admin/JiajiaoInfo/edu_infodetail/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> "/>
                                        <input type="button" name="Submit" value="删除" class="btn" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){ window.location.href='__APP__/Admin/JiajiaoInfo/delete/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> ;}else{history.go(0);}"/>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </td>
                </tr>
                <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
                    <td align="center" height="30">
                        <?php echo ($page); ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
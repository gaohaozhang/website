<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
    <title>支付设置管理</title>
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
                支付设置管理
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
                                <td width="14%" class="td">
                                    支付方式
                                </td>
                                <td width="16%" class="td">
                                    商户账号
                                </td>
                                <td width="15%" height="25" class="td">
                                    MD5密匙
                                </td>
                                <td width="18%" height="25" class="td">
                                    手续费率
                                </td>
                                <td width="10%" class="td">
                                    排序
                                </td>
                                <td width="13%" class="td">
                                    启用状态
                                </td>
                                <td width="14%" class="td">
                                    操作
                                </td>
                            </tr>
                            <?php if(is_array($set_pay_info)): $i = 0; $__LIST__ = $set_pay_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_payname"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_zhanghao"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_anquanyangzhengma"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_shouxufei"]); ?>%
                                    </td>
                                    <td class="td">
                                        <?php echo ($vo["ttedu_paixu"]); ?>
                                    </td>
                                    <td class="td">
                                        <?php if(($vo["ttedu_shifouqiyong"])  ==  "1"): ?>未启用<?php endif; ?>
                                        <?php if(($vo["ttedu_shifouqiyong"])  ==  "0"): ?>启用<?php endif; ?>
                                    </td>
                                    <td class="td">
                                        <input type="button" name="Submit3" value="详情" class="btn" onclick="window.location.href='__APP__/admin/SetAdmin/update_set_pay/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> "/>
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
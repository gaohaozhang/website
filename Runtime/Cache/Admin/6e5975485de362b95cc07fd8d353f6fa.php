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
                友情链接
            </div>
        </td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                    <td colspan="3">
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tr bgcolor="#e7f3e7">
                                <td width="10%" height="25" class="td">
                                    ID
                                </td>
                                <td width="20%" class="td">
                                    网站名称
                                </td>
                                <td width="20%" class="td">
                                    链接地址
                                </td>
                                <td width="10%" class="td">
                                    内页地址
                                </td>
                                <td width="12%" class="td">
                                    网站logo
                                </td>
                                <td width="17%" class="td">
                                    显示类别
                                </td>
                                <td width="11%" class="td">
                                    操作
                                </td>
                            </tr>
                            <?php if(is_array($set_youqing)): $i = 0; $__LIST__ = $set_youqing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><form action="__APP__/Admin/index/update_link" method="post">
                                    <input type="hidden" value="<?php echo ($vo["ttedu_id"]); ?>" name="ttedu_id"/>
                                    <tr>
                                        <td class="td">
                                            <?php echo ($vo["ttedu_id"]); ?>
                                        </td>
                                        <td height="25" class="td">
                                            <input name="ttedu_webname" type="text" value="<?php echo ($vo["ttedu_webname"]); ?>" size="20"/>
                                        </td>
                                        <td class="td">
                                            <input name="ttedu_website" type="text" value="<?php echo ($vo["ttedu_website"]); ?>" size="25"/>
                                        </td>
                                        <td class="td">
                                            <input name="ttedu_neiyesite" type="text" value="<?php echo ($vo["ttedu_neiyesite"]); ?>" size="25"/>
                                        </td>
                                        <td class="td">
                                            <input name="ttedu_weblogo" type="text" value="<?php echo ($vo["ttedu_weblogo"]); ?>" size="15"/>
                                        </td>
                                        <td class="td">
                                            <input name="ttedu_showtype" type="text" value="<?php echo ($vo["ttedu_showtype"]); ?>" size="15"/>
                                        </td>
                                        <td class="td">
                                            <input type="Submit" name="Submit3" value="修改" class="btn"/>
                                            <input type="button" name="Submit" value="删除" class="btn" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){ window.location.href='__APP__/Admin/index/delete_link/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> ;}else{history.go(0);}"/>
                                        </td>
                                    </tr>
                                </form><?php endforeach; endif; else: echo "" ;endif; ?>
                            <tr>
                                <td colspan="7" height="30" class="td">
                                    &nbsp;
                                </td>
                            </tr>
                            <form action="__APP__/Admin/index/add_link" method="post">
                                <tr>
                                    <td class="td">
                                        添加链接：
                                    </td>
                                    <td height="25" class="td">
                                        <input name="ttedu_webname" type="text" value="" size="20"/>
                                    </td>
                                    <td class="td">
                                        <input name="ttedu_website" type="text" value="http://" size="25"/>
                                    </td>
                                    <td class="td">
                                        <input name="ttedu_neiyesite" type="text" value="http://" size="25"/>
                                    </td>
                                    <td class="td">
                                        <input name="ttedu_weblogo" type="text" value="" size="15"/>
                                    </td>
                                    <td class="td">
                                        <input name="ttedu_showtype" type="text" value="" size="15"/>
                                    </td>
                                    <td class="td">
                                        <input type="Submit" name="Submit3" value="添加" class="btn"/>
                                    </td>
                                </tr>
                            </form>
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
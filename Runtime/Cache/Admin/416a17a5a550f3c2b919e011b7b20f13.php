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
                学生会员管理
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
                                    账号
                                </td>
                                <td width="9%" class="td">
                                    密码
                                </td>
                                <td width="12%" class="td">
                                    邮箱
                                </td>
                                <td width="12%" class="td">
                                    电话
                                </td>
                                <td width="12%" class="td">
                                    QQ
                                </td>
                                <td width="23%" class="td">
                                    权限
                                </td>
                                <td width="10%" class="td">
                                    修改时间
                                </td>
                                <td width="12%" class="td">
                                    操作
                                </td>
                            </tr>
                            <?php if(is_array($manager_users)): $i = 0; $__LIST__ = $manager_users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><form action="__APP__/Admin/ManagerUsers/update" method="post">
                                    <input type="hidden" value="<?php echo ($vo["ttedu_id"]); ?>" name="ttedu_id"/>
                                    <tr>
                                        <td class="td">
                                            <input name="ttedu_musers" type="text" value="<?php echo ($vo["ttedu_musers"]); ?>" size="15"/>
                                        </td>
                                        <td height="25" class="td">
                                            <input name="ttedu_mpassword" type="text" value="<?php echo ($vo["ttedu_mpassword"]); ?>" size="15"/>
                                        </td>
                                        <td class="td">
                                            <input name="ttedu_memail" type="text" value="<?php echo ($vo["ttedu_memail"]); ?>" size="18"/>
                                        </td>
                                        <td class="td">
                                            <input name="ttedu_mtel" type="text" value="<?php echo ($vo["ttedu_mtel"]); ?>" size="15"/>
                                        </td>
                                        <td class="td">
                                            <input name="ttedu_mqq" type="text" value="<?php echo ($vo["ttedu_mqq"]); ?>" size="15"/>
                                        </td>
                                        <td class="td">
                                            <input type="radio" name="ttedu_mquanxian" value="0" <?php if(($vo["ttedu_mquanxian"])  ==  "0"): ?>checked<?php endif; ?>/>&nbsp; 超级管理员 <input type="radio" name="ttedu_mquanxian" value="1" <?php if(($vo["ttedu_mquanxian"])  !=  "0"): ?>checked<?php endif; ?>/>&nbsp; 一般管理员
                                        </td>
                                        <td class="td">
                                            <?php echo (date('Y-m-d',$vo["ttedu_adddate"])); ?>
                                        </td>
                                        <td class="td">
                                            <input type="Submit" name="Submit3" value="修改" class="btn"/>
                                            <input type="button" name="Submit" value="删除" class="btn" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){ window.location.href='__APP__/Admin/ManagerUsers/delete/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> ;}else{history.go(0);}"/>
                                        </td>
                                    </tr>
                                </form><?php endforeach; endif; else: echo "" ;endif; ?>
                            <tr>
                                <td colspan="8" height="30" class="td">
                                    添加管理员：
                                </td>
                            </tr>
                            <form action="__APP__/Admin/ManagerUsers/insert" method="post">
                                <tr>
                                    <td class="td">
                                        <input name="ttedu_musers" type="text" size="15"/>
                                    </td>
                                    <td height="25" class="td">
                                        <input name="ttedu_mpassword" type="text" size="15"/>
                                    </td>
                                    <td class="td">
                                        <input name="ttedu_memail" type="text" size="18"/>
                                    </td>
                                    <td class="td">
                                        <input name="ttedu_mtel" type="text" size="15"/>
                                    </td>
                                    <td class="td">
                                        <input name="ttedu_mqq" type="text" size="15"/>
                                    </td>
                                    <td class="td" colspan="2">
                                        <input type="radio" name="ttedu_mquanxian" value="0"/>&nbsp; 超级管理员 <input type="radio" name="ttedu_mquanxian" value="1" checked/>&nbsp; 一般管理员
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
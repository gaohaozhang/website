<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
    <title>社区板块管理</title>
    <script language="javascript">
        <!--
        function CheckAll(){
            for (var i=0;i<eval(form1.elements.length);i++){
                var e=form1.elements[i];
                if (e.name!="allbox") e.checked=form1.allbox.checked;
            }
        }
        -->
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
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
    <tr>
        <td height="30" background="Public/admin/images/bg_list.gif">
            <div style="padding-left:10px; font-weight:bold; color:#FFFFFF">
                社区板块管理
            </div>
        </td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                    <td align="center">
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                            <tr>
                                <td align="center" colspan="3">
                                    <table width="100%" border="0" cellpadding="5" cellspacing="0">
                                        <form id="form1" name="form1" method="post" action="__APP__/Admin/bbs/add_bankuai">
                                            <tr>
                                                <td width="12%" align="left">
                                                    排序ID <input type="text" name="ttedu_paixu" value="999" size="5"/>
                                                </td>
                                                <td width="24%" align="left">
                                                    板块名称： <input type="text" name="ttedu_zhuti_topic"/>
                                                </td>
                                                <td width="36%" align="left">
                                                    <input type="submit" value="添加板块"/>
                                                </td>
                                            </tr>
                                        </form>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <table width="100%" border="0" cellpadding="5" cellspacing="0">
                                        <tr bgcolor="#e7f3e7">
                                            <td width="5%" class="td">
                                                &nbsp;
                                            </td>
                                            <td width="10%" class="td">
                                                ID
                                            </td>
                                            <td width="28%" height="25" class="td">
                                                板块名称
                                            </td>
                                            <td width="9%" class="td">
                                                帖子数量
                                            </td>
                                            <td width="19%" class="td">
                                                推出时间
                                            </td>
                                            <td width="13%" class="td">
                                                排序
                                            </td>
                                            <td width="16%" class="td">
                                                操作
                                            </td>
                                        </tr>
                                        <?php if(is_array($shequ_zhuti)): $i = 0; $__LIST__ = $shequ_zhuti;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><form id="form1" name="form1" method="post" action="__APP__/Admin/bbs/update_bankuai">
                                                <input name="ttedu_id" type="hidden" value="<?php echo ($vo["ttedu_id"]); ?>"/>
                                                <tr>
                                                    <td class="td">
                                                        <input name="ID" type="checkbox" id="ID" value=""/>
                                                    </td>
                                                    <td class="td">
                                                        <?php echo ($vo["ttedu_id"]); ?>
                                                    </td>
                                                    <td class="td">
                                                        <input type="text" name="ttedu_zhuti_topic" size="30" value="<?php echo ($vo["ttedu_zhuti_topic"]); ?>"/>
                                                    </td>
                                                    <td class="td">
                                                        <?php echo ($vo["counts"]); ?>
                                                    </td>
                                                    <td class="td">
                                                        <?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?>
                                                    </td>
                                                    <td class="td">
                                                        排序ID：<input type="text" name="ttedu_paixu" size="5" value="<?php echo ($vo["ttedu_paixu"]); ?>"/>
                                                    </td>
                                                    <td class="td">
                                                        <input type="Submit" name="Submit3" value="修改" class="btn"/>
                                                        <input type="button" name="Submit" value="删除" class="btn" onclick="javascript:if(confirm('确定删除？删除后不可恢复!')){ window.location.href='__APP__/Admin/bbs/delete_bankuai/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?>;}else{history.go(0);}"/>
                                                    </td>
                                                </tr>
                                            </form><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </table>
                                </td>
                            </tr>
                            <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
                                <td width="164" height="30" align="center">
                                </td>
                                <td width="276">
                                    <?php echo ($page); ?>
                                </td>
                                <td width="726" height="30">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
</body>
</html>
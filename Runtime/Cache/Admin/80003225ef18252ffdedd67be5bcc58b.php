<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>网站后台管理系统</title>
    <script src='images/input.js' language='javascript'></script>
    <link href="images/style.css" rel="stylesheet" type="text/css"/>
    <script>
        if(window.name != "bencalie"){
            location.reload();
            window.name = "bencalie";
        }
        else{
            window.name = "";
        }
    </script>
</head>
<body>
<table width="664" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="100">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="250" height="50" align="left" valign="middle">
                        <img src="Public/admin/images/logo.gif" width="246" height="49"/>
                    </td>
                    <td width="370" height="50" align="left" valign="middle" class="t1">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td height="2" colspan="2" align="right" valign="middle" bgcolor="#dddddd">
                    </td>
                </tr>
                <tr>
                    <td height="90" colspan="2" align="left" valign="middle">
                        <table width="400" border="0" cellspacing="0" cellpadding="0">
                            <form name="add" method="post" action="__APP__/admin/login/loginpass">
                                <tr>
                                    <td height="30">
                                        &nbsp;
                                    </td>
                                    <td width="387" height="30" colspan="2" align="left" valign="middle">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="13">
                                        &nbsp;
                                    </td>
                                    <td colspan="2" align="left" valign="middle">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="10">
                                            <tr>
                                                <td width="85" height="35" align="center" valign="middle">
                                                    <span class="t2">用户名：</span>
                                                </td>
                                                <td height="35" colspan="2" align="left" valign="middle">
                                                    <input name="ttedu_musers" type="text" class="input" id="name" size="25" maxlength="20"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="35" align="center" valign="middle" class="t2">
                                                    密&nbsp;&nbsp;码：
                                                </td>
                                                <td height="35" colspan="2" align="left" valign="middle">
                                                    <input name="ttedu_mpassword" type="password" class="input" id="pass" size="27" maxlength="20"/>
                                                </td>
                                            </tr>
                                            <!--
                                          <tr>
                                            <td height="35" align="center" valign="middle" class="t2">验证码：</td>
                                            <td width="91" height="35" align="left" valign="middle"><input name="VerifyCode" type="text" class="input"  size="10" />                            </td>
                                            <td width="211" align="left" valign="middle"><img src="safecode.asp?" onClick="this.src+=Math.random()" alt="图片看不清？点击重新得到验证码" style="cursor:hand;" /></td>
                                          </tr>
                                          -->
                                            <tr>
                                                <td height="50" colspan="3" align="center" valign="bottom">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="50" colspan="3" align="center" valign="bottom">
                                                    <input name="Submit" type="submit" class="sbut" value="登 录"/>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
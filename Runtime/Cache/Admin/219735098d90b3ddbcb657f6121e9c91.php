<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
  <title>学生会员管理</title>
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
        学生会员管理
      </div>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
        <form id="form1" name="form1" method="post" action="admin_news.asp?del=checkbox">
          <tr>
            <td align="center">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <table width="100%" border="0" cellpadding="5" cellspacing="0">
                <tr bgcolor="#e7f3e7">
                  <td width="4%" class="td">
                    &nbsp;
                  </td>
                  <td width="11%" height="25" class="td">
                    <a href="#">姓名（编号）</a>
                  </td>
                  <td width="8%" class="td">
                    性别
                  </td>
                  <td width="8%" class="td">
                    年龄
                  </td>
                  <td width="14%" class="td">
                    注册时间
                  </td>
                  <td width="14%" class="td">
                    最后登录时间
                  </td>
                  <td width="13%" class="td">
                    联系电话
                  </td>
                  <td width="16%" class="td">
                    联系记录
                  </td>
                  <td width="12%" class="td">
                    操作
                  </td>
                </tr>
                <?php if(is_array($huiyuan_info)): $i = 0; $__LIST__ = $huiyuan_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
                    <td class="td">
                      &nbsp;
                    </td>
                    <td height="25" class="td">
                      <a href="__APP__/Admin/HuiyuanInfo/update_member_stu/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>"><span style="color:#ff0000"><?php echo ($vo["ttedu_username"]); ?></span><span style="color:#0000ff">（<?php echo ($vo["ttedu_id"]); ?>）</span></a>
                    </td>
                    <td class="td">
                      <?php echo ($vo["ttedu_sex"]); ?>
                    </td>
                    <td class="td">
                      <?php echo ($vo["ttedu_old"]); ?>
                    </td>
                    <td class="td">
                      <?php echo (date('Y-m-d H:i:s',$vo["ttedu_adddate"])); ?>
                    </td>
                    <td class="td">
                      <?php echo (date('Y-m-d H:i:s',$vo["ttedu_logindate"])); ?>
                    </td>
                    <td class="td">
                      <?php echo ($vo["ttedu_shouji"]); ?>
                    </td>
                    <td class="td">
                      [<a href="__APP__/Admin/TeachInfo/admin_info_msg/ttedu_mid/2/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>">查看记录</a>]&nbsp;&nbsp; [<a href="__APP__/Admin/TeachInfo/add_info_msg/ttedu_mid/2/ttedu_id/<?php echo ($vo["ttedu_id"]); ?>">添加记录</a>]
                    </td>
                    <td class="td">
                      <input type="button" name="Submit3" value="修改" class="btn" onclick="window.location.href='__APP__/Admin/HuiyuanInfo/update_member_stu/ttedu_id/'+<?php echo ($vo["ttedu_id"]); ?> "/>
                    </td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </table>
            </td>
          </tr>
          <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor=''" bgcolor="">
            <td width="199" height="30" align="center">
              <?php echo ($page); ?>
            </td>
          </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
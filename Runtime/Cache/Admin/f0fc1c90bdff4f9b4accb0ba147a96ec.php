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
<form name="add" method="post" action="__URL__/insert" enctype="multipart/form-data">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
    <tr>
      <td height="30" background="Public/admin/images/bg_list.gif">
        <div style="padding-left:10px; font-weight:bold; color:#FFFFFF">
          添加视频
        </div>
      </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">
        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
          <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
            <td height="28" width="16%" class="td">
              视频标题
            </td>
            <td width="84%" class="td">
              <input name="ttedu_sptitle" type="text" value="" size="60"/>
            </td>
          </tr>
          <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
            <td height="28" width="16%" class="td">
              视频分类
            </td>
            <td width="84%" class="td">
              <select name="ttedu_spbtype_id">
                <?php if(is_array($spbtype_info)): $i = 0; $__LIST__ = $spbtype_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo["ttedu_id"]); ?>"><?php echo ($vo["ttedu_spbtype_name"]); ?> &nbsp;</option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </td>
          </tr>
          <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
            <td height="28" width="16%" class="td">
              缩略图
            </td>
            <td width="84%" class="td">
              <input name="image" id="image" type="file" class="file huge"/>&nbsp;上传允许文件类型：gif png jpg 图像文件
            </td>
          </tr>
          <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
            <td height="28" width="16%" class="td">
              总集数
            </td>
            <td width="84%" class="td">
              <input name="ttedu_spjishu" type="text" value="" size="5"/>
            </td>
          </tr>
          <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
            <td height="28" width="16%" class="td">
              排序ID
            </td>
            <td width="84%" class="td">
              <input name="ttedu_sppaixu" type="text" value="" size="5"/>&nbsp;数字越小越靠前
            </td>
          </tr>
          <tr onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#F1F5F8'" bgcolor="#F1F5F8">
            <td height="25" class="td">
              视频描述
            </td>
            <td class="td">
              <textarea id="content1" name="ttedu_spcontent" style="width:700px;height:400px;visibility:hidden;"></textarea>
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
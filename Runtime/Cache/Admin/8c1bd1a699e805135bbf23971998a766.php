<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" id="css" href="Public/admin/images/style.css">
	<title>新闻管理</title>
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
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#ffffff">
	<tr>
		<td height="30" background="Public/admin/images/bg_list.gif">
			<div style="padding-left:10px; font-weight:bold; color:#FFFFFF">
				老师详细信息
			</div>
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF">
			<table width="100%" border="1" align="center" cellpadding="8" cellspacing="0">
				<tr>
					<td align="center">
						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
							<form id="form1" name="form1" method="post" action="__APP__/Admin/TeachInfo/detail_member_teh">
								<tr>
									<td>
										老师编号：<input type="text" name="ttedu_id"/>
									</td>
									<td>
										身份证/执照：<input type="text" name="ttedu_shenfenzheng"/>
									</td>
									<td>
										老师姓名：<input type="text" name="ttedu_chenfu"/>
									</td>
								</tr>
								<tr>
									<td>
										QQ号码：&nbsp;&nbsp;<input type="text" name="ttedu_qq"/>
									</td>
									<td>
										电话号码：&nbsp;&nbsp;&nbsp;<input type="text" name="ttedu_shouxuandianhua"/>
									</td>
									<td>
										任教学校：<input type="text" name="ttedu_renjiaoxuexiao"/>
									</td>
									<td>
										<input type="submit" value="查找老师" class="btn"/>
									</td>
								</tr>
							</form>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center">
						<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1">
							<tr>
								<td width="19%" rowspan="6" align="center">
									联系方式：
								</td>
								<td width="81%" align="left">
									用户名：<?php echo ($teach_info["ttedu_username"]); ?> <span style="color:#0000ff">[<?php echo ($teach_info["ttedu_id"]); ?>]</span>
								</td>
							</tr>
							<tr>
								<td align="left">
									真实姓名：<?php echo ($teach_info["ttedu_chenfu"]); ?>
								</td>
							</tr>
							<tr>
								<td align="left">
									首选电话：<?php echo ($teach_info["ttedu_shouxuandianhua"]); ?>
								</td>
							</tr>
							<tr>
								<td align="left">
									备选电话：<?php echo ($teach_info["ttedu_beiyongdianhua"]); ?>
								</td>
							</tr>
							<tr>
								<td align="left">
									双号电话：<?php echo ($teach_info["ttedu_shuanghaodianhua"]); ?>
								</td>
							</tr>
							<!--
                        <tr>
                          <td align="left">QQ号码：<?php echo ($teach_info["ttedu_username"]); ?></td>
                        </tr>
                        -->
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<br/><br/>
<table width="95%" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#ffffff">
	<tr>
		<td width="9%" align="center" height="40">
			学员评论：
		</td>
		<td width="91%" align="center">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
				<?php if(is_array($teach_pingun)): $i = 0; $__LIST__ = $teach_pingun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
						<td width="8%" height="20">
							评论人：
						</td>
						<td width="22%">
							<?php if(is_array($vo['person'])): $i = 0; $__LIST__ = $vo['person'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): ++$i;$mod = ($i % 2 )?><a href="__APP__/Admin/HuiyuanInfo/update_member_stu/ttedu_id/<?php echo ($person["id"]); ?>" style="color:#0000ff"><?php echo ($person["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
						</td>
						<td width="9%">
							评论级别：
						</td>
						<td width="22%">
							<?php if(($vo["ttedu_jibie"])  ==  "1"): ?>很差<?php endif; ?>
							<?php if(($vo["ttedu_jibie"])  ==  "2"): ?>差<?php endif; ?>
							<?php if(($vo["ttedu_jibie"])  ==  "3"): ?>一般<?php endif; ?>
							<?php if(($vo["ttedu_jibie"])  ==  "4"): ?>好<?php endif; ?>
							<?php if(($vo["ttedu_jibie"])  ==  "5"): ?>很好<?php endif; ?>
						</td>
						<td width="8%">
							评论时间：
						</td>
						<td width="31%">
							<?php echo (date('Y-m-d H:i:s',$vo["ttedu_addtime"])); ?>
						</td>
					</tr>
					<tr>
						<td height="30">
							评论内容：
						</td>
						<td colspan="5" align="left" style="border-top:1px solid #dddddd;">
							<?php echo ($vo["ttedu_content"]); ?>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<tr>
					<td colspan="6">
						<?php echo ($page); ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>
<?php

//---------------------------------------------------------
//�Ƹ�ͨ��ʱ����֧��Ӧ�𣨴���ص���ʾ�����̻����մ��ĵ����п�������
//---------------------------------------------------------

require_once ("./classes/PayResponseHandler.class.php");

/* ��Կ */
$key = "8934e7d15453e97507ef794cf7b0519d";

/* ����֧��Ӧ����� */
$resHandler = new PayResponseHandler();
$resHandler->setKey($key);

//�ж�ǩ��
if($resHandler->isTenpaySign()) {
	
	//���׵���
	$transaction_id = $resHandler->getParameter("transaction_id");
	
	//���,�Է�Ϊ��λ
	$total_fee = $resHandler->getParameter("total_fee");
	
	//֧�����
	$pay_result = $resHandler->getParameter("pay_result");
	
	if( "0" == $pay_result ) {
	
		//------------------------------
		//����ҵ��ʼ
		//------------------------------
		
		require_once '../conjunction.php';
		$sql="update set_pay_info set ttedu_states=1 where ttedu_code=".$transaction_id;
		$result=mysql_query($sql,$conn);
		$sql="select * from set_pay_info where ttedu_code=".$transaction_id;
		$result=mysql_query($sql,$conn);
		$pay=mysql_fetch_array($result);
		$sql="update teach_info set ttedu_shengyujinge=ttedu_shengyujinge+".$pay['ttedu_chongzhijinge']." where ttedu_id=".$pay['ttedu_user_id'];
		$result=mysql_query($sql,$conn);
		
		
		//ע�⽻�׵���Ҫ�ظ�����
		//ע���жϷ��ؽ��
		
		//------------------------------
		//����ҵ�����
		//------------------------------	
		
		//����doShow, ��ӡmetaֵ��js����,���߲Ƹ�ͨ����ɹ�,�����û��������ʾ$showҳ��.
		$show = "http://localhost/tenpay/show.php";
		$resHandler->doShow($show);
	
	} else {
		//�������ɹ�����
		echo "<br/>" . "֧��ʧ��" . "<br/>";
	}
	
} else {
	echo "<br/>" . "��֤ǩ��ʧ��" . "<br/>";
}

//echo $resHandler->getDebugInfo();

?>
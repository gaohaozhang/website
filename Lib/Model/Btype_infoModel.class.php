<?php 
class Btype_infoModel extends Model { 
    // �Զ���֤���� 
   // protected $_validate     =     array( 
      //  array('title','require','������룡',1), 
      //  array('email','email','�����ʽ����',2), 
      //  array('content','require','���ݱ���'), 
      //  array('title','','�����Ѿ�����',0,'unique',self::MODEL_INSERT), 
      //  ); 
    // �Զ�������� 
    protected $_auto     =     array( 
       // array('status','1',self::MODEL_INSERT), 
        array('ttedu_bfbdate','time',self::MODEL_INSERT,'function'), 
        ); 

} 
?> 
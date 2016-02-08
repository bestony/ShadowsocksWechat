<?php

namespace Addons\Shadowsocks\Model;
use Think\Model;

/**
 * 节点模型
 */
class ServersModel extends Model{
 		protected $connection = array(
        'db_type'  => 'mysql',
        'db_user'  => '',
        'db_pwd'   => '',
        'db_host'  => '',
        'db_port'  => '3306',
        'db_name'  => '',
        'db_charset' =>    'utf8',
    );
    protected $trueTableName = 'ss_node'; 
    function getservers(){
	    $data=$this->field('id,node_name,node_status')->select();
	    return $data;
    }
    function getserinfo($id){
	    $data=$this->find($id);
	    return $data;
    }
    
}

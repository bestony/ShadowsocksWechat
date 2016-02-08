<?php

namespace Addons\Shadowsocks\Model;
use Think\Model;

/**
 * 用户模型
 */
class UserModel extends Model{
 		protected $connection = array(
        'db_type'  => 'mysql',
        'db_user'  => '',
        'db_pwd'   => '',
        'db_host'  => '',
        'db_port'  => '',
        'db_name'  => '',
        'db_charset' =>    'utf8',
    );
    protected $trueTableName = 'user'; 
    function getuserinfo($id){
	  	$data=$this->find($id);
	  	return $data;
    }
    function getbandwidth($id){
	    $data=$this->find($id);
	    $new['all']=$data['transfer_enable']/1048576;
	    $new['used']=($data['u']+$data['d'])/1048576;
	    if ($new['all'] >1024){
			$new['all']=$new['all']/1024;
			$new['all']=$new['all'].'GB';
	    }
	    else{
		    $new['all']=$new['all'].'MB';
	    }
	    $new['used']=substr($new['used'],0,3);
	    $new['used']=$new['used'].'MB';
	    return $new;
    }
    function getlogin($port,$passwd){
		$param['passwd']= $passwd;
		$param['port'] =$port;
	    $res=$this->where($param)->count();
	    if ($res == 1){
		    return 1;
	    }
	    else{
		    return 0;
	    }
	    
    }
    function checklogin(){
	    $mod=M('shadowsocks');
	    $param['openid']=get_openid();
		$param['token']=get_token();
		$res=$mod->where($param)->count();
		return $res;
    }
    function getid($port,$passwd){
	    $param['openid']=get_openid();
		$param['token']=get_token();
	   	$res=$this->where($param)->select();
	   	return $res['uid'];
    }
}

<?php

namespace Addons\Shadowsocks\Controller;
use Home\Controller\AddonsController;

class ShadowsocksController extends AddonsController{
	
	public function index ()
	{
		$user=D('Addons://Shadowsocks/User');
		$res=$user->checklogin();
		if ($res == 0){
			$this->error('尚未绑定！',addons_url('Shadowsocks://Shadowsocks/bind'));
		}
		$server=D('Addons://Shadowsocks/Servers')->getservers();
		$this->assign('nodes',$server);
		$this->display();
	}
	public function serverinfo ($id)
	{
		$id=I('get.id');
		$server=D('Addons://Shadowsocks/Servers');
		$data=$server->getserinfo($id);
		$this->assign('nodes',$data);
		$this->display();
		//var_dump($id);
	}
	public function userinfo ()
	{
		$param['passwd']= $passwd;
		$param['port'] =$port;
		$res=M('shadowsocks')->where($param)->select()
		$id=$res['userid'];
		$user=D('Addons://Shadowsocks/User');	
		$data=$user->getbandwidth($id);
		$this->assign('data',$data);
		$this->display();
		
	}
	public function bind ()
	{
		$user=D('Addons://Shadowsocks/User');
		if(IS_POST){
		$res=$user->getlogin(I('post.port'),I('post.password'));
		if ($res == 0){
			$this->error('登录信息有误，请检查后重新登录！');
		}
		$param['openid']=get_openid();
		$param['token']=get_token();
		$param['port']=I('post.port');
		$param['userid']=$user->getid(I('post.port'),I('post.password'));
		$res=M('shadowsocks')->add($param);
		$this->success ('登录成功！',addons_url ( 'Shadowsocks://Shadowsocks/index'));
		}else
		{
			$this->display();
		}
		
	}
}

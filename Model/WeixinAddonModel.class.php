<?php
        	
namespace Addons\Shadowsocks\Model;
use Home\Model\WeixinModel;
        	
/**
 * Shadowsocks的微信模型
 */
class WeixinAddonModel extends WeixinModel{
	function reply($dataArr, $keywordArr = array()) {
		$config = getAddonConfig ( 'Shadowsocks' ); // 获取后台插件的配置参数	
		$param['token']=get_token();
		$param['openid']=get_openid();
		$url=addonsurl('Shadowsocks//Shadowsocks/index',$param);
		$articles[0]=array(
			'Title' => $data ['title'],
			'Url' => $url ,
			'Description'=> '开始畅游之旅',
			'PicUrl'=>'https://ooo.0o0.ooo/2016/02/07/56b819a6b5c17.png'
		)
		$this->replyNews ( $articles );
	} 

	// 关注公众号事件
	public function subscribe() {
		return true;
	}
	
	// 取消关注公众号事件
	public function unsubscribe() {
		return true;
	}
	
	// 扫描带参数二维码事件
	public function scan() {
		return true;
	}
	
	// 上报地理位置事件
	public function location() {
		return true;
	}
	
	// 自定义菜单事件
	public function click() {
		return true;
	}	
}
        	
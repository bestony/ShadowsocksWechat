<?php

namespace Addons\Shadowsocks;
use Common\Controller\Addon;

/**
 * SS插件
 * @author 西秦公子
 */

    class ShadowsocksAddon extends Addon{

        public $info = array(
            'name'=>'Shadowsocks',
            'title'=>'SS',
            'description'=>'Shadowsocks支援插件',
            'status'=>1,
            'author'=>'西秦公子',
            'version'=>'1.0',
            'has_adminlist'=>1,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/Shadowsocks/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Shadowsocks/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }
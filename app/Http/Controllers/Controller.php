<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function init(){
    	print_r("and");
    	die("OK");
	}
    /*
     * 检查访问ip地址
     */
    public function checkIp(){
		$REMOTE_ADDR 			= empty($_SERVER["REMOTE_ADDR"]) ? "" : $_SERVER["REMOTE_ADDR"];			//取得客户端的 IP 地址
		$HTTP_X_FORWARDED_FOR 	= empty($_SERVER["HTTP_X_FORWARDED_FOR"]) ? "" : $_SERVER["HTTP_X_FORWARDED_FOR"];	//通过代理服务器取得客户端的真实 IP 地址
		$HTTP_CLIENT_IP 		= empty($_SERVER["HTTP_CLIENT_IP"]) ? "" : $_SERVER["HTTP_CLIENT_IP"];			//获取客户端,及浏览器所在的电脑的ip地址
	}

	public function __construct(){
    	$this->checkIp();
	}

}

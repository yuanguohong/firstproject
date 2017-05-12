<?php
/**
 * Created by IntelliJ IDEA.
 * User: huawen
 * Date: 2017/2/14
 * Time: 15:09
 */

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Support\Facades\DB;
use Mail;

class helloController extends Controller{
	public function index(){
		return view("home.main" , ['name' => "index"]);
	}
	public function main(){
		return view("home.main" , ['name' => "main"]);
	}
	public function ceshi(){
		$user = User::all()->toArray();
		$name = config();
		print_r($name);
	}
	//发送邮件
	public function sendEmail()
	{
		$name = 'yuanyuandudu';
		config("mail.from.name" , "测试");
		$flag = Mail::send('mail.index',['name'=>$name],function($message){
			$to = '351226724@qq.com';
			$message ->to($to)->subject('测试邮件');
		});
		if($flag){
			echo '发送邮件成功，请查收！';
		}else{
			echo '发送邮件失败，请重试！';
		}
	}
}
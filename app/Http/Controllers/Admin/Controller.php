<?php
/**
 * 后台继承
 *
 * Created by IntelliJ IDEA.
 * User: yuanguohong
 * Date: 2017/12/12
 * Time: 23:39
 */

namespace App\Http\Controllers\Admin;


use App\Model\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Request;

class Controller extends \App\Http\Controllers\Controller {

    protected $user = null;

    public function __construct()
    {
        $this->checkLogin();
    }

    // 后台登录检查
    public function checkLogin(){
        $response = ['code' => 1 , 'message' => '管理员未登录！'];

        $userId = User::getCookie();
        $this->user = User::whereRaw('id=?' , [$userId])->first();
        if(!empty($this->user)){
            $response['code'] = 0;
            $response['message'] = '登录成功';
        }else if(!Request::ajax()){
            return \Redirect::to("/admin/login")->send();
        }

        return \response()->json($response);
    }
}
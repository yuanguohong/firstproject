<?php
/**
 * 用于创建数据库表
 *
 * Created by IntelliJ IDEA.
 * User: yuanguohong
 * Date: 2017/12/12
 * Time: 23:17
 */

namespace  App\Http\Controllers\Data;


use App\Http\Controllers\Controller;
use App\Model\User;

class appController extends Controller {

    public function init(){
        User::create_table();
    }

    // 创建后台管理员表
    public function userInit(){
        User::create_table();
        $this->userInitOne();
    }
    // 初始化管理员
    public function userInitOne(){
        User::addAdmin("guohong" , "guohong");
    }


}
<?php

/**
 * Created by IntelliJ IDEA.
 * User: yuanguohong
 * Date: 2017/7/24
 * Time: 23:16
 */

namespace App\Http\Controllers\Admin;

class adminController extends Controller {

    // 后台首页
    public function index(){

        return view("admin.index");
    }
}
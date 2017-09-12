<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuanguohong
 * Date: 2017/9/11
 * Time: 00:10
 */

namespace App\Http\Controllers;


class webhooksController extends Controller
{
    public function index(){
        $dir = '/www/firstproject';//该目录为git检出目录
        $handle = shell_exec('cd '.$dir.' && git pull 2>&1');
    }
}
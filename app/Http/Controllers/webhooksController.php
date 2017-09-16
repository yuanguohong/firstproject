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
        shell_exec( 'cd /www/firstproject && git reset --hard HEAD && git pull origin master' );
    }
}
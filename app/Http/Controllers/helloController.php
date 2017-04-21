<?php
/**
 * Created by IntelliJ IDEA.
 * User: huawen
 * Date: 2017/2/14
 * Time: 15:09
 */

namespace App\Http\Controllers;


class helloController extends Controller{
	public function index(){
		return view("home.index" , ['name' => "world"]);
	}
}
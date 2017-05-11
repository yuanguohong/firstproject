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

class helloController extends Controller{
	public function index(){
		return view("home.main" , ['name' => "index"]);
	}
	public function main(){
		return view("home.main" , ['name' => "main"]);
	}
	public function ceshi(){
//		phpinfo();
		$user = User::all()->toArray();
		print_r($user);
	}
}
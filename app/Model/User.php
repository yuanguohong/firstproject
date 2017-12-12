<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Schema;
use League\Flysystem\Exception;
use Symfony\Component\Console\Helper\Table;

class User extends model {

    const TABLE = 'user';
	//指定表明
	protected $table = self::TABLE;

    //指定 主键 id
    protected $primaryKey = 'id';

    //白名单
    protected $fillable = ['username' , 'password' , 'email' , 'phone' , 'created_at' , 'updated_at'];

    //创建表格
    public static function create_table(){
//        self::down_table();
        try {
            Schema::create(self::TABLE, function ($table) {
                $table->bigIncrements('id');                        // 自增ID
                $table->string("username");                         // 用户名 （登录名）
                $table->string("password");                         // 用户密码 （登录密码）
                $table->string("email")->nullable();                // 用户邮箱
                $table->string("phone")->nullable();                // 用户电话
//                $table->timestamp("createTime")->default(0);                     //DATETIME 类型 创建时间
//                $table->timestamp("updateTime")->default(0);                     //DATETIME 类型 更新时间
                $table->timestamps();                               // 创建时间and更新时间
                $table->index("password");                          // 基本索引
                $table->unique("username");                         // 唯一索引
                $table->engine = "InnoDB";
            });
        }catch (Exception $e){
            return false;
        }
        return true;
    }

    // 移除表格
    public static function down_table(){
        Schema::drop(self::TABLE);
    }

    // 检查用户的输入是否正确
    public static function check_username($username , $password){
        $response = ['code' => 1 , 'message' => '查询失败用户不存在！'];
        // 密码加密
        $pass = self::pass_encrypt($password);
        // 查询用户
        $thisModel = self::whereRaw('username=?' , [$username])->firstOrFail();
//        print_r($thisModel->password);die;
        if(!empty($thisModel)){
            $getPass = $thisModel->password;
            if($getPass === $pass){
                // 验证成功
                $response['code'] = 0;
                $response['message'] = "验证成功";
            }else{
                // 验证失败
                $response['code'] = 2;
                $response['message'] = "密码输入错误！";
            }
        }
        return $response;
    }

    // 字符串加密
    public static function pass_encrypt($string = null){
        if(empty($string)){
            return false;
        }
        $encrypt = md5(md5($string));

        return $encrypt;
    }

    // 添加管理员
    public static function addAdmin($username = "yuanguohong" , $password = "yuanguohong"){
        self::firstOrCreate([
            'username' => (string)$username,
            'password' => (string)self::pass_encrypt($password),
            'created_at' => time(),
            'updated_at' => time()
        ]);
    }

    // 验证用户是否已登录
    // 验证cookie
    public static function checkAdmin(){

    }

    // 登录成功写入cookie
    public static function setCookie($insert = null){
        $pwd = false;
        if(!empty($insert)){
            $pwd = Crypt::encrypt($insert);
        }

        return $pwd;
    }

    // 解密登录成功参数
    public static function getCookie($output = null){
        $uId = false;
        if(!empty($output)){
            $uId = Crypt::decrypt($output);
        }else{
            $output = Cookie::get("guohong");
            $uId = Crypt::decrypt($output);
        }

        return $uId;
    }
}

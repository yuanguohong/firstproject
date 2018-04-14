<?php
/**
 * Created by IntelliJ IDEA.
 * User: newugo
 * Date: 2018/3/21
 * Time: 13:00
 * 单例模式
 */

class singleController extends \App\Http\Controllers\Controller{

    private $dir = null;    //字典
    private function __construct(){}

    static public $instance;
    static public function getInstance(){
        if(!self::$instance){
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function get($key=""){
        return $this->dir[$key];
    }
    public function set($key="" , $value=""){
        $this->dir[$key] = $value;
        return $this->dir;
    }
}
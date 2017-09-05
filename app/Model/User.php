<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends model {
	
	//指定表明
	protected $table = 'user';

    //指定 主键 id
    protected $primaryKey = 'id';
	
}

<?php

namespace App\Http\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	/******************************************
	****@AuThor : rubbish@163.com
	****@Title  : 在 User 模型中增加一对多关系的函数
	*******************************************/
	public function hasOneUserinfo()
    {
        return $this->hasOne('App\Http\Model\Userinfo', 'user_id', 'id');
    }
}
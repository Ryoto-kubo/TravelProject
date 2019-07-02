<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    //laravelでは必要
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected $guarded = array('id');
    // テーブル名の指定
    protected $table = 'users_profile';
}

<?php

namespace app\mobile_app_api\mobile_app_models;
use Illuminate\Database\Eloquent\Model;

Class User extends Model{
protected $table = 'users';
protected $fillable=[
    'username',
    'email',
    'password',
    'remember_token',
    'fullName',
    'role',
    'activated',
    'studentRollId',
    'auth_session',
    'birthday',
    'gender',
    'adress',
    'phoneNo',
    'mobileNo',
    'StudentClass',
    'parentProfession',
    'parentOf',
    'photo',
    'isLeaderboard',
    'restoreUniqueId',
    'transport',
    'defLang'
];

}

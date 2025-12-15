<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    //
    static function GetAllUsers(){
        return DB::select('CALL SP_GetAllUsers()');
    }

    static function ChangeUser(){
        return DB::selectone('CALL ChangeUserRole(:id, :rolename)',[
            'id'=>
        
        ]
        )
    }
}

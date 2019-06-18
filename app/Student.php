<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    static function create($request){
        DB::table('students')->insert($request);
    }

}

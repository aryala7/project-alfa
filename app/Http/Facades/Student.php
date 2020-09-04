<?php
namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;

class Student extends Facade{
    public static function getFacadeAccessor(){
        return 'student';
    }
}
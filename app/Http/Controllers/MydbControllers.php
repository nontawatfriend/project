<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MydbControllers extends Controller
{
    public function showalldata () {
        $strSQL = "select * from contact";
        $_data = DB::select($strSQL);
        return view ('showall',['_data'=>$_data]);
    }


    public function insert (Request $request) {

        // $id = $request ->input ('id');
        $name = $request ->input ('name');
        $email = $request ->input ('email');
        $subject = $request ->input ('subject');
        $message = $request ->input ('message');

        $strSQL = "insert into contact (name,email,subject,message) values 
                    ('".$name."','".$email."','".$subject."','".$message."');";
        DB::insert($strSQL);

        return redirect()
        ->action('App\Http\Controllers\MydbControllers@showalldata');

    }
    
}

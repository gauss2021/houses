<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //

    

    public function index(){

        return view('admin.index');
    }
}

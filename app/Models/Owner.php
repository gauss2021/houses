<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    /** @use HasFactory<\Database\Factories\OwnerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function houses(){

        return $this->hasMany(House::class);
    }

    public function dashboard(){
        
        dd('Ici');
    }
}

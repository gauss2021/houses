<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function houses(){
        return $this->belongsToMany(House::class, 'house_tag');
    }
}

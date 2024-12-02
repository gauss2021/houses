<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /** @use HasFactory<\Database\Factories\HouseFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'rules',
        'price',
        'quotient',
        'images',
        'owner_id'
    ];


    public function owner(){

        return $this->belongsTo(Owner::class);
    }
}

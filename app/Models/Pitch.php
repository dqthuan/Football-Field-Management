<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'address',
        'image'
    ];

    public function orders(){
        return $this->hasMany(Order::class, 'pitche_id');
    }
}

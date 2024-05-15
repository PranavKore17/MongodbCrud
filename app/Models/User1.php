<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;


class User1 extends Model
{
    use HasFactory;
    protected $collection = 'users1';

    protected $fillable = [
        'name', 'email','password','mobile','address'
    ];

}
 
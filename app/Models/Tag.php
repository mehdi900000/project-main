<?php

namespace App\Models;

use Database\Factories\TagFactory;
//use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable =[
        'Name',
        'updated_at',
        'created_at'
    ];

    protected static function newFactory(): Factory
    {
        return TagFactory::New();
    }


}


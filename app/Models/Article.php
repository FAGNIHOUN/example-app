<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'category'
    ];

    public function Categories()
    {
        return $this->hasMany(Categories::class);
    }


}

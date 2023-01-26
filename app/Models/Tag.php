<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products(){
        return $this->belogsToMany(Product::class);
    }

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
}

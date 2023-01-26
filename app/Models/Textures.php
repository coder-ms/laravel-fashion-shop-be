<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Textures extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];
    public static function generateSlug($name){
        return Str::slug($name, '-');

    }
    public function products():HasMany
    {
        return $this->hasMany(Textures::class);
    }
}

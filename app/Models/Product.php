<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'price', 'description', 'image_link'];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function textures(): BelongsTo
    {
        return $this->belongsTo(Textures::class);
    }

//     public function tags(): BelongsToMany
//     {
//         return $this->belongsToMany(Tag::class);
//     }

}

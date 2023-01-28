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

    protected $fillable = ['name', 'slug', 'price', 'description', 'image_link','category_id','texture_id','brand_id'];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function texture(): BelongsTo
    {
        return $this->belongsTo(Textures::class);
    }
    public function colors():BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    public function shippings():BelongsToMany
    {
        return $this->belongsToMany(Shipping::class);
    }



//     public function tags(): BelongsToMany
//     {
//         return $this->belongsToMany(Tag::class);
//     }

}

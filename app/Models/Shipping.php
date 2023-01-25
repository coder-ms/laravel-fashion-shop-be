<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Shipping extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function shippings(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);

    }

}

<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store\Category;

class Product extends Model
{
    use HasFactory;



    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

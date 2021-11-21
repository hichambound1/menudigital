<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = [
            'name_en',
            'name_ar',
            'name_fr',
            'description_en',
            'description_fr',
            'description_ar',
            'prix',
            'solde',
            'currency',
            'statu',
            'photo',
            'ingredients_en',
            'ingredients_fr',
            'ingredients_ar',
            'rate',
            'user_id',
            'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function media()
    {
        return $this->hasMany(Media::class);
    }
}

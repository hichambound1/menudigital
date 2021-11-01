<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'dish_id',
    ];
    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}

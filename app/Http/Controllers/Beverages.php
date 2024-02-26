<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Beverages extends Model
{
    // use HasFactory;
    protected $table = 'beverages';
    
    protected $fillable = [
        'title',
        'image',
        'content',
        'price',
        'publish',
        'check',
        'category_id',
    ];
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
    'name',
];
    
  
public function beverages()

{

    return $this->hasMany(Beverages::class);

}
}

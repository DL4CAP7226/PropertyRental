<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class PropertyType extends Model
{
    use HasFactory;
    protected $table='property_type';
    
     public function category()
    {
        return $this->hasMany(Category::class,'property_type_id');
    }
}

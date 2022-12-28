<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SubCategory;

class Developer extends Model
{
    use HasFactory;
    protected $table='developers';
    
    
    public function subcategory()
    {
        return $this->hasMany(SubCategory::class,'category');
    }
    
}

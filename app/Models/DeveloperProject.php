<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SubCategory;

class DeveloperProject extends Model
{
    use HasFactory;
    protected $table='developer_project_images';
    
    
    public function subcategory()
    {
        return $this->hasMany(SubCategory::class,'category');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PropertyImage;
use App\Models\User;
use App\Models\PropertyType;
use App\Models\Category;
use App\Models\SubCategory;



class Property extends Model
{
    use HasFactory;
    protected $table='properties';
    
    protected $guarded = [];   
    
    public function images()
    {
        return $this->hasMany(PropertyImage::class,'property_id','id');
    }
    
    public function user()
    {
       return $this->belongsTo(User::class,'created_by','id');
    }
    
    public function subcat()
    {
        return $this->belongsTo(SubCategory::class,'subcategory','id');
    }
    
    public function cat()
    {
        return $this->belongsTo(Category::class,'category','id');
    }
    
    public function types()
    {
        return $this->belongsTo(PropertyType::class,'type','id');
    }
    
}

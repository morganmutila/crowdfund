<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Create a slug from category name: remove spaces etc.. 
    public static function generateSlug(string $category=""){
        $category = str_replace(" ", "_", $category); 
        $category = str_replace("&", "and", $category);  
        $category = strtolower(str_replace(",", "_", $category)); 

        return $category;
    }

    // Clean the category name: replace '_',',' and 'and' 
    public static function filterStripCategory($category=""){
        $category = str_replace("_", " ", $category); 
        $category = str_replace("and", "&", $category);  
        $category = ucwords(strtolower(str_replace("_", ",", $category)));  

        return $category;
    }


    public function projects(){
        return $this->hasMany(Project::class);
    }
}

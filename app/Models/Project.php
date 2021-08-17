<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'description',
        'project_image',
        'duration',
        'bugget', 
        'amount',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTO(Category::class);
    }
}

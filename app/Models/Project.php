<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
Use Illuminate\Support\Carbon;
use Image;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'description',
        'project_image',
        'category_id',
        'duration',
        'budget', 
        'amount',
    ];

    protected $casts = [
        'title'         => 'string',
        'location'      => 'string',
        'description'   => 'string',
        'project_image' => 'string',
        'duration'      => 'integer',
        'budget'        => 'decimal:8',
        'amount'        => 'decimal:8',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function progress(){
        return ceil((($this->amount / $this->budget) * 100)). '%';
    }

    public function projectImage(){
        return "/storage/" . $this->project_image;
    }

    // public function projectImageSm(){
    //     return  Image::make('/storage/' . $this->project_image)->fit(311, 182);
    // }
                


    public function projectDescription(int $word_count=90){
        return Str::limit($this->description, $word_count);
    }

    public function projectBudget(){
        return "K" . number_format($this->budget);
    }

    public function duration(){
        $date = Carbon::parse($this->created_at);
        $now = Carbon::now();

        $diff = $date->diffInDays($now);
        return $this->duration - $diff;
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeDraft($query)
    {
        return $query->where('published', false);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
Use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Image;


class Project extends Model
{
    use HasFactory, softDeletes;


    // Always lazy load with these relationships
    protected $with = ['user', 'category'];

    protected $fillable = [
        'title',
        'slug',
        'location',
        'description',
        'image',
        'category_id',
        'duration',
        'budget', 
        'amount',
    ];

    protected $casts = [
        'title'         => 'string',
        'slug'          => 'string',
        'location'      => 'string',
        'description'   => 'string',
        'image'         => 'string',
        'duration'      => 'integer',
        'budget'        => 'decimal:0',
        'amount'        => 'decimal:0',
    ];

    // Project status
    const STATUS_DRAFT      = 1;
    const STATUS_APPROVED   = 2;
    const STATUS_REJECTED   = 3;


    // Change from using $project-> to $project->slug
    public function getRouteKeyName(){
        return 'slug';
    }

    // Boot method overide
    protected static function boot()
    {
        parent::boot();

        static::created(function ($project) {
            $project->update(['slug' => $project->title]);
        });
    }


    // table relationships

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    ///Accessors and Mutators

    public function setSlugAttribute($value)
    {
        $slug = Str::of(Str::slug($value))->prepend("{$this->id}-");

        $this->attributes['slug'] = $slug;
    }

    public function getProgressAttribute(){
        return Str::of(ceil((($this->attributes['amount'] / $this->attributes['budget']) * 100)))->append('%');
    }

    public function getProjectImageAttribute(){
        return Str::of($this->attributes['image'])->prepend('/storage/');
    }

    public function getTitleAttribute($value){
        return Str::of($value)->title();
    }

    public function getBudgetAttribute(){
        return Str::of(number_format($this->attributes['budget']))->prepend('K');
    }


    public function getDurationAttribute($value){
        return $value - Carbon::parse($this->created_at)->diffInDays(now());
    }



    // Custom defined functions

    public function projectDescription(int $word_count=90){
        return Str::limit($this->description, $word_count);
    }

}

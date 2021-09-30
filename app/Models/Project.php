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

    // Always lazy load with these relationship
    protected $with = ['user', 'category'];

    protected $fillable = [
        'title',
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

    public function owner(): belongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
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

    public function projectDescription(int $word_count=90){
        return Str::limit($this->description, $word_count);
    }

    public function getBudgetAttribute(){
        return Str::of(number_format($this->attributes['budget']))->prepend('K');
    }


    public function getDurationAttribute($value){
        return $value - Carbon::parse($this->created_at)->diffInDays(now());
    }

}

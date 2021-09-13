<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avater'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }

           
    //Genrate username
    public static function generateUsername(string $username=""){
        $fname = $username[0];
        $lname = substr($username, strpos($username, " ") + 1);    
        $username = strtolower($fname . $lname);   
        

        $i = 0;
        while(static::whereUsername($username)->exists())
        {
            $i++;
            $username = strtolower($fname . $lname) . $i;
        }
        return $username;
    }

    public function avatar(){
        if(empty($this->avatar)){
            return asset('images/default.png');
        }

        return "/storage/avatar/" . $this->avater;
    }
}

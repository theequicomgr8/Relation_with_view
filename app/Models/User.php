<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Post;
use App\Models\Role;

use App\Models\Company;
use App\Models\PhoneNumber;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //has many
    public function post(){
        return $this->hasMany(Post::class,'user_id','id');
    }


    public function gettitlesAttribute($value){
        return $this->post()->pluck('title')->implode(',');
    }

    public function getdescriptionsAttribute($value){
        return $this->post()->pluck('description')->implode(',');
    }



    //many to many
    public function roles(){
        return $this->belongsToMany(Role::class,"user_roles",'user_id','role_id');
    }
    public function getrolevalueAttribute($value){
        return $this->roles->pluck('role')->implode(',');
    }


    //hasOneThrough
    public function phone(){
        return $this->hasOneThrough(PhoneNumber::class,Company::class,'user_id','company_id');
    }
}

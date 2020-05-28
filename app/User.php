<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getAvatarAttribute($value)
    {
        // asset is a helper function that creates a full URL to the asset in your application
        if ($value) {
            return asset('storage/'.$value);
        }
        return asset('/images/default-avatar.jpeg');
        // return "https://i.pravatar.cc/200?u=" . $this->email;
    }

    // 
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // include all user's tweets as well as tweets of everyone they follow in descending order by date
    public function timeline()
    {
        // get all Ids that the loged in user follows
        $ids = $this->follows->pluck('id');
        //add the users id to that collection
        $ids->push($this->id);

        return Tweet::whereIn('user_id', $ids)->latest()->paginate(50);
    }

    public function tweets()
    {
       return $this->hasMany(Tweet::class)->latest();
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    // this will be a string that  represents a path to the model
    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }
}

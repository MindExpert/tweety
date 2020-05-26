<?php

namespace App;

trait Followable
{
    // method to creat a new relationship
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function follows()
    {
        # a user can follow any number of users...
        return $this->belongsToMany(User::class, 'follows' , 'user_id', 'following_user_id');
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }

    public function following(User $user)
    {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }
}

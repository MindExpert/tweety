<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function edit(User $currentUser, User $user)
    {
        // you can edit a user if you are that user.
        return $currentUser->is($user);
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        # have the auth user follow the given user...
        auth()
            ->user()
            ->toggleFollow($user);

        return back();
    }
}

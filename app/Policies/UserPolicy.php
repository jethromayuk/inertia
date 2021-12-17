<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return $user->email === 'john@example.com';
    }

    public function edit(User $user, User $model)
    {
        return (bool) mt_rand(0, 1);
    }
}

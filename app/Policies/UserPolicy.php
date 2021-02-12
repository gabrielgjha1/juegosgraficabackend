<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function admin(User $authUser, User $user){


        return false;

    }

    public function before($user, $ability)
{
    return $user->role == 'admin_role';
}


}

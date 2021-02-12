<?php

namespace App\Policies;

use App\User;
use App\Juego;
use Illuminate\Auth\Access\HandlesAuthorization;

class JuegosPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


}

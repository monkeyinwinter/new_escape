<?php

namespace App\Policies;

use App\User;
use App\Voie;
use Illuminate\Auth\Access\HandlesAuthorization;

class VoiePolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability) {
        if($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the voie.
     *
     * @param  \App\User  $user
     * @param  \App\Voie  $voie
     * @return mixed
     */
    public function view(User $user, Voie $voie)
    {
        return true;
    }

    /**
     * Determine whether the user can create voies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the voie.
     *
     * @param  \App\User  $user
     * @param  \App\Voie  $voie
     * @return mixed
     */
    public function update(User $user, Voie $voie)
    {
        return $user->id === $voie->user_id;
    }

    /**
     * Determine whether the user can delete the voie.
     *
     * @param  \App\User  $user
     * @param  \App\Voie  $voie
     * @return mixed
     */
    public function delete(User $user, Voie $voie)
    {
        return $user->id === $voie->user_id;
    }
}

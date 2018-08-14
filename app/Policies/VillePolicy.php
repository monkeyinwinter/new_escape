<?php

namespace App\Policies;

use App\User;
use App\Ville;

use Illuminate\Auth\Access\HandlesAuthorization;

class VillePolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability) {
        if($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the ville.
     *
     * @param  \App\User  $user
     * @param  \App\Ville  $ville
     * @return mixed
     */
    public function view(User $user, Ville $ville)
    {
        return true;
    }

    /**
     * Determine whether the user can create villes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the ville.
     *
     * @param  \App\User  $user
     * @param  \App\Ville  $ville
     * @return mixed
     */
    public function update(User $user, Ville $ville)
    {
        return $user->id === $ville->user_id;
    }

    /**
     * Determine whether the user can delete the ville.
     *
     * @param  \App\User  $user
     * @param  \App\Ville  $ville
     * @return mixed
     */
    public function delete(User $user, Ville $ville)
    {
        return $user->id === $ville->user_id;
    }
}

<?php

namespace App\Policies;

use App\User;
use App\Departement;

use Illuminate\Auth\Access\HandlesAuthorization;

class DepartementPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability) {
        if($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the departement.
     *
     * @param  \App\User  $user
     * @param  \App\Departement  $departement
     * @return mixed
     */
    public function view(User $user, Departement $departement)
    {
        return true;
    }

    /**
     * Determine whether the user can create departements.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the departement.
     *
     * @param  \App\User  $user
     * @param  \App\Departement  $departement
     * @return mixed
     */
    public function update(User $user, Departement $departement)
    {
        if($user->isAdmin()) {
            return true;
        }

    }

    /**
     * Determine whether the user can delete the departement.
     *
     * @param  \App\User  $user
     * @param  \App\Departement  $departement
     * @return mixed
     */
    public function delete(User $user, Departement $departement)
    {
        if($user->isAdmin()) {
            return true;
        }
    }
}

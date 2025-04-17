<?php

namespace App\Policies;

use App\Models\User;
use App\Models\publication;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\GenericUser;

class publicationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, publication $publication): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(GenericUser $GenericUser, publication $publication): bool
    {
        return $GenericUser->id == $publication->profile_id;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(GenericUser $GenericUser, publication $publication): bool
    {
        return $GenericUser->id == $publication->profile_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, publication $publication): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, publication $publication): bool
    {
        return false;
    }
    // public function before(User $user,string $abilty){
    //     return $user->isAdministrator
    // }
}

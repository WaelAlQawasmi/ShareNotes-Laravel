<?php

namespace App\Policies;

use App\Models\User;
use App\Models\notes;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class NotePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return TRUE;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, notes $notes)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return Auth::id()>0;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user ,notes $notes)
    {
        return $user->id==$notes->creater;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, notes $notes)
    {
        return  $user->id==$notes->creater;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, notes $notes)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, notes $notes)
    {
        //
    }
}

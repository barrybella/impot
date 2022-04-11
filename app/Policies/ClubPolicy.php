<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClubPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function see(User $user)
    {
        if ($user->hasPermission('view_all_club'))
            return TRUE;

        return FALSE;
    }

    public function create(User $user)
    {
        if ($user->hasPermission('create_club'))
            return TRUE;

        return FALSE;
    }

    public function show(User $user)
    {
        if ($user->hasPermission('show_club'))
            return TRUE;

        return FALSE;
    }


    public function edit(User $user)
    {
        if ($user->hasPermission('edit_club'))
            return TRUE;

        return FALSE;
    }


    public function delete(User $user)
    {
        if ($user->hasPermission('delete_club'))
            return TRUE;

        return FALSE;
    }
}

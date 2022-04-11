<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PolicyRedevables
{
    use HandlesAuthorization;
    public function see(User $user)
    {
        if ($user->hasPermission('view_all_Redevables'))
            return TRUE;

        return FALSE;
    }
    public function create(User $user)
    {
        if ($user->hasPermission('create_Redevables'))
            return TRUE;

        return FALSE;
    }

    public function show(User $user)
    {
        if ($user->hasPermission('show_Redevables'))
            return TRUE;
        return FALSE;
    }

    public function edit(User $user)
    {
        if ($user->hasPermission('edit_Redevables'))
            return TRUE;

        return FALSE;
    }

    public function delete(User $user)
    {
        if ($user->hasPermission('delete_Redevables'))
            return TRUE;

        return FALSE;
    }
}

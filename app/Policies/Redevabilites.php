<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Redevabilites
{
    use HandlesAuthorization;
    public function see(User $user)
    {
        if ($user->hasPermission('view_all_Redevabilites'))
            return TRUE;

        return FALSE;
    }
    public function create(User $user)
    {
        if ($user->hasPermission('create_Redevabilites'))
            return TRUE;

        return FALSE;
    }

    public function show(User $user)
    {
        if ($user->hasPermission('show_Redevabilites'))
            return TRUE;
        return FALSE;
    }

    public function edit(User $user)
    {
        if ($user->hasPermission('edit_Redevabilites'))
            return TRUE;

        return FALSE;
    }

    public function delete(User $user)
    {
        if ($user->hasPermission('delete_Redevabilites'))
            return TRUE;

        return FALSE;
    }
}

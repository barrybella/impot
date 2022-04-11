<?php
namespace App\Policies;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PolicyTaxes
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
    public function see(User $user)
    {
        if ($user->hasPermission('view_all_taxes'))
            return TRUE;

        return FALSE;
    }
    public function create(User $user)
    {
        if ($user->hasPermission('create_taxes'))
            return TRUE;

        return FALSE;
    }

    public function show(User $user)
    {
        if ($user->hasPermission('show_taxes'))
            return TRUE;
        return FALSE;
    }

    public function edit(User $user)
    {
        if ($user->hasPermission('edit_taxes'))
            return TRUE;

        return FALSE;
    }

    public function delete(User $user)
    {
        if ($user->hasPermission('delete_taxes'))
            return TRUE;

        return FALSE;
    }
}

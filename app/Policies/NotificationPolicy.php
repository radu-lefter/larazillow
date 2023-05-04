<?php

namespace App\Policies;

use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NotificationPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, DatabaseNotification $databaseNotification): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, DatabaseNotification $databaseNotification)
    {
        return $user->id === $databaseNotification->notifiable_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, DatabaseNotification $databaseNotification): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, DatabaseNotification $databaseNotification): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, DatabaseNotification $databaseNotification): bool
    {
        //
    }
}

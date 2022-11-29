<?php

namespace App\Policies;

use App\Models\JobExpense;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobExpensePolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, JobExpense $jobExpense)
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
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, JobExpense $jobExpense)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, JobExpense $jobExpense)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, JobExpense $jobExpense)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, JobExpense $jobExpense)
    {
        //
    }
}

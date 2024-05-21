<?php

namespace App\Policies;

use App\Models\User;
use App\Models\hire_payment;
use Illuminate\Auth\Access\HandlesAuthorization;

class HirePaymentPolicy
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
     * @param  \App\Models\hire_payment  $hirePayment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, hire_payment $hirePayment)
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
     * @param  \App\Models\hire_payment  $hirePayment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, hire_payment $hirePayment)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\hire_payment  $hirePayment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, hire_payment $hirePayment)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\hire_payment  $hirePayment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, hire_payment $hirePayment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\hire_payment  $hirePayment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, hire_payment $hirePayment)
    {
        //
    }
}

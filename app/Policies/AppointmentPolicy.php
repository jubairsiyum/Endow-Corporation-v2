<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;

class AppointmentPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view appointments');
    }

    public function view(User $user, Appointment $appointment): bool
    {
        return $user->can('view appointments');
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Appointment $appointment): bool
    {
        return $user->can('edit appointments');
    }

    public function delete(User $user, Appointment $appointment): bool
    {
        return $user->can('delete appointments');
    }
}

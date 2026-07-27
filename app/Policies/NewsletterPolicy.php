<?php

namespace App\Policies;

use App\Models\Newsletter;
use App\Models\User;

class NewsletterPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view newsletters');
    }

    public function view(User $user, Newsletter $newsletter): bool
    {
        return $user->can('view newsletters');
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Newsletter $newsletter): bool
    {
        return $user->can('edit newsletters');
    }

    public function delete(User $user, Newsletter $newsletter): bool
    {
        return $user->can('delete newsletters');
    }
}

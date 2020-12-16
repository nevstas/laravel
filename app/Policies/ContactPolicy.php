<?php

namespace App\Policies;

use App\Contact;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Contact $contact)
    {
        return $user->id === $contact->user_id;
    }

    public function update(User $user, Contact $contact)
    {
        return $user->id === $contact->user_id;
    }

    public function delete(User $user, Contact $contact)
    {
        return $user->id === $contact->user_id;
    }
}

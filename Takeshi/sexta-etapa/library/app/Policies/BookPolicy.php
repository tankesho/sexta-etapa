<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Book;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
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

    public function edit(User $user, Book $book)
    {
        return $book->user_id == $user->id;
    }

    public function post(User $user, Book $book)
    {
        return $book->user_id == $user->id;
    }
}


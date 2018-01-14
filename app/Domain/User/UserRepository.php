<?php

namespace LaraUsers\Domain\User;

use LaraUsers\Domain\User\User;

class UserRepository
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all() : \Illuminate\Database\Eloquent\Collection
    {
        return $this->user
                    ->orderBy('name')
                    ->get();
    }

    public function create(array $data) : \Illuminate\Database\Eloquent\Collection
    {

    }

    public function update(array $data) : \Illuminate\Database\Eloquent\Collection
    {

    }

    public function destroy(array $data)
    {

    }
}
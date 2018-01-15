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

    public function getById(int $id) : User 
    {
        return $this->user->find($id);
    }

    public function create(array $data) : User
    {
        $data['password'] = \Illuminate\Support\Facades\Hash::make($data['password']);
        return $this->user->create($data);
    }

    public function update(int $id, array $data) : User
    {
        $data['password'] = \Illuminate\Support\Facades\Hash::make($data['password']);
        $user = $this->getById($id);
        $user->fill($data);
        $user->save();
        return $user;
    }

    public function destroy(int $id)
    {
        $user = $this->getById($id);
        return $user->delete();
    }
}
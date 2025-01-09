<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllUsers()
    {
        return $this->repository->all();
    }

    public function createUser(array $data)
    {
        $data['senha'] = Hash::make($data['senha']);
        return $this->repository->create($data);
    }

    public function getUser($id)
    {
        return $this->repository->find($id);
    }

    public function updateUser($id, array $data)
    {
        $user = $this->repository->find($id);
        
        if (empty($data['senha'])) {
            unset($data['senha']);
        } else {
            $data['senha'] = Hash::make($data['senha']);
        }
        
        return $this->repository->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->repository->delete($id);
    }
}
<?php

namespace App\Http\Services\Implementations;

use App\Entities\User;
use App\Http\Services\Interfaces\IUserService;
use App\Repositories\Interfaces\IUserRepository;

class UserService implements IUserService
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function get()
    {
        return $this->userRepository->get();
    }

    public function getById($id)
    {
        return $this->userRepository->getById($id);
    }

    public function insert(User $user)
    {
        return $this->userRepository->insert($user);
    }
}